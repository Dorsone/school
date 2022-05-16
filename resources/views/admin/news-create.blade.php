@extends('layouts.dash')

@section('content-title')
    Yangiliklar yaratish
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.teachers.index')}}">Yangiliklar</a></li>
    <li class="breadcrumb-item active">Yaratish</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Yangiliklar yaratish</h3>
            </div>
            <div class="card-body">
                @include('components.errors')
                <form action="{{route('admin.news.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="user">Muallif</label>
                            <input type="text" id="usaer" value="{{auth()->user()->name_uz}}" disabled class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="customFile">Rasmni yuklang</label>
                            <div class="custom-file">
                                <input accept="image/png, image/jpg, image/jpeg" name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @error('image')
                                <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="title_uz">Sarlavha UZ</label>
                            <textarea rows="10" name="title_uz" id="title_uz" class="form-control">{{old('title_uz')}}</textarea>
                        </div>
                        <div class="form-group col-md">
                            <label for="content_uz">Mazmuni UZ</label>
                            <textarea rows="10" name="content_uz" id="content_uz" class="form-control">{{old('content_uz')}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="title_ru">Sarlavha RU</label>
                            <textarea rows="10" name="title_ru" id="title_ru" class="form-control">{{old('title_ru')}}</textarea>
                        </div>
                        <div class="form-group col-md">
                            <label for="content_ru">Mazmuni RU</label>
                            <textarea rows="10" name="content_ru" id="content_ru" class="form-control">{{old('content_ru')}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="title_en">Sarlavha EN</label>
                            <textarea rows="10" name="title_en" id="title_en" class="form-control">{{old('title_en')}}</textarea>
                        </div>
                        <div class="form-group col-md">
                            <label for="content_en">Mazmuni EN</label>
                            <textarea rows="10" name="content_en" id="content_en" class="form-control">{{old('content_en')}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title_preview_uz">Qisqa sarlavha UZ</label>
                            <input name="title_preview_uz" type="text" id="title_preview_uz" value="{{old('title_preview_uz')}}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="content_preview_uz">Qisqa mazmun UZ</label>
                            <input name="content_preview_uz" type="text" id="content_preview_uz" value="{{old('content_preview_uz')}}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title_preview_ru">Qisqa sarlavha RU</label>
                            <input name="title_preview_ru" type="text" id="title_preview_ru" value="{{old('title_preview_ru')}}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="content_preview_ru">Qisqa mazmun RU</label>
                            <input name="content_preview_ru" type="text" id="content_preview_ru" value="{{old('content_preview_ru')}}" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title_preview_en">Qisqa sarlavha EN</label>
                            <input name="title_preview_en" type="text" id="title_preview_en" value="{{old('title_preview_en')}}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="content_preview_en">Qisqa mazmun EN</label>
                            <input name="content_preview_en" type="text" id="content_preview_en" value="{{old('content_preview_en')}}" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Yaratish</button>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.teachers.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
