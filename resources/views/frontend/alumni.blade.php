@extends('frontend.layouts.app')

@section('title') {{ __("Alumni") }} @endsection


@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/alumni.css')}}">

<x-banner :title="$banner"></x-banner>
<div id="loader" style="display:none;">
        <div class="spinner"></div>
        <br/>
        Loading...
</div>

<div class="alumnipage pt-5">
    <x-pagesnav link="[{id:12, name:'test'},{id:2, name:'new test'}]"></x-pagesnav>
    <div class="tab-content px-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="alumni-club" tabindex="0">@include('frontend.pages.alumni.alumniClub')</div>
        <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="success-stories" tabindex="0">@include('frontend.pages.alumni.successStories')</div>
        <div class="tab-pane fade" id="nav-third" role="tabpanel" aria-labelledby="transcript-form" tabindex="0">@include('frontend.pages.alumni.transcriptForm')</div>
        <div class="tab-pane fade" id="nav-fourth" role="tabpanel" aria-labelledby="endorsement-certificate" tabindex="0">@include('frontend.pages.alumni.endorsementCertificate')</div>
        <div class="tab-pane fade" id="nav-fifth" role="tabpanel" aria-labelledby="BIIB-convocation" tabindex="0">@include('frontend.pages.alumni.biibconvocation')</div>
        <div class="tab-pane fade" id="nav-sixth" role="tabpanel" aria-labelledby="alumni-on-social-mediab" tabindex="0">@include('frontend.pages.alumni.alumniSocial')</div>
        <div class="tab-pane fade" id="nav-seventh" role="tabpanel" aria-labelledby="regional-group-on-FB" tabindex="0">@include('frontend.pages.alumni.regionalFBgroup')</div>
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