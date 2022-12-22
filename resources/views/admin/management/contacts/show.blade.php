@extends('admin.layouts.dashboard_layout')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Show</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">common</a>
                                </li>
                                <li class="breadcrumb-item active">Show</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-heading ">
                            <h1 >Common Show</h1>
                        </div>
                        <div class="card-body">
                           <table class="table">
                            <tr>
                                <td style="width: 135px" >Name</td>
                                <td style="width:3px">:</td>
                                <td>This is Sharif Ahmed.</td>
                            </tr>
                            <tr>
                                <td style="width: 135px" >Name</td>
                                <td style="width:3px">:</td>
                                <td>This is Sharif Ahmed.</td>
                            </tr>
                            <tr>
                                <td style="width: 135px" >Name</td>
                                <td style="width:3px">:</td>
                                <td>This is Sharif Ahmed.</td>
                            </tr>
                            <tr>
                                <td style="width: 135px" >Name</td>
                                <td style="width:3px">:</td>
                                <td>This is Sharif Ahmed.</td>
                            </tr>
                           </table>
                        <div class="text-center table_footer">
                          <button class="btn btn-outline-dark">Submit</button>
                    </div>
                    <!-- end table -->
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
