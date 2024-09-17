(function ($, Drupal) {
    Drupal.behaviors.customSlickSlider = {
      initSlick: function (carousel) {
        carousel.find('.slick-slider').each(function () {
          if ($(this).hasClass('slick-initialized')) {
            $(this).slick('unslick');
          }
          
          // Initialize slick slider
          $(this).slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<button class="slick-prev">Previous</button>',
            nextArrow: '<button class="slick-next">Next</button>',
            infinite: false,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  arrows: true
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  dots: true
                }
              }
            ]
          });
        });
      }
    };
  })(jQuery, Drupal);
  