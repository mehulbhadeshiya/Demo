BackgroundFloater = (function() {
  BackgroundFloater.prototype.backgroundSelector = '#main-bg';

  BackgroundFloater.prototype.targetSelector = '#main .background-float';

  function BackgroundFloater() {
    new CollisionDetector();
    this.setupListeners();
  }

  BackgroundFloater.prototype.anchorLastTarget = function() {
    var anchorTarget, backgroundElement, bgRect, padding, targetRect;
    backgroundElement = $(this.backgroundSelector);
    anchorTarget = $(this.targetSelector + ":not(.nav-bar)");
    if ((anchorTarget != null) && anchorTarget.size() > 0) {
      bgRect = backgroundElement.get(0).getBoundingClientRect();
      if (bgRect.height > 0) {
        anchorTarget.css({
          'margin-bottom': 0
        });
        targetRect = anchorTarget.get(0).getBoundingClientRect();
        padding = bgRect.bottom - targetRect.bottom;
        anchorTarget.css({
          'margin-bottom': padding
        });
        return true;
      }
    }
    return false;
  };

  BackgroundFloater.prototype.setupCollisionDetection = function() {
    $('.nav-bar').collides('#main-bg', function(collisions) {
      return $(this).removeClass('is-overlay');
    });
    $('.nav-bar').collides('.background-float', function(collisions) {
      return $(this).addClass('is-overlay');
    });
    return $('.nav-bar').collides('.background-float ~ *:not(.position-sticky + *)', function(collisions) {
      return $(this).addClass('is-overlay');
    });
  };

  BackgroundFloater.prototype.setupListeners = function() {
    var backgroundElement, self;
    self = this;
    backgroundElement = $(this.backgroundSelector);
    return backgroundElement.imagesLoaded((function(_this) {
      return function() {
        var onReadyInterval, targetElements, targetIndex;
        targetElements = $(_this.targetSelector);
        targetIndex = backgroundElement.css('z-index');
        if (targetIndex === 'auto') {
          targetIndex = 0;
        }
        targetIndex = parseInt(targetIndex, 10);
        targetIndex += 1;
        targetElements.css({
          position: 'relative',
          'z-index': targetIndex
        });
        return onReadyInterval = setInterval((function() {
          var onResizeHandler;
          if (self.anchorLastTarget()) {
            self.setupCollisionDetection();
            onResizeHandler = _.debounce((function() {
              return self.anchorLastTarget();
            }), 500);
            $(window).resize(function() {
              return onResizeHandler();
            });
            return clearInterval(onReadyInterval);
          }
        }), 500);
      };
    })(this));
  };

  return BackgroundFloater;

})();
