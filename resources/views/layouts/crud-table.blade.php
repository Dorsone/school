@extends('layouts.dash')

@section('content-title')
    @yield('title')
@endsection

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@yield('table-title')</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        @yield('table-header')
                    </tr>
                    </thead>
                    <tbody>
                        @yield('table-body')
                    </tbody>
                </table>
            </div>

            <div class="card-footer clearfix">
                @yield('table-footer')
            </div>
        </div>
        <!-- /.card -->

    </section>
@endsection
