<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>{{__('sections/course.title.0')}}</span> {{__('sections/course.title.1')}}</h2>
                <p>{{__('sections/course.body')}}</p>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-6 course d-lg-flex ftco-animate">
                    <div class="img" style="background-image: url({{asset($course->image)}});"></div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">{{$course->title_en}}</a></h3>
                        <p class="subheading"><span>Class time:</span> {{substr($course->from_time,0,-3)}} - {{substr($course->to_time,0,-3)}}</p>
                        <p>{{$course->description_en}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
