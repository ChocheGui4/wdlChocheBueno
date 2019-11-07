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
            <div class="col-md-5 col-sm-5 col-xs-5 align-self-center">
                <a
                    href="#"
                    data-toggle="modal"
                    data-target="#WDNGmodal"
                    class="btn pull-right hidden-sm-down float-right"
                    style="background: #31B90C; color: white;">
                    <i class="mdi mdi-plus-circle"></i>
                    Add product</a>
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
            <div id="update" class="content-header">
                <div class="container-fluid">
                    <div class="row el-element-overlay">
                        @csrf
                        <!-- @foreach ($products as $product)
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="card">
                                <div class="el-card-item">
                                
                                    <div class="el-card-avatar el-overlay-1">
                                        <img
                                            class="card-img-top img-responsive"
                                            src="{{ Storage::url($product->urlimg)}}"
                                            style="height:190px;"
                                            alt="Card image cap">
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
                                                    <a 
                                                        id="down"
                                                        class="btn default btn-outline" 
                                                        href="{{ route('productDeleteGeneral',$product->id)}}">
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
                                        
                                        
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach -->                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="table-responsive">
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
                                                            style="width: 300px;">Name</th>
                                                        <th
                                                            class="sorting_asc"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width:400px;">Description</th>
                                                        <th
                                                            style="width: 201px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)
                                                        <div>
                                                            <tr role="row" class="odd">
                                                                
                                                                <td><strong> {{ $product->name }} </strong></td>
                                                                <td><strong> {{ $product->description }} </strong></td>
                                                                <td align="center" >
                                                                    
                                                                    <a
                                                                        id="edit{{ $i }}"
                                                                        class="btn image-popup-vertical-fit"  
                                                                        style="background: #31B90C; color: white;"
                                                                        onClick="newmetod('#edit{{$i}}','#h3{{$i}}','#sm{{$i}}');" 
                                                                        data-toggle="modal"
                                                                        data-target="#WDNGcreate">
                                                                        <i class="mdi mdi-plus-circle"></i>
                                                                    </a>
                                                                    @if($ac!=null)
                                                                        @foreach($ac as $a)
                                                                            
                                                                            @if($product->id == $a->id )
                                                                                <input  hidden id="in{{$count}}" type="text" value="{{$a->id}}">
                                                                                <label  hidden >p antes de 0 pero coincidió: {{$p}} </label>
                                                                                <label  hidden >{{$p=1}}</label>
                                                                                @break
                                                                            
                                                                            @elseif($p == $le)
                                                                                <input  hidden id="in{{$count}}" type="text" value="0">
                                                                                <label  hidden >id: {{$a->id}} </label>
                                                                                <label  hidden >p antes de 0: {{$p}} </label>
                                                                                <label  hidden >le: {{$le}}</label>
                                                                                <label hidden >{{$p=1}}</label>
                                                                                @break
                                                                            @endif
                                                                                
                                                                            
                                                                            <input hidden value="{{$p++}}">
                                                                                
                                                                        @endforeach
                                                                        <!-- valooooor: {{$p}} -->
                                                                        
                                                                    @endif

                                                                    @if($le==0)
                                                                        <input hidden id="in{{$count}}" type="text" value="0">
                                                                    @endif
                                                                    
                                                                    
                                                                    
                                                                    <a 
                                                                        id="down"
                                                                        onClick="inputs('#in{{$count}}');" 
                                                                        class="btn" 
                                                                        style="background: #b60303; color: white;"
                                                                        href="{{ route('productDeleteGeneral',$product->id)}}">
                                                                        <i class="mdi mdi-close-circle"></i>
                                                                    </a>
                                                                    <a
                                                                        class="btn"
                                                                        style="background: #00A7D9; color: white"
                                                                        href="{{ route('productsShowSpecific',$product->id)}}">
                                                                        <i class="mdi mdi-arrow-right-bold"></i>
                                                                    </a>
                                                                    <label hidden>{{$count++}}</label>
                                                                    @csrf @method('DELETE')
                                                                </td>
                                                            </tr>
                                                        </div>
                                                        <h3 hidden id="h3{{ $i }}" class="box-title">{{ $product->name }}</h3>
                                                        <small hidden id="sm{{ $i }}">{{ $product->description }}</small>
                                                        <p hidden>{{$i++}}</p>
                                                    @endforeach 
                                                </tbody>
                                            </table>                            
                                        </div>
                                    </div>
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
                    id="productcreate-form"
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
                                            id="description"
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
                                    <input type="file" id="urlimg" name="urlimg" required accept="image/jpeg,.png">
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
                    id="productadd-form"
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