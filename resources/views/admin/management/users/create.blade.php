@extends('admin.layouts.dashboard_layout')
@section('content')

    <div class="page-content">
        <div class="container">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">User Management</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">user</a></li>
                                <li class="breadcrumb-item active">create</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('dashboard.user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header d-flex flex-wrap gap-2 justify-content-between">
                                <h2 class="text-capitalized">user create</h2>
                                <a href="{{ route('dashboard.user.all') }}" class="btn btn-outline-info"> <i class="fa fa-arrow-left"></i> Back</a>
                            </div>
                            <div class="card-body row">
                                <div class="form-group col-lg-6 mb-4">
                                    <label for="">username</label>
                                    <input value="{{ old('username') }}" type="text" name="username" class="form-control">
                                    @error('username')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 mb-4">
                                    <label for="">phone number</label>
                                    <input value="{{ old('phone_number') }}" type="text" name="phone_number" class="form-control">
                                    @error('phone_number')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 mb-4">
                                    <label for="">email</label>
                                    <input value="{{ old('email') }}" type="text" name="email" class="form-control">
                                    @error('email')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 mb-4">
                                    <label for="">user role</label>
                                    @php
                                        // dd(old('role_id'));
                                    @endphp
                                    <select name="role_id" class="form-control">
                                        <option value="">select role</option>
                                        @foreach ($roles as $role)
                                            <option {{$role->serial == old('role_id')?'selected':''}} value="{{ $role->serial }}">
                                                {{ $role->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 mb-4">
                                    <label for="">password</label>
                                    <input type="password" value="12345678" name="password" class="form-control">
                                    @error('password')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 mb-4">
                                    <label for="">retype password</label>
                                    <input type="password" value="12345678" name="password_confirmation" class="form-control">
                                </div>
                                <div class="form-group col-12 mb-4">
                                    <label for="">Image</label>
                                    <input accept=".jpg,.jpeg,.png" type="file" name="photo" class="form-control">
                                    @error('photo')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
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

