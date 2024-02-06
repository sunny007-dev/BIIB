@extends('frontend.layouts.app')

@section('title') {{ __("Discover Student's Life & Growth Opportunities at SBUP") }} @endsection
@section('description') {{_("Sri Balaji University, Pune BIIB offers quality education, vibrant campus and endless corporate career and networking opportunities. Discover more!")}} @endsection

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/student.css')}}">

<x-banner :title="$banner"></x-banner>
<div id="loader" style="display:none;">
        <div class="spinner"></div>
        <br/>
        Loading...
</div>

<div class="studentCouncil pt-5">
    <x-pagesnav link="[{id:12, name:'test'},{id:2, name:'new test'}]"></x-pagesnav>
    <div class="tab-content px-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="BIIB-student-council" tabindex="0">@include('frontend.pages.students.studentscouncil')</div>
        <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="sports-cultural" tabindex="0">@include('frontend.pages.students.sportscultural')</div>
        <div class="tab-pane fade" id="nav-third" role="tabpanel" aria-labelledby="festival-celebration" tabindex="0">@include('frontend.pages.students.festivalCelebration')</div>
        <div class="tab-pane fade" id="nav-fourth" role="tabpanel" aria-labelledby="student-grievance-redressal" tabindex="0">@include('frontend.pages.students.studentsGrievance')</div>
        <div class="tab-pane fade" id="nav-fifth" role="tabpanel" aria-labelledby="anti-ragging" tabindex="0">@include('frontend.pages.students.anti-ragging')</div>
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