CollisionDetector = (function() {
  CollisionDetector.prototype.avoidsTriggerMap = {};

  CollisionDetector.prototype.collidesTriggerMap = {};

  function CollisionDetector() {
    var checkCollisions, self;
    self = this;
    checkCollisions = _.debounce((function() {
      return self.checkCollisions.apply(self);
    }), 15);
    if ($.fn.avoids == null) {
      $.fn.avoids = function(selector, callback) {
        self.avoidsTriggerMap[selector] = (function(_this) {
          return function() {
            var collisions;
            collisions = $(_this).overlaps(selector);
            if (!(collisions.length > 0)) {
              return callback.apply(_this, [collisions]);
            }
          };
        })(this);
        return self.checkCollisions();
      };
    }
    if ($.fn.collides == null) {
      $.fn.collides = function(selector, callback) {
        self.collidesTriggerMap[selector] = (function(_this) {
          return function() {
            var collisions;
            collisions = $(_this).overlaps(selector);
            if (collisions.length > 0) {
              return callback.apply(_this, [collisions]);
            }
          };
        })(this);
        return self.checkCollisions();
      };
    }
    this.checkCollisions();
    $(document).on('page:change', checkCollisions);
    $(window).on('load resize scroll', checkCollisions);
  }

  CollisionDetector.prototype.checkCollisions = function() {
    _.each(this.avoidsTriggerMap, function(callback, selector) {
      return callback();
    });
    return _.each(this.collidesTriggerMap, function(callback, selector) {
      return callback();
    });
  };

  return CollisionDetector;

})();
