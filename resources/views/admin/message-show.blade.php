@extends('layouts.dash')

@section('content-title')
    Xabar haqida ma'lumot
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.messages.index')}}">Xabarlar</a></li>
    <li class="breadcrumb-item active">Batafsil</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Xabar haqida ma'lumot</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">Ismi</label>
                        <input name="name" type="text" id="name" value="{{$message->name}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Telefon</label>
                        <input name="phone" type="text" id="phone" value="{{$message->phone}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="created_at">Qachon kelgan</label>
                        <input name="created_at" type="text" id="created_at" value="{{$message->created_at->format('d-m-Y H:i')}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="subject">Mavzu</label>
                        <textarea name="subject" id="subject" disabled class="form-control">{{$message->subject}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="message">Xabar</label>
                        <textarea name="message" id="message" disabled class="form-control">{{$message->message}}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.messages.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection

