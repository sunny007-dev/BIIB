<!-- <nav class="bg-white drop-shadow-md" x-data="{ showMobileNav: false }"> -->
    <!-- <div class="max-w-7xl mx-auto px-2 py-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button @click="showMobileNav = !showMobileNav" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">{{__('Open main menu')}}</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center content-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <img class="block lg:hidden h-10 w-auto" src="{{asset('img/logo-with-text.jpg')}}" alt="{{ app_name() }}">
                    </a>
                    <a href="/">
                        <img class="hidden lg:block h-12 w-auto" src="{{asset('img/logo-with-text-dark.png')}}" alt="{{ app_name() }}">
                    </a>
                </div>
               
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="ml-3 relative" x-data="{ isUserMenuOpen: false }">
                    <div class="flex flex-row">
                        @guest
                        <a href="{{ route('login') }}" class="flex items-center mx-2 px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-orange-600 rounded-md hover:bg-orange-500 focus:outline-none focus:bg-orange-500 invisible md:visible">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            <span class="mx-1">{{__('Login')}}</span>
                        </a>
                        @if(user_registration())
                        <a href="{{ route('register') }}" class="flex items-center mx-2 px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-orange-600 rounded-md hover:bg-orange-500 focus:outline-none focus:bg-orange-500 invisible md:visible">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="mx-1">{{__('Register')}}</span>
                        </a>
                        @endif
                        @else
                        <button @click="isUserMenuOpen = !isUserMenuOpen" @keydown.escape="isUserMenuOpen = false" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-offset-cyan-800 focus:ring-white transition ease-out duration-300" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">{{__('Open main menu')}}</span>
                            <img class="h-10 w-10 rounded-full border-transparent border hover:border-cyan-600" src="{{asset(auth()->user()->avatar)}}" alt="{{asset(auth()->user()->name)}}">
                        </button>
                        @endguest
                    </div>

                    @auth
                    <div x-show="isUserMenuOpen" @click.away="isUserMenuOpen = false" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">

                        @can('view_backend')
                        <a href='{{ route("backend.dashboard") }}' class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-600 hover:text-white" role="menuitem">
                            <i class="fas fa-tachometer-alt fa-fw"></i>&nbsp;{{__('Admin Dashboard')}}
                        </a>
                        @endif
                        <a href="{{ route('frontend.users.profile', encode_id(auth()->user()->id)) }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-600 hover:text-white" role="menuitem">
                            <i class="fas fa-user fa-fw"></i>&nbsp;{{ Auth::user()->name }}
                        </a>
                        <a href="{{ route('frontend.users.profileEdit', encode_id(auth()->user()->id)) }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-600 hover:text-white" role="menuitem">
                            <i class="fas fa-cogs fa-fw"></i>&nbsp;{{__('Settings')}}
                        </a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-600 hover:text-white" role="menuitem">
                            {{__('Logout')}}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>


    <div class="sm:hidden absolute z-10 w-full p-1" id="mobile-menu" x-show="showMobileNav" @click.away="showMobileNav = false" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
            <a href="{{ route('frontend.posts.index') }}" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                {{__('Posts')}}
            </a>
            <a href="{{ route('frontend.categories.index') }}" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                {{__('Categories')}}
            </a>
            <a href="{{ route('frontend.tags.index') }}" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                {{__('Tags')}}
            </a>
            <a href="{{ route('frontend.comments.index') }}" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                {{__('Comments')}}
            </a>

            @can('view_backend')
            <a href='{{ route("backend.dashboard") }}' class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium border" role="menuitem">
                <i class="fas fa-tachometer-alt fa-fw"></i>&nbsp;{{__('Admin Dashboard')}}
            </a>
            @endif


            @guest
            <hr>
            <a href="{{ route('login') }}" class="text-gray-500 block mt-2 px-3 py-2 rounded-md text-base font-medium bg-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                <span class="mx-1">{{__('Login')}}</span>
            </a>
            @if(user_registration())
            <a href="{{ route('register') }}" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium bg-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="mx-1">{{__('Create an account')}}</span>
            </a>
            @endif
            @endauth
        </div>
    </div> 
</nav>-->

<div class="fixed-top">
    <nav class="navbar topnav navbar-expand-lg p-0" id="topheader">
        <div class="container-fluid">
            <ul class="navbar-nav topLink text-xl-start text-lg-start text-center d-xl-flex d-lg-flex d-none">
                <li class="nav-item py-0">
                    <a href="mailto:admissions@sbup.edu.in" class="nav-link me-2" aria-current="page" href="#">
                        <i aria-hidden="true" class="fa fa-envelope me-2"></i>admissions@sbup.edu.in</a>
                </li>
                <li class="nav-item py-0">
                    <p class="nav-link mb-0"><i aria-hidden="true"
                            class="fa fa-phone me-2 fa-rotate-90"></i><span><a class="text-decoration-none" href="tel:+91 (020) 6674 1235">+91 (020)
                        6674 1235</a></span><span class="text-white">,</span> <span><a class="text-decoration-none" href="tel:+91 9673338787">+91 9673338787</a></span></p>
                </li>
            </ul>
            <ul class="navbar-nav topmenu socialIcon d-flex flex-row align-items-center">
                <li class="nav-item py-3 d-xl-block d-lg-block d-none">
                    <a class="nav-link px-3" href="/alumni">Alumni</a>
                </li>
                <li class="nav-item py-3 d-xl-block d-lg-block d-none">
                    <a class="nav-link px-3" href="/event">Calendar</a>
                </li>
                <li class="nav-item py-3 d-xl-block d-lg-block d-none">
                    <a class="nav-link px-3" href="/students">Student's Life</a>
                </li>
                <!--<li class="nav-item py-3">-->
                <!--    <a class="nav-link px-3" href="https://admissions.sbup.edu.in/mba/?utm_source=BIIBWebsite&utm_medium=Admissions-SubMenu-ConstantButton&utm_campaign=ApplyOnlineButton" target="_blank">Apply Now</a>-->
                <!--</li>-->
                   <li class="nav-item py-3">
                    <!-- <a class="nav-link px-3" href="#">Apply Now</a> -->
                    <a class="nav-link px-3" target="blank" href="{!! setting('facebook_url') !!}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item py-3">
                    <a class="nav-link px-3" target="blank" href="{!! setting('instagram_url') !!}">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item py-3">
                    <a class="nav-link px-3" target="blank" href="{!! setting('linkedin_url') !!}">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li class="nav-item py-3">
                    <a class="nav-link px-3" target="blank" href="{!! setting('twitter_url') !!}">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item py-3">
                    <a class="nav-link px-3" target="blank" href="{!! setting('whatsapp_number') !!}">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <nav class="navbar bottomNav navbar-expand-lg" aria-label="Offcanvas navbar large" >
        <div class="container-fluid">
            <a routerLink="/" class="navbar-brand flex-grow-0">
                <img src="{{asset('img/biibLogo.webp')}}" alt="logo">
            </a>
            <a routerLink="/" class="navbar-brand flex-grow-0">
                <img src="{{asset('img/university_logo.webp')}}" alt="logo">
            </a>
            <button class="navbar-toggler p-0 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
                aria-controls="offcanvasNavbar2">
                <img src="{{asset('img/hamburgerDot.png')}}"  alt="hamburger">
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2"
                aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-body">
                    <button type="button" class="btn-close btn-close-white ps-sm-4 my-sm-2 my-md-3 d-xl-none d-lg-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link p-3" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link p-3" href="/about" id="navbarDropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                About <i class="fa fa-chevron-down me-1 fa-sm"></i>
                            </a>
                            <div class="dropdown-menu py-0 rounded-0 shadow" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link p-3" routerLink="admission" id="navbarDropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                Admission <i class="fa fa-chevron-down me-1 fa-sm"></i>
                            </a>
                            <div class="dropdown-menu py-0 rounded-0 shadow" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link p-3" href="#" id="navbarDropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                Academics <i class="fa fa-chevron-down me-1 fa-sm"></i>
                            </a>
                            <div class="dropdown-menu py-0 rounded-0 shadow" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link p-3 text-capitalize" routerLink="industry-program" id="navbarDropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                Industry interface <i class="fa fa-chevron-down me-1 fa-sm"></i>
                            </a>
                            <div class="dropdown-menu py-0 rounded-0 shadow" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link p-3" href="#" id="navbarDropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                Courses <i class="fa fa-chevron-down me-1 fa-sm"></i>
                            </a>
                            <div class="dropdown-menu py-0 rounded-0 shadow" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link p-3" href="#" id="navbarDropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                Placements <i class="fa fa-chevron-down me-1 fa-sm"></i>
                            </a>
                            <div class="dropdown-menu py-0 rounded-0 shadow" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-3" href="/contacts">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> -->

    <nav class="navbar bottomNav navbar-expand-lg" id="bottomHeader">
        <div class="main_header_area animated w-100">
          <div class="container-fluid">
            <nav id="navigation1" class="navigation">
                <div class="nav-header">
                    <a href="/" class="navbar-brand flex-grow-0">
                         <img src="{{asset('img/biibLogo.webp')}}" alt="logo">
                    </a>
                    <a href="https://www.sbup.edu.in/" class="navbar-brand flex-grow-0" target="_blank">
                        <img src="{{asset('img/university_logo.webp')}}" alt="logo">
                    </a>
                    <div class="nav-toggle">
                        <button class="navbar-toggler p-0 border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
                            aria-controls="offcanvasNavbar2">
                            <img src="{{asset('img/toggler.svg')}}"  alt="hamburger">
                        </button>
                    </div>
                </div>
                <div class="collegeName d-xxl-block d-xl-block d-lg-block d-md-block d-sm-none d-none">
                    <h6>Balaji Institute of International Business (BIIB)</h6>
                    <p class="mb-0 text-capitalize">A constituent institute of Sri Balaji University, Pune (SBUP)<br>Courses Approved By AICTE, Ministry of HRD, Govt. of India</p>
                </div>
                <div class="nav-menus-wrapper ms-auto">
                    <ul class="nav-menu align-to-right" id="menu-list">
                        <li><a href="/">Home</a></li>
                        <li>
                            <a href="/about">About</a>
                            <div class="megamenu-panel p-0" id="about">
                                <div class="megamenu-lists row p-xl-2 p-lg-2 p-3">
                                    <ul class="megamenu-list col-xl-4 col-lg-4" >
                                        <li class="megamenu-list-title"><a>Who We Are</a></li>
                                        <li><a href="/about#about-biib">About BIIB</a></li>
                                        <li><a href="/about#why-biib">Why BIIB</a></li>
                                        <li><a href="/about#SBUP">Sri Balaji University, Pune</a></li>
                                        <li><a href="/about#our-founder">Our Founder Chancellor</a></li>
                                        <li><a href="/about#our-chancellor-message" >Chancellor's Message</a></li>
                                        <li><a href="/about#director-message" >Director's Message</a></li>
                                    </ul>
                                    <ul class="megamenu-list col-xl-4 col-lg-4">
                                        <li class="megamenu-list-title"><a class="text-white d-xl-block d-lg-none d-none"> .</a></li>
                                        <li><a href="/about#leadership" >Leadership</a></li>
                                        <li><a href="/about#aicte-approvals" >AICTE Approvals</a></li>
                                        <li><a href="/about#library" >Library</a></li>
                                        <li><a href="/about#nirf" click="otherTab()">NIRF</a></li>
                                        <li><a href="/about#mandatory-disclosure">Mandatory Disclosures</a></li>
                                        <li><a href="/event">Latest Updates</a></li>
                                    </ul>
                                    <ul class="megamenu-list col-xl-4 col-lg-4"  id = "about-nav">
                                        <li class="megamenu-list-title"><a >Infrastructure</a></li>
                                        <li><a href="/about#infrastructure">IT Infrastructure</a></li>
                                        <li><a href="/about#infrastructure">360 degrees Virtual Campus Tour</a></li>
                                        <li><a href="/about#infrastructure">Hostel</a></li>
                                        <li><a href="/about#infrastructure">Health & Recreation</a></li>
                                        <li><a href="/about#infrastructure">Cafeteria & Mess</a></li>
                                        <li><a href="/about#infrastructure">Other Facilities</a></li>
                                    </ul>
                                </div>
                                <div class="menuBottom d-xl-block d-lg-block d-md-none">
                                    <div class="row py-xl-4 py-lg-4 py-md-4">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/discipline.webp')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">discipline</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/dedication.webp')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">dedication</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/determination.webp')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">determination</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/drishti.webp')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">drishti</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="/admission">Admissions</a>
                            <div class="megamenu-panel p-0">
                            <div class="megamenu-lists row p-xl-2 p-lg-2 p-3">
                                <ul class="megamenu-list col-xl-3 col-lg-3" id = "admission-nav">
                                    <li class="megamenu-list-title"><a href="/admission#nav-mba/MBA" onclick="refreshInnerTab()">MBA</a></li>
                                    <li><a href="/admission#nav-mba/eligibility" onclick="refreshTab()">Eligibility</a></li>
                                    <li><a href="/admission#nav-mba/how-to-apply" onclick="refreshTab()">How to Apply</a></li>
                                    <li><a href="/admission#nav-mba/GD-PI-center" onclick="refreshTab()">GD & PI Centers</a></li>
                                    <li><a href="/admission#nav-mba/admission-process" onclick="refreshTab()">Admission Process</a></li>
                                    <li><a href="/admission#nav-mba/important-dates" onclick="refreshTab()">Important Dates</a></li>
                                </ul>
                                <ul class="megamenu-list col-xl-3 col-lg-3" id = "admission-nav">
                                    <li class="megamenu-list-title"><a class="text-white d-xl-block d-lg-none d-none">.</a></li>
                                    <li><a href="/admission#nav-mba/apply-online" onclick="refreshTab()">Apply Online</a></li>
                                    <li><a href="/admission#nav-mba/brochure" onclick="refreshTab()">Brochure</a></li>
                                    <li><a href="/admission#nav-mba/education-loan" onclick="refreshTab()">Education Loan</a></li>
                                    <li><a href="/admission#nav-mba/FAQ" onclick="refreshTab()">FAQs</a></li>
                                    <!-- <li><a href="/admission#nav-mba/nav-tab-thirteen" onclick="refreshTab()">Important Contacts</a></li>
                                    <li><a href="/admission#nav-scholarship" >Scholarships (MBA)</a></li> -->
                                </ul>
                                <ul class="megamenu-list col-xl-3 col-lg-3" id = "admission-nav">
                                    <li class="megamenu-list-title"><a href="/admission#nav-phd">Ph.D.</a></li>
                                    <li><a href="/admission#nav-phd/category" onclick="refreshTab()">Categories</a></li>
                                    <li><a href="/admission#nav-phd/eligibility-duration" onclick="refreshTab()">Eligibility & Duration</a></li>
                                    <li><a href="/admission#nav-phd/admission-procedure" onclick="refreshTab()">Admission Process</a></li>
                                    <li><a href="/admission#nav-phd/registration" onclick="refreshTab()">Registration</a></li>
                                </ul>
                                <ul class="megamenu-list col-xl-3 col-lg-3" id = "admission-nav">
                                    <li class="megamenu-list-title"><a class="text-white d-xl-block d-lg-none d-none">.</a></li>
                                    <li><a href="/admission#nav-phd/instructions-dates" onclick="refreshTab()">important Instructions & Dates</a></li>
                                    <li><a href="/admission#nav-phd/fee-structure" onclick="refreshTab()">Fee Structure</a></li>
                                    <li><a href="/admission#nav-phd/download-brochure" onclick="refreshTab()">Download Brochure</a></li>
                                </ul>
                            </div>
                            <div class="menuBottom d-xl-block d-lg-block d-md-none">
                                <div class="row py-xl-4 py-lg-4 py-md-4">
                                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                        <img src="{{asset('img/ms-pilaiScholarship.png')}}" class="mb-3" alt="">
                                        <p class=" text-white mb-1">Prof. M.S. Pillai<br> Memorial Scholarship</p>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                        <img src="{{asset('img/balasirScholarship.png')}}" class="mb-3" alt="">
                                        <p class=" text-white mb-1">Bala Sir<br> Memorial Scholarship</p>
                                    </div>
                                   
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                        <img src="{{asset('img/gnrScholarship.png')}}" class="mb-3" alt="">
                                        <p class=" text-white mb-1">Grateful GNR<br> Scholarship</p>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                        <img src="{{asset('img/pc-shejwalkarScholarship.png')}}" class="mb-3" alt="">
                                        <p class=" text-white mb-1">Dr. P.C. Shejwalkar Memorial Scholarship</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </li>
                        <li>
                            <a href="/academics">Academics</a>
                            <div class="megamenu-panel p-0">
                                <div class="megamenu-lists p-xl-2 p-lg-2 p-3 row">
                                    <ul class="megamenu-list col-xl-6 col-lg-6" id ="academics-nav">
                                        <li class="megamenu-list-title"><a href="/academics">Academic</a></li>
                                        <li><a href="/academics#aicte">AICTE Approval</a></li>
                                        <li><a href="/academics#MOU-with-Phillip">MOU with Phillip Capital India Programs</a></li>
                                        <li><a href="/academics#MOU-with-SAP">MOU with SAP India</a></li>
                                        <li><a href="/academics#induction-program">Induction Program</a></li>
                                        <li><a href="/academics#classroom-based-training">Classroom Based Training</a></li>
                                    </ul>
                                    <ul class="megamenu-list col-xl-6 col-lg-6" id ="academics-nav">
                                        <li class="megamenu-list-title"><a>Our Gurus</a></li>
                                        <li><a href="/academics#core-faculty">Core Faculty</a></li>
                                        <li><a href="/academics#multi-development-personality-faculty">Multi Development Personality Faculty</a></li>
                                        <li><a href="/academics#visiting-faculty">Visiting Faculty</a></li>
                                    </ul>
                                </div>
                                <div class="menuBottom d-xl-block d-lg-block d-md-none">
                                    <div class="row py-xl-4 py-lg-4 py-md-4">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/mbaInternational.png')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">MBA<br> International Business</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/mbaMarketing.png')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">MBA<br> Marketing Management</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/mbaFinancial.png')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">MBA<br> FINANCIAL MANAGEMENT</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/mbaDigitalBusiness.png')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">MBA Digital & Business Transformation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="text-capitalize" href="/industryinterface">Industry Interface</a>
                            <div class="megamenu-panel p-0">
                                <div class="megamenu-lists p-xl-2 p-lg-2 p-3 row">
                                    <ul class="megamenu-list col-xl-4 col-lg-4" id ="industry-nav">
                                        <li class="megamenu-list-title"><a>Industry Interface</a></li>
                                        <li><a href="/industryinterface#guest-lectures">Guest Lectures</a></li>
                                        <li><a href="/industryinterface#leadership-training">Leadership Training</a></li>
                                        <li><a href="/industryinterface#internship">Internship</a></li>
                                    </ul>
                                    <ul class="megamenu-list col-xl-4 col-lg-4" id ="industry-nav">
                                        <li class="megamenu-list-title"><a>National Business Convention</a></li>
                                        <li><a href="/industryinterface#national-business-convention">12th National Business Convention</a></li>
                                        <li><a href="/industryinterface#national-business-convention">10th National Business Convention</a></li>
                                        <li><a href="/industryinterface#national-business-convention">BIIB 8th National Seminar Meet</a></li>
                                    </ul>
                                    <ul class="megamenu-list col-xl-4 col-lg-4" id ="industry-nav">
                                        <li class="megamenu-list-title"><a class="text-white d-xl-block d-lg-none d-none">.</a></li>
                                        <li><a href="/industryinterface#national-business-convention">BIIB Finance Conclave</a></li>
                                        <li><a href="/industryinterface#national-business-convention">BIIB HR Meet</a></li>
                                    </ul>
                                </div>
                                <div class="menuBottom d-xl-block d-lg-block d-md-none">
                                    <div class="row py-xl-4 py-lg-4 py-md-4">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/convention.svg')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">National Business Convention</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/corporateConclave.svg')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">Corporate Conclave</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/guestLectures.svg')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">Guest Lectures</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/internship.svg')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">Internships</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="text-capitalize" href="/placements">placements</a>
                            <div class="megamenu-panel p-0">
                                <div class="megamenu-lists p-xl-2 p-lg-2 p-3 row">
                                    <ul class="megamenu-list col-xl-6 col-lg-6" id ="placements-nav">
                                        <li class="megamenu-list-title"><a>placements</a></li>
                                        <li><a href="/placements#our-recruiters">Our Recruiters</a></li>
                                        <li><a href="/placements#placements">Placements</a></li>
                                        <li><a href="/placements#MOU-with-Phillip">MOU with Phillip Capital India</a></li>
                                        <li><a href="/placements#MOU-with-SAP">MOU with SAP India</a></li>
                                        <li><a href="/placements#my-campus-placement-experience">My Campus Placement Experience</a></li>
                                    </ul>
                                    <ul class="megamenu-list col-xl-6 col-lg-6" id ="placements-nav">
                                        <li class="megamenu-list-title"><a class="text-white d-xl-block d-lg-none d-none">.</a></li>
                                        <li><a href="/placements#chancellor-message">Chancellor’s Message</a></li>
                                        <li><a href="/placements#show-interest">Show Interest</a></li>
                                        <li><a href="/placements#BIIB-placement-procedure">BIIB Placement Procedure</a></li>
                                    </ul>
                                </div>
                                <div class="menuBottom d-xl-block d-lg-block d-md-none">
                                    <div class="row py-xl-4 py-lg-4 py-md-4">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/placement-100.svg')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">100% Placements</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/corporate.png')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">300+ Corporates</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/panIndia.png')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">Pan India Recruiters </p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6  text-center text-white borderDiv">
                                            <img src="{{asset('img/multiIndustry.png')}}" class="mb-3" alt="">
                                            <p class=" text-white mb-1">Multi-Industry Recruiters</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="/contacts">contact</a></li>
                        <li class="d-xxl-none d-xl-none d-inline-block"><a href="/alumni">alumni</a></li>
                        <li class="d-xxl-none d-xl-none d-inline-block"><a href="/event">calender</a></li>
                        <li class="d-xxl-none d-xl-none d-inline-block"><a href="/students">students life</a></li>
                        <li class="d-xxl-none d-xl-none d-inline-block"><a href="/sitemap">Sitemap</a></li>
                    </ul>
                </div>
            </nav>
          </div>
        </div>
    </nav>
</div>
@push ('after-scripts')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(e) {
        $('#loader').fadeIn().delay(1000).fadeOut();
        e.preventDefault();
        setTab();
    });

    function setTab() {
        const activeTab = window.location.hash;
        const currentTab = activeTab.split("/")[0];
        if (currentTab) {
            $( currentTab )[0].click().replace();
        }    
    }

    $( "#menu-list" ).on( "click", function(e) {
        setTimeout(() => {
            const getTab = window.location.hash;
            if (getTab) {
                $( getTab )[0].click();
            }
        }, 200);
    });

    function refreshTab() {
        const getTab = window.location.hash;
        const newTab = getTab.split("/")[0];

        if(newTab == "#nav-phd" || newTab == "#nav-mba"){
            setTimeout(() => {
                window.location.reload();
            }, 200);
        }
    }
</script>
@endpush
