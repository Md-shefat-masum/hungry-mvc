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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">common</a></li>
                                <li class="breadcrumb-item active">create</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="">
                        <div class="card">
                            <div class="card-header">
                                <h2>Common Create</h2>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <label for="">label</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">label</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">label</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                            <div class="text-center card-footer">
                                <button class="btn btn-outline-info">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@endsection

