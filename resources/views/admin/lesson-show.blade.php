@extends('layouts.dash')

@section('content-title')
    Ochiq dars haqida ma'lumot
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.lessons.index')}}">Ochiq darslar</a></li>
    <li class="breadcrumb-item active">Batafsil</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ochiq dars haqida ma'lumot</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title_uz">Sarlavha UZ</label>
                        <textarea name="title_uz" id="title_uz" disabled class="form-control">{{$lesson->title_uz}}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="description_uz">Tavsifi UZ</label>
                        <textarea name="description_uz" id="description_uz" disabled class="form-control">{{$lesson->description_uz}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title_ru">Sarlavha RU</label>
                        <textarea name="title_ru" id="title_ru" disabled class="form-control">{{$lesson->title_ru}}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="description_ru">Tavsifi RU</label>
                        <textarea name="description_ru" id="description_ru" disabled class="form-control">{{$lesson->description_ru}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title_en">Sarlavha EN</label>
                        <textarea name="title_en" id="title_en" disabled class="form-control">{{$lesson->title_en}}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="description_ru">Tavsifi UZ</label>
                        <textarea name="description_ru" id="description_ru" disabled class="form-control">{{$lesson->description_ru}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="from_time">Boshlanish vaqti</label>
                        <input type="text" value="{{substr($lesson->from_time, 0, -3)}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="from_time">Tugash vaqti</label>
                        <input type="text" value="{{substr($lesson->to_time, 0, -3)}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="from_time">Sinfi</label>
                        <input type="text" value="{{$lesson->level->name_uz}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="image">O`qituvchi rasmi</label>
{{--                        <img id="image" src="{{$lesson->getFirstMedia()->getUrl()}}" disabled class="form-control h-auto w-auto" alt="image">--}}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.lessons.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection

