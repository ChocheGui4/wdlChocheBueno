@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">
    <div class="row page-titles">
        <div class="col-md-6  align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Users</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">User</li>
                
            </ol>
        </div>
        <div class="col-md-2 align-self-center">

           

        </div>
        <!-- <div class="col-sm-2 align-self-center">
            <div class="input-group input-group-sm">
                <a href="{{ route('customerCreate')}}">
                    <button class="btn btn-danger">
                        <i class="fa fa-user-plus"></i>
                        Create customer
                    </button>
                </a>
            </div>
        </div>
        <div class="col-sm-2 align-self-center">
            <div class="input-group input-group-sm">
                <a href="{{ route('companyCreate')}}">
                    <button class="btn btn-primary">
                        <i class="fa fa-user-plus"></i>
                        Create company
                    </button>
                </a>
            </div>
        </div> -->
    </div>
    <!-- iniContent Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    
        <div class="container-fluid">
            <!---->
            <div class="card">
                <div class="card-block">

                    <div class="table-responsive m-t-40">
                        <div id="example23_wrapper" class="dataTables_wrapper">
                            <table
                                
                                id="table"
                                class="display nowrap table table-hover table-striped table-bordered dataTable table-sm"
                                cellspacing="0"
                                width="100%"
                                role="grid"
                                aria-describedby="example23_info"
                                style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th
                                            class="sorting_asc"
                                            tabindex="0"
                                            aria-controls="example23"
                                            rowspan="1"
                                            colspan="1"
                                            aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 10px;">id</th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="example23"
                                            rowspan="1"
                                            colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="width: 20px;">Role</th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="example23"
                                            rowspan="1"
                                            colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="width: 105px;">Email</th>
                                        <th
                                            
                                            
                                            style="width: 51px;"></th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr role="row" class="odd">
                                        <td><strong>{{ ++$i }}</strong></td>
                                        <td><strong>{{ $usuario->role }}</strong></td>
                                        <td><strong>{{ $usuario->email }}</strong></td>
                                        <td>
                                            <a class="btn"
                                                href="{{ route('userEdit',$usuario->id) }}"
                                                style="background: #31B90C; color: white;">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a
                                                id="deleteuser"
                                                href="{{ route('userEdit',$usuario->id) }}"
                                                style="background: #DD1E00; color: white;" 
                                                class="btn">
                                                <i class="fa fa-trash"></i>
                                            </a>

                                            @csrf @method('DELETE')

                                            <!--<button class="btn btn-danger" data-toggle="modal"
                                            data-target="#exampleModalLong">Eliminar</button>-->

                                        </td>
                                        
                                    </tr>
                                @endforeach 
                                </tbody>
                            </table>                            
                        </div>
                    </div>
                </div>
            </div>
            <!---->

            <!-- /.row -->

            <div class="row mb-2">
                <div class="col-sm-4">
                    
                </div>
                <!-- /.col -->
                <div class="col-sm-6"></div>
                
            </div>
            <!-- /.row -->
        </div>
        
    </div>
    <!-- /.content-wrapper -->

    <div class="modal fade" id="confirm" style="display: none;" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">
                        <i class="fas fa-exclamation-triangle deletet"></i>Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
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

@section('file_js')

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
 </script>
@endsection