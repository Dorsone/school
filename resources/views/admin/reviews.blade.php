@extends('layouts.crud-table')

@section('title')
    Projects
@endsection

@section('table-title')
    Projects
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
    <tr>
        <td>1</td>
        <td>Jasur</td>
        <td>Dustmurodov</td>
        <td>+998900858533</td>
        <td>10-V</td>
        <td>20.05.2022 16:50</td>
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
@endsection

@section('table-footer')
    <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
    </ul>
@endsection
