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
                    <li class="breadcrumb-item active">Company</li>
                    <li class="breadcrumb-item active">Branch</li>
                    <li class="breadcrumb-item active">Product</li>
                    <li class="breadcrumb-item active">Add</li>
                </ol>
            </div>
            <div class="col-md-4 ">
                <div class="col-md-12 align-self-center">
                    <a
                        href="{{ route('showBranchesProducts',[$company,$branch])}}"
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
                        @foreach ($products as $product)
                        <div class="col-md-3">
                            <div class="card">
                                <img
                                    class="card-img-top img-responsive"
                                    src="{{ asset('bundle/assets/images/users/antivirus.png') }}"
                                    alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">{{ $product->name}}</h4>
                                    
                                    <input hidden="hidden" type="textarea" id="name{{ $i }}" value="{{$product->name}}">
                                    <input hidden="hidden" type="text" id="description{{ $i }}" name="description" value="{{ $product->description }}">
                                    <input hidden="hidden" type="text" id="t1{{ $i }}" name="t1" value="{{$product->time}}">
                                    <input hidden="hidden" type="text" id="p1{{ $i }}" name="p1" value="{{$product->period}}">
                                    <input hidden="hidden" type="text" id="user{{ $i }}" name="p1" value="{{$product->users}}">
                                    <input hidden="hidden" type="text" id="s1{{ $i }}" name="s1" value="{{$product->storage}}">
                                    <input hidden="hidden" type="text" id="us1{{ $i }}" name="us1" value="{{$product->unitstorage}}">
                                    <a
                                        href="#"
                                        id="wdngbutton{{ $i }}"
                                        class="btn btn-primary"
                                        onClick="button('#description{{$i}}','#name{{$i}}','#t1{{$i}}','#p1{{$i}}','#user{{$i}}','#s1{{$i}}','#us1{{$i}}','{{$product->acquisition_types_id}}','{{$product->id}}')"
                                        data-toggle="modal"
                                        data-target="#WDNGmodal"
                                        >Go</a>
                                        <label hidden>{{$i++}}</label> 
                                        
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">WDNG</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <form
                    action="{{ route('showBranchesAddProduct',[$company,$branch])}}"
                    method="POST"
                    autocomplete="off">
                    @csrf

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div align="center">
                                    <h3 id="title" class="modal-title">fff</h3>
                                    <input hidden id="namename" name="name" type="text">
                                    <input hidden id="desc1" name="description" type="text">
                                    <br>
                                </div>
                                <div>
                                    <small id="desc" value="Hola">Little description: Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit. Sed fugit quas, qui ex repellat a, ratione sint provident
                                        minima facere.</small>            
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <br>
                                <strong>Type</strong> 
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-2">
                                <br>
                                <div class="form-group">
                                    <select id="type" name="type" class="form-control">
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <br>
                                <strong>Time</strong> 
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <br>
                                <div class="form-group">
                                    <select id="time" name="time" class="form-control">
                                        <option >1</option>
                                        <option >2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option >5</option>
                                    </select>
                                </div>
                            </div>   
                            <div class="col-md-1 col-sm-1 col-xs-1"> <br> <strong id="dm">years</strong></div>
                            <div class="col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <br>
                                <strong>Number users</strong>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <br>
                                <div class="form-group">
                                    <select id="users" name="numberusers" class="form-control">
                                        <option >15</option>
                                        <option >100</option>
                                        <option >200</option>
                                        <option >300</option>
                                        <option >400</option>
                                        <option >500</option>
                                        <option >600</option>
                                        <option >700</option>
                                        <option >800</option>
                                        <option >900</option>
                                        <option >1000</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div id="sto" class="row">
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <br>
                                <strong>Storage</strong> 
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-2">
                                <br>
                                <div class="form-group">
                                    <select id="storage1" name="storage" class="form-control">
                                        <option >0</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <br>
                                <strong id="storage2" >GB</strong> 
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