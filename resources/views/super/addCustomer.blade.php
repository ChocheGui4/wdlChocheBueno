@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Customers</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/customers">Customers</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a
                href="{{ route('customerShow')}}"
                class="btn pull-right hidden-sm-down"
                style="background: #383F49; color: white">
                <i class="mdi mdi-arrow-left"></i>
                Back</a>
        </div>
    </div>
    <div class="content-wrapper">

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card wizard-content">
                            <div class="card-block">
                                <form action="{{ route('customerAdd') }}" 
                                    method="POST" 
                                    autocomplete="off"
                                    novalidate>
                                    <h2>Personal Info</h2>
                                    <section>
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <div>
                                                    <div>
                                                        @csrf
                                                        <div class="row">
                                                            <div class=" col-sm-4 col-md-4">
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
                                                                                    pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
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
                                                                                class="form-control{{ $errors->has('email1') ? ' is-invalid' : '' }}"
                                                                                value="{{ old('email') }}"
                                                                                placeholder="Example: user@exam.com"
                                                                                required
                                                                                maxlength="45"
                                                                                pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                                data-validation-pattern-message="This is not a valid email">
                                                                                
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('email') }}</strong>
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
                                                                                placeholder="Example: Secr3t@1"
                                                                                required
                                                                                maxlength="45"
                                                                                pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,45}$" 
                                                                                data-validation-pattern-message="the password must contain 1 capital letter, 1 lowercase letter,1 alphanumeric or special character, 1 number and must be at least 8 characters">
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
                                                                                name="rfc"
                                                                                class="form-control"
                                                                                value="{{ old('rfc') }}"
                                                                                required
                                                                                maxlength="13"
                                                                                pattern="[A-Z0-9].{12}"
                                                                                placeholder="Example: FTGY568765H78"
                                                                                data-validation-pattern-message="The RFC must have 13 characters">
                                                                        </div>
                                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                                            <strong>{{ $errors->first('rfc') }}</strong>
                                                                        </span>
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
                                    <h2>Address Info</h2>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="">
                                                    <a name="address"></a>
                                                    <div id="bodyaddress" class="">
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
                                                        <!--  -->
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

    </div>

</div>

@endsection