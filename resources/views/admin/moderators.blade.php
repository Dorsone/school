@extends('layouts.crud-table')

@section('title')
    Moderatorlar
    <a href="{{route('admin.moderators.create')}}" class="btn bg-gradient-info">
        <i class="fas fa-plus"></i> Yaratish
    </a>
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item active">Moderatorlar</li>
@endsection

@section('table-title')
    Moderatorlar
@endsection

@section('table-header')
    <th>ID</th>
    <th>Login</th>
    <th>Ismi UZ</th>
    <th>Ismi RU</th>
    <th>Ismi EN</th>
    <th>Telefon</th>
    <th></th>
@endsection

@section('table-body')
    @foreach($moderators->items() as $moderator)
        <tr>
            <td>{{$moderator->id}}</td>
            <td>{{$moderator->login}}</td>
            <td>{{$moderator->name_uz}}</td>
            <td>{{$moderator->name_ru}}</td>
            <td>{{$moderator->name_en}}</td>
            <td>{{$moderator->phone}}</td>
            <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="{{route('admin.moderators.show', $moderator->id)}}">
                    <i class="fas fa-folder"></i>Batafsil
                </a>
                <a class="btn btn-info btn-sm" href="{{route('admin.moderators.edit', $moderator->id)}}">
                    <i class="fas fa-pencil-alt"></i>O'zgartirish
                </a>
                <form action="{{route('admin.moderators.delete', $moderator->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>O`chirish</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection

@section('table-footer')
    {{$moderators->links('vendor.pagination.bootstrap-4')}}
@endsection
