@extends('layouts.dash')

@section('content-title')
    Admin Panel
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item active">Panel</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$reviews}}</h3>

                    <p>Yangi Sharhlar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-solid fa-comment"></i>
                </div>
                <a href="{{route('admin.reviews.index')}}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$teachers}}</h3>

                    <p>O`qituvchilar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-regular fa-user-tie"></i>
                </div>
                <a href="{{route('admin.teachers.index')}}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$students}}</h3>

                    <p>O`quvchilar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-regular fa-user-graduate"></i>
                </div>
                <a href="{{route('admin.students.index')}}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$messages}}</h3>

                    <p>Xabarlar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-regular fa-envelope"></i>
                </div>
                <a href="{{route('admin.messages.index')}}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
@endsection
