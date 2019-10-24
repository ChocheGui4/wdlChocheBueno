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
                <li class="breadcrumb-item active">
                    <a href="javascript:void(0)">Company</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="javascript:void(0)">Branch</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            
            <a href="{{ route('showBranches',$company)}}"  
            class="btn pull-right hidden-sm-down "
            style="background: #383F49; color: white">
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
                        <div class="card wizard-content">
                            <div class="card-block">
                                <form action="{{ route('addBranches',$company) }}" method="POST" autocomplete="off" novalidate>
                                    @csrf
                                    <h2>Contact Info</h2>
                                    <section>
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <div >
                                                    <div >
                                                        @csrf
                                                        <div class="row">
                                                            <div class=" col-sm-4 col-md-4">
                                                                <!-- <div class="form-group">
                                                                    <h5>Pattern <span class="text-danger">*</span> <small><i>Must stah 'a' and end with 'z'</i></small></h5>
                                                                    <div class="controls">
                                                                        <input type="text" name="pattern" pattern="^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$" data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras" class="form-control" required>
                                                                    </div>
                                                                </div> -->
                                                                <div class="controls ">
                                                                    <div class="form-group">

                                                                        <strong>Name</strong><span class="text-danger">*</span>
                                                                        <div class="controls">
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-addon">
                                                                                    <i class="mdi mdi-lead-pencil"></i>
                                                                                </span>
                                                                                <input
                                                                                    id="nameuc"
                                                                                    onkeyup="ucwords(this,'#nameuc');"
                                                                                    type="text"
                                                                                    name="name"
                                                                                    class="form-control required"
                                                                                    value="{{ old('name') }}"
                                                                                    placeholder="Example: Juana"
                                                                                    required
                                                                                    maxlength="25"
                                                                                    pattern=".{2,50}" 
                                                                                    data-validation-pattern-message="The own names must have at least 3 letters">
                                                                            </div>
                                                                            <span class="invalid-feedback" role="alert" style="color:red;">
                                                                                <strong>{{ $errors->first('name') }}</strong>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Lastname</strong>
                                                                    <span class="text-danger">*</span>
                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="mdi mdi-lead-pencil"></i>
                                                                            </span>
                                                                            <input
                                                                                id="lastnameuc"
                                                                                onkeyup="ucwords(this,'#lastnameuc');"
                                                                                type="text"
                                                                                name="lastname"
                                                                                class="form-control required"
                                                                                value="{{ old('lastname') }}"
                                                                                placeholder="Example: Juárez"
                                                                                required
                                                                                maxlength="25"
                                                                                pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                                data-validation-pattern-message="The own lastname must have at least 3 letters"
                                                                                >
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('lastname') }}</strong>
                                                                        </span>
                                                                    </div>                                                            
                                                                    <!--Se finaliza icono con campo de texto-->

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Telephone</strong>
                                                                    <span class="text-danger">*</span>                                                            

                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-mobile"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                name="telephone1"
                                                                                class="form-control required"
                                                                                value="{{ old('telephone1') }}"
                                                                                required
                                                                                placeholder="Example: 5523212321"
                                                                                pattern="[0-9].{11}" 
                                                                                data-validation-pattern-message="The telephone number must have 10 digits">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('telephone1') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Telephone alternative</strong>
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-mobile"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                id="tele"
                                                                                class="form-control required"
                                                                                placeholder="Example: 5523212321">
                                                                            <input
                                                                                hidden
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                id="tele2"
                                                                                name="telephone2"
                                                                                class="form-control "
                                                                                value="0000000000"
                                                                                required
                                                                                placeholder="Example: 5523212321"
                                                                                pattern="[0-9].{11}" 
                                                                                data-validation-pattern-message="The telephone number must have 10 digits">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('telephone2') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Email</strong>
                                                                    <span class="text-danger">*</span>
                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-envelope"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                name="email"
                                                                                class="form-control"
                                                                                value="{{ old('email') }}"
                                                                                placeholder="Example: user@exam.com"
                                                                                required
                                                                                maxlength="45"
                                                                                pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                                data-validation-pattern-message="This is not a valid email">
                                                                                
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('email1') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Email alternative</strong>
                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-envelope"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                id="em2"
                                                                                class="form-control"
                                                                                placeholder="Example: user@exam.com">
                                                                            <input
                                                                                hidden
                                                                                type="text"
                                                                                id="ema2"
                                                                                name="email2"
                                                                                class="form-control "
                                                                                value="default@default.com"
                                                                                required
                                                                                placeholder="example@exam.com"
                                                                                maxlength="45"
                                                                                pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                                data-validation-pattern-message="This is not a valid email">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('email2') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                    <!--Se finaliza icono con campo de texto-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <div id="">
                                                                        <strong >Area</strong>
                                                                        <span class="text-danger">*</span>
                                                                        <select class="form-control" name="area">

                                                                            <option>Dirección general</option>
                                                                            <option>Auxiliar administrativo</option>
                                                                            <option>Administración y Recursos Humanos</option>
                                                                            <option>Finanzas y Contabilidad</option>
                                                                            <option>Publicidad y Mercadotecnia</option>
                                                                            <option>Informática</option>

                                                                        </select>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                    <hr>
                                    <h2>Company Info</h2>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div >
                                                    <div>
                                                        @csrf
                                                        <div class="row">
                                                            <div class=" col-sm-4 col-md-4">
                                                                <div class="controls">
                                                                    <div class="form-group">
                                                                        <strong>Branch name</strong>
                                                                        <span class="text-danger">*</span>
                                                                        <!--Se inicia icono con campo de texto-->
                                                                        <div class="controls">
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-addon">
                                                                                    <i class="mdi mdi-domain"></i>
                                                                                </span>
                                                                                <input
                                                                                    id="branchnameuc"
                                                                                    onkeyup="ucwords(this,'#branchnameuc');"
                                                                                    type="text"
                                                                                    name="branchname"
                                                                                    class="form-control"
                                                                                    value="{{ old('branchname') }}"
                                                                                    required
                                                                                    placeholder="The beauty S.A. de C.V."
                                                                                    maxlength="50"
                                                                                    pattern=".{3,}"
                                                                                    data-validation-pattern-message="The name company must have at least 3 letters">
                                                                            </div>
                                                                            <span class="invalid-feedback" role="alert" style="color:red;">
                                                                                <strong>{{ $errors->first('branchname') }}</strong>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Telephone</strong>
                                                                    <span class="text-danger">*</span>
                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-mobile"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                name="branchtelephone1"
                                                                                class="form-control {{ $errors->has('companytelephone') ? ' is-invalid' : '' }}"
                                                                                value="{{ old('branchtelephone1') }}"
                                                                                placeholder="Example: 5523212321"
                                                                                required
                                                                                pattern="[0-9].{11}" 
                                                                                data-validation-pattern-message="The telephone number must have 10 digits">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('branchtelephone1') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Telephone alternative</strong>
                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-mobile"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                id="ctele"
                                                                                class="form-control required"
                                                                                placeholder="Example: 5523212321">
                                                                            <input
                                                                                hidden
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                id="ctele2"
                                                                                name="branchtelephone2"
                                                                                class="form-control "
                                                                                value="0000000000"
                                                                                required
                                                                                placeholder="Example: 5523212321"
                                                                                pattern="[0-9].{11}" 
                                                                                data-validation-pattern-message="The telephone number must have 10 digits">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('branchtelephone2') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Email</strong>
                                                                    <span class="text-danger">*</span>
                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="mdi mdi-email"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                name="branchemail1"
                                                                                class="form-control "
                                                                                value="{{ old('branchemail1') }}"
                                                                                placeholder="company@exam.com"
                                                                                required
                                                                                maxlength="45"
                                                                                pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                                data-validation-pattern-message="This is not a valid email">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('branchemail1') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                    <!--Se finaliza icono con campo de texto-->
                                                                </div> 
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Email alternative</strong>
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="mdi mdi-email"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                id="cem2"
                                                                                class="form-control"
                                                                                placeholder="Example: user@exam.com">
                                                                            <input
                                                                                hidden
                                                                                type="text"
                                                                                id="cema2"
                                                                                name="branchemail2"
                                                                                class="form-control "
                                                                                value="default@default.com"
                                                                                required
                                                                                placeholder="example@exam.com"
                                                                                maxlength="45"
                                                                                pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                                data-validation-pattern-message="This is not a valid email">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('branchemail2') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                    <!--Se finaliza icono con campo de texto-->
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row"></div>
                                                    </div>

                                                </div >

                                            </div>
                                        </div>
                                    </section>
                                    <hr>
                                    <h2>Address Info</h2>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div>
                                                    <div>
                                                        @csrf
                                                        <div class="row">
                                                            <div class=" col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Zip code</strong>
                                                                    <span class="text-danger">*</span>

                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="mdi mdi-numeric"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                data-mask="00000"
                                                                                name="zipcode"
                                                                                class="form-control {{ $errors->has('zipcode') ? ' is-invalid' : '' }}"
                                                                                value="{{ old('zipcode') }}"
                                                                                placeholder="Example: 03231"
                                                                                required
                                                                                maxlength="5"
                                                                                pattern="[0-9].{4}"
                                                                                data-validation-pattern-message="This field must have 5 digits">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('zipcode') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                    <!--Se finaliza icono con campo de texto-->

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>District</strong>
                                                                    <span class="text-danger">*</span>
                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="mdi mdi-city"></i>
                                                                            </span>
                                                                            <input
                                                                                id="districtuc" 
                                                                                onkeyup="ucwords(this,'#districtuc');"
                                                                                type="text"
                                                                                name="district"
                                                                                class="form-control {{ $errors->has('district') ? ' is-invalid' : '' }}"
                                                                                value="{{ old('district') }}"
                                                                                placeholder="Example: Benito Juárez"
                                                                                required
                                                                                maxlength="35"
                                                                                pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                                data-validation-pattern-message="The Districts must have at least 3 letters">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('district') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                    <!--Se finaliza icono con campo de texto-->

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Street</strong>
                                                                    <span class="text-danger">*</span>
                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-road"></i>
                                                                            </span>
                                                                            <input
                                                                                id="streetuc" 
                                                                                onkeyup="ucwords(this,'#streetuc');"
                                                                                type="text"
                                                                                name="street"
                                                                                class="form-control {{ $errors->has('street') ? ' is-invalid' : '' }}"
                                                                                value="{{ old('street') }}"
                                                                                placeholder="Example: Pedro Santacilia" 
                                                                                required
                                                                                maxlength="35"
                                                                                pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                                data-validation-pattern-message="The Streets must have at least 3 letters">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('street') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                    <!--Se finaliza icono con campo de texto-->

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>Ext. number</strong>
                                                                    <span class="text-danger">*</span>
                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="mdi mdi-numeric"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                name="extnumber"
                                                                                data-mask="0000"
                                                                                class="form-control {{ $errors->has('extnumber') ? ' is-invalid' : '' }}"
                                                                                value="{{ old('extnumber') }}"
                                                                                placeholder="Example: 1"
                                                                                required
                                                                                maxlength="4"
                                                                                data-validation-required-message="This field must have digits">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('extnumber') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                    <!--Se finaliza icono con campo de texto-->

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <strong>In. number</strong>
                                                                    <span class="text-danger">*</span>
                                                                    <!--Se inicia icono con campo de texto-->
                                                                    <div class="controls">
                                                                        <div class="input-group mb-3">
                                                                            <span class="input-group-addon">
                                                                                <i class="mdi mdi-numeric"></i>
                                                                            </span>
                                                                            <input
                                                                                type="text"
                                                                                data-mask="0000"
                                                                                name="innumber"
                                                                                class="form-control "
                                                                                value="{{ old('innumber') }}"
                                                                                placeholder="Example: 2"
                                                                                required
                                                                                maxlength="4"
                                                                                data-validation-required-message="This field must have digits">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('innumber') }}</strong>
                                                                        </span>
                                                                    </div>
                                                                    <!--Se finaliza icono con campo de texto-->

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-success" value="Register">
                                    </section>
                                    <!-- <div class="row">
                                        <div class=" col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Branch name</strong><span class="text-danger">*</span>
                                                
                                                <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-building"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            id="companyname"
                                                            name="name"
                                                            class="form-control required"
                                                            value="{{ old('name') }}"
                                                            placeholder="The beauty S.A. de C.V."
                                                            required
                                                            maxlength="25"
                                                            pattern=".{3,}" 
                                                            data-validation-pattern-message="The own names must have at least 3 letters">
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                </div>
                                                
                                            </div>

                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>First telephone</strong><span class="text-danger">*</span>
                                                
                                                <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-mobile"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            data-mask="000-000-0000"
                                                            name="branchtelephone1"
                                                            class="form-control "
                                                            value="{{ old('branchtelephone1') }}"
                                                            placeholder="23333333455"
                                                            required
                                                            pattern="[0-9].{11}" 
                                                            data-validation-pattern-message="The telephone number must have 10 digits">
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                        <strong>{{ $errors->first('branchtelephone1') }}</strong>
                                                    </span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Second Telephone</strong>
                                                
                                                <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-mobile"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            data-mask="000-000-0000"
                                                            name="branchtelephone2"
                                                            class="form-control"
                                                            value="{{ old('branchtelephone2') }}"
                                                            placeholder="1234567898">
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                        <strong>{{ $errors->first('branchtelephone2') }}</strong>
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>First Email</strong><span class="text-danger">*</span>
                                                <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            name="branchemail1"
                                                            class="form-control"
                                                            value="{{ old('branchemail1') }}"
                                                            placeholder="example@exam.com"
                                                            required
                                                            maxlength="45"
                                                            pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                            data-validation-pattern-message="This is not a valid email">
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                        <strong>{{ $errors->first('branchemail1') }}</strong>
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Second Email</strong>
                                                <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            name="branchemail2"
                                                            class="form-control "
                                                            value="{{ old('branchemail2') }}"
                                                            placeholder="example@exam.com">
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                        <strong>{{ $errors->first('branchemail2') }}</strong>
                                                    </span>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Zip code</strong><span class="text-danger">*</span>
                                                <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-addon">
                                                            <i class="mdi mdi-numeric"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            name="zipcode"
                                                            class="form-control {{ $errors->has('zipcode') ? ' is-invalid' : '' }}"
                                                            value="{{ old('zipcode') }}"
                                                            placeholder="03231"
                                                            required
                                                            maxlength="5"
                                                            pattern="[0-9].{4}"
                                                            data-validation-pattern-message="This field must have 5 digits">
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>District</strong><span class="text-danger">*</span>
                                                <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-addon">
                                                            <i class="mdi mdi-city"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            name="district"
                                                            class="form-control {{ $errors->has('district') ? ' is-invalid' : '' }}"
                                                            value="{{ old('district') }}"
                                                            placeholder="Benito Juárez"
                                                            required
                                                            maxlength="35"
                                                            pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                            data-validation-pattern-message="The Districts must have at least 3 letters">
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                        <strong>{{ $errors->first('district') }}</strong>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Street</strong><span class="text-danger">*</span>
                                                <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-road"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            name="street"
                                                            class="form-control {{ $errors->has('street') ? ' is-invalid' : '' }}"
                                                            value="{{ old('street') }}"
                                                            placeholder="Pedro Santacilia"
                                                            required
                                                            maxlength="35"
                                                            pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                            data-validation-pattern-message="The Districts must have at least 3 letters">
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                        <strong>{{ $errors->first('street') }}</strong>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Ext. number</strong><span class="text-danger">*</span>
                                                <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-addon">
                                                            <i class="mdi mdi-numeric"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            name="extnumber"
                                                            class="form-control {{ $errors->has('extnumber') ? ' is-invalid' : '' }}"
                                                            value="{{ old('extnumber') }}"
                                                            placeholder="1"
                                                            required
                                                            maxlength="4"
                                                            data-validation-required-message="This field must have digits">
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                        <strong>{{ $errors->first('extnumber') }}</strong>
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>In. number</strong><span class="text-danger">*</span>
                                                <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-addon">
                                                            <i class="mdi mdi-numeric"></i>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            data-mask="0000"
                                                            name="innumber"
                                                            class="form-control {{ $errors->has('innumber') ? ' is-invalid' : '' }}"
                                                            value="{{ old('innumber') }}"
                                                            placeholder="2"
                                                            required
                                                            maxlength="4"
                                                            data-validation-required-message="This field must have digits">
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                        <strong>{{ $errors->first('innumber') }}</strong>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div align="center">
                                        <button type="submit" class="btn btn-success">
                                            Add branch
                                        </button>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                        <div align="center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
<!-- @section('file_js')
<script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
</script>
@endsection -->