@extends('layouts.app-assets')

@section('content')
    @include('components.bread-crumbs')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($articles->items() as $article)
                    <div class="col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated">
                        <div class="blog-entry">
                            <a href="{{route('blog.show', $article->id)}}" class="block-20 d-flex align-items-end" style="background-image: url({{asset($article->image)}});">
                                <div class="meta-date text-center p-2">
                                    <span class="day">{{$article->created_at->format('j')}}</span>
                                    <span class="mos">{{$article->created_at->format('F')}}</span>
                                    <span class="yr">{{$article->created_at->format('Y')}}</span>
                                </div>
                            </a>
                            <div class="text bg-white p-4">
                                <h3 class="heading"><a href="{{route('blog.show', $article->id)}}">{{$article['title_preview_'.app()->getLocale()]}}</a></h3>
                                <p style="min-height: 10px">{{$article['content_preview_'.app()->getLocale()]}}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="{{route('blog.show', $article->id)}}" class="btn btn-secondary">{{__('sections/blog.read')}} <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        <a href="{{route('blog.show', $article->id)}}" class="mr-2">{{$article->user['name_'.app()->getLocale()]}}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$articles->links('vendor.pagination.custom')}}
        </div>
    </section>

@endsection
