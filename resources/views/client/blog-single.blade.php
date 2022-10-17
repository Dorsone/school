@extends('layouts.app-assets')

@section('bread-crumbs-title')
    {{__('navbar.Blog')}}
@endsection

@section('bread-crumbs-body')
    <span>
       <a href="{{route('blog.index')}}"> {{__('navbar.Blog')}} <i class="ion-ios-arrow-forward"></i></a>
    </span>
    <span>
        {{$article['title_preview_'.app()->getLocale()]}} <i class="ion-ios-arrow-forward"></i>
    </span>
@endsection

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">{{$article['title_'.app()->getLocale()]}}</h2><p>
                        <img src="{{$article->getFirstMedia() !== null ? $article->getFirstMedia()->getUrl() : 'https://picsum.photos/1280/980'}}" alt="" class="img-fluid">
                    </p>
                    <p>{{$article['content_'.app()->getLocale()]}}</p>

{{--                    @include('components.comments')--}}

                </div> <!-- .col-md-8 -->

                @include('components.blog-single-sidebar')
            </div>
        </div>
    </section>
@endsection
