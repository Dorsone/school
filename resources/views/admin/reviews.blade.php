@extends('layouts.crud-table')

@section('title')
    Sharhlar
@endsection

@section('table-title')
    Sharhlar
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item active">Sharhlar</li>
@endsection

@section('table-header')
    <th>ID</th>
    <th>Ismi</th>
    <th>Familiyasi</th>
    <th>Telefon</th>
    <th>Sinf</th>
    <th>Qachon kelgan</th>
    <th></th>
@endsection

@section('table-body')
    @foreach($reviews->items() as $review)
        <tr>
            <td>{{$review->id}}</td>
            <td>{{$review->first_name}}</td>
            <td>{{$review->last_name}}</td>
            <td>{{$review->phone}}</td>
            <td>{{$review->level->name_uz    }}</td>
            <td>{{$review->created_at}}</td>
            <td class="project-actions text-right">
                <a style="margin-bottom: 5px" class="btn btn-primary btn-sm" href="{{route('admin.reviews.show', $review->id)}}">
                    <i class="fas fa-folder"></i> Batafsil
                </a>
                <form action="{{route('admin.reviews.delete', $review->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>O`chirish</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection

@section('table-footer')
{{$reviews->links('vendor.pagination.bootstrap-4')}}
@endsection
