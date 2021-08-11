$('ul#nav-list li').each(function () {
    var fg = $(this).find('.nav-link').attr('href');
    console.log(fg);

    if (window.location.href.indexOf(fg) > -1) {
        var gh = $(this).find('.nav-link').addClass('active');
        $('.nav-link').not(gh).removeClass('active')
    }
});
//dropdown active
$('ul#nav-list li.dropdown .dropdown-menu a.dropdown-item').each(function () {
    var fg = $(this).attr('href');
    console.log(fg);

    if (window.location.href.indexOf(fg) > -1) {
        var gh = $(this).addClass('active');
        $('a.dropdown-item').not(gh).removeClass('active');
        // var gh=$(this).addClass('active');

        if ($('a.dropdown-item').hasClass('active')) {
            var gh = $(this).parent().parent().find('.nav-link').addClass('active');
            $('li.dropdown>a').not(gh).removeClass('active')
        }
    }
});



// $("#confirm-btn").click(function(){
//     $(".choose-salon").hide();
//     $(".personel-info").show();
// })
// $("#prsl-form").click(function(){
//     $(".choose-salon").hide();
//     $(".personel-info").hide();
//     $(".otp-detail").show();
// })

// var lastImg = 1;
// document.getElementById(lastImg).className = "thumb selected";
// function preview(img) {
// document.getElementById(lastImg).className = "thumb";
// img.className = "thumb selected";
// document.getElementById(0).src = img.src;
// lastImg = img.id;
// }

// Brand Page Collapsible 'View More' Button Text Change/Toggle for Explore By Concern
$('#concern-more-btn').click(function () {
    $(this).text(
            $(this).text() === 'View More' ? 'View Less' : 'View More'
        );
});

$('#cp-prev').click(function() {
    $('.c-product-slider').slick('slickPrev');
  });
  $('#cp-next').click(function() {
    $('.c-product-slider').slick('slickNext');
  });

// $('.divider-1').click(function() {
//     // alert("hello it works");
//     $('#sub-family-wrapper').toggleClass('hide-sub-family');
// });