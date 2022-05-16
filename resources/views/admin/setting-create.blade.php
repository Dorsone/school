@extends('layouts.dash')

@section('content-title')
    Sozlama haqida ma'lumot
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.settings.index')}}">Sozlamalar</a></li>
    <li class="breadcrumb-item active">O'zgartirish</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sozlama haqida ma'lumot</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.settings.update', $setting->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Sozlama nomi</label>
                            <input type="text" id="name" value="{{$setting->name}}" disabled class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="value">Sozlama</label>
                            <input name="value" type="text" id="value" value="{{$setting->value}}" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success float-right" href="{{route('admin.settings.index')}}">O'zgartirish</button>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.settings.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
