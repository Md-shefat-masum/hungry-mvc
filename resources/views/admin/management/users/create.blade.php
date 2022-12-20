@extends('admin.layouts.dashboard_layout')
@section('content')

    <div class="page-content">
        <div class="container">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">common</a>
                                </li>
                                <li class="breadcrumb-item active">Create</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-6">
                    <form action="#">
                        <div class="card">
                            <div class="card-heading">
                                <h1>Common Create</h1>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Dipartment</label>
                                    <input type="text" name="" class="form-control">
                                </div>

                            <div class="text-center table_footer">
                              <button class="btn btn-outline-dark">Submit</button>
                        </div>
                    </form>

                    <!-- end table -->
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
