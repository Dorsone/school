@extends('layouts.crud-table')

@section('title')
    O`qituvchilar
    <a href="{{route('admin.teachers.create')}}" class="btn bg-gradient-info">
        <i class="fas fa-plus"></i> Yaratish
    </a>
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item active">O`qituvchilar</li>
@endsection

@section('table-title')
    O`qituvchilar
@endsection

@section('table-header')
    <th>ID</th>
    <th>Ismi</th>
    <th>Kim</th>
    <th style="width: 50%">Tavsifi</th>
    <th></th>
@endsection

@section('table-body')
    @foreach($teachers->items() as $teacher)
        <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->name_uz}}</td>
            <td>{{$teacher->role_uz}}</td>
            <td>{{$teacher->description_uz}}</td>
            <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="{{route('admin.teachers.show', $teacher->id)}}">
                    <i class="fas fa-folder"></i>Batafsil
                </a>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt"></i>Edit
                </a>
                <form action="{{route('admin.teachers.delete', $teacher->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>O`chirish</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection

@section('table-footer')
    {{$teachers->links('vendor.pagination.bootstrap-4')}}
@endsection
