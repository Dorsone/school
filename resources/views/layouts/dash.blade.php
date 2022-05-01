@extends('layouts.dash-asserts')

@section('body-class')
    hold-transition sidebar-mini layout-fixed
@endsection

@section('content-assert')
    <div class="wrapper">
        @include('admin.partials.preloader')
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')
        @include('admin.partials.content-wrapper')
        @include('admin.partials.footer')
    </div>
@endsection
