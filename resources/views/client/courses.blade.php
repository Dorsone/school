@extends('layouts.app-assets')

@section('content')
    @include('components.bread-crumbs')

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 course d-lg-flex ftco-animate fadeInUp ftco-animated">
                    <div class="img" style="background-image: url({{asset("images/course-1.jpg")}});"></div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Arts Lesson</a></h3>
                        <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate fadeInUp ftco-animated">
                    <div class="img" style="background-image: url({{asset("images/course-2.jpg")}});"></div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Language Lesson</a></h3>
                        <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate fadeInUp ftco-animated">
                    <div class="img" style="background-image: url({{asset("images/course-3.jpg")}});"></div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Music Lesson</a></h3>
                        <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate fadeInUp ftco-animated">
                    <div class="img" style="background-image: url({{asset("images/course-4.jpg")}});"></div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Sports Lesson</a></h3>
                        <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate fadeInUp ftco-animated">
                    <div class="img" style="background-image: url({{asset("images/course-5.jpg")}});"></div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Study Lesson</a></h3>
                        <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
                <div class="col-md-6 course d-lg-flex ftco-animate fadeInUp ftco-animated">
                    <div class="img" style="background-image: url({{asset("images/course-6.jpg")}});"></div>
                    <div class="text bg-light p-4">
                        <h3><a href="#">Experiment Lesson</a></h3>
                        <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
