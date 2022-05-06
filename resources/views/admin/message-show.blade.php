@extends('layouts.dash')

@section('content-title')
    Sharh haqida ma'lumot
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.reviews.index')}}">Sharhlar</a></li>
    <li class="breadcrumb-item active">Batafsil</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sharh haqida ma'lumot</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="first_name">Ismi</label>
                        <input name="first_name" type="text" id="first_name" value="{{$reviews->first_name}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="last_name">Familiyasi</label>
                        <input name="last_name" type="text" id="last_name" value="{{$reviews->last_name}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="role_uz">Kimi</label>
                        <input name="role_uz" type="text" id="role_uz" value="{{$reviews->role}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="phone">Telefon raqami</label>
                        <input name="phone" type="text" id="phone" value="{{$reviews->phone}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="level">Sinfi</label>
                        <input name="level" type="text"  value="{{$reviews->level->name_uz}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="status">Status</label>
                        <span id="status" class="form-control @if($reviews->status == 0) bg-danger @else bg-success @endif "> @if($reviews->status == 0) Tasdiqlanmagan @else Tasdiqlangan @endif </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="description_ru">Sharh</label>
                        <textarea name="description_ru" id="description_ru" disabled class="form-control">{{$reviews->message}}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.teachers.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection

