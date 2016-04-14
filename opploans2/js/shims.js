$(function() {
  window.constantize = function(string) {
    var camelized;
    camelized = camelize(string);
    return camelized.charAt(0).toUpperCase() + camelized.slice(1);
  };

  $.fn.appendText = function(text) {
    return this.each(function() {
      var textNode;
      textNode = document.createTextNode(text);
      return $(this).append(textNode);
    });
  };

  window.padLeft = function(str, max, prefix) {
    str = str.toString();
    if (max == null) {
      max = 2;
    }
    if (prefix == null) {
      prefix = '0';
    }
    if (str.length < max) {
      return padLeft("0" + str, max);
    } else {
      return str;
    }
  };

  var setMastheadOverlayByScrollPosition = function() {
    var scrollPosition = parseInt($('.position-sticky').offset().top)
    var $sticky = $('.position-sticky')
    var $masthead = $('.masthead')

    if (!$masthead.hasClass('masthead--overlay--persist')) {
      if (scrollPosition < 1) {
        $masthead.removeClass('masthead--overlay')
      } else {
        $masthead.addClass('masthead--overlay')
      }
    }
  }

  $(window).on('load', function() {
    $('.position-sticky').Stickyfill();

    // Toggle the shading behind the masthead based on scroll position.
    // Make sure the correct class is assigned if the page is not at the top.
    setMastheadOverlayByScrollPosition()

    $(window).on('scroll', function(evt) {
      var className = 'position-sticky--scroll';
      var $sticky = $('.position-sticky')

      // Toggle the shading behind the masthead based on scroll position
      setMastheadOverlayByScrollPosition()

      $sticky.addClass(className);
      clearTimeout($.data(this, 'scrollTimer'));
      return $.data(this, 'scrollTimer', setTimeout((function() {
        return $sticky.removeClass(className);
      }), 250));
    });

    if (typeof Raven !== "undefined" && Raven !== null) {
      return Raven.config('https://39e079442ca343a4b7a9b8da304fc499@app.getsentry.com/66615').install();
    }
  });
});
