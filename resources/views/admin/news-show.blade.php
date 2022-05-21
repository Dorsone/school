@extends('layouts.dash')

@section('content-title')
    Yangilik haqida ma'lumot
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.news.index')}}">Yangiliklar</a></li>
    <li class="breadcrumb-item active">Batafsil</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Yangilik haqida ma'lumot</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">Muallif</label>
                        <input name="name" type="text" id="name" value="{{$article->user->name_uz}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Qisqa sarlavha </label>
                        <input name="phone" type="text" id="phone" value="{{$article->title_preview_uz}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="created_at">Qachon yaratilgan</label>
                        <input name="created_at" type="text" id="created_at" value="{{$article->created_at->format('d-m-Y H:i')}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="subject">Sarlavha UZ</label>
                        <textarea rows="10" name="subject" id="subject" disabled class="form-control">{{$article->title_uz}}</textarea>
                    </div>
                    <div class="form-group col-md">
                        <label for="subject">Mazmuni UZ</label>
                        <textarea rows="10" name="subject" id="subject" disabled class="form-control">{{$article->content_uz}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="subject">Sarlavha RU</label>
                        <textarea rows="10" name="subject" id="subject" disabled class="form-control">{{$article->title_ru}}</textarea>
                    </div>
                    <div class="form-group col-md">
                        <label for="subject">Mazmuni RU</label>
                        <textarea rows="10" name="subject" id="subject" disabled class="form-control">{{$article->content_ru}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="subject">Sarlavha EN</label>
                        <textarea rows="10" name="subject" id="subject" disabled class="form-control">{{$article->title_en}}</textarea>
                    </div>
                    <div class="form-group col-md">
                        <label for="subject">Mazmuni EN</label>
                        <textarea rows="10" name="subject" id="subject" disabled class="form-control">{{$article->content_en}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="phone">Qisqa sarlavha UZ</label>
                        <input name="phone" type="text" id="phone" value="{{$article->title_preview_uz}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Qisqa mazmun UZ</label>
                        <input name="phone" type="text" id="phone" value="{{$article->content_preview_uz}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="phone">Qisqa sarlavha RU</label>
                        <input name="phone" type="text" id="phone" value="{{$article->title_preview_ru}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Qisqa mazmun RU</label>
                        <input name="phone" type="text" id="phone" value="{{$article->content_preview_ru}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="phone">Qisqa sarlavha EN</label>
                        <input name="phone" type="text" id="phone" value="{{$article->title_preview_en}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Qisqa mazmun EN</label>
                        <input name="phone" type="text" id="phone" value="{{$article->content_preview_en}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="image">Yangilik rasmi</label>
                        <img class="form-control h-auto w-auto" id="image" src="{{$article->getFirstMedia()->getUrl()}}" alt="photo">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.news.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection

