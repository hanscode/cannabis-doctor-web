(function($) {
  $('.stories').slick({
        dots: false,
        arrows: true,
        variableWidth: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        prevArrow: $('.prev'),
    		nextArrow: $('.next'),
        responsive: [{
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: false,
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
            },
          }, {
            breakpoint: 360,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              arrows: true,
              centerMode: true,
            },
          }],
      });
})(jQuery);
