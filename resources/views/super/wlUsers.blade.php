@extends('layouts.layout')
<div class="wrapper">
    @section('content')

    <!-- iniContent Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-12">
                    <div class="col-sm-12">
                        <h1 align="center" class="m-0 text-dark">Warriors Users</h1>
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->

                <div class="row mb-2">
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm">
                            <input
                                class="form-control"
                                type="search"
                                placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-2">
                        <div class="input-group input-group-sm">
                            <a href="/wlusercreate">
                                <button class="btn btn-success">
                                    <i class="fas fa-user-plus"></i>
                                    Create user
                                </button>
                            </a>
                        </div>
                    </div>

                    <!-- /.col -->
                    <div class="col-sm-6"></div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>id</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                    </tr>

                                    @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('wluserEdit',$usuario->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button class="btn btn-danger" href="#">
                                                <i class="fas fa-trash"></i>
                                            </button>

                                            @csrf @method('DELETE')

                                            <!--<button class="btn btn-danger" data-toggle="modal"
                                            data-target="#exampleModalLong">Eliminar</button>-->

                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                {!! $usuarios->links() !!}

                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- /.card -->
                    </div>

                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->
@endsection