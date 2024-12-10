@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="card card-dark card-outline col-md-12">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="6" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-danger">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row m-2">
            <div class="card" style="max-height: 400px; overflow-y: auto;">
                <div class="row m-4">
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <p>Various types of buttons. Using the base class <code>.btn</code></p>
                                <small>Various types of buttons. Using the base class <code>.btn</code></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <p>Various types of buttons. Using the base class <code>.btn</code></p>
                                <small>Various types of buttons. Using the base class <code>.btn</code></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <p>Various types of buttons. Using the base class <code>.btn</code></p>
                                <small>Various types of buttons. Using the base class <code>.btn</code></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <p>Various types of buttons. Using the base class <code>.btn</code></p>
                                <small>Various types of buttons. Using the base class <code>.btn</code></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <p>Various types of buttons. Using the base class <code>.btn</code></p>
                                <small>Various types of buttons. Using the base class <code>.btn</code></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection