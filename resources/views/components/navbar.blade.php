<div class="py-2 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-10 d-block">
                <div class="row d-flex">
                    <div class="col-md-5 pr-4 d-flex topper align-items-center">
                        <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                        <span class="text">198 West 21th Street, Suite 721 New York NY</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">youremail@email.com</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">+ 1235 2355 98</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 d-block">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-0 p-md-3 p-2"><a href="{{route('lang', 'uz')}}"><img title="O`zbekcha" src="{{asset('images/uz.png')}}" alt="uz"></a></li>
                    <li class="list-inline-item mr-0 p-md-3 p-2"><a href="{{route('lang', 'ru')}}"><img title="Русский" src="{{asset('images/ru.png')}}" alt="ru"></a></li>
                    <li class="list-inline-item mr-0 p-md-3 p-2"><a href="{{route('lang', 'en')}}"><img title="English" width="16" src="{{asset('images/en.png')}}" alt="en"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">Kiddos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="" class="nav-link pl-0">{{__('navbar.Home')}}</a></li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link">{{__('navbar.About')}}</a></li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link">{{__('navbar.Teacher')}}</a></li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link">{{__('navbar.Courses')}}</a></li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link">{{__('navbar.Blog')}}</a></li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link">{{__('navbar.Contact')}}</a></li>
            </ul>
        </div>
    </div>
</nav>
