@extends('layouts.dash')

@section('content-title')
    Moderator O'zgartirish
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.moderators.index')}}">Moderatorlar</a></li>
    <li class="breadcrumb-item active">Batafsil</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Moderator O'zgartirish</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.moderators.update', $user->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="login">Login</label>
                            <input name="login" type="text" value="{{$user->login}}" id="login" class="form-control @error('login') is-invalid @enderror">
                            @error('login')
                            <span id="login-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name_uz">Ismi O`zbekchada</label>
                            <input name="name_uz" value="{{$user->name_uz}}" type="text" id="name_uz" class="form-control @error('name_uz') is-invalid @enderror">
                            @error('name_uz')
                            <span id="name_uz-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name_ru">Ismi Ruschada</label>
                            <input name="name_ru" value="{{$user->name_ru}}" type="text" id="name_ru" class="form-control @error('name_ru') is-invalid @enderror">
                            @error('name_ru')
                            <span id="name_ru-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name_en">Ismi Ingilizchada</label>
                            <input name="name_en" value="{{$user->name_en}}" type="text" id="name_en" class="form-control @error('name_en') is-invalid @enderror">
                            @error('name_en')
                            <span id="name_en-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="phone">Telefon raqami</label>
                            <input name="phone" value="{{$user->phone}}" type="text" id="phone" class="form-control @error('phone') is-invalid @enderror">
                            @error('phone')
                            <span id="phone-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Yaratish</button>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.admins.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
