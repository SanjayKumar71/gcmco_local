<!-- Bootstrap CDN -->
<script src="{{ asset('front_assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front_assets/js/popper.min.js') }}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<!-- Bootstrap CDN -->

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>

<!-- Main Js -->
<script src="{{ asset('front_assets/js/main.js') }}"></script>
<!-- Main Js -->

<!-- Slick Slider CDN -->
<script src="{{ asset('front_assets/slick/slick.min.js') }}"></script>
<!-- Slick Slider CDN -->

<!-- Wow Js CDN -->
<script src="{{ asset('front_assets/js/wow.min.js') }}"></script>

<script>
  const CurrentLocation = location.href;
  const drop_menu = document.querySelectorAll('.the_drop_menu');
  const drop_length = drop_menu.length; 
  for (let i = 0; i < drop_length; i++) {
    if (drop_menu[i].href == CurrentLocation) {
      drop_menu[i].parentElement.classList.add("active");
    }
  }
</script>
<script>
  new WOW().init();
</script>
<script>
  window.onscroll = function() {
    myFunction()
  };

  var header = document.getElementById("mainsecondheader");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
</script>
<script>
  $('.christnamecarousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrow: false,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false,
          arrow: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
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
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $('.changelivecarousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 2000,
  });


  $('.help_people_carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
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


  $('.banner_carousel').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
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
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  // 
  // active menu start here
  const menuItem = document.querySelectorAll('.menu_anc');
  const menuLength = menuItem.length;
  for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === CurrentLocation) {
      menuItem[i].parentElement.classList.add("active");
    }
  }
  let seperated_location = CurrentLocation.split("/");
  // alert();
  if (seperated_location[4] === "") {
    menuItem[0].parentElement.classList.add("active");
  }
  
  // var btnContainer = document.getElementById("mainsecondheader");

  // Get all buttons with class="btn" inside the container
  // var btns = btnContainer.getElementsByClassName("menu-items");

  // Loop through the buttons and add the active class to the current/clicked button
  // for (var i = 0; i < btns.length; i++) {
  //   btns[i].addEventListener("click", function() {
  //     var current = document.getElementsByClassName("active");
  //     current[0].className = current[0].className.replace(" active", "");
  //     this.className += " active";
  //   });
  // }


  // function add_class_to_nav() {
  //   var path = window.location.href; 
  //   $('.menu-items').each(function() {
  //     if (this.href === path) {
  //       $(this).addClass('active');
  //     }
  //   });
  // }
  // active menu end here

  // back to top start here
  var btn = $('#backtotop');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, '300');
  });
  // back to top end here
</script>
<!-- Wow Js CDN -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/633f29df37898912e96d4361/1genbn4p5';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->

<!-- Accessibility Tools  start here-->
<!-- <script src="floating-accessibility-tools/cdn/jquery.slim.min.js"></script> -->
<!-- <script src="floating-accessibility-tools/dist/open-accessibility.min.js"></script> -->
<!-- Optional -->
<!-- <script src="floating-accessibility-tools/dist/locale.min.js"></script>
<script>
  $(function () {
  $('.open-accessibility-text').openAccessibility({
    localization: ['en']
  });
})

</script> -->

<!-- Accessibility Tools  end here-->
<!-- input flags in the input field -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var code = "+1"; // Assigning value from model.
            $('#txtPhone').val(code);
            $('#txtPhone').intlTelInput({
                autoHideDialCode: true,
                autoPlaceholder: "ON",
                dropdownContainer: document.body,
                formatOnDisplay: true,
                hiddenInput: "full_number",
                initialCountry: "auto",
                nationalMode: true,
                placeholderNumberType: "MOBILE",
                preferredCountries: ['US'],
                separateDialCode: true
            });
            $('#btnSubmit').on('click', function () {
                var code = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
                var phoneNumber = $('#txtPhone').val();
                var name = $("#txtPhone").intlTelInput("getSelectedCountryData").name;
                alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
        });
    </script>
@stack('js')