@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">
    <div class="row page-titles">
        <div class="col-md-8  align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Products</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                
                <li class="breadcrumb-item active">Product</li>
            </ol>
        </div>

        <div class="col-md-4 ">
            <div class="col-md-12 align-self-center">
                <a
                    href="#"
                    class="btn pull-right hidden-sm-down btn-primary">
                    <i class="mdi mdi-arrow-left"></i>
                    Dashboard</a>
            </div>
            <div class="col-md-7 align-self-center">

                <a
                    href="#"
                    class="btn pull-right hidden-sm-down btn-success">
                    <i class="mdi mdi-plus-circle"></i>
                    Add product</a>

            </div>

        </div>

    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row el-element-overlay">

                    @foreach ($products as $product)
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('bundle/assets/images/users/antivirus.png') }}" alt="user">
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li>
                                                <a
                                                    class="btn default btn-outline image-popup-vertical-fit"
                                                    href="../plugins/images/users/1.jpg">
                                                    <i class="mdi mdi-account-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn default btn-outline" href="javascript:void(0);">
                                                    <i class="mdi mdi-close-circle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="btn default btn-outline"
                                                    href="#">
                                                    <i class="mdi mdi-arrow-right-bold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{ $product->name }}
                                    </h3>
                                    
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

    </div>
    <!-- /.content-wrapper -->
    <!--Inicia la ventana modal-->

</div>
@endsection