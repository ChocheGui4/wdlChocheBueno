@extends('layouts.wdlicenciamiento') 
@section('content')
    <div class="wrapper">
        <div class="row page-titles">
            <div class="col-md-7 col-sm-7  align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Products</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/home">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/customers">Company</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/customers">Branch</a>
                    </li>
                    <li class="breadcrumb-item active">Add products</li>
                </ol>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-5 align-self-center">
                <div class="col-md-12 col-sm-7 col-xs-7 align-self-center">
                    <a
                        href="{{ route('showBranchesProducts',[$company,$branch])}}"
                        class="btn pull-right hidden-sm-down btn-primary float-right"
                        style="background: #383F49; color: white">
                        <i class="mdi mdi-arrow-left"></i>
                        Back</a>
                </div>

            </div>
        </div>
        <!--Notificación-->
        <div class="jq-toast-wrap top-right">
            <div class="jq-toast-single jq-has-icon jq-icon-success" style="text-align: left; display: none;">
                <span class="jq-toast-loader jq-toast-loaded" style="-webkit-transition: width 3.1s ease-in;                       -o-transition: width 3.1s ease-in;                       transition: width 3.1s ease-in;                       background-color: #ff6849;"></span><span class="close-jq-toast-single">×</span><h2 class="jq-toast-heading">Welcome to Monster admin</h2>Use the predefined ones, or specify a custom position object.</div></div>
        <!--Notificación-->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div id="update" class="content-header">
                <div class="container-fluid">
                    <div class="row el-element-overlay">
                        @csrf
                        @foreach ($products as $product)
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="card">
                                <div class="el-card-item">
                                <!-- <div class="el-card-item" style="background: #FFCBCB;" > -->
                                <!-- <div class="el-card-item" style="background: #FFD3D3;" > -->
                                <!-- <div class="el-card-item" style="background: #DFD8F8;" style="border-color:#876FD1; border-style:solid; border-width:1px;"> -->
                                    <div class="el-card-avatar el-overlay-1">
                                        <img
                                            class="card-img-top img-responsive"
                                            src="{{ Storage::url($product->urlimg)}}"
                                            style="height:190px;"
                                            alt="Card image cap">
                                        <!-- <img src="{{ asset('bundle/assets/images/users/antivirus.png') }}" alt="user"> -->
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                               
                                                <li>
                                                    <a
                                                        class="btn default btn-outline"
                                                        href="{{ route('AddCompanyProduct',[$company, $branch,$product->id])}}">
                                                        <i class="mdi mdi-arrow-right-bold"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                        <h3 id="h3{{ $i }}" class="box-title">{{ $product->name }}</h3>
                                        <small id="sm{{ $i }}">{{ $product->description }}</small>
                                        {{$i++}}
                                        
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
    <!--Inicia la ventana modal para agregar productos generales-->
    
    <!--Termina la ventana modal-->


    <!--Inicia la ventana modal de agrgar productos específicos-->
    
    <!--Termina la ventana modal-->
@endsection