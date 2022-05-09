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
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="first_name">Ismi</label>
                        <input name="first_name" type="text" id="first_name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">Familiyasi</label>
                        <input name="last_name" type="text" id="last_name" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="phone">Telefon raqami</label>
                        <input name="phone" type="text" id="phone" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Date masks:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                        </div>

                    </div>
                    <div class="form-group col-md-4">
                        <label for="level">Sinfi</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.students.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
