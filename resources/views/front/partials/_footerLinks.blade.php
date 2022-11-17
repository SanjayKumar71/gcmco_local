<!-- Bootstrap CDN -->

<script src="{{ asset('front_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front_assets/js/popper.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap CDN -->
<script src="https://kit.fontawesome.com/d7f831f9f8.js" crossorigin="anonymous"></script>
<!-- Magnific Popup core JS file -->
<script src="magnific-popup/jquery.magnific-popup.js"></script>
<!-- Magnific Popup core JS file -->

<!-- script Js -->
<script src="{{ asset('front_assets/js/script.js') }}"></script>
<!-- script Js -->

<!-- Main Js -->
<script src="{{ asset('front_assets/js/main.js') }}"></script>
<!-- Main Js -->

<!-- Slick Slider CDN -->
<script src="{{ asset('front_assets/slick/slick.min.js') }}"></script>
<!-- Slick Slider CDN -->

<!-- Wow Js CDN -->
<script src="{{ asset('front_assets/js/wow.min.js') }}"></script>
@stack('js')
<script>
new WOW().init();
</script>
<!-- Wow Js CDN -->

<script>
// Mega Menu Js
$(document).ready(function() {
    $('.mega-menu').hide();
    $("header .megamenu").click(function() {
        $(".mega-menu").toggle();
    });
});
$(".inner-menus2").hide();
$(".inner-menus1").hide();
$("button.for-inner2").hover(function() {
    $('.inner-menus').hide();
    $(".inner-menus2").show();
});
$(".inner-menus").hide();
$("button.for-inner1").hover(function() {
    $('.inner-menus2').hide();
    $(".inner-menus").show();
});
// Mega Menu Js

// Account Upload Document Js
$('.upload-document-button').click(function() {
    $('#UploadDocumentFile').removeClass('hide')
    $('.document-wrapper').addClass('hide')
})
// Account Upload Document Js

// Change Pass Js
$('.changePass').click(function() {
    $('.change-password-wrapper').removeClass('hide')
    $('.account-wrapper').addClass('hide')
})
// Change Pass Js

// Edit Profile Js
$('#editProfileBtn').click(function() {
    $('.edit-profile-wrapper').removeClass('hide')
    $('.account-wrapper').addClass('hide')
})
// Edit Profile Js

// Active Link Js
const CurrentLocation = location.href;
const menuItem = document.querySelectorAll('.navbar_menus .menus li a');
const menuLength = menuItem.length
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === CurrentLocation) {
        menuItem[i].className = "active";
    }
}
// Active Link Js

// HeartSaver Img SLider Js
$('.picture-box .img-box').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.picture-box .sub-image-box'
});
$('.picture-box .sub-image-box').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.picture-box .img-box',
    dots: true,
    centerMode: false,
    focusOnSelect: true
});
// HeartSaver Img SLider Js

// Brands Slider About Page
$('#video-banner').slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 3,
                infinite: true,
                dots: false,
                arrows: true,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
// Brands Slider About Page

// Product-detail Slider
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    // centerMode: true,
    focusOnSelect: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: false,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
// Product-detail Slider
// about page carousel start
$('#aboutpage1').slick({
    dots: true,
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 3,
                infinite: true,
                dots: false,
                arrows: true,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
// about page carousel end
// pfirstaid page carousel start
$('#aboutpage2').slick({
    dots: true,
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 3,
                infinite: true,
                dots: false,
                arrows: true,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
// pfirstaid page carousel end
</script>
