@extends('frontend.layouts.app')

@section('title') {{_("Testimonials")}} @endsection

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/testimonial.css')}}">

<x-banner :title="$banner"></x-banner>
<div id="loader" style="display:none;">
        <div class="spinner"></div>
        <br/>
        Loading...
</div>

<div class="testimonialpage pt-5">
    <x-pagesnav link="[{id:12, name:'test'},{id:2, name:'new test'}]"></x-pagesnav>
    <div class="tab-content px-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="guest-testimonial" tabindex="0">@include('frontend.pages.testimonials.guestTestimonial')</div>
        <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="student-testimonial" tabindex="0">@include('frontend.pages.testimonials.studentTestimonial')</div>
        <!-- <div class="tab-pane fade" id="nav-third" role="tabpanel" aria-labelledby="nav-third-tab" tabindex="0">@include('frontend.pages.testimonials.myCampusExperience')</div> -->
        
    </div>
</div>

@endsection