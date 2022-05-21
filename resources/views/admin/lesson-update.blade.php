@extends('layouts.dash')

@section('content-title')
    Ochiq dars yaratish
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.lessons.index')}}">Ochiq darslar</a></li>
    <li class="breadcrumb-item active">Yaratish</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ochiq dars yaratish</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.lessons.update', $lesson->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title_uz">Sarlavha UZ</label>
                            <textarea name="title_uz" id="title_uz" class="form-control @error('title_uz') is-invalid @enderror">{{$lesson->title_uz}}</textarea>
                            @error('title_uz')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description_uz">Tavsifi UZ</label>
                            <textarea name="description_uz" id="description_uz" class="form-control @error('description_uz') is-invalid @enderror">{{$lesson->description_uz}}</textarea>
                            @error('description_uz')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title_ru">Sarlavha RU</label>
                            <textarea name="title_ru" id="title_ru" class="form-control @error('title_ru') is-invalid @enderror">{{$lesson->title_ru}}</textarea>
                            @error('title_ru')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description_ru">Tavsifi RU</label>
                            <textarea name="description_ru" id="description_ru" class="form-control @error('description_ru') is-invalid @enderror">{{$lesson->description_ru}}</textarea>
                            @error('description_ru')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title_en">Sarlavha EN</label>
                            <textarea name="title_en" id="title_en" class="form-control @error('title_en') is-invalid @enderror">{{$lesson->title_en}}</textarea>
                            @error('title_en')
                            <span id="password_confirmation-error" class="error invalid-feedback ">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description_en">Tavsifi EN</label>
                            <textarea name="description_en" id="description_en" class="form-control @error('description_en') is-invalid @enderror">{{$lesson->description_en}}</textarea>
                            @error('description_en')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="from_time">Boshlanish vaqti</label>
                            <input name="from_time" id="from_time" type="time" value="{{$lesson->from_time}}" class="form-control @error('from_time') is-invalid @enderror">
                            @error('from_time')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="to_time">Tugash vaqti</label>
                            <input name="to_time" id="to_time" type="time" value="{{$lesson->to_time}}" class="form-control @error('to_time') is-invalid @enderror">
                            @error('to_time')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="level_id">Sinfi</label>
                            <select name="level_id" id="level_id" class="form-control select2 select2-hidden-accessible @error('level_id') is-invalid @enderror" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                @foreach($levels as $level)
                                    <option @if($level->id == $lesson->level->id) selected @endif value="{{$level->id}}">{{$level->name_uz}}</option>
                                @endforeach
                            </select>
                            @error('level_id')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="customFile">Rasmni yuklang</label>
                            <div class="custom-file">
                                <input accept="image/png, image/jpg, image/jpeg" name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile">
                                <label class="custom-file-label" for="customFile">Rasmni Tanlang</label>
                                @error('image')
                                <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success float-right">O'zgartirish</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.lessons.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection

