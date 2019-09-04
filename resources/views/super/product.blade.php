@extends('layouts.wdlicenciamiento') 
@section('content')
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

            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <a
                        href="/home"
                        class="btn pull-right hidden-sm-down btn-primary">
                        <i class="mdi mdi-arrow-left"></i>
                        Dashboard</a>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-7">

                    <a
                        href="#"
                        data-toggle="modal"
                        data-target="#WDNGcreate"
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
                        @csrf
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
                                                        id="edit{{ $i }}"
                                                        class="btn default btn-outline image-popup-vertical-fit"  
                                                        data-toggle="modal"
                                                        data-target="#WDNGmodal">
                                                        <i class="mdi mdi-account-edit"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn default btn-outline" 
                                                    href="{{ route('productDelete',$product->id)}}">
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
                                        <h3 id="h3{{ $i }}" class="box-title">{{ $product->name }}
                                        </h3>
                                        <small id="sm{{ $i++ }}">{{ $product->description }}</small>
                                        
                                        
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
    <!--Inicia la ventana modal-->
    <div
        id="WDNGmodal"
        class="modal fade"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">Warriors Defender</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <form
                    action="{{ route('productEdit')}}"
                    method="POST"
                    autocomplete="off">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3 class="modal-title">Product Name</h3>
                                <div class="form-group">
                                    <input id="name" type="text" name="name" class="form-control" required>
                                </div>            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br>
                                <h3>Description</h3> 
                                <div class="form-group">
                                    <textarea id="description" name="description" id="" class="form-control" rows="5" cols="2" required>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button
                            id="click"
                            type="submit"
                            class="btn btn-danger waves-effect waves-light">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Termina la ventana modal-->


    <!--Inicia la ventana modal-->
    <div
        id="WDNGcreate"
        class="modal fade"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">Warriors Defender</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <form
                    action="{{ route('productCreate')}}"
                    method="POST"
                    autocomplete="off">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3 class="modal-title">Product Name</h3>
                                <div class="form-group">
                                    <input id="name" type="text" name="name" 
                                    class="form-control" 
                                    required 
                                    placeholder="Warriors Defender Product">
                                </div>            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br>
                                <h3>Description</h3> 
                                <div class="form-group">
                                    <textarea id="description" 
                                    name="description" 
                                    class="form-control" 
                                    rows="5" cols="2" required>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button
                            id="click"
                            type="submit"
                            class="btn btn-danger waves-effect waves-light">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Termina la ventana modal-->
@endsection