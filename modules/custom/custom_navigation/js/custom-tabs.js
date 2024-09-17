(function ($, Drupal) {
  Drupal.behaviors.customTabs = {
    attach: function (context, settings) {
      this.initTabClick(context);

      $('#block-conferencelisting-views-block-featured-conference').addClass('active-tab');
      Drupal.behaviors.customSlickSlider.initSlick($('.active-tab')); // Initializing slick for active tab on page load
    },

    initTabClick: function (context) {
      $('.tab-links a', context).on('click', function (e) {
        e.preventDefault();
        var tab = $(this).data('tab');
        $('.tab-links li').removeClass('active');
        $(this).parent().addClass('active');
        $('#block-conferencelisting-views-block-featured-conference, #block-conferencelisting-views-block-past-conference, #block-conferencelisting-views-block-recommended-conference').removeClass('active-tab');
        var activeBlock = $('#block-conferencelisting-views-block-' + tab + '-conference').addClass('active-tab');
        Drupal.behaviors.customSlickSlider.initSlick(activeBlock);

        // Ripple effect code
        var x = e.pageX;
        var y = e.pageY;
        var $ripple = $('<div class="ripple-effect"></div>');
        $('body').append($ripple);
        $ripple.css({
          top: y - ($ripple.height() / 2),
          left: x - ($ripple.width() / 2)
        });

        // Removing the ripple after the animation is complete
        setTimeout(function () {
          $ripple.remove();
        }, 600);
      });
    }

  };
})(jQuery, Drupal);
