@extends('frontend.layouts.app')

@section('title') {{_("Sitemap")}} @endsection

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/alumni.css')}}">

<x-banner :title="$banner"></x-banner>
<div class="sitemapPage pt-5">
    <div class="container">
        <div class="row g-4 mb-3">
            @foreach($sitemap as $key => $value)
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item text-capitalize fw-bold border-0 fs-5">{{$key}}</li>
                        @foreach($value as $data)
                            <li class="list-group-item text-capitalize border-0"><a class="text-decoration-none" href="{{$data->url ? $data->url : '#'}}">{{$data->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection