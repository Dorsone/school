@extends('layouts.crud-table')

@section('title')
    Sinflar
    <a href="{{route('admin.levels.create')}}" class="btn bg-gradient-info">
        <i class="fas fa-plus"></i> Yaratish
    </a>
@endsection

@section('table-title')
    Sinflar
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item active">Sinflar</li>
@endsection

@section('table-header')
    <th>ID</th>
    <th>Nomi</th>
    <th>Sinf rahbari</th>
    <th></th>
@endsection

@section('table-body')
    @foreach($levels as $level)
        <tr>
            <td>{{$level->id}}</td>
            <td>{{$level->name_uz}}</td>
            <td>{{$level->teacher->name_uz}}</td>
            <td class="project-actions text-right">
                <a style="margin-bottom: 5px" class="btn btn-primary btn-sm" href="{{route('admin.levels.show', $level->id)}}">
                    <i class="fas fa-folder"></i> Batafsil
                </a>
                <a style="margin-bottom: 5px" class="btn btn-info btn-sm" href="{{route('admin.levels.edit', $level->id)}}">
                    <i class="fas fa-pencil-alt"></i> O'zgartirish
                </a>
                <form style="float: right" action="{{route('admin.levels.destroy', $level->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>O`chirish</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection

@section('table-footer')
    {{$levels->links('vendor.pagination.bootstrap-4')}}
@endsection
