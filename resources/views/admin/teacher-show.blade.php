@extends('layouts.dash')

@section('content-title')
    O`qituvchilar haqida ma'lumot
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.teachers.index')}}">O`qituvchilar</a></li>
    <li class="breadcrumb-item active">Batafsil</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">O`qituvchi haqida ma'lumot</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name_uz">Ismi O`zbekchada</label>
                        <input name="name_uz" type="text" id="name_uz" value="{{$teacher->name_uz}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="role_uz">Kasbi O`zbekchada</label>
                        <input name="role_uz" type="text" id="role_uz" value="{{$teacher->role_uz}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="description_uz">Tavsifi O`zbekchada</label>
                        <textarea name="description_uz" id="description_uz" disabled class="form-control">{{$teacher->description_uz}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name_ru">Ismi Ruschada</label>
                        <input name="name_ru" type="text" id="name_ru" value="{{$teacher->name_ru}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="role_ru">Kasbi Ruschada</label>
                        <input name="role_ru" type="text" id="role_ru" value="{{$teacher->role_ru}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="description_ru">Tavsifi Ruschada</label>
                        <textarea name="description_ru" id="description_ru" disabled class="form-control">{{$teacher->description_ru}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name_en">Ismi Ingilizchada</label>
                        <input name="name_en" type="text" id="name_en" value="{{$teacher->name_en}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="role_en">Kasbi Ingilizchada</label>
                        <input name="role_en" type="text" id="role_en" value="{{$teacher->role_en}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="description_en">Tavsifi Ingilizchada</label>
                        <textarea name="description_en" id="description_en" disabled class="form-control">{{$teacher->description_en}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="facebook">Facebook havolasi</label>
                        <input name="facebook" type="text" id="facebook" value="{{$teacher->facebook}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="twitter">Twitter havolasi</label>
                        <input name="twitter" type="text" id="twitter" value="{{$teacher->twitter}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="instagram">Instagram havolasi</label>
                        <input name="instagram" type="text" id="instagram" value="{{$teacher->instagram}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telegram">Telegram havolasi</label>
                        <input name="telegram" type="text" id="telegram" value="{{$teacher->telegram}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md">
                        <label for="image">O`qituvchi rasmi</label>
                        <img id="image" src="{{$teacher->getFirstMedia()->getUrl()}}" disabled class="form-control h-auto w-auto" alt="image">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.teachers.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
