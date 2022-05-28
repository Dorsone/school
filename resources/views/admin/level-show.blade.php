@extends('layouts.dash')

@section('content-title')
    Sinf haqida ma`lumot
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.levels.index')}}">Sinflar</a></li>
    <li class="breadcrumb-item active">Ma`lumot</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sinf haqida ma`lumot</h3>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name_uz">Ismi O`zbekchada</label>
                            <input name="name_uz" value="{{$level->name_uz}}" type="text" id="name_uz" disabled class="form-control @error('name_uz') is-invalid @enderror">
                            @error('name_uz')
                            <span id="name_uz-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name_ru">Ismi Ruschada</label>
                            <input name="name_ru" value="{{$level->name_ru}}" type="text" id="name_ru" disabled class="form-control @error('name_ru') is-invalid @enderror">
                            @error('name_ru')
                            <span id="name_ru-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name_en">Ismi Ingilizchada</label>
                            <input name="name_en" value="{{$level->name_en}}" type="text" disabled id="name_en" class="form-control @error('name_en') is-invalid @enderror">
                            @error('name_en')
                            <span id="name_en-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="from_time">Boshlanish vaqti</label>
                            <input name="from_time" value="{{$level->from_time}}" disabled id="from_time" type="time" class="form-control @error('from_time') is-invalid @enderror">
                            @error('from_time')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="to_time">Tugash vaqti</label>
                            <input name="to_time" disabled id="to_time" value="{{$level->to_time}}" type="time" class="form-control @error('to_time') is-invalid @enderror">
                            @error('to_time')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="teacher_id">Sinf rahabari</label>
                            <input name="teacher_id" disabled id="teacher_id" value="{{$level->teacher->name_uz}}" type="text" class="form-control @error('teacher_id') is-invalid @enderror">
                            @error('teacher_id')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.levels.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
