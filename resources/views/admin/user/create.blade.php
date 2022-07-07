@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create user</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.user.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Name
                                    <input type="text" class="form-control" name="name" placeholder="Enter the user name">
                                </label>
                                @error('name')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email
                                    <input type="email" class="form-control" name="email" placeholder="Enter the user email">
                                </label>
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label>Password--}}
{{--                                    <input type="password" class="form-control" name="password" placeholder="Enter the user password">--}}
{{--                                </label>--}}
{{--                                @error('password')--}}
{{--                                <div class="text-danger">{{$message}}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
                            <div class="form-group w-25">
                                <div class="form-group">
                                    <label>Select role
                                        <select name="role" class="form-control">
                                            @foreach($roles as $id => $role)
                                                <option value="{{$id}}"
                                                    {{$id == old('role') ? 'selected' : ''}}>
                                                    {{$role}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Add">
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
