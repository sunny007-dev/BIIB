
@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/faculty.css')}}">

<x-banner :title="$banner"></x-banner>

<div class="facultyPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row justify-content-center m-0">
            <div class="col-xl-10">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-8">
                                <div class="facultyImg mb-3" style="background-image: url('{{ $faculty[0]->featured_image }}')"></div>
                            </div>
                            <div class="col-xl-8 col-lg-9 align-self-center position-relative">
                                <h4 class="facultyTitle">{{$faculty[0]->name}}</h4>
                                <p class="designation">{{$faculty[0]->designation}}</p>
                                <p class="text-muted">{{ $faculty[0]->faculty_category_name }}</p>
                                @if($faculty[0]->linkedin_url)
                                    <a class="linkedInDetail" href="{{ $faculty[0]->linkedin_url ? $faculty[0]->linkedin_url : '#' }}" target="{{$faculty[0]->linkedin_url ? '_blank' : '_self'}}"><i class="fab fa-linkedin fa-3x"></i></a>
                                @endif    
                            </div>
                            <div class="col-12 pt-xl-4 pt-lg-4 pt-md-4 pt-3">
                                <nav class="mb-4">
                                    <div class="nav nav-tabs detailsTabs border-0" id="nav-tab" role="tablist">
                                        <button class="nav-link innerTab active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">Bio</button>
                                        <button class="nav-link innerTab" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">Certification</button>
                                        <button class="nav-link innerTab" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#nav-three" type="button" role="tab" aria-controls="nav-three" aria-selected="false">Publications</button>
                                    </div>
                                </nav>
                                <div class="tab-content px-0" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-tab-one" tabindex="0">
                                        @foreach($bio as $data) 
                                            @if($data->bio)
                                                <div style="overflow-x: auto">{!! $data->bio !!}</div>
                                            @else
                                                <p>No Data Found</p>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-tab-two" tabindex="0">
                                        @foreach($certification as $data) 
                                            @if($data->certifications)
                                                <div style="overflow-x: auto">{!! $data->certifications !!}</div>
                                            @else
                                                <p>No Data Found</p>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-tab-three" tabindex="0">
                                        @foreach($research as $data) 
                                            @if($data->research_papers)
                                                <div style="overflow-x: auto">{!! $data->research_papers !!}</div>
                                                <!--<div class="sortingList">-->
                                                <!--    <div style="overflow-x:auto"></div>-->
                                                <!--</div>-->
                                            @else
                                                <p>No Data Found</p>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4 g-xl-3 g-lg-3 g-md-3 relatedFaculty justify-content-center m-0">
            <div class="col-12 my-xl-5 my-lg-5 my-md-4 my-sm-4 my-4">
                <h6 class="main-heading text-capitalize mb-0 text-center">related faculties</h6>
            </div>
            @foreach($module_name_fsingular as $data)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 my-2">
                    <a class="card text-center text-decoration-none" href="/facultydetails/{{ $data->id }}">
                        <div class="teamImg">
                            @if($data->featured_image)
                                <div class="imge" style="background-image: url('{{ $data->featured_image }}');"></div>
                            @else
                                <div class="imge" style="background-image: url('{{ asset('img/homeImages/news1.png') }}');"></div>
                            @endif
                        </div>
                        <div class="card-body px-0 pt-2">
                            <h6 class="card-title text-uppercase px-2 lh-normal my-2 text-decoration-none">{{$data->name}}</h6>
                            <div class="line my-3"></div>
                            <p class="card-text px-3 ">{{$data->designation}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <!--<div class="row justify-content-center pt-4">-->
        <!--    <div class="col-xl-4 text-center">-->
        <!--        <div class="btn-group me-2" role="group" aria-label="Second group">-->
        <!--        <div id="outer">-->
        <!--            <a class="button_slide slide_right eventsBtn text-capitalize text-decoration-none" href="/academics#nav-sixth-tab">view all</a>-->
        <!--        </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</div>
@endsection
