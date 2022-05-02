@extends('layouts.crud-table')

@section('title')
    O`quvchilar
@endsection

@section('bread-crumbs')
    <li class="breadcrumb-item active">O`quvchilar</li>
@endsection

@section('table-title')
    O`quvchilar
@endsection

@section('table-header')
    <th style="width: 1%">ID</th>
    <th>Ismi</th>
    <th>Familiyasi</th>
    <th>Telefon</th>
    <th>Tug`ilgan sana</th>
    <th>Sinfi</th>
    <th style="width: 8%" class="text-center">Status</th>
    <th style="width: 20%"></th>
@endsection

@section('table-body')
    @foreach($students->items() as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->born}}</td>
            <td>{{$student->level->name_uz}}</td>
            <td class="project-state">
                <span class="badge @if($student->status == 0) badge-danger @else badge-success @endif "> @if($student->status == 0) Ketgan @else O`qiyapti @endif </span>
            </td>
            <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder"></i>View
                </a>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt"></i>Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash"></i>Delete
                </a>
            </td>
        </tr>
    @endforeach
@endsection

@section('table-footer')
    {{$students->links('vendor.pagination.bootstrap-4')}}
@endsection
