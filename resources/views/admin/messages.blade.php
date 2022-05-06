@extends('layouts.crud-table')

@section('title')
    Xabarlar
@endsection

@section('table-title')
    Xabarlar
@endsection

@section('bread-crumbs')
    <li class="active breadcrumb-item">Xabarlar</li>
@endsection

@section('table-header')
    <th>ID</th>
    <th>Ismi</th>
    <th>Telefon</th>
    <th>Mavzusi</th>
    <th>Qachon kelgan</th>
    <th></th>
@endsection

@section('table-body')
    @foreach($messages->items() as $message)
        <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->name}}</td>
            <td>{{$message->phone}}</td>
            <td>{{$message->subject}}</td>
            <td>{{$message->created_at}}</td>
            <td class="project-actions text-right">
                <a style="margin-bottom: 5px" class="btn btn-primary btn-sm" href="{{route('admin.messages.show', $message->id)}}">
                    <i class="fas fa-folder"></i> Batafsil
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
    {{$messages->links('vendor.pagination.bootstrap-4')}}
@endsection
