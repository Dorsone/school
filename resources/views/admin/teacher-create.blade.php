@extends('layouts.dash')

@section('content-title')
    O`qituvchilar yaratish
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.teachers.index')}}">O`qituvchilar</a></li>
    <li class="breadcrumb-item active">Yaratish</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">O`qituvchi yaratish</h3>
            </div>
            <div class="card-body">
                @include('components.errors')
                <form action="{{route('admin.teachers.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name_uz">Ismi O`zbekchada</label>
                            <input name="name_uz" type="text" id="name_uz" value="{{old('name_uz')}}" class="form-control">
                            @error('name_uz')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="role_uz">Kasbi O`zbekchada</label>
                            <input name="role_uz" type="text" id="role_uz"class="form-control">
                            @error('role_uz')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="description_uz">Tavsifi O`zbekchada</label>
                            <textarea name="description_uz" id="description_uz" class="form-control"></textarea>
                            @error('description_uz')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name_ru">Ismi Ruschada</label>
                            <input name="name_ru" type="text" id="name_ru" class="form-control">
                            @error('name_ru')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="role_ru">Kasbi Ruschada</label>
                            <input name="role_ru" type="text" id="role_ru" class="form-control">
                            @error('role_ru')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="description_ru">Tavsifi Ruschada</label>
                            <textarea name="description_ru" id="description_ru" class="form-control"></textarea>
                            @error('description_ru')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name_en">Ismi Ingilizchada</label>
                            <input name="name_en" type="text" id="name_en" class="form-control">
                            @error('image')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="role_en">Kasbi Ingilizchada</label>
                            <input name="role_en" type="text" id="role_en" class="form-control">
                            @error('image')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="description_en">Tavsifi Ingilizchada</label>
                            <textarea name="description_en" id="description_en" class="form-control"></textarea>
                            @error('image')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="facebook">Facebook havolasi</label>
                            <input name="facebook" type="text" id="facebook" class="form-control">
                            @error('image')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="twitter">Twitter havolasi</label>
                            <input name="twitter" type="text" id="twitter" class="form-control">
                            @error('image')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="instagram">Instagram havolasi</label>
                            <input name="instagram" type="text" id="instagram" class="form-control">
                            @error('image')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telegram">Telegram havolasi</label>
                            <input name="telegram" type="text" id="telegram" class="form-control">
                            @error('image')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="customFile">Rasmni yuklang</label>
                            <div class="custom-file">
                                <input accept="image/png, image/jpg, image/jpeg" name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @error('image')
                                <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Yaratish</button>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.teachers.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
