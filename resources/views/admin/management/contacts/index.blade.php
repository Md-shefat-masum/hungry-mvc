@extends('admin.layouts.dashboard_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Index</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">contact</a>
                                </li>
                                <li class="breadcrumb-item active">Index</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-heading">
                            <h1>Index list</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table_wrapper">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>email</th>
                                            <th>subject</th>
                                            <th>message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->email}}</td>
                                                <td>{{ $item->subject }}</td>
                                                <td>{{ $item->message}}</td>
                                                <td>
                                                    <div class="table_action">
                                                        <ul>
                                                            <li><a class="btn btn-sm btn-outline-info" href="#"><i class="bx bx-zoom-in"></i></a></li>
                                                            <li><a class="btn btn-sm btn-outline-warning" href="#"><i class="bx bx-pencil"></i></a></li>
                                                            <li><a class="btn btn-sm btn-outline-danger" href="#"><i class="bx bx-trash-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    </div>
                                </table>
                        </div>
                        <div class="table_footer">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                    </div>

                    </div>
                    <!-- end table -->
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
