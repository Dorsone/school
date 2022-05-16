@extends('layouts.crud-table')

@section('title')
    Sozlamalar
@endsection

@section('table-title')
    Sozlamalar
@endsection

@section('bread-crumbs')
    <li class="active breadcrumb-item">Sozlamalar</li>
@endsection

@section('table-header')
    <th>ID</th>
    <th>Sozlama nomi</th>
    <th>Qiymati</th>
    <th>Bo`lim nomi</th>
    <th></th>
@endsection

@section('table-body')
    @foreach($settings->items() as $setting)
    <tr>
        <td>{{$setting->id}}</td>
        <td>{{$setting->name}}</td>
        <td>{{$setting->value}}</td>
        <td>{{$setting->section}}</td>
        <td class="project-actions text-right">
            <a style="margin-bottom: 5px" class="btn btn-primary btn-sm" href="{{route('admin.settings.show', $setting->id)}}">
                <i class="fas fa-folder"></i> Batafsil
            </a>
            <a style="margin-bottom: 5px" class="btn btn-info btn-sm" href="{{route('admin.settings.edit', $setting->id)}}">
                <i class="fas fa-pencil-alt"></i> O'zgartirish
            </a>
        </td>
    </tr>
    @endforeach
@endsection

@section('table-footer')
    {{$settings->links('vendor.pagination.bootstrap-4')}}
@endsection
