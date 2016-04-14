CustomerRating = (function() {
  CustomerRating.prototype.containerSelector = '.customer-rating:not(.is-loaded)';

  CustomerRating.prototype.starCount = 5;

  CustomerRating.prototype.starPadding = 12;

  CustomerRating.prototype.starSize = 16;

  function CustomerRating() {
    var self;
    self = this;
    this.containerWidth = (this.starCount * this.starSize) + ((this.starCount - 1) * this.starPadding);
    $.ajax({
      type: 'GET',
      url: '../../wp-content/themes/wordpress/opploans2/icons/star-full.svg',
      dataType: 'xml',
      success: function(svgXML) {
        return self.afterFetch.apply(self, [svgXML]);
      }
    });
  }

  CustomerRating.prototype.afterFetch = function(svgXML) {
    var self;
    self = this;
    return _.each($(self.containerSelector), function(raphaelContainer) {
      var onCreate;
      onCreate = function() {
        return self.onCreate.apply(this, [self, svgXML]);
      };
      return Raphael(raphaelContainer, self.containerWidth, self.starSize, onCreate);
    });
  };

  CustomerRating.prototype.onCreate = function(self, svgXML) {
    var canvas, container, data_url_value, ratingText, ratingValue, textNode;
    container = $(this.canvas).parent();
    container.addClass('is-loaded');
    ratingValue = parseFloat(container.attr('data-rating'));
    if (container.attr('data-alt-display')) {
      ratingText = "(" + ratingValue + "/5.0 Customer Satisfaction*)";
    } else {
      ratingText = "<b>Become one of our 20,000+ happy customers today.</b> <br><br>Customer Rating " + ratingValue + " / 5 Stars";
    }
    textNode = $("<span>" + ratingText + "</span>");
    container.append(textNode);
    _(self.starCount).times((function(_this) {
      return function(n) {
        var adjustment, backgroundSVG, clipRect, fillPercentage, foregroundSVG, positionX;
        positionX = (n * self.starSize) + (n * self.starPadding);
        fillPercentage = ratingValue > 1 ? 1 : ratingValue % 1;
        ratingValue -= fillPercentage;
        backgroundSVG = _this.importSVG(svgXML);
        backgroundSVG.translate(positionX, 0);
        foregroundSVG = _this.importSVG(svgXML);
        foregroundSVG.translate(positionX, 0);
        foregroundSVG.attr({
          fill: '#e98319',
          'stroke-width': 0
        });
        if (fillPercentage < 1) {
          adjustment = self.starSize * (1 - fillPercentage);
          clipRect = "0, 0, " + (self.starSize - adjustment) + ", " + self.starSize;
          return foregroundSVG.attr('clip-rect', clipRect);
        }
      };
    })(this));
    canvas = container.find('svg');
    data_url_value = container.attr('data-url');
    if (data_url_value) {
      container.wrap($("<a href='" + data_url_value + "'></a>"));
    }
    return canvas.wrap($('<span></span>'));
  };

  return CustomerRating;

})();
