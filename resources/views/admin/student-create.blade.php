@extends('layouts.dash')

@section('content-title')
    O`quvchi yaratmoq
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.students.index')}}">O`quvchilar</a></li>
    <li class="breadcrumb-item active">Yaratmoq</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">O`quvchi yaratmoq</h3>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="first_name">Ismi</label>
                            <input name="first_name" type="text" id="first_name" class="form-control">
                            @error('first_name')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Familiyasi</label>
                            <input name="last_name" type="text" id="last_name" class="form-control">
                            @error('last_name')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="phone">Telefon raqami</label>
                            <input placeholder="998901234567" name="phone" type="text" id="phone" class="form-control">
                            @error('phone')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="born">Tug'ilgan sanasi:</label>
                            <input name="born" type="date" id="born" class="form-control">
                            @error('born')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="level_id">Sinfi</label>
                            <select name="level_id" id="level_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                @foreach($levels as $level)
                                    <option value="{{$level->id}}">{{$level->name_uz}}</option>
                                @endforeach
                            </select>
                            @error('level_id')
                            <span id="password_confirmation-error" class="error invalid-feedback">{{__($message)}}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Yaratish</button>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.students.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
