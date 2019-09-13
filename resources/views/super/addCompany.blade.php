@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">
    
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Company</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Company</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">

            <a
                href="{{ route('companyShow')}}"
                class="btn pull-right hidden-sm-down btn-primary">
                <i class="mdi mdi-arrow-left"></i>
                Back</a>

        </div>
    </div>

    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card wizard-content">
                    <div class="card-block">
                        <form class="" action="{{ route('companyAdd') }}" method="POST" autocomplete="off" novalidate>
                            <!-- Step 1 -->
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
                                                                            type="text"
                                                                            name="name"
                                                                            class="form-control required"
                                                                            value="{{ old('name') }}"
                                                                            placeholder="Example: Juana"
                                                                            required
                                                                            maxlength="25"
                                                                            pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                            data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
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
                                                                        type="text"
                                                                        name="lastname"
                                                                        class="form-control required"
                                                                        value="{{ old('lastname') }}"
                                                                        placeholder="Example: Juárez"
                                                                        maxlength="25"
                                                                        pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras"
                                                                        required>
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
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
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
                                                                        name="telephone2"
                                                                        class="form-control required"
                                                                        value="{{ old('telephone2') }}"
                                                                        required
                                                                        placeholder="Example: 5523212321"
                                                                        pattern="[0-9].{11}" 
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
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
                                                                        class="form-control{{ $errors->has('email1') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('email1') }}"
                                                                        placeholder="Example: user@exam.com"
                                                                        required
                                                                        maxlength="45"
                                                                        pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                        data-validation-pattern-message="No concuerda">
                                                                        
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
                                                                        name="email2"
                                                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('email2') }}"
                                                                        placeholder="Example: user@exam.com"
                                                                        required
                                                                        maxlength="45"
                                                                        pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                        data-validation-pattern-message="No concuerda x2">
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
                                                            <strong>Password</strong>
                                                            <span class="text-danger">*</span>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-lock"></i>
                                                                    </span>
                                                                    <input
                                                                        type="password"
                                                                        name="password"
                                                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('password') }}"
                                                                        placeholder="Example: Secret@password1"
                                                                        required
                                                                        maxlength="45"
                                                                        pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,45}$" 
                                                                        data-validation-pattern-message="No concuerda con el patrón">
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            </div>
                                                            <!--Se finaliza icono con campo de texto-->
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>Confirm password</strong>
                                                            <span class="text-danger">*</span>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-lock"></i>
                                                                    </span>
                                                                    <input
                                                                        type="password"
                                                                        class="form-control"
                                                                        name="password_confirmation"
                                                                        required
                                                                        maxlength="45"
                                                                        placeholder="Confirm secret">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                                <strong>Company name</strong>
                                                                <span class="text-danger">*</span>
                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="controls">
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-addon">
                                                                            <i class="mdi mdi-domain"></i>
                                                                        </span>
                                                                        <input
                                                                            type="text"
                                                                            name="companyname"
                                                                            class="form-control {{ $errors->has('companyname') ? ' is-invalid' : '' }}"
                                                                            value="{{ old('companyname') }}"
                                                                            required
                                                                            placeholder="The beauty S.A. de C.V."
                                                                            maxlength="50"
                                                                            pattern=".{2,}"
                                                                            data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
                                                                    </div>
                                                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                                                        <strong>{{ $errors->first('companyname') }}</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>RFC</strong>
                                                            <span class="text-danger">*</span>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        onkeyup="mayus(this);"
                                                                        name="companyrfc"
                                                                        class="form-control {{ $errors->has('companyrfc') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('companyrfc') }}"
                                                                        required
                                                                        maxlength="13"
                                                                        pattern="[A-Z0-9].{12}"
                                                                        placeholder="Example: FTGY568765H78"
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('companyrfc') }}</strong>
                                                                </span>
                                                            </div>
                                                            
                                                            <!--Se finaliza icono con campo de texto-->

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
                                                                        name="companytelephone1"
                                                                        class="form-control {{ $errors->has('companytelephone') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('companytelephone1') }}"
                                                                        placeholder="Example: 5523212321"
                                                                        required
                                                                        pattern="[0-9].{11}" 
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('companytelephone1') }}</strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
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
                                                                        name="companytelephone2"
                                                                        class="form-control {{ $errors->has('companytelephone') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('companytelephone2') }}"
                                                                        placeholder="Example: 5523212321"
                                                                        required
                                                                        pattern="[0-9].{11}" 
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('companytelephone2') }}</strong>
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
                                                                        <i class="mdi mdi-email"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="companyemail1"
                                                                        class="form-control {{ $errors->has('companyemail1') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('companyemail1') }}"
                                                                        placeholder="company@exam.com"
                                                                        required
                                                                        maxlength="45"
                                                                        pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('companyemail1') }}</strong>
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
                                                                        name="companyemail2"
                                                                        class="form-control {{ $errors->has('companyemail2') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('companyemail2') }}"
                                                                        placeholder="company@exam.com"
                                                                        required
                                                                        maxlength="45"
                                                                        pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('companyemail2') }}</strong>
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
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
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
                                                                        type="text"
                                                                        name="district"
                                                                        class="form-control {{ $errors->has('district') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('district') }}"
                                                                        placeholder="Example: Benito Juárez"
                                                                        required
                                                                        maxlength="35"
                                                                        pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
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
                                                                        type="text"
                                                                        name="street"
                                                                        class="form-control {{ $errors->has('street') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('street') }}"
                                                                        placeholder="Example: Pedro Santacilia" 
                                                                        required
                                                                        maxlength="35"
                                                                        pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                        data-validation-pattern-message="Los nombres propios deben contener al menos 3 letras">
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
                                                                        data-validation-required-message="Los nombres propios deben contener al menos 3 letras">
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
                                                                        class="form-control required"
                                                                        value="{{ old('innumber') }}"
                                                                        placeholder="Example: 2"
                                                                        required
                                                                        maxlength="4"
                                                                        data-validation-required-message="Los nombres propios deben contener al menos 3 letras">
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
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>

<div class=" jq-toast-wrap top-right">
    <div
        class="jq-toast-single jq-has-icon jq-icon-success"
        style="text-align: left; display: none;">
        <span
            class="jq-toast-loader jq-toast-loaded"
            style="-webkit-transition: width 3.1s ease-in;
                -o-transition: width 3.1s ease-in;
                transition: width 3.1s ease-in;
                background-color: #ff6849;"></span>
        <span class="close-jq-toast-single">×</span>
        <h2 class="jq-toast-heading">Welcome to Monster admin</h2>Use the predefined ones, or specify a custom position object.
    </div>
</div>

@endsection

@section('file_js')
<script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
</script>
@endsection