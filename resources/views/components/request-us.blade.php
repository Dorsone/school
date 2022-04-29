<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{asset("images/bg_5.jpg")}});" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5 bg-primary">
                <div class="heading-section heading-section-white ftco-animate mb-5">
                    <h2 class="mb-4">{{__('sections/request.title')}}</h2>
                    <p>{{__('sections/request.body')}}</p>
                </div>
                <form action="{{route('store.review')}}" method="POST" class="appointment-form ftco-animate">@csrf
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input name="first_name" type="text" class="form-control" placeholder="{{__('sections/request.content.first_name')}}">
                        </div>
                        <div class="form-group ml-md-4">
                            <input name="last_name" type="text" class="form-control" placeholder="{{__('sections/request.content.last_name')}}">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="course_id" class="form-control">
                                        <option style="color: #333333" value="#">{{__('sections/request.content.course_name')}}</option>
                                        @foreach($levels as  $level)
                                            <option style="color: #333333" value="{{$level->id}}">{{$level['name_'.app()->getLocale()]}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input name="phone" type="number" class="form-control" placeholder="{{__('sections/request.content.phone')}}">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="{{__('sections/request.content.message')}}"></textarea>
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
