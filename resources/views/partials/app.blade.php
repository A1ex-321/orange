<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="public/orange/assets/images/logo1.png">

<link rel="stylesheet" href="/public/orange/assets/css/animate.css">
<link rel="stylesheet" href="/public/orange/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/public/orange/assets/css/all.min.css">
<link rel="stylesheet" href="/public/orange/assets/css/icofont.min.css">
<link rel="stylesheet" href="/public/orange/assets/css/lightcase.css">
<link rel="stylesheet" href="/public/orange/assets/css/swiper.min.css">
<link rel="stylesheet" href="/public/orange/assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<title>OrangeMegaSoftware</title>
<style>
  .owl-theme .owl-nav {
    margin-top: 10px;
    display: none;
}
</style>
<body>

    @include('partials.header')
    <div>
        @yield('content')
    </div>
    @include('partials.footer')




    <script src="/public/orange/assets/js/jquery.js"></script>
    <script src="/public/orange/assets/js/fontawesome.min.js"></script>
    <script src="/public/orange/assets/js/waypoints.min.js"></script>
    <script src="/public/orange/assets/js/bootstrap.min.js"></script>
    <script src="/public/orange/assets/js/lightcase.js"></script>
    <script src="/public/orange/assets/js/isotope.pkgd.min.js"></script>
    <script src="/public/orange/assets/js/swiper.min.js"></script>
    <script src="/public/orange/assets/js/jquery.countdown.min.js"></script>
    <script src="/public/orange/assets/js/jquery.counterup.min.js"></script>
    <script src="/public/orange/assets/js/progress.js"></script>
    <script src="/public/orange/assets/js/wow.min.js"></script>
    <script src="/public/orange/assets/js/functions.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Custom JavaScript -->
<script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      autoplay:true,
      autoplayTimeout:5000, // Auto-play interval in milliseconds
      autoplayHoverPause:true, // Pause auto-play when hovering over the carousel
      responsive:{
        0:{
          items:1 // Display 1 item at a time on small screens
        },
        600:{
          items:2 // Display 2 items at a time on screens wider than 600px
        },
        1000:{
          items:2.5 // Display 2 items at a time on screens wider than 1000px
        }
      }
    });
  });
</script>

    <script>
        $(window).scroll(function() {
            var hT = $('.skill-bar-wrapper').offset().top,
                hH = $('.skill-bar-wrapper').outerHeight(),
                wH = $(window).height(),
                wS = $(this).scrollTop();
            if (wS > (hT + hH - 1.4 * wH)) {
                jQuery(document).ready(function() {
                    jQuery('.skillbar-container').each(function() {
                        jQuery(this).find('.skills').animate({
                            width: jQuery(this).attr('data-percent')
                        }, 5000); // 5 seconds
                    });
                });
            }
        });
    </script>
</body>

</html>