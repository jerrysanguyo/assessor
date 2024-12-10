@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="card card-dark card-outline col-md-12">
                <form class="form-horizontal">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-1 col-form-label">Search:</label>
                            <div class="col-sm-2">
                                <select class="custom-select">
                                    @foreach($options as $option)
                                        <option value="">{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Input Data">
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-danger">
                                    <i class="nav-icon fas fa-search"></i> Search
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
                                    <i class="nav-icon fas fa-file-alt"></i> New Record
                                </button>
                            </div>

                            <div class="modal fade" id="modal-default">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tracking Selection</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal">
                                                <div class="form-group row">
                                                    <label class="col-sm-1 col-form-label">Search</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" placeholder="Input Data">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="nav-icon fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <h6><strong>Note:</strong> Please Select Tracking Number To Proceed</h6>
                                        </div>
                                    </div>
                                </div>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
