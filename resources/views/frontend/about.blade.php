@extends('frontend.layouts.app')

@section('title') {{ __("Best MBA School for Corporate Careers & ROI ") }} @endsection
@section('description') {{_("Discover BIIB's unmatched teaching methodology and internationally-inspired curriculum that cultivates confident and capable business leaders.")}} @endsection

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/about.css')}}">

<x-banner :title="$banner"></x-banner>

<div id="loader" style="display:none;">
        <div class="spinner"></div>
        <br/>
        Loading...
</div>

<div class="aboutPage pt-5">
    <x-pagesnav link="[{id:12, name:'test'},{id:2, name:'new test'}]"></x-pagesnav>
    <div class="tab-content px-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="about-biib" tabindex="0">@include('frontend.pages.about.aboutbiib')</div>
        <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="why-biib" tabindex="0">@include('frontend.pages.about.whybiib')</div>
        <div class="tab-pane fade" id="nav-third" role="tabpanel" aria-labelledby="SBUP" tabindex="0">@include('frontend.pages.about.sribalajiuniversity')</div>
        <div class="tab-pane fade" id="nav-fourth" role="tabpanel" aria-labelledby="our-founder" tabindex="0">@include('frontend.pages.about.ourchancellor')</div>
        <div class="tab-pane fade" id="nav-fifth" role="tabpanel" aria-labelledby="our-chancellor-message" tabindex="0">@include('frontend.pages.about.chancellorMessage')</div>
        <div class="tab-pane fade" id="nav-sixth" role="tabpanel" aria-labelledby="director-message" tabindex="0">@include('frontend.pages.about.directorMessage')</div>
        <div class="tab-pane fade" id="nav-seventh" role="tabpanel" aria-labelledby="leadership" tabindex="0">@include('frontend.pages.about.leadership')</div>
        <div class="tab-pane fade" id="nav-eighth" role="tabpanel" aria-labelledby="infrastructure" tabindex="0">@include('frontend.pages.about.infrastructure')</div>
        <div class="tab-pane fade" id="nav-ninth" role="tabpanel" aria-labelledby="aicte-approvals" tabindex="0">@include('frontend.pages.about.aicteapprovals')</div>
        <div class="tab-pane fade" id="nav-tenth" role="tabpanel" aria-labelledby="library" tabindex="0">@include('frontend.pages.about.library')</div>
        <div class="tab-pane fade" id="nav-eleventh" role="tabpanel" aria-labelledby="nirf" tabindex="0">@include('frontend.pages.about.nirf')</div>
        <div class="tab-pane fade" id="nav-tweleve" role="tabpanel" aria-labelledby="mandatory-disclosure" tabindex="0">@include('frontend.pages.about.mandatoryDisclosure')</div>
    </div>
</div>

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
    $(document).on("click", ".nav-link", function () {
      var totalWidth = window.matchMedia("(max-width: 574px)");
    
      if(totalWidth?.matches) {
        window.scrollTo(0, 0);  
      } else {
        window.scrollTo(0, 600);
      }
    });
</script>
<script>
//  document.addEventListener('DOMContentLoaded', function(e) {
//     e.preventDefault();
//         setTimeout(() => {
//             const activeTab = window.location.hash;
//             console.log(activeTab, ' about page');

//             // console.log(newLink);
//             if (activeTab) {
//                 $( activeTab )[0].click();
//             }
//         }, 100);
//     });
</script>

@endsection