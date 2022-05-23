<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>{{__('sections/review.title.0')}}</span> {{__('sections/review.title.1')}}</h2>
{{--                <p>{{__('sections/review.body')}}</p>--}}
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    @foreach($reviews as $key => $review)
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url({{asset("images/".$review->role.".png")}})">
                                </div>
                                <div class="text ml-2 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                      <i class="icon-quote-left"></i>
                                    </span>
                                    <p>{{$review->message}}</p>
                                    <p class="name">{{$review->first_name}} {{$review->last_name}}</p>
                                    <span class="position">{{__('translate.'.$review->role)}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
