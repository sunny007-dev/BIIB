@extends('frontend.layouts.app')

@section('title') {{ __("MBA and Ph.D. Programs") }} @endsection
@section('description') {{_("Admissions and scholarships in MBA and Ph.D. Programs at Sri Balaji University, Pune | Balaji Institute of International Business (BIIB).")}} @endsection

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/admission.css')}}">

<x-banner :title="$banner"></x-banner>

<div id="loader" style="display:none;">
        <div class="spinner"></div>
        <br/>
        Loading...
</div>

<div class="admissionpage pt-5">
    <x-pagesnav link="[{id:12, name:'test'},{id:2, name:'new test'}]"></x-pagesnav>
    <div class="tab-content px-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="scholarship" role="tabpanel" aria-labelledby="nav-scholarship" tabindex="0">@include('frontend.pages.admission.scholarship')</div>
        <div class="tab-pane fade" id="mba" role="tabpanel" aria-labelledby="nav-mba" tabindex="0">@include('frontend.pages.admission.mbaPage')</div>
        <div class="tab-pane fade" id="phd" role="tabpanel" aria-labelledby="nav-phd" tabindex="0">@include('frontend.pages.admission.phdPage')</div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
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
