
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Kindergarten, Children Day Care Academics Multipurpose Responsive HTML5 Templates.KIDZCARE can be used for preschool and day care institutions, children groups, play schools, kindergartens and kids stores. Its can use all over kids and child multipurposes also children goods store or child care blog.. which we included total 18+ HTML files that can be customized easily.">
    <title>Papri It  - Kindergarten Children Day Care Academics Multipurpose Responsive HTML5 Templates</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/img/favicon.png')}}">

    <!-- === webfont=== -->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <!--Font awesome css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}"> -->
    <!--Bootstrap-->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--UI css-->
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/venobox.css')}}">
    <!--Owl Carousel css-->
    <link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/owl.theme.css')}}" rel="stylesheet">
    <!--Animate css-->
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <!--Main Stylesheet -->
    <link href="{{asset('frontend/style.css')}}" rel="stylesheet">
    <!--Responsive Stylesheet -->
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.css')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.css')}}"></script>
    <![endif]-->
</head>

<body>

{{--<div class="preloader"></div>--}}

    @include('Frontend.content.header')

        @yield('content')

    @include('Frontend.content.footer')




<!-- === jqyery === -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<!-- === bootsrap-min === -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<!-- === Scroll up min js === -->
<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
<!-- === Price slider js === -->
<script src="{{asset('frontend/js/jquery-price-slider.js')}}"></script>
<!-- === Counter up js === -->
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<!-- === Waypoint js === -->
<script src="{{asset('frontend/js/jquery.waypoints.js')}}"></script>
<!-- === Venobox js === -->
<script src="{{asset('frontend/js/venobox.min.js')}}"></script>
<!-- === ZOOM  js === -->
<script src="{{asset('frontend/js/jquery.elevatezoom.js')}}"></script>
<!-- === filterizr filter  js === -->
<script src="{{asset('frontend/js/jquery.filterizr.min.js')}}"></script>
<!-- === Owl Carousel js === -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<!-- === WOW js === -->
<script src="{{asset('frontend/js/wow.js')}}"></script>
<!-- === Coundown js === -->
<script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
<!-- === Image loaded js === -->
<script src="{{asset('frontend/js/imageloaded.pkgd.min.js')}}"></script>
<!-- === Mailchimp integration js === -->
<script src="{{asset('frontend/js/mailchimp.js')}}"></script>
<!-- === Mobile menu  js === -->
<script src="{{asset('frontend/js/mobile-menu.js')}}"></script>
<!-- === Main  js === -->
<script src="{{asset('frontend/js/main.js')}}"></script>



<script>

    $(document).ready(function() {


        $('#gallery').imagesLoaded(function() {

            var filterizd = $('.filtr-container').filterizr({});
            $('.filters .filtr').click(function() {
                $('.filters .filtr').removeClass('filtr-active');
                $(this).addClass('filtr-active');
            });
        });


    });

</script>


<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>




</body>

</html>
