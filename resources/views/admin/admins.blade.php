@extends('layouts.crud-table')

@section('title')
    Adminlar
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item active">Adminlar</li>
@endsection

@section('table-title')
    Adminlar
@endsection

@section('table-header')
    <th style="width: 1%">ID</th>
    <th style="width: 10%">Login</th>
    <th style="width: 15%">Ismi UZ</th>
    <th style="width: 15%">Ismi RU</th>
    <th style="width: 15%">Ismi EN</th>
    <th>Telefon</th>
    <th style="width: 20%"></th>
@endsection

@section('table-body')
    @foreach($admins->items() as $admin)
        <tr>
            <td>{{$admin->id}}</td>
            <td>{{$admin->login}}</td>
            <td>{{$admin->name_uz}}</td>
            <td>{{$admin->name_ru}}</td>
            <td>{{$admin->name_en}}</td>
            <td>{{$admin->phone}}</td>
            <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="{{route('admin.admins.show', $admin->id)}}">
                    <i class="fas fa-folder"></i>Batafsil
                </a>
                <a class="btn btn-info btn-sm" href="{{route('admin.admins.edit', $admin->id)}}">
                    <i class="fas fa-pencil-alt"></i>O'zgartirish
                </a>
            </td>
        </tr>
    @endforeach
@endsection

@section('table-footer')
    {{$admins->links('vendor.pagination.bootstrap-4')}}
@endsection
