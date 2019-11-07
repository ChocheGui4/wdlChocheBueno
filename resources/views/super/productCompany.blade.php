@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">
    <div class="row page-titles">
        <div class="col-md-9  align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">{{$brans->branchname}}</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/companies">Company</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('showBranches',$company)}}">Branch</a>
                </li>
                <li class="breadcrumb-item active">Products</li>
            </ol>
        </div>

        <div class="col-md-3 ">
            <div class="col-md-12 align-self-center">
                <a
                    href="/companies"
                    class="btn pull-right hidden-sm-down"
                    style="background: #383F49; color: white">
                    <i class="mdi mdi-arrow-left"></i>
                    Back</a>
            </div>
            <div class="col-md-12 align-self-center">
                
                <!-- <a
                    href="{{ route('showBranchesCreateProduct',[$company,$branches])}}"
                    class="btn pull-right hidden-sm-down"
                    style="background: #31B90C; color: white;">
                    <i class="mdi mdi-plus-circle"></i>
                    Add product</a> -->

            </div>

        </div>

    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p id="alert1">{{ $message }}</p>
        </div>
    @endif
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row el-element-overlay">

                    @foreach ($products as $product)
                    <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img 
                                        src="{{ Storage::url($product->urlimg)}}"
                                        alt="user">
                                    
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <!-- <li>
                                                <a
                                                    class="btn default btn-outline image-popup-vertical-fit"
                                                    href="../plugins/images/users/1.jpg">
                                                    <i class="mdi mdi-account-edit"></i>
                                                </a>
                                            </li> -->
                                            <li>
                                                <a id="" class="btn default btn-outline" 
                                                href="{{ route('deleteBranchProduct',[$company,$branches, $product->id, $product->acid])}}">
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
                    <div class="col-lg-3 col-md-3 col-ms-3 col-xs-3">
                        <div class="btn-group dropleft">
                        <button class="btn btn-secondary dropdown-toggle pull-right hidden-sm-down" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Add Product
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            @foreach ($productos as $prod)
                                <li><a class="dropdown-item" href="{{ route('AddCompanyProduct',[$company, $branches,$prod->id])}}">{{$prod->name}}</a></li>                          
                            @endforeach  
                        </div>
                    </div>    
                </div>

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