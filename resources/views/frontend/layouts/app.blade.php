<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.ico')}}">
    <link rel="icon"  href="{{asset('img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')')}}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="f5bc2578-c566-47cb-bed3-2b3e74ca6cd0" data-blockingmode="auto" type="text/javascript"></script>
    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <!-- <link rel="shortcut icon" href="{{asset('img/avatars/favicon.ico')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/avatars/favicon.ico')}}" /> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before-styles')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">

    @stack('after-styles')

    <x-google-analytics />

</head>

<body>

    @include('frontend.includes.header')

    <main class="mainContent">
        @yield('content')
    </main>

    @include('frontend.includes.footer')

    <div class="floatingBtn">
      <a href="https://admissions.sbup.edu.in/mba/?utm_source=BIIBWebsite&utm_medium=Admissions-SubMenu-ConstantButton&utm_campaign=ApplyOnlineButton" target="_blank" class="first me-3 text-decoration-none"><i aria-hidden="true" class="fa fa-hand-pointer pe-2"></i> apply for mba</a>
      <a href="https://www.sbup.edu.in/university/phd/?utm_source=Website&utm_medium=BIIB" target="_blank" class="second text-decoration-none"><i aria-hidden="true" class="fa fa-hand-pointer pe-2"></i> apply for phd</a>
    </div>

    <a type="button" class="scrollToTop" id="scrollToTop" onclick="scrollToTop()">
        <div class="position-relative">
            <div class="backdiv">
                <img class="scrollBG" src="{{asset('img/topScrollBg.webp')}}" alt="">
            </div>
            <div class="scrollArrow">
                <img class="scrollIcon" src="{{asset('img/topArrow.webp')}}" alt="">
            </div>
        </div>
    </a>

</body>

<!-- Scripts -->
@stack('before-scripts')

<!-- <script src="{{ mix('js/frontend.js') }}"></script> -->
<!-- <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script> -->
<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/aos.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slick/slick.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{asset('js/header.js')}}"></script>


<script>
    // document.addEventListener('contextmenu', function(e){
    //     e.preventDefault();
    // }, false);

    // document.onkeydown = function (event) {
    //     event = (event || window.event);
        
    //     if (event.keyCode == 123) {
    //     return false;
    //     }
    // }

    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (currentScrollPos > 120) {
            document.getElementById("topheader").style.display = "none";
            document.getElementById("bottomHeader").classList.add("headerBgColor");
            document.getElementById("bottomHeader").classList.remove('headerBgImg');
        } else {
            document.getElementById("topheader").style.display = "flex";
            document.getElementById("bottomHeader").classList.remove("headerBgColor");
            document.getElementById("bottomHeader").classList.add('headerBgImg');
        }

        if(currentScrollPos < 160) {
            document.getElementById("scrollToTop").style.display = "none";
        } else {
            document.getElementById("scrollToTop").style.display = "block";
        }

        if(currentScrollPos && currentScrollPos > 620){
            console.log('if block');
            document.getElementById("pagesNavId").classList.add("stickyBottomNav");
            document.getElementById("pagesNavId").classList.remove('noramlBottomNav');
        } else {
            console.log('else block');
            document.getElementById("pagesNavId").classList.remove("stickyBottomNav");
            document.getElementById("pagesNavId").classList.add('noramlBottomNav');
        }
    }

 
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }


        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
                } else {
                reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);

</script>
<script type="text/javascript" src="{{asset('js/carousel/commonConfig.js')}}"></script>
<script>
  AOS.init();
</script>
@stack('after-scripts')

</html>