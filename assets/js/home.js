$(document).ready(function(){
  $('.f-product-slider, .f-ritual-slider').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      autoplay: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]


  });
});

$('#p-prev').click(function() {
  $('.f-product-slider').slick('slickPrev');
});
$('#p-next').click(function() {
  $('.f-product-slider').slick('slickNext');
});
$('#r-prev').click(function() {
  $('.f-ritual-slider').slick('slickPrev');
});
$('#r-next').click(function() {
  $('.f-ritual-slider').slick('slickNext');
});


$(function()
{
     $("#toggle, .close-menu").click(function()
     {
         $(".mobile-menu").toggleClass('mobile-menu-show');
         $("body").toggleClass('no-overflow');
         return false;
     });
    //  $(".m-product-item").click(function()
    //  {
    //      $(".m-product-arrow").toggleClass('rotate-arrow');
    //      return false;
    //  });  
});