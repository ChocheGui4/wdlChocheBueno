@extends('layouts.wdlicenciamiento') 
@section('content')
    <div class="wrapper">
        <div class="row page-titles">
            <div class="col-md-7  align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Products</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    
                    <li class="breadcrumb-item active">Product</li>
                </ol>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 align-self-center">
                <a
                    href="#"
                    data-toggle="modal"
                    data-target="#WDNGmodal"
                    class="btn pull-right hidden-sm-down float-right"
                    style="background: #31B90C; color: white;">
                    <i class="mdi mdi-plus-circle"></i>
                    Add product</a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 align-self-center">
                <a
                    href="/home"
                    class="btn pull-right hidden-sm-down btn-primary float-left"
                    style="background: #383F49; color: white">
                    <i class="mdi mdi-arrow-left"></i>
                    Dashboard</a>
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
            <div class="content-header">
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
                                                        id="edit{{ $i }}"
                                                        class="btn default btn-outline image-popup-vertical-fit"  
                                                        onClick="newmetod('#edit{{$i}}','#h3{{$i}}','#sm{{$i}}');" 
                                                        data-toggle="modal"
                                                        data-target="#WDNGcreate">
                                                        <i class="mdi mdi-plus-circle"></i>
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
                                                        href="{{ route('productsShowSpecific',$product->id)}}">
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
                    action="{{ route('productCreate')}}"
                    method="POST"
                    autocomplete="off"
                    enctype="multipart/form-data"
                    novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3 class="modal-title">Product Name</h3>
                                <div class="form-group">
                                    <div class="controls">
                                        <input 
                                        id="productnameuc"                            
                                        onkeyup="ucwords(this,'#productnameuc');"
                                        type="text" 
                                        name="name" 
                                        class="form-control" 
                                        value="{{ old('name')}}"
                                        required 
                                        minlength="3"
                                        maxlength="60"
                                        placeholder="Product title"
                                        data-validation-required-message="This field is required">
                                    </div>
                                </div>            
                                <span class="invalid-feedback" role="alert" style="color:red;">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br>
                                <h3>Description</h3> 
                                <div class="form-group">
                                    <div class="controls">
                                        <textarea 
                                            name="description" 
                                            class="form-control" 
                                            rows="5" 
                                            cols="2" 
                                            value="{{ old('description')}}"
                                            required
                                            minlength="10"
                                            maxlength="120"
                                            placeholder="Product description"
                                            data-validation-required-message="This field is required"></textarea>
                                    </div>
                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br>
                                <h3>Add image</h3> 
                                <div class="form-group">
                                    <div class="controls">
                                    <input type="file" name="urlimg" required accept="image/jpeg,.png">
                                    </div>
                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                        <strong>{{ $errors->first('companyimg') }}</strong>
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button
                            id="click"
                            type="submit"
                            style="background: #b60303; color: white;"
                            class="btn waves-effect waves-light">Save product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Termina la ventana modal-->


    <!--Inicia la ventana modal de agrgar productos específicos-->
    <div
        id="WDNGcreate"
        class="modal fade"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 id="htitle" class="modal-title">Warriors Defender</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <form
                    action="{{ route('productAddSpecific')}}"
                    method="POST"
                    autocomplete="off">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3 class="modal-title">Characteristics</h3>
                                <div class="form-group">
                                    <input hidden id="name" type="text"
                                    name="name"
                                    class="form-control"required
                                    placeholder="Warriors Defender Product">
                                </div>            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Maker</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="maker" class="form-control">
                                                @foreach ($makers as $maker)
                                                    <option>{{$maker->namem}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Processor</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="processor" class="form-control">
                                                @foreach ($processors as $processor)
                                                    <option>{{$processor->namep}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Memory</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="memory" class="form-control">
                                                @foreach ($memories as $memory)
                                                    <option>{{$memory->sizem}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Disc</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="disc" class="form-control">
                                                @foreach ($discs as $disc)
                                                    <option>{{$disc->typed}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div id="numuser"  class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Number users</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="numberuser" class="form-control">
                                                @foreach ($numberusers as $nuser)
                                                    <option>{{$nuser->user}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Years</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="year" class="form-control">
                                                @foreach ($years as $year)
                                                    <option>{{$year->year}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div id="storagemail" class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Storage mail</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="storagem" class="form-control">
                                                @foreach ($mails as $mail)
                                                    <option>{{$mail->storagem}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div id="storage"  class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Storage</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="storage" class="form-control">
                                                @foreach ($storage as $sto)
                                                    <option>{{$sto->storage}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            
                            <div id="numberstorage"  class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Number users storage</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="numberstorage" class="form-control">
                                                @foreach ($nus as $nuss)
                                                    <option>{{$nuss->userstorage}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div id="numberstorage"  class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Offer</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="offer" class="form-control">
                                                
                                                <option>Site</option>
                                                <option>Cloud</option>
                                                
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button
                            id="click"
                            type="submit"
                            style="background: #b60303; color: white;"
                            class="btn waves-effect waves-light">Save product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Termina la ventana modal-->
@endsection