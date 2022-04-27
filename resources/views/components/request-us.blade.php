<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{asset("images/bg_5.jpg")}});" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5 bg-primary">
                <div class="heading-section heading-section-white ftco-animate mb-5">
                    <h2 class="mb-4">{{__('sections/request.title')}}</h2>
                    <p>{{__('sections/request.body')}}</p>
                </div>
                <form action="#" class="appointment-form ftco-animate">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{__('sections/request.content.first_name')}}">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="{{__('sections/request.content.last_name')}}">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">{{__('sections/request.content.course_name')}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="{{__('sections/request.content.phone')}}">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="{{__('sections/request.content.message')}}"></textarea>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="submit" value="{{__('sections/request.title')}}" class="btn btn-secondary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
