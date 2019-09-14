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
                        href="{{ route('showBranchesProducts',[$company,$branches])}}"
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
                                                        @switch(true)
                                                            @case($product->idp == 1) 
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
                                                                @break
                                                        @endswitch
                                                    @endforeach 
                                                </tbody>
                                            </table>                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="card">
                                @if($product->idp==1)
                                    {{$product->idp}}, {{$product->idm}}, {{$product->idpr}}
                                    <img
                                        class="card-img-top img-responsive"
                                        src="{{ asset('bundle/assets/images/LogosWD/WDNG.png') }}"
                                        alt="Card image cap">
                                @endif
                                @if($product->idp==2)
                                    {{$product->idp}}, {{$product->idm}}, {{$product->idpr}}
                                    <img
                                        class="card-img-top img-responsive"
                                        src="{{ asset('bundle/assets/images/LogosWD/WDF.png') }}"
                                        alt="Card image cap">
                                @endif
                                <div class="card-block">
                                    <p class="card-text">
                                        {{ $product->namem}} <strong>|</strong> {{ $product->namep}}
                                    </p>
                                    
                                    <input hidden="hidden" id="valcompany" type="text" value="{{$company}}">
                                    <input hidden="hidden" id="valbranch" type="text" value="{{$branches}}">
                                    <input hidden="hidden" type="textarea" id="name{{ $i }}" value="{{$product->name}}">
                                    <input hidden="hidden" type="text" id="description{{ $i }}" name="description" value="{{ $product->description }}">
                                    <input hidden="hidden" type="text" id="t1{{ $i }}" name="t1" value="{{$product->description}}">
                                    <input hidden="hidden" type="text" id="p1{{ $i }}" name="p1" value="{{$product->offer}}">
                                    <input hidden="hidden" type="text" id="user{{ $i }}" name="p1" value="{{$product->namem}}">
                                    <input hidden="hidden" type="text" id="s1{{ $i }}" name="s1" value="{{$product->valuem}}">
                                    <input hidden="hidden" type="text" id="us1{{ $i }}" name="us1" value="{{$product->namep}}">
                                    <a
                                        href="#"
                                        id="wdngbutton{{ $i }}"
                                        class="btn btn-primary"
                                        
                                        data-toggle="modal"
                                        data-target="#WDNGmodal"
                                        >Go</a>
                                        <label hidden>{{$i++}}</label> 
                                        
                                </div>
                            </div>
                        </div> -->
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
                    action="{{ route('showBranchesAddProduct',[$company,$branches])}}"
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
@section('file_js')

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
 </script>
@endsection