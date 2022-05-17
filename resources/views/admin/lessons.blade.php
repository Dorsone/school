@extends('layouts.crud-table')

@section('title')
    Ochiq Darslar
    <a href="{{route('admin.lessons.create')}}" class="btn bg-gradient-info">
        <i class="fas fa-plus"></i> Yaratish
    </a>
@endsection

@section('table-title')
    Ochiq darslar
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item active">Ochiq darslar</li>
@endsection

@section('table-header')
    <th>ID</th>
    <th>Sarlavha</th>
    <th>Boshlanish vaqti</th>
    <th>Tugash vaqti</th>
    <th>Sinf</th>
@endsection

@section('table-body')
    @foreach($lessons->items() as $lesson)
        <tr>
            <td>{{$lesson->id}}</td>
            <td>{{$lesson->title_uz}}</td>
            <td>{{substr($lesson->from_time, 0,-3)}}</td>
            <td>{{substr($lesson->to_time, 0,-3)}}</td>
            <td>{{$lesson->level->name_uz}}</td>
            <td class="project-actions text-right">
                <a style="margin-bottom: 5px" class="btn btn-primary btn-sm" href="{{route('admin.lessons.show', $lesson->id)}}">
                    <i class="fas fa-folder"></i> Batafsil
                </a>
                <a style="margin-bottom: 5px" class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt"></i> Edit
                </a>
                <form action="{{route('admin.lessons.destroy', $lesson->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>O`chirish</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection

@section('table-footer')
    {{$lessons->links('vendor.pagination.bootstrap-4')}}
@endsection
