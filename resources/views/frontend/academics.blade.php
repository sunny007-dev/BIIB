@extends('frontend.layouts.app')

@section('title') {{ __("SBUP BIIB - Fostering Excellence in Business Education") }} @endsection
@section('description') {{_("Discover BIIB - a Premier 'A++' Grade AICTE accredited Business School shaping future leaders in MBA International business management.")}} @endsection

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/academics.css')}}">

<x-banner :title="$banner"></x-banner>

<div id="loader" style="display:none;">
        <div class="spinner"></div>
        <br/>
        Loading...
</div>

<div class="academicspage pt-5">
    <x-pagesnav link="[{id:12, name:'test'},{id:2, name:'new test'}]"></x-pagesnav>
    <div class="tab-content px-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="aicte" tabindex="0">@include('frontend.pages.about.aicteapprovals')</div>
        <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="MOU-with-Phillip" tabindex="0">@include('frontend.pages.academics.mouphillipcapitalindia')</div>
        <div class="tab-pane fade" id="nav-third" role="tabpanel" aria-labelledby="MOU-with-SAP" tabindex="0">@include('frontend.pages.academics.mousapindia')</div>
        <div class="tab-pane fade" id="nav-fourth" role="tabpanel" aria-labelledby="induction-program" tabindex="0">@include('frontend.pages.academics.inductionprogram')</div>
        <div class="tab-pane fade" id="nav-fifth" role="tabpanel" aria-labelledby="classroom-based-training" tabindex="0">@include('frontend.pages.academics.classbasedtraining')</div>
        <div class="tab-pane fade" id="nav-sixth" role="tabpanel" aria-labelledby="core-faculty" tabindex="0">@include('frontend.pages.academics.corefaculty')</div>
        <div class="tab-pane fade" id="nav-seventh" role="tabpanel" aria-labelledby="multi-development-personality-faculty" tabindex="0">@include('frontend.pages.academics.multifaculty')</div>
        <div class="tab-pane fade" id="nav-eighth" role="tabpanel" aria-labelledby="visiting-faculty" tabindex="0">@include('frontend.pages.academics.visitingfaculty')</div>
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
        console.log(itemId);
        if(itemId) {
            $("#videoItem").attr("src", itemId + '?autoplay=1');
        }
        
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

@endsection