var stepper1 = new Stepper(document.querySelector('#stepper1'));
var form = document.querySelector('form');
var validFormFeedback = document.querySelector('#test-l-3 .valid-feedback');
var inValidFormFeedback = document.querySelector('#test-l-3 .invalid-feedback');

form.addEventListener('submit', function(event) {
  form.classList.remove('was-validated');
  inValidFormFeedback.classList.remove('d-block');
  validFormFeedback.classList.remove('d-block');
  
  if (!form.checkValidity()) {
    event.preventDefault();
    event.stopPropagation();
    inValidFormFeedback.classList.add('d-block');
  } else {
    validFormFeedback.classList.add('d-block');
  }

  form.classList.add('was-validated');
}, false);
// Brands Slider home Page
$('.banner_slider_sec').slick({
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
                slidesToScroll: 1,
                infinite: true,
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
    ]
});
// Brands Slider home Page