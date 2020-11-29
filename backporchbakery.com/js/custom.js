;(function ($) {
  'use strict'

  // PRE LOADER
  $(window).load(function () {
    $('.preloader').fadeOut(1000) // set duration in brackets
  })

  // MENU
  $('.navbar-collapse a').on('click', function () {
    $('.navbar-collapse').collapse('hide')
  })

  $(window).scroll(function () {
    if ($('.navbar').offset().top > 50) {
      $('.navbar-fixed-top').addClass('top-nav-collapse')
    } else {
      $('.navbar-fixed-top').removeClass('top-nav-collapse')
    }
  })

  // SLIDER
  $('.owl-carousel').owlCarousel({
    animateOut: 'fadeOut',
    items: 1,
    loop: true,
    autoplayHoverPause: false,
    autoplay: true,
    smartSpeed: 1000
  })

  // PARALLAX EFFECT
  $.stellar({
    horizontalScrolling: false
  })

  // MAGNIFIC POPUP
  $('.image-popup').magnificPopup({
    type: 'image',
    removalDelay: 300,
    mainClass: 'mfp-with-zoom',
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true, // By default it's false, so don't forget to enable it

      duration: 300, // duration of the effect, in milliseconds
      easing: 'ease-in-out', // CSS transition easing function

      // The "opener" function should return the element from which popup will be zoomed in
      // and to which popup will be scaled down
      // By defailt it looks for an image tag:
      opener: function (openerElement) {
        // openerElement is the element on which popup was initialized, in this case its <a> tag
        // you don't need to add "opener" option if this code matches your needs, it's defailt one.
        return openerElement.is('img')
          ? openerElement
          : openerElement.find('img')
      }
    }
  })

  // From an element with ID #popup


  $('.order-btn').magnificPopup({
    items: {
      src: '#stepOder1',
      type: 'inline',
      closeBtnInside: true,
      closeOnBgClick: true
    }
  })

  $('.apply-now-btn').magnificPopup({
    items: {
      src: '#stepApply',
      type: 'inline',
      closeBtnInside: true,
      closeOnBgClick: true
    }
  })

  // WOW ANIMATION
  new WOW({ mobile: false }).init()

  // $(function () {
  //   $.magnificPopup.open({
  //     items: {
  //       src: '#id'
  //     },
  //     type: 'inline'
  //   })
  // })

})(jQuery)



// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});