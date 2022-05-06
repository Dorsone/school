@extends('layouts.dash')

@section('content-title')
    @if($user->role == 3)Admin @else Moderator @endif haqida ma'lumot
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.admins.index')}}">@if($user->role == 3)Adminlar @else Moderatorlar @endif</a></li>
    <li class="breadcrumb-item active">Batafsil</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">@if($user->role == 3)Admin @else Moderator @endif haqida ma'lumot</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="login">Login</label>
                        <input name="login" type="text" id="login" value="{{$user->login}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name_uz">Ismi O`zbekchada</label>
                        <input name="name_uz" type="text" id="name_uz" value="{{$user->name_uz}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name_ru">Ismi Ruschada</label>
                        <input name="name_ru" type="text" id="name_ru" value="{{$user->name_ru}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name_en">Ismi Ingilizchada</label>
                        <input name="name_en" type="text" id="name_en" value="{{$user->name_en}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="phone">Telefon raqami</label>
                        <input name="phone" type="text" id="phone" value="{{$user->phone}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Parol</label>
                        <input name="password" type="text" id="password" value="{{$user->password}}" disabled class="form-control">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.admins.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
