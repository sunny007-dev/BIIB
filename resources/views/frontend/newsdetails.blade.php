@extends('frontend.layouts.app')

@section('title') {{ __("BIIB Latest news & Updates") }} @endsection

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
                            <div class="col-xxl-4 col-xl-4 col-lg-4 mb-2">
                                <div class="facultyImg mb-3" style="background-image: url('{{ $news[0]->featured_image }}')"></div>
                            </div>
                            <div class="col-xxl-8 col-xl-8 col-lg-8 mb-2">
                                <h4 class="facultyTitle">{{$news[0]->title}}</h4>
                                <div class="">{!! $news[0]->content !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4 g-xl-3 g-lg-3 g-md-3 relatedFaculty justify-content-center m-0">
            <div class="col-12 my-xl-5 my-lg-5 my-md-4 my-sm-4 my-4">
                <h6 class="main-heading text-capitalize mb-0 text-center">Related News</h6>
            </div>
            @foreach($allNews as $data)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 my-2">
                    <a class="card text-center text-decoration-none"  href="/newsdetails/{{ $data->id }}">
                        <div class="teamImg">
                            @if($data->featured_image)
                                <div class="imge" style="background-image: url('{{ $data->featured_image }}');"></div>
                            @else
                                <div class="imge" style="background-image: url('{{ asset('img/homeImages/news1.png') }}');"></div>
                            @endif
                        </div>
                        <div class="card-body px-0 pt-2">
                            <h6 class="card-title text-uppercase px-2 lh-normal my-2 text-decoration-none">{{$data->title}}</h6>
                            <div class="card-text px-3 ">{!! $data->content !!}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
