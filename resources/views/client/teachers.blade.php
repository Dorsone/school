@extends('layouts.app-assets')

@section('bread-crumbs-title')
    {{__('navbar.Teacher')}}
@endsection

@section('bread-crumbs-body')
    <span>
        {{__('navbar.Teacher')}} <i class="ion-ios-arrow-forward"></i>
    </span>
@endsection

@section('content')

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                @foreach($teachers as $teacher)
                    @php($image = $teacher->getFirstMedia())
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url({{$image ? $image->getUrl() : asset($teacher->image)}});"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3>{{$teacher['name_'.app()->getLocale()]}}</h3>
                                <span class="position mb-2">{{$teacher['role_'.app()->getLocale()]}}</span>
                                <div class="faded">
                                    <p>{{$teacher['description_'.app()->getLocale()]}}</p>
                                    <ul class="ftco-social text-center">
                                        <li class="ftco-animate"><a href="{{$teacher->twitter}}"><span class="icon-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="{{$teacher->facebook}}"><span class="icon-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="{{$teacher->telegram}}"><span class="icon-google-plus"></span></a></li>
                                        <li class="ftco-animate"><a href="{{$teacher->instagram}}"><span class="icon-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$teachers->links('vendor.pagination.custom')}}
        </div>
    </section>

@endsection
