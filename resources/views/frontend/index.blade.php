@extends('frontend.layouts.app')

@section('title') {{_("Best Business School in Pune, India" )}} @endsection
@section('description') {{_("MBA Pune, India | MBA in International Business Pune India | BIIB Pune | Top 11 B – Schools in India | Corporate Careers | Alumni Network ")}} @endsection

@section('content')

<div class="homePage" id="homepage">
  <!-- Hero Section -->
  <div class="heroBanner">
    <div class="homeCarousel mb-0">
      @foreach($$module_name_ssingular as  $data)
        <div class="bannerImg slide" style="background-image: url('{{ $data->image_1 }}');">
          <div class="layer">
            <div class="content d-flex align-items-end">
              <div class="container">
                <div class="row py-xl-5 py-lg-5 py-md-3 py-sm-4 pt-4 shadowText">
                  <div class="col-xl-12 col-lg-9 col-md-12">
                    <div class="heroBanner mt-xl-5">
                      <h5 class="muted-text">{!! $data->content !!}</h5>
                      <h4 class="sectionText text-capitalize">{{ $data->title }}</h4>
                      <p class="designation">{{ $data->designation }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="shapeImg">
      <img src="{{asset('img/homeImages/shapes.png')}}" alt="shapeImg">
    </div>
  </div>
  <!-- Hero Section End -->

  
  <!-- KPI Section -->
  <div class="mainKpi py-4">
    <div class="kpiImg d-xl-block d-lg-block d-md-none d-sm-none d-block">
      <img src="{{asset('img/homeImages/navHrLeft.png')}}" alt="leftImg">
    </div>
    <div class="container">
      <div class="row">
      @foreach($$module_name_ksingular as $data)
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 kpiBorder">
          <div class="info text-center py-4">
            <p class="text-uppercase">{{$data->title}}</p>
            <h5 class="lh-base mb-0">{!! $data->content !!}</h5>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>
  <!-- KPI Section End -->

  <!-- Our Courses Section -->
  <div class="courses py-xl-5 py-lg-5 py-4">
    <div class="container">
      <div class="row pb-xl-3 pb-lg-3 pb-md-2 justify-content-start py-xl-3 m-0">
        <div class="col-12">
          <h4 class="main-heading text-capitalize mb-0">Courses offered</h4>
        </div>
      </div>

      <div class="row my-4 m-0">
        <div class="slickCarousel">
          @foreach($$module_name_csingular as  $data)
            <div class="px-2">
              <div class="card rounded-0">
                <div class="coursesImg position-relative">
                    @if($data->featured_image)
                      <div class="imge" style="background-image: url('{{ $data->featured_image }}');"></div>
                    @else
                      <div class="imge" style="background-image: url('{{asset('img/homeImages/news1.png')}}');"></div>
                    @endif
                </div>
                <div class="card-body">
                  <h5
                    class="card-title courseTitle text-uppercase lh-base text-xl-start text-lg-start text-md-start text-sm-start text-center">{{$data->title}}</h5>
                  <p class="lh-base text-xl-start text-lg-start text-md-start text-sm-start text-center mb-0">
                    {{$data->info}}
                  </p>
                </div>
                <div
                  class="card-footer border-0 bg-transparent pb-0 px-0 text-xl-start text-lg-start text-md-start text-sm-start text-center">
                  <div class="card-footer border-0 bg-transparent pb-3">
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                      <div id="outer">
                        <a class="button_slide slide_right text-capitalize text-decoration-none" href="{{$data->url}}" target="_blank">apply now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- Our Courses Section End -->
  
  <!-- Partner Logo -->
  <div class="partnerLog py-xl-5 py-lg-5 py-md-5 py-sm-4 py-4">
    <div class="container">
      <div class="row m-0">
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-12 align-self-center mb-xl-0 mb-lg-0 mb-2">
          <p class="mb-0 heading">Trusted By Top 100+ Companies</p>
        </div>
        <div class="col-xxl-10 col-xl-10 col-lg-9 col-md-8 col-12 px-0">
          <div class="partnerCarousel">
            @foreach($$module_name_rsingular as  $data)
              <div class="px-2">
                <img class="card-img-top" src="{{$data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg')}}" alt="{{$data->name}} Img">
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Partner Logo End-->

  <!-- About Us -->
  <div class="aboutSection pb-xl-0 pb-lg-0 pb-md-0 pb-sm-0 pb-4">
    <div class="row m-0">
      @foreach($aboutSection as $data)
        <div class="col-xl-6 col-lg-6 col-md-6 px-0 order-xl-1 order-lg-1 order-md-1 order-2 position-relative">
          <div class="vidSection">
            <img class="coverImg" src="{{asset('img/homeImages/aboutVid.png')}}" alt="vidImg">
              <div class="content">
                  <!-- <a class="btn-block videoLink" data-item="{{asset('img/homeImages/BIIB -(360p).mp4')}}" data-toggle="modal" data-target="#speakerItemModel">Test click</a> -->
                  <button class="popvideo" id="myBtn" data-item="{{ $data->url }}" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="playAboutVid()">
                      <img src="{{asset('img/homeImages/playBtn.png')}}" alt="vidImg">
                  </button>
              </div>
          </div>
          <div class="videoSectionBg">
            <img src="{{asset('img/homeImages/navHrDown.png')}}" alt="vidImg">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 px-xl-0 px-lg-0 aboutContent order-xl-2 order-lg-2 order-md-2 order-1">
          <div class="aboutBg">
            <img src="{{asset('img/homeImages/bgImgRight.png')}}" alt="arrowImg">
          </div>
          <div class="row m-0 align-content-center h-100 justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-11 py-4">
              <h4 class="aboutTitle mb-xl-4 mb-lg-4 mb-md-4 mb-3">
                {{ $data->content_heading }}
              </h4>
              <p class="description pe-xl-0 pe-lg-0 pe-md-0 pe-5">{{ $data->intro }}</p>
              <div id="outer" class="py-2">
                <a class="button_slide slide_right text-capitalize aboutBtn text-decoration-none" href="/about">know more</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <!-- About Us END -->

  <!-- Thriving for Excellence -->
  <div class="thrivingSection pb-4">
    <div class="container position-relative">
      <div class="row m-0 pb-xl-3 pb-lg-3 pb-md-2 justify-content-start">
        <div class="col-12 py-xl-2 py-lg-2 py-md-2 py-sm-2 pt-4 text-center">
          <h4 class="main-heading text-capitalize">Thriving for Excellence</h4>
        </div>
      </div>
      <div class="row m-0">
        @foreach($$module_name_asingular as  $data)
          <div class="col-xl-4 col-lg-4 col-md-6 my-3">
            <div class="card text-center py-4">
              <div class="card-body py-0">
                <i class="fas fa-medal mb-2"></i>
                <h5 class="card-title text-uppercase thrivingHeading my-xl-2 my-lg-2 my-md-2 my-sm-2 my-0 fw-bold">
                {{$data->title}}</h5>
                <hr class="thrivingHR">
              </div>
              <div class="card-footer border-0 bg-transparent">
                <div class="mt-2 title text-uppercase">{!! $data->content !!}</div>
                <p class="card-text description lh-base">Source : {{$data->issued_by}} {{$data->year}}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Thriving for Excellence END -->

  <!-- Campus Gallery Section -->
  <div class="campusGallery py-xl-4 py-lg-4 py-md-4 py-4">
    <div class="container">
      <div class="row justify-content-center py-xl-4 py-lg-4 py-md-4 py-sm-4 pt-3">
        <div class="col-12 pb-2 text-center">
          <h4 class="main-heading text-capitalize">gallery</h4>
        </div>
      </div>
      <div class="row m-0">
        <div class="col">
          <div class="swiper-container two">
            <div class="swiper-wrapper">
              @foreach($$module_name_gsingular as $data)
                <div class="swiper-slide">
                    <div class="slider-image">
                        <img src="{{ $data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg') }}" alt="slide 1">
                    </div>
                </div>
              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Campus Gallery Section End -->
  
<!-- Director Message Section -->
  <div class="aboutSection pb-xl-0 pb-lg-0 pb-md-0 pb-sm-0 pb-0">
    <div class="row m-0">
      @foreach($directorMessage as $data)
        <div class="col-xl-6 col-lg-6 col-md-6 px-xl-0 px-lg-0 order-xl-1 order-lg-1 order-md-1 order-2 aboutContent">
          <div class="directorBg d-xl-block d-lg-block d-none">
            <img src="{{asset('img/homeImages/bgImgRight.png')}}" alt="arrowImg">
          </div>
          <div class="row m-0 align-content-center h-100 justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-11 py-4">
              <h4 class="aboutTitle mb-xl-4 mb-lg-4 mb-md-4 mb-3 text-capitalize">
                {{ $data->content_heading }}
              </h4>
              <div class="description pe-xl-0 pe-lg-0 pe-md-0 pe-5">{!! $data->content !!}</div>
              <div id="outer" class="py-2">
                <a class="button_slide slide_right text-capitalize aboutBtn text-decoration-none" href="/about#nav-sixth-tab">read more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 px-0 order-xl-2 order-lg-2 order-md-2 order-1 position-relative">
          <div class="vidSection">
            <img class="coverImg directorImg" src="{{ $data->featured_image }}" alt="vidImg">
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <!-- Director Message End -->

  <!-- Why BIIB Section -->
  <div class="whyBIIB py-xl-5 py-lg-5 py-md-5 py-sm-5 py-4">
    <div class="container">
      <div class="row">
        @foreach($features as  $data)
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 my-3">
            <div class="sections text-xl-start text-lg-start text-md-center text-sm-center text-center">
              <div class="logo pb-3"><img src="{{ $data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg') }}" alt=""></div>
              <h4 class="title my-3">{{$data->title}}</h4>
              <div class="description mb-0">{!! $data->content !!}</div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Why BIIB Section End -->

  <!-- Leadership Section -->
  <div class="topBrass py-xl-5 py-lg-5 py-lg-4 py-md-4 py-sm-4 py-4">
    <div class="container">
      <div class="row m-0 justify-content-center">
        <div class="col-12">
          <h6 class="main-heading text-capitalize mb-0">Leadership</h6>
        </div>
      </div>
      <div class="row my-4 m-0">
        <div class="leadership">
            @foreach($$module_name_lsingular as  $data)
                <div class="px-2">
                  <a class="card text-center text-decoration-none" href="/details/{{ $data->id }}">
                    <div class="teamImg">
                          <div class="imge" style="background-image: url('{{ $data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg') }}');"></div>
                    </div>
                    <div class="card-body px-0 pt-2">
                      <h6 class="card-title text-uppercase px-2 lh-normal my-2">{{$data->name}}</h6>
                      <div class="line my-3"></div>
                      <p class="card-text px-3">{{$data->designation}}</p>
                    </div>
                  </a>
                </div>
              @endforeach
        </div>
      </div>
      <div class="row justify-content-center pt-4">
          <div class="col-xl-4 text-center">
            <div class="btn-group me-2" role="group" aria-label="Second group">
              <div id="outer">
                <a class="button_slide slide_right eventsBtn text-capitalize text-decoration-none" href="/about#nav-seventh-tab">view all</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- Leadership Section End -->

  <!-- Events Section -->
   <div class="events">
    <div class="eventsHr d-xl-block d-lg-block d-md-block d-none">
      <img src="{{asset('img/homeImages/navHrRight.png')}}" alt="hr">
    </div>
    <div class="container">
      <div class="row m-0 justify-content-center">
        <div class="col-12 text-center pt-xl-5 pt-lg-5 pt-md-4 pt-4">
          <h6 class="main-heading text-capitalize mb-0">Latest updates</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <ul class="nav nav-pills my-xl-5 my-lg-5 my-md-4 my-4 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item me-3" role="presentation">
              <button class="nav-link active" id="pills-events-tab" data-bs-toggle="pill" data-bs-target="#pills-events" type="button" role="tab" aria-controls="pills-events" aria-selected="true">Events</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-videos-tab" data-bs-toggle="pill" data-bs-target="#pills-videos" type="button" role="tab" aria-controls="pills-videos" aria-selected="false">Videos</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-events" role="tabpanel" aria-labelledby="pills-events-tab" tabindex="0">
              <div class="row m-0 justify-content-center">
                @foreach($events as $data)
                  <div class="col-xl-4 col-lg-4 col-md-6 my-2">
                    <div class="card bg-transparent rounded-0 border-0 text-start">
                      <div class="imageSection pb-2">
                            <div class="imge" style="background-image: url('{{ $data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg') }}');"></div>
                        <div class="dateSection text-white text-uppercase">
                          <div class="info">
                            <h4 class="mb-0 lh-normal">{{$data->published_at->format('d') }}</h4>
                            <p class="mb-0 lh-normal">{{$data->published_at->format('M') }}</p>
                          </div>
                        </div>
                      </div>
                      <div class="card-body px-0">
                        <h5 class="eventTitle text-white text-capitalize">{{$data->title}}</h5>
                        <div class="card-text text-white description" >{!! $data->content !!}</div>
                        <p class="muted mb-md-0">{{$data->published_at->format('d M Y') }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="row justify-content-center py-xl-4 py-lg-4 py-md-4 py-4">
                <div class="col-xl-4 mb-4 text-center">
                  <div class="btn-group me-2" role="group" aria-label="Second group">
                    <div id="outer">
                      <a class="button_slide slide_right eventsBtn text-capitalize text-decoration-none" href="/event">all events</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab" tabindex="0">
              <div class="row m-0 justify-content-center">
                @foreach($videoEvents as $data)
                  <a class="col-xl-4 col-lg-4 col-md-6 my-3 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data->url }}" data-bs-toggle="modal">
                      <div class="card bg-transparent rounded-0 border-0 text-start eventVideoSection">
                        <div class="imageSection pb-2">
                              <div class="imge" style="background-image: url('{{ $data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg') }}');"></div>
                              <div class="playIcon">
                                  <img src="{{asset('img/playIcon.png')}}" alt="playicon Img">
                              </div>
                          <div class="dateSection text-white text-uppercase">
                            <div class="info">
                              <h4 class="mb-0 lh-normal">{{$data->published_at->format('d') }}</h4>
                              <p class="mb-0 lh-normal">{{$data->published_at->format('M') }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="card-body px-0">
                          <h5 class="eventTitle text-white text-capitalize">{{$data->title}}</h5>
                          <div class="card-text text-white description" >{!! $data->content !!}</div>
                          <p class="muted ">{{$data->published_at->format('d M Y') }}</p>
                        </div>
                      </div>
                  </a>
                @endforeach
              </div>
              <div class="row justify-content-center py-xl-4 py-lg-4 py-md-4 py-4">
                <div class="col-xl-4 mb-4 text-center">
                  <div class="btn-group me-2" role="group" aria-label="Second group">
                    <div id="outer">
                      <a class="button_slide slide_right eventsBtn text-capitalize text-decoration-none" href="/event">all events</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Events Section End -->
  
  <!-- New Testimonial Section -->
  <div class="newTestimonial py-xl-5 py-lg-5 py-md-5 py-4">
    <div class="container">
        <div class="row m-0">
          <div class="col-xl-6 vidCarousel">

            <div class="row pt-xl-5 pt-lg-5 pt-md-4 pt-4">
              <div class="col-12">
                <h6 class="main-heading text-capitalize mb-0">Testimonials</h6>
                <p class="my-3">Balaji Institute of International Business (BIIB), an A++ Grade AICTE accredited Business School is located in Pune. Established in 2003, under the aegis of Sri Balaji University, Pune, we are one of the fastest-growing International Business Schools in India.</p>
              </div>
              <div class="row">
                <div class="col-xl-5 mb-3">
                  <div class="btn-group me-2" role="group" aria-label="Second group">
                    <div id="outer">
                      <a class="button_slide slide_right eventsBtn text-capitalize text-decoration-none" href="/testimonials">view all reviews</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row g-3 my-4">
                <div class="testimonialVideo px-0">
                    @foreach($videoTestimonial as $data)
                      <div class="px-xl-1 px-lg-1 px-md-1 px-2">
                        <a class="card text-center text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data->url }}" data-bs-toggle="modal">
                          <!-- <video autoplay muted loop id="heroVideo">
                              <source src="https://swadesdigital.com/videos/IMC_Header.mp4" type="video/mp4">
                          </video> -->
                          <div class="teamImg">
                                <div class="imge" style="background-image: url('{{ $data->featured_image }}');"></div>
                          </div> 
                        </a>
                      </div>
                    @endforeach
                </div>
            </div>

          </div>
          <div class="col-xl-6 testimonilaGrid pt-xl-0 pt-lg-5 pt-md-5 pt-5">
            <div class="row g-4">
                @foreach($$module_name_tsingular as $data)
                  <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card rounded-0 border-0">
                      <div class="card-body">
                        <img src="{{asset('img/testimonialQuotes.png')}}"  style="height: 54px;" alt="..."/>
                        <p class="card-text mb-2">{{ $data->title }}</p>
                        <div class="content">{!! $data->content !!}</div>
                        <h5 class="card-title">{{ $data->name }}</h5>
                        <div class="testimonialSubtitle">
                            @if($data->designation)
                              <h6 class="card-subtitle mb-2">{{ $data->designation }}</h6>
                            @endif
                            @if($data->batch_year)
                              <h6 class="card-subtitle mb-2">{{ $data->batch_year }}</h6>
                            @endif
                        </div>
                        
                        <img class="userImg mt-2" src="{{ $data->featured_image ? $data->featured_image : asset('img/default-avatar.jpg') }}" alt="...">
                      </div>
                    </div>
                  </div>
                 @endforeach
            </div>
          </div>
        </div>
    </div>
  </div>
  <!-- New Testimonial Section End -->

  <!-- Testimonial Section -->
  <!--<div class="testimonialSection">-->
  <!--  <div class="container">-->
  <!--    <div class="row m-0 justify-content-center">-->
  <!--      <div class="col-12 text-center py-xl-5 py-lg-5 py-md-4 py-4">-->
  <!--        <h6 class="main-heading text-capitalize mb-0">Testimonials</h6>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <section class="testimonialCarousel">-->
  <!--        <div class="customer-feedback">-->
  <!--            <div class="text-center">-->
  <!--                <div class="row justify-content-center">-->
  <!--                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">-->
  <!--                      <div class="owl-carousel feedback-slider">-->
  <!--                        @foreach($$module_name_tsingular as $data)-->
  <!--                            <div class="feedback-slider-item">-->
  <!--                                <img src="{{$data->featured_image}}" class="center-block img-circle mb-3" alt="{{$data->name}} img">-->
  <!--                                <h3 class="customer-name my-xl-4 my-lg-4 my-md-4 my-sm-3 my-3">{{$data->name}}</h3>-->
  <!--                                <div class="description">{!! $data->content !!}</div>-->
  <!--                                <span class="light-bg customer-rating" data-rating="5">-->
  <!--                                    5-->
  <!--                                  <i class="fa fa-star"></i>-->
  <!--                                </span>-->
  <!--                            </div>-->
  <!--                        @endforeach-->
  <!--                      </div>-->
                     
  <!--                      <div class="feedback-slider-thumb hidden-xs">-->
  <!--                          <div class="thumb-prev d-xl-block d-lg-block d-md-block d-sm-block d-none">-->
  <!--                              <span>-->
  <!--                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" alt="Customer Img">-->
  <!--                              </span>-->
  <!--                              <span class="light-bg customer-rating">-->
  <!--                                  5-->
  <!--                                  <i class="fa fa-star"></i>-->
  <!--                              </span>-->
  <!--                          </div>-->
    
  <!--                          <div class="thumb-next d-xl-block d-lg-block d-md-block d-sm-block d-none">-->
  <!--                              <span>-->
  <!--                                  <img src="{{asset('img/homeImages/news1.png')}}" alt="Customer Img">-->
  <!--                              </span>-->
  <!--                              <span class="light-bg customer-rating">-->
  <!--                                  4-->
  <!--                                  <i class="fa fa-star"></i>-->
  <!--                              </span>-->
  <!--                          </div>-->
  <!--                      </div>-->
      
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--        </div>-->
  <!--    </section>-->
  <!--    <div class="row justify-content-center py-xl-4 py-lg-4 py-md-4 py-4">-->
  <!--      <div class="col-xl-4 my-3 text-center">-->
  <!--        <div class="btn-group me-2" role="group" aria-label="Second group">-->
  <!--          <div id="outer">-->
  <!--            <a class="button_slide slide_right eventsBtn text-capitalize text-decoration-none" href="/testimonials">view all</a>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <!-- Testimonial Section End-->

 <!-- My Campus Experience Section -->
  <div class="placementpage">
    <div class="container">
      <div class="row m-0 justify-content-center">
        <div class="col-12 text-center py-xl-5 py-lg-5 py-md-4 py-4">
          <h6 class="main-heading text-capitalize mb-0">My Campus Placement Experience</h6>
        </div>
      </div>
        <div class="row g-4 justify-content-center m-0">
            @foreach($myExperience as $data)
                <a class="col-xl-4 col-lg-4 col-md-6 my-3 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data->url }}" data-bs-toggle="modal">
                    <div class="card rounded-0 pagesCard">
                        <div class="imge">
                            <img src="{{ $data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg') }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                            <div class="playIcon">
                                <img src="{{asset('img/playIcon.png')}}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-transform-capitalize">{{ $data->title }}</h5>
                            <p class="card-name mb-1 fw-bold">{{ $data->name }}</p>
                            @if( $data->institute_name )
                              <p class="card-text mb-2">{{ $data->institute_name }}</p>
                            @endif
                            @if( $data->batch_year )
                              <p class="card-text mb-2">{{ $data->batch_year }}</p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="row justify-content-center py-xl-4 py-lg-4 py-md-4 py-4">
          <div class="col-xl-4 text-center">
            <div class="btn-group me-2" role="group" aria-label="Second group">
              <div id="outer">
                <a class="button_slide slide_right eventsBtn text-capitalize text-decoration-none my-3" href="/placements#nav-fifth-tab">view all</a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
 
  <!-- My Campus Experience Section End -->

  <!-- Our News Section -->
  <div class="news py-xl-4 py-lg-4 py-md-4 py-sm-4 py-3">
    <div class="container">
      <!--Heading-->
      <div class="row pb-xl-3 pb-lg-3 pb-2 justify-content-start py-xl-3 py-lg-3 py-md-3 py-sm-3 py-2">
        <div class="col-12 pb-2">
          <h4 class="main-heading text-capitalize">Latest News</h4>
        </div>
      </div>
      <div class="row mb-4">
        <div class="slickCarousel">
        @foreach($$module_name_nsingular as  $data)
          <div class="px-2">
            <div class="card rounded-0">
              <div class="newImg position-relative">
                  <img src="{{ $data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg') }}" class="card-img-top" alt="Team Img">
              </div>
              <div class="card-body">
                <h5 class="card-title newsTitle text-capitalize mb-2">{{$data->title}}</h5>
                <div class="description">{!! $data->content !!}</div>
              </div>
              <div class="card-footer border-0 bg-transparent pb-3">
                <div class="btn-group me-2" role="group" aria-label="Second group">
                  <div id="outer">
                    <a class="button_slide slide_right text-capitalize text-decoration-none" href="/newsdetails/{{ $data->id }}">read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- Our News Section End -->
</div>



<!--- Gallery Carousel Script --->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>

<!-- Video Carousel -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0 d-flex justify-content-end p-0">
        <button type="button" class="btn pe-0 border-0" data-bs-dismiss="modal" aria-label="Close">
           <img src="{{asset('img/closeBtn.png')}}" alt="..." height="42px"/>
          <!-- <i class="fa fa-times text-white fa-2x" aria-hidden="true"></i> -->
        </button>
      </div>
      <div class="modal-body p-0">
        <iframe id="videoItem" class="embed-responsive-item" src="" allowfullscreen allow="autoplay" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>
<!-- Video carousel end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).on("click", ".popvideo", function () {
        var itemId= $(this).attr('data-item');
        if(itemId) {
          $("#videoItem").attr("src", itemId + '?autoplay=1');
        }
        console.log($("#videoItem"));
        
        $("#exampleModal").on('hidden.bs.modal', function (e) {
            $("#videoItem").attr("src", '');
        });
    });
</script>
@endsection