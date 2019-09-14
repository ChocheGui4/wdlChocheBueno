@extends('layouts.wdlicenciamiento') 
@section('content')
    <div class="wrapper">
        <div class="row page-titles">
            <div class="col-md-8  align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Add Products</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Product</li>
                    <li class="breadcrumb-item active">Show</li>
                </ol>
            </div>
            <div class="col-md-4 ">
                <div class="col-md-12 align-self-center">
                    <a
                        href="/products"
                        class="btn pull-right hidden-sm-down btn-primary">
                        <i class="mdi mdi-arrow-left"></i>
                        Back</a>
                </div>
                <div class="col-md-9 align-self-center"></div>
            </div>
        </div>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row el-element-overlay">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="card" style="background: #89CBB8;">
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <div id="example23_wrapper" class="dataTables_wrapper">
                                            <table
                                                id="table"
                                                class="display nowrap table table-hover table-striped table-bordered dataTable
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
                                                            style="width: 140px;">product</th>
                                                        <th
                                                            class="sorting"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 206px;">Maker</th>
                                                        <th
                                                            class="sorting"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 105px;">Processor</th>
                                                        <th
                                                            class="sorting"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 105px;">Memory</th>
                                                        <th
                                                            class="sorting"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 105px;">Disc</th>
                                                        <th
                                                            style="width: 51px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)
                                                         
                                                        <div>
                                                            <tr role="row" class="odd">
                                                                
                                                                <td><strong> {{ $product->name }} </strong></td>
                                                                <td><strong> {{ $product->namem }} </strong></td>
                                                                <td><strong> {{ $product->namep }} </strong></td>
                                                                <td><strong> {{ $product->sizem }} GB</strong></td>
                                                                <td><strong> {{ $product->typed }} </strong></td>
                                                                <td>
                                                                    <a class="btn btn-warning" href="#">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                    @csrf @method('DELETE')
                                                                    <!--<button class="btn btn-danger" data-toggle="modal"
                                                                    data-target="#exampleModalLong">Eliminar</button>-->
                                                                </td>
                                                                
                                                            </tr>
                                                        </div>
                                                                
                                                    @endforeach 
                                                </tbody>
                                            </table>                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!--Inicia la ventana modal-->
   
    <!--Termina la ventana modal-->
@endsection
@section('file_js')

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
 </script>
@endsection