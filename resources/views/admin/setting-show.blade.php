@extends('layouts.dash')

@section('content-title')
    Sozlama haqida ma'lumot
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.settings.index')}}">Sozlamalar</a></li>
    <li class="breadcrumb-item active">Batafsil</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sozlama haqida ma'lumot</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Sozlama nomi</label>
                        <input name="name" type="text" id="name" value="{{$setting->name}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="value">Sozlama</label>
                        <input name="value" type="text" id="value" value="{{$setting->value}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Bo`lim nomi</label>
                        <input name="name" type="text" id="name" value="{{$setting->section}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="value">Sozlama o`zgartirilgan:</label>
                        <input name="value" type="text" id="value" value="{{$setting->updated_at->format('d-m-Y H:i')}}" disabled class="form-control">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.settings.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
