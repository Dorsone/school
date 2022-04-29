@extends('layouts.app-assets')

@section('bread-crumbs-title')
    {{__('navbar.Contact')}}
@endsection

@section('bread-crumbs-body')
    <span>
        {{__('navbar.Contact')}} <i class="ion-ios-arrow-forward"></i>
    </span>
@endsection

@section('content')
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">{{__('contacts.Address')}}</h3>
                        <p>{{$contacts->where('name', 'address')->first()->value}}</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">{{__('contacts.Contact')}}</h3>
                        <p><a href="tel://{{$contacts->where('name', 'phone')->first()->value}}">{{$contacts->where('name', 'phone')->first()->value}}</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">{{__('contacts.Email')}}</h3>
                        <p><a href="mailto:{{$contacts->where('name', 'email')->first()->value}}">{{$contacts->where('name', 'email')->first()->value}}</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">{{__('contacts.Website')}}</h3>
                        <p><a href="{{route('index')}}">{{$contacts->where('name', 'web_site')->first()->value}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{__('send-message.name')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{__('send-message.email')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{__('send-message.subject')}}">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="{{__('send-message.message')}}"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="{{__('send-message.send')}}" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A65b1ea7f538537835c33952e198bf4cf5a5b58440aebe96f2f611a00d5a8240b&amp;width=600&amp;height=600&amp;lang={{app()->getLocale()}}&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </section>
    <br><br>
@endsection
