@extends('assessor.layouts.master')
@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Top Navigation</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="custom-select">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <table id="example2" class="table table-striped">
                                <thead>
                                    <tr>
                                        @foreach ($columns as $column)
                                            <th>{{ $column }}</th>
                                        @endforeach
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            @foreach ($columns as $key => $column)
                                                <td>{{ $row[$column] ?? '' }}</td>
                                            @endforeach
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="actionMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="actionMenu">
                                                        <a class="dropdown-item text-info" href="#">
                                                            <i class="fas fa-pen"></i> Edit
                                                        </a>
                                                        <a class="dropdown-item text-danger" href="#">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if (Request::is('field_sheet') || Request::is('tax_dec'))
                                <div class="float-right mt-3">
                                    <button class="btn btn-danger"><i class="fa-solid fa-print"></i> Print all</button>
                                </div>
                            @endif
                            @if (Request::is('validation'))
                                <div class="float-right mt-3">
                                    <button class="btn btn-danger"><i class="fa-solid fa-check"></i> Validate all</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
