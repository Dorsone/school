<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>{{__('sections/teacher.title.0')}}</span> {{__('sections/teacher.title.1')}}</h2>
{{--                <p>{{__('sections/teacher.body')}}</p>--}}
            </div>
        </div>
        <div class="row">
            @foreach($teachers as $teacher)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{$teacher->getFirstMedia()->getUrl()}});"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>{{$teacher['name_'.app()->getLocale()]}}</h3>
                            <span class="position mb-2">{{$teacher['role_'.app()->getLocale()]}}</span>
                            <div class="faded">
                                <p>{{$teacher['description_'.app()->getLocale()]}}</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="{{$teacher->twitter}}" target="_blank"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="{{$teacher->facebook}}" target="_blank"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="{{$teacher->telegram}}" target="_blank"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="{{$teacher->instagram}}" target="_blank"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
