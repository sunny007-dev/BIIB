@extends('frontend.layouts.app')

@section('title') {{ __("Events") }} @endsection

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/event.css')}}">

<x-banner :title="$banner"></x-banner>

<div class="eventpage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="events">
            <div class="row m-0">
                @foreach($events as $data)
                    <div class="col-xl-4 col-lg-4 col-md-6 my-3">
                        <a class="card rounded-0 text-start text-decoration-none" href="/eventdetail/{{ $data->id }}">
                            <div class="imageSection pb-2">
                                @if($data->featured_image)
                                    <div class="imge" style="background-image: url('{{$data->featured_image}}');"></div>
                                @else
                                    <div class="imge" style="background-image: url('{{ asset('img/dummyImg.jpg') }}');">
                                @endif
                                <div class="dateSection text-white text-uppercase">
                                    <div class="info">
                                        <h4 class="mb-0 lh-normal">{{$data->published_at->format('d') }}</h4>
                                        <p class="mb-0 lh-normal">{{$data->published_at->format('M') }}</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="eventTitle">{{ $data->title }}</h5>
                                    <div class="card-text description lh-lg">{!! $data->content !!}</div>
                                    <p class="text-muted h-auto mt-4">{{$data->published_at->format('d M Y')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection