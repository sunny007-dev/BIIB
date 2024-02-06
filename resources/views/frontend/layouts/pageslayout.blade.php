@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection
<link rel="stylesheet" type="text/css" href="{{asset('css/about.css')}}">
@section('content')

    @yield('innercontent')

@endsection