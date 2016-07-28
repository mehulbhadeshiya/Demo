Slider = (function() {
  function commaSeparateNumber(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
  }

  function prettifyDollarAmount(value) {
    return '$' + commaSeparateNumber(value);
  };

  function Slider() {
    var $slider, options;
    $slider = $('#loan-amount');
    if ($slider.length > 0) {
      options = JSON.parse($slider.attr('data-options'));
      options['hide_min_max'] = true;
      options['prettify_enabled'] = true;
      options['prettify'] = prettifyDollarAmount
      options['onFinish'] = (function(_this) {
        return function(evt) {
          return localStorage.setItem('sliderValue', evt.input.val());
        };
      })(this);
      $slider.ionRangeSlider(options);
    }
  }

  return Slider;

})();
