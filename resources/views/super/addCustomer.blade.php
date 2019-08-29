@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Customers</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Customers</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            
            <a
                href="{{ route('customerShow')}}"
                class="btn pull-right hidden-sm-down btn-primary">
                <i class="mdi mdi-arrow-left"></i>
                Back</a>
            
        </div>
    </div>
    <div class="content-wrapper">

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('customerAdd') }}" method="POST" autocomplete="off">

                            <div class="row ">

                                <div class="col-md-12">

                                    <div >
                                        <div>

                                            @csrf

                                            <div class="row">
                                                <div class=" col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <strong>Name</strong>
                                                        <i id="qname" class="fa fa-question-circle"></i>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="mdi mdi-lead-pencil"></i>
                                                            </span>
                                                            <input
                                                                type="text"
                                                                name="name"
                                                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                value="{{ old('name') }}"
                                                                placeholder="Juana">

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <strong>Lastname</strong>
                                                        <i id="qlastname" class="fa fa-question-circle"></i>
                                                        <!--Se inicia icono con campo de texto-->
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="mdi mdi-lead-pencil"></i>
                                                            </span>
                                                            <input
                                                                type="text"
                                                                name="lastname"
                                                                class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                                                value="{{ old('lastname') }}"
                                                                placeholder="Juárez">
                                                        </div>
                                                        <!--Se finaliza icono con campo de texto-->

                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <strong>Telephone</strong>
                                                        <i id="qtele" class="fa fa-question-circle"></i>

                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-mobile"></i>
                                                            </span>
                                                            <input
                                                                type="text"
                                                                name="telephone"
                                                                class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}"
                                                                value="{{ old('telephone') }}"
                                                                placeholder="5523212321"
                                                                data-mask="(999) 9999999">
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <strong>Email</strong>
                                                        <i id="qemail" class="fa fa-question-circle"></i>

                                                        <!--Se inicia icono con campo de texto-->
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                            <input
                                                                type="email"
                                                                name="email"
                                                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                                value="{{ old('email') }}"
                                                                placeholder="user@exam.com">

                                                        </div>
                                                        <!--Se finaliza icono con campo de texto-->

                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <strong>Password</strong>
                                                        <i id="qpassword" class="fa fa-question-circle"></i>
                                                        <!--Se inicia icono con campo de texto-->
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-lock"></i>
                                                            </span>
                                                            <input
                                                                type="password"
                                                                name="password"
                                                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                                value="{{ old('password') }}"
                                                                placeholder="Secret">

                                                        </div>
                                                        <!--Se finaliza icono con campo de texto-->

                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <strong>Confirm password</strong>
                                                        <!--Se inicia icono con campo de texto-->
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-lock"></i>
                                                            </span>

                                                            <input
                                                                id="password-confirm"
                                                                type="password"
                                                                class="form-control"
                                                                name="password_confirmation"
                                                                placeholder="Confirm secret">

                                                        </div>
                                                        <!--Se finaliza icono con campo de texto-->

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <div >
                                                            <strong >
                                                                RFC</strong>
                                                            <i id="qrfc" class="fa fa-question-circle"></i>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file"></i>
                                                                </span>
                                                                <input
                                                                    type="text"
                                                                    onkeyup="mayus(this);"
                                                                    id="rfc"
                                                                    name="rfc"
                                                                    class="form-control {{ $errors->has('rfc') ? ' is-invalid' : '' }}"
                                                                    value="{{ old('rfc') }}"
                                                                    placeholder="RJSU987635HYS87J">

                                                            </div>
                                                            <!--Se finaliza icono con campo de texto-->

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <hr>
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
                                                <div class="col-xs-4 col-sm-4 col-md-4">
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
                                            </div>
                                            <div class="row">
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
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                    <button id="divbtns" type="submit" class="btn btn-success">Register</button>
                                                    <br>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection