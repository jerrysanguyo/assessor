@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="card card-dark card-outline col-md-12">
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-11 col-md-9 col-sm-12">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="search">
                            </div>
                            <div class="col-lg-1 col-md-3 col-sm-12">
                                <a href="#">
                                    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#accountCreate">
                                        <i class="nav-icon fas fa-file-alt"></i> New Account
                                    </button>
                                </a>
                                @include('component.modal.accountCreate')
                            </div>
                        </div>

                        <table id="example2" class="table-bordered table-hover table">
                            <thead>
                                <tr>
                                    @foreach($columns as $column)
                                        <th>{{ $column }}</th>
                                    @endforeach
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        @foreach($columns as $key => $column)
                                            <td>{{ $row[$column] ?? '' }}</td>
                                        @endforeach
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-info">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
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
                </form>
            </div>
        </div>
    </div>
</section>

@endsection