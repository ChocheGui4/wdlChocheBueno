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
                        <h1 align="center" class="m-0 text-dark">Users</h1>
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
                    <!-- /.col -->
                    <div class="col-sm-6"></div>
                    <div class="col-sm-2">
                        <div class="input-group input-group-sm">
                            <a href="/usercreate">
                                <button class="btn btn-success">
                                    <i class="fas fa-user-plus"></i>
                                    Create user
                                </button>
                            </a>
                        </div>
                    </div>
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
                                        <td>{{ $usuario->role }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('userEdit',$usuario->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a id="deleteuser"  href="{{ route('userEdit',$usuario->id) }}" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>

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

    <div class="modal fade" id="confirm" style="display: none;" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">
                        <i class="fas fa-exclamation-triangle deletet"></i>Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">   </span>
                    </button>
                </div>
                <div align="center" class="modal-body">
                    <h5>Are you sure?</h5>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>
<!-- ./wrapper -->
@endsection