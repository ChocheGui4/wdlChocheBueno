@extends('layouts.wdlicenciamiento')
@section('content')
<div class="wrapper">
<div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Branch create</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Company</li>
                <li class="breadcrumb-item active">Branch</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            
            <a href="{{ route('showBranches',$company)}}"  
            class="btn pull-right hidden-sm-down btn-primary">
                <i class="mdi mdi-arrow-left"></i>
                Back</a>
            
        </div>
    </div>

    <!-- iniContent Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('addBranches',[$company,$branch]) }}" method="POST" autocomplete="off">
                            @csrf
                            
                                

                                    <div class="row">
                                        <div class=" col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Branch name</strong>
                                                <i id="qnamecompany" class="fa fa-question-circle"></i>

                                                <!--Se inicia icono con campo de texto-->
                                                <div class="input-group mb-3">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-building"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        id="companyname"
                                                        name="name"
                                                        class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                        value="{{ old('name') }}"
                                                        placeholder="The beauty S.A. de C.V.">
                                                </div>
                                                <!--Se finaliza icono con campo de texto-->

                                            </div>

                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Zip code</strong>
                                                <i id="qzip" class="fa fa-question-circle"></i>

                                                <!--Se inicia icono con campo de texto-->
                                                <div class="input-group mb-3">
                                                    <span class="input-group-addon">
                                                        <i class="mdi mdi-numeric"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        name="zipcode"
                                                        class="form-control {{ $errors->has('zipcode') ? ' is-invalid' : '' }}"
                                                        value="{{ old('zipcode') }}"
                                                        placeholder="03231">
                                                   

                                                </div>
                                                <!--Se finaliza icono con campo de texto-->

                                            </div>

                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>District</strong>
                                                <i id="qdistrict" class="fa fa-question-circle"></i>

                                                <!--Se inicia icono con campo de texto-->
                                                <div class="input-group mb-3">
                                                    <span class="input-group-addon">
                                                        <i class="mdi mdi-city"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        name="district"
                                                        class="form-control {{ $errors->has('district') ? ' is-invalid' : '' }}"
                                                        value="{{ old('district') }}"
                                                        placeholder="Benito Juárez">
                                                </div>
                                                <!--Se finaliza icono con campo de texto-->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Street</strong>
                                                <i id="qstreet" class="fa fa-question-circle"></i>
                                                <!--Se inicia icono con campo de texto-->
                                                <div class="input-group mb-3">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-road"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        name="street"
                                                        class="form-control {{ $errors->has('street') ? ' is-invalid' : '' }}"
                                                        value="{{ old('street') }}"
                                                        placeholder="Pedro Santacilia">
                                                </div>
                                                <!--Se finaliza icono con campo de texto-->

                                            </div>

                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Ext. number</strong>
                                                <i id="qextnumber" class="fa fa-question-circle"></i>
                                                <!--Se inicia icono con campo de texto-->
                                                <div class="input-group mb-3">
                                                    <span class="input-group-addon">
                                                        <i class="mdi mdi-numeric"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        name="extnumber"
                                                        class="form-control {{ $errors->has('extnumber') ? ' is-invalid' : '' }}"
                                                        value="{{ old('extnumber') }}"
                                                        placeholder="1">

                                                </div>
                                                <!--Se finaliza icono con campo de texto-->

                                            </div>
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>In. number</strong>
                                                <i id="qinnumber" class="fa fa-question-circle"></i>
                                                <!--Se inicia icono con campo de texto-->
                                                <div class="input-group mb-3">
                                                    <span class="input-group-addon">
                                                        <i class="mdi mdi-numeric"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        name="innumber"
                                                        class="form-control {{ $errors->has('innumber') ? ' is-invalid' : '' }}"
                                                        value="{{ old('innumber') }}"
                                                        placeholder="2">
                                                </div>
                                                <!--Se finaliza icono con campo de texto-->

                                            </div>
                                        </div>
                                    </div>

                                
                            
                            <div align="center">
                                <button type="submit" class="btn btn-success">
                                    Add branch
                                </button>
                            </div>
                        </form>
                        <!-- /.card -->
                        <div align="center"></div>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->
@endsection