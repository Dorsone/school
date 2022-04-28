@extends('layouts.app-assets')

@section('bread-crumbs-title')
    {{__('navbar.About')}}
@endsection

@section('bread-crumbs-body')
    <span>
        {{__('navbar.About')}} <i class="ion-ios-arrow-forward"></i>
    </span>
@endsection

@section('content')
    @include('components.about-us')
    @include('components.home-experience')
    @include('components.parents-reviews')
    @include('components.request-us')
    @include('components.footer-gallery')
@endsection
