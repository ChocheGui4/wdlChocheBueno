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
                        class="btn pull-right hidden-sm-down"
                        style="background: #383F49; color: white">
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
                            <!-- <div class="container">
                                <table id="task" class="table table-hover table-condensed">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Maker</th>
                                        
                                    </tr>
                                    </thead>
                                </table>
                            </div> -->
                            
                            <div class="card" >
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table id="task" class="display nowrap table table-hover table-striped table-bordered dataTable table-sm"
                                                cellspacing="0"
                                                width="100%"
                                                role="grid"
                                                aria-describedby="example23_info"
                                                style="width: 100%;">
                                            <thead>
                                            <tr>
                                                
                                                <th>Maker</th>
                                                <th>Processor</th>
                                                <th>Memory (GB)</th>
                                                <th>Disc</th>
                                                @if($name->name=="Warriors Defender Mail")
                                                    <th
                                                        class="sorting"
                                                        tabindex="0"
                                                        aria-controls="example23"
                                                        rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 105px;">Storage mail</th>
                                                @endif
                                                @if($name->name=="Warriors Defender Storage")
                                                    <th
                                                        class="sorting"
                                                        tabindex="0"
                                                        aria-controls="example23"
                                                        rowspan="1"
                                                        colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 105px;">Storage</th>
                                                @endif
                                                <th>Number users</th>
                                                <th>Year</th>
                                                <th>Offer</th>
                                                <th>&nbsp</th>
                                                
                                                
                                            </tr>
                                            </thead>
                                        </table>
                                        <input hidden type="text" id="mail" value="{{$name->name}}">
                                        <!-- <div id="example23_wrapper" class="dataTables_wrapper">
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
                                                                </td>
                                                            </tr>
                                                        </div>
                                                    @endforeach 
                                                </tbody>
                                            </table>                            
                                        </div> -->
                                        <!-- <div id="example23_wrapper" class="dataTables_wrapper">
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
                                                            class="sorting"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 106px;">Maker</th>
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
                                                        @if($name->name=="Warriors Defender Mail")
                                                        <th
                                                            class="sorting"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 105px;">Storage mail</th>
                                                        @endif
                                                        @if($name->name=="Warriors Defender Storage")
                                                        <th
                                                            class="sorting"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 105px;">Storage</th>
                                                        @endif
                                                        <th
                                                            class="sorting"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 205px;">Number users </th>
                                                        <th
                                                            class="sorting"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 105px;">Years</th>
                                                        <th
                                                            class="sorting"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 105px;">Offer</th>
                                                        
                                                        <th
                                                            style="width: 51px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)
                                                        <div>
                                                            <tr role="row" class="odd">
                                                                
                                                                <td id="hu{{$i}}"><strong> {{ $product->maker }} </strong></td>
                                                                <td><strong> {{ $product->processor }} </strong></td>
                                                                <td><strong> {{ $product->memory }} </strong></td>
                                                                <td><strong> {{ $product->disc }}</strong></td>
                                                                @if($name->name=="Warriors Defender Mail")
                                                                <td><strong> {{ $product->storagem }}</strong></td>
                                                                <td><strong> {{ $product->numberuser }}</strong></td>
                                                                @endif
                                                                @if($name->name=="Warriors Defender Storage")
                                                                <td><strong> {{ $product->storage }}</strong></td>
                                                                <td><strong> {{ $product->numberstorage }}</strong></td>
                                                                @endif
                                                                @if($name->name!="Warriors Defender Mail" & $name->name!="Warriors Defender Storage")
                                                                <td><strong> {{ $product->numberuser }}</strong></td>
                                                                @endif
                                                                <td><strong> {{ $product->year }}</strong></td>
                                                                <td><strong> {{ $product->offer }}</strong></td>
                                                                <td>
                                                                    <a id="delete" style="background: #DD1E00; color: white;" class="btn" href="{{ route('productDelete',$product->id)}}">
                                                                        <i class="fa fa-trash"></i>
                                                                    </a>
                                                                    @csrf @method('DELETE')
                                                                </td>
                                                            </tr>
                                                        </div>
                                                    @endforeach 
                                                </tbody>
                                            </table>                            
                                        </div> -->
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
@endsection
@section('file_js')

<script>
    $(document).ready(function() {
        var mail = $('#mail').val();
        
        if(mail=="Warriors Defender Mail"){
            oTable = $('#task').DataTable({
                // processing: true,
                serverSide: true,
                ajax: "{{ route('datatableproducts',"$prodid") }}",
                columns: [
                    {data: 'maker'},
                    {data: 'processor'},
                    {data: 'memory'},
                    {data: 'disc' },
                    {data: 'storagem' },
                    {data: 'numberuser' },
                    {data: 'year' },
                    {data: 'offer' },
                    {data: 'btn' },
                ]
            });
        }else if(mail=="Warriors Defender Storage"){
            oTable = $('#task').DataTable({
                // processing: true,
                serverSide: true,
                ajax: "{{ route('datatableproducts',"$prodid") }}",
                columns: [
                    {data: 'maker'},
                    {data: 'processor'},
                    {data: 'memory'},
                    {data: 'disc' },
                    {data: 'storage' },
                    {data: 'numberstorage' },
                    {data: 'year' },
                    {data: 'offer' },
                    {data: 'btn' },
                ]
            });
        }else{
            oTable = $('#task').DataTable({
                // processing: true,
                serverSide: true,
                ajax: "{{ route('datatableproducts',"$prodid") }}",
                columns: [
                    {data: 'maker'},
                    {data: 'processor'},
                    {data: 'memory'},
                    {data: 'disc' },
                    {data: 'numberuser' },
                    {data: 'year' },
                    {data: 'offer' },
                    {data: 'btn' },
                ]
            });
        }
        
    });
    // $(document).ready(function() {
    //     $('#table').DataTable();
    // });
 </script>
@endsection