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
                            <div class="col-xl-4">
                                <div class="facultyImg mb-3" style="background-image:url({{asset('img/faculty/puneet-gulati.webp')}})"></div>
                                <!-- <img class="w-100" src="{{asset('img/faculty/puneet-gulati.webp')}}" alt="img"> -->
                            </div>
                            <div class="col-xl-8 align-self-center">
                                <h4 class="facultyTitle">Mr. Puneet Gulati</h4>
                                <p class="designation">Chief Executive Officer, Barista Coffee Company Ltd.</p>
                                <p class="text-muted">Full time faculty</p>
                            </div>

                            <div class="col-xl-12 my-xl-4 my-lg-4 my-md-4 my-sm-3 my-3">
                                <h4 class="bio">Biography</h4>
                                <p class="bioContent">Will be update soon</p>
                            </div>
                            <div class="col-xl-12 my-xl-4 my-lg-4 my-md-4 my-sm-3 my-3">
                                <h4 class="publication">Publication</h4>
                                <!-- <ul class="publictionList">
                                    <li class="pb-2">Username (20-march-2023) http://www.example.com/  Sri Balaji University, Pune<br>
                                        Description in publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available
                                    </li>
                                    <li class="pb-2">test 1</li>
                                </ul> -->
                                <p>Will be update soon</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4 g-xl-3 g-lg-3 g-md-3 relatedFaculty m-0">
            <div class="col-12 my-xl-5 my-lg-5 my-md-4 my-sm-4 my-4">
                <h6 class="main-heading text-capitalize mb-0 text-center">faculties</h6>
            </div>
            @foreach($$module_name_lsingular->take(4) as $data)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 my-2">
                    <a class="card text-center text-decoration-none" href="/details/{{ $data->id }}">
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

        <div class="row justify-content-center pt-4">
            <div class="col-xl-4 text-center">
                <div class="btn-group me-2" role="group" aria-label="Second group">
                <div id="outer">
                    <a class="button_slide slide_right eventsBtn text-capitalize text-decoration-none" href="faculty">view all</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection