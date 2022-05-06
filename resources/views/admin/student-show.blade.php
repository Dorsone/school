@extends('layouts.dash')

@section('content-title')
    O`quvchi haqida ma'lumot
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.admins.index')}}">O`quvchilar</a></li>
    <li class="breadcrumb-item active">Batafsil</li>
@endsection

@section('content')
    <div class="col-md">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">O`quvchi haqida ma'lumot</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="first_name">Ismi</label>
                        <input name="first_name" type="text" id="first_name" value="{{$student->first_name}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">Familiyasi</label>
                        <input name="last_name" type="text" id="last_name" value="{{$student->last_name}}" disabled class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="phone">Telefon raqami</label>
                        <input name="phone" type="text" id="phone" value="{{$student->phone}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <span id="status" class="form-control @if($student->status == 0) bg-danger @else bg-success @endif "> @if($student->status == 0) Ketgan @else O`qiyapti @endif </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="born">Tug`ilgan sanasi</label>
                        <input name="born" type="text" id="born" value="{{$student->born}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="level">Sinfi</label>
                        <input name="level" type="text"  value="{{$student->level->name_uz}}" disabled class="form-control">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('admin.admins.index')}}">Ortga</a>
            </div>
        </div>
    </div>
@endsection
