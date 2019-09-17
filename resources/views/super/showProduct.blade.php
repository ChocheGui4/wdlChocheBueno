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
                            <div class="card" style="background: #FFDCDC;">
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table id="task" class="table table-hover table-condensed">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Maker</th>
                                                <th>Processor</th>
                                                <th>Memory (GB)</th>
                                                <th>Disc</th>
                                                <th>users</th>
                                                
                                                
                                            </tr>
                                            </thead>
                                        </table>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <button id="sa-title" alt="alert" class="btn btn-danger">New</button>
    </div>
    <!--Inicia la ventana modal-->
    <div class="sweet-overlay" tabindex="-1" style="opacity: -0.01; display: none;"></div>
    <div class="sweet-alert hideSweetAlert" data-custom-class="" data-has-cancel-button="false" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="false" data-animation="pop" data-timer="null" style="display: none; margin-top: -128px; opacity: -0.05;"><div class="sa-icon sa-error" style="display: none;">
      <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
      </span>
    </div><div class="sa-icon sa-warning" style="display: none;">
      <span class="sa-body"></span>
      <span class="sa-dot"></span>
    </div><div class="sa-icon sa-info" style="display: none;"></div><div class="sa-icon sa-success" style="display: none;">
      <span class="sa-line sa-tip"></span>
      <span class="sa-line sa-long"></span>

      <div class="sa-placeholder"></div>
      <div class="sa-fix"></div>
    </div><div class="sa-icon sa-custom" style="display: none;"></div><h2>Here's a message!</h2>
    <p style="display: block;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.</p>
    <fieldset>
      <input type="text" tabindex="3" placeholder="">
      <div class="sa-input-error"></div>
    </fieldset><div class="sa-error-container">
      <div class="icon">!</div>
      <p>Not valid!</p>
    </div><div class="sa-button-container">
      <button class="cancel" tabindex="2" style="display: none; box-shadow: none;">Cancel</button>
      <div class="sa-confirm-button-container">
        <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(140, 212, 245); box-shadow: rgba(140, 212, 245, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">OK</button><div class="la-ball-fall">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div></div>
    <!--Termina la ventana modal-->
@endsection
@section('file_js')

<script>
    $(document).ready(function() {

        // var hola=$('#idprod').val();
        
        // var hola="{{ route('datatableproducts',"$prodid") }}";
        // alert(hola);
        oTable = $('#task').DataTable({
            "serverSide": true,
            "ajax": "{{ route('datatableproducts',"$prodid") }}",
            "columns": [
                {data: 'name'},
                {data: 'namem'},
                {data: 'namep'},
                {data: 'sizem' },
                {data: 'typed' },
                {data: 'user' },
                
                
                
            ]
        });
    });
    // $(document).ready(function() {
    //     $('#table').DataTable();
    // });
 </script>
@endsection