(function ApplicationRunner() {
    $(document).foundation();
    $(window).on('load', setLoadHelpers);

    new BackgroundFloater();
    new CollisionDetector();
    new CustomerRating();
    new Slider();

    initFlexVerticalCenter();
    initializeToggleButtons();


    function initFlexVerticalCenter() {
        _.each($('.flexVerticalCenter'), function(target) {
          var $target     = $(target),
              jsonOptions = $target.attr('data-flex-vertical-center'),
              options     = jsonOptions && JSON.parse(jsonOptions);

          $target.flexVerticalCenter(options);
        });
    }

    function setLoadHelpers() {
        function ready() { $(window.body).addClass('ready')}
        $('html').attr('data-context', $('body').attr('data-context'));
        $('body').addClass('loaded');
        setTimeout(ready, 2000);
    }


    function initializeToggleButtons() {
        $('.toggle').on('click', function(evt) {
            evt.preventDefault();
            $this = $(this);
            $target = $($this.data('target'));
            $target.toggleClass('expanded');
        });
    }
})();
