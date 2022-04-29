<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">{{__('sections/footer.have_que')}}</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{$contacts->where('name', 'address')->first()->value}}</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$contacts->where('name', 'phone')->first()->value}}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{$contacts->where('name', 'email')->first()->value}}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">{{__('sections/footer.recent_blog')}}</h2>
                    @foreach($footer_articles as $article)
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{asset($article->image)}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{route('blog.show', $article->id)}}">{{$article['title_preview_'.app()->getLocale()]}}</a></h3>
                                <div class="meta">
                                    <div><a href="{{route('blog.show', $article->id)}}"><span class="icon-calendar"></span> {{__('translate.'.$article->created_at->format('F'))}} {{$article->created_at->format('d, Y')}}</a></div>
                                    <div><a href="{{route('blog.show', $article->id)}}"><span class="icon-person"></span> {{$article->user['name_'.app()->getLocale()]}}</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">{{__('sections/footer.links')}}</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('index')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>{{__('navbar.Home')}}</a></li>
                        <li><a href="{{route('about-us.index')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>{{__('navbar.About')}}</a></li>
                        <li><a href="{{route('teachers.index')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>{{__('navbar.Teacher')}}</a></li>
                        <li><a href="{{route('courses.index')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>{{__('navbar.Courses')}}</a></li>
                        <li><a href="{{route('blog.index')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>{{__('navbar.Blog')}}</a></li>
                        <li><a href="{{route('contact.index')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>{{__('navbar.Contact')}}</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">{{__('sections/footer.subscribe.title')}}</h2>
                    <form action="javascript:void(0)" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center" placeholder="{{__('sections/footer.subscribe.enter')}}">
                            <input type="submit" value="{{__('sections/footer.subscribe.sub')}}" class="form-control submit px-3">
                        </div>
                    </form>
                </div>
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 mb-0">{{__('sections/footer.subscribe.connect')}}</h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with by <a href="https://mostbyte.uz" target="_blank">MostByte</a>
                </p>
            </div>
        </div>
    </div>
</footer>
