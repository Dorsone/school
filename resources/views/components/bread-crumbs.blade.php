<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset("images/bg_2.jpg")}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">@yield('bread-crumbs-title')</h1>
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="{{route('index')}}">{{__('navbar.Home')}} <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    @yield('bread-crumbs-body')
                </p>
            </div>
        </div>
    </div>
</section>
