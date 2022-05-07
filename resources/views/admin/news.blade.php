@extends('layouts.crud-table')

@section('title')
    Yangiliklar
@endsection

@section('table-title')
    Yangliklar
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item active">Yangiliklar</li>
@endsection

@section('table-header')
    <th>ID</th>
    <th>Sarlavha</th>
    <th>Muallif</th>
    <th>Qachon</th>
    <th></th>
@endsection

@section('table-body')
    @foreach($news->items() as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title_preview_uz}}</td>
            <td>{{$article->user->name_uz}}</td>
            <td>{{$article->created_at}}</td>
            <td class="project-actions text-right">
                <a style="margin-bottom: 5px" class="btn btn-primary btn-sm" href="{{route('admin.news.show', $article->id)}}">
                    <i class="fas fa-folder"></i> Batafsil
                </a>
                <a style="margin-bottom: 5px" class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt"></i> Edit
                </a>
                <form action="{{route('admin.news.delete', $article->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>O`chirish</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection

@section('table-footer')
    {{$news->links('vendor.pagination.bootstrap-4')}}
@endsection
