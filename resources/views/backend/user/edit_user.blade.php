@extends('admin.admin_master')

@section('admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->

            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Update User</h4>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="POST" action="{{ route('users.update', $editData->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Role</h5>
                                                        <div class="controls">
                                                            <select name="usertype" id="usertype" class="form-control">
                                                                <option value="" selected disabled>Select Role</option>
                                                                <option value="Admin"
                                                                    {{ $editData->usertype == 'Admin' ? 'selected' : '' }}>
                                                                    Admin
                                                                </option>
                                                                <option value="User"
                                                                    {{ $editData->usertype == 'User' ? 'selected' : '' }}>
                                                                    User</option>

                                                            </select>
                                                            @error('usertype')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Name</h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $editData->name }}">
                                                            @error('name')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User Email <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control"
                                                                value="{{ $editData->email }}">
                                                            @error('email')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">


                                                </div>
                                            </div>



                                        </div>
                                    </div>


                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-rounded btn-info mb-5">Update</button>

                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>

        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
