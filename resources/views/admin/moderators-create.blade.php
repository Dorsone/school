@extends('layouts.dash')

@section('content-title')
    Moderator yaratmoq
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.moderators.index')}}">Moderatorlar</a></li>
    <li class="breadcrumb-item active">Yaratmoq</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Moderator yaratmoq</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.moderators.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="login">Login</label>
                            <input name="login" type="text" value="{{old('login')}}" id="login" class="form-control @error('login') is-invalid @enderror">
                            @error('login')
                                <span id="login-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name_uz">Ismi O`zbekchada</label>
                            <input name="name_uz" value="{{old('name_uz')}}" type="text" id="name_uz" class="form-control @error('name_uz') is-invalid @enderror">
                            @error('name_uz')
                            <span id="name_uz-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name_ru">Ismi Ruschada</label>
                            <input name="name_ru" value="{{old('name_ru')}}" type="text" id="name_ru" class="form-control @error('name_ru') is-invalid @enderror">
                            @error('name_ru')
                            <span id="name_ru-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name_en">Ismi Ingilizchada</label>
                            <input name="name_en" value="{{old('name_en')}}" type="text" id="name_en" class="form-control @error('name_en') is-invalid @enderror">
                            @error('name_en')
                            <span id="name_en-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="phone">Telefon raqami</label>
                            <input name="phone" value="{{old('phone')}}" type="text" id="phone" class="form-control @error('phone') is-invalid @enderror">
                            @error('phone')
                            <span id="phone-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Parol</label>
                            <input name="password" type="password" id="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <span id="password-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password_confirmation">Parolni tasdiqlang</label>
                            <input name="password_confirmation" type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                            @error('password_confirmation')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Yaratish</button>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.moderators.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
