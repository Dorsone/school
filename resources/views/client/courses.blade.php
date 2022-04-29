@extends('layouts.app-assets')

@section('bread-crumbs-title')
    {{__('navbar.Courses')}}
@endsection

@section('bread-crumbs-body')
    <span>
        {{__('navbar.Courses')}} <i class="ion-ios-arrow-forward"></i>
    </span>
@endsection

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach($courses->items() as $course)
                    <div class="col-md-6 course d-lg-flex ftco-animate fadeInUp ftco-animated">
                        <div class="img" style="background-image: url({{asset($course->image)}});"></div>
                        <div class="text bg-light p-4">
                            <h3><a href="{{route('courses.show', $course->id)}}">{{$course['title_'.app()->getLocale()]}}</a></h3>
                            <p class="subheading"><span>{{__('translate.class_time')}}:</span> {{substr($course->from_time,0,-3)}} - {{substr($course->to_time,0,-3)}}</p>
                            <p>{{$course['description_'.app()->getLocale()]}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$courses->links('vendor.pagination.custom')}}
        </div>
    </section>

@endsection
