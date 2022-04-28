@extends('layouts.app-assets')

@section('content')
    @include('components.bread-crumbs')

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                @foreach($teachers->items() as $teacher)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url({{asset($teacher->image)}});"></div>
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
