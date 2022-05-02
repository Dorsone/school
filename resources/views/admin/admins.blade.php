@extends('layouts.crud-table')

@section('table-title')
    Projects
@endsection

@section('table-header')
    <th style="width: 1%">ID</th>
    <th style="width: 10%">Login</th>
    <th style="width: 15%">Ismi UZ</th>
    <th style="width: 15%">Ismi RU</th>
    <th style="width: 15%">Ismi EN</th>
    <th>Telefon</th>
    <th style="width: 8%" class="text-center">Status</th>
    <th style="width: 20%"></th>
@endsection

@section('table-body')
    <tr>
        <td>1</td>
        <td>admin</td>
        <td>Jasur Dustmurodov</td>
        <td>Jasur Dustmurodov</td>
        <td>Jasur Dustmurodov</td>
        <td>+998900858533</td>
        <td class="project-state">
            <span class="badge badge-success">Active</span>
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
