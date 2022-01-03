@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getSettings();
@endphp
@section('title',$setting->title)

@section('description'){{$setting->description}}@endsection

@section('content')
    @include('home._content')
@endsection

@section('keywords',$setting->keywords)
