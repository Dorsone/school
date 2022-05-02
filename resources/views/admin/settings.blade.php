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
            <a style="margin-bottom: 5px" class="btn btn-primary btn-sm" href="#">
                <i class="fas fa-folder"></i> View
            </a>
            <a style="margin-bottom: 5px" class="btn btn-info btn-sm" href="#">
                <i class="fas fa-pencil-alt"></i> Edit
            </a>
            <a class="btn btn-danger btn-sm" href="#">
                <i class="fas fa-trash"></i> Delete
            </a>
        </td>
    </tr>
    @endforeach
@endsection

@section('table-footer')
    {{$settings->links('vendor.pagination.bootstrap-4')}}
@endsection
