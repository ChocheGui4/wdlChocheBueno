@extends('layouts.wdlicenciamiento') 
@section('content')
    <div class="wrapper">
        <div class="row page-titles">
            <div class="col-md-8  align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Add Products</h3>
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
                    <li class="breadcrumb-item">
                        <a href="{{ route('showBranchesProducts',[$company,$branch])}}">Add product</a>
                    </li>
                    <li class="breadcrumb-item active">List</li>
                </ol>
            </div>
            <div class="col-md-4 ">
                <div class="col-md-12 align-self-center">
                    <a
                        href="{{ route('showBranchesProducts',[$company,$branch])}}"
                        class="btn pull-right hidden-sm-down"
                        style="background: #383F49; color: white">
                        <i class="mdi mdi-arrow-left"></i>
                        Back</a>
                    <!-- <a
                        href="{{ route('showBranchesCreateProduct',[$company,$branch])}}"
                        class="btn pull-right hidden-sm-down"
                        style="background: #383F49; color: white">
                        <i class="mdi mdi-arrow-left"></i>
                        Back</a> -->
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
                ajax: "{{ route('datatableproductsadd',$prodid) }}",
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
                ajax: "{{ route('datatableproductsadd',$prodid) }}",
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
                ajax: "{{ route('datatableproductsadd',$prodid) }}",
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