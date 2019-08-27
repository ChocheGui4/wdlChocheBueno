@extends('layouts.layout')

<div class="wrapper">
    @section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-12">
                    <div class="col-sm-12">
                        <h1 align="center" class="m-0 text-dark">Create Company User</h1>
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('companyAdd') }}" method="POST" autocomplete="off">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row ">

                                        <div class="col-md-12">

                                            <div class="card">

                                                <div class="card-header">
                                                    <h3>Contact data<a id="contact" name="contact"></a>
                                                    </h3>
                                                </div>
                                                <div class="card-body">

                                                    @csrf

                                                    <div class="row">
                                                        <div class=" col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Name</strong>
                                                                <i id="qname" class="fas fa-question-circle"></i>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-user-edit"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="name"
                                                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('name') }}"
                                                                        placeholder="Juana">
                                                                    <span id="aname" class="invalid-feedback" role="alert">
                                                                        <strong>Must have the first capital letter for each name and the rest in lower case</strong>
                                                                    </span>

                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Lastname</strong>
                                                                <i id="qlastname" class="fas fa-question-circle"></i>
                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-user-edit"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="lastname"
                                                                        class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('lastname') }}"
                                                                        placeholder="Juárez">
                                                                    <span id="alastname" class="invalid-feedback" role="alert">
                                                                        <strong>Must have the first capital letter for each lastname and the rest in lower case</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Telephone</strong>
                                                                <i id="qtele" class="fas fa-question-circle"></i>

                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-mobile-alt"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="telephone"
                                                                        class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('telephone') }}"
                                                                        placeholder="5523212321"
                                                                        data-mask="(999) 9999999">
                                                                    <span id="atele" class="invalid-feedback" role="alert">
                                                                        <strong>Must have only numbers (10 digits)</strong>
                                                                    </span>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Email</strong>
                                                                <i id="qemail" class="fas fa-question-circle"></i>

                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-envelope"></i>
                                                                    </span>
                                                                    <input
                                                                        type="email"
                                                                        name="email"
                                                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('email') }}"
                                                                        placeholder="user@exam.com">

                                                                    <span id="aemail" class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('email') }}Must have letters, signs and/or numbers follow "@" and domain</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Password</strong>
                                                                <i id="qpassword" class="fas fa-question-circle"></i>
                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-lock"></i>
                                                                    </span>
                                                                    <input
                                                                        type="password"
                                                                        name="password"
                                                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('password') }}"
                                                                        placeholder="Secret">
                                                                    <span id="apassword" class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('password') }}
                                                                            Must have digits, numbers and symbols and must contain at least 8 characters</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Confirm password</strong>
                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-lock"></i>
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
                                                                <div id="">
                                                                    <strong >Area</strong>
                                                                    <i id="qarea" class="fas fa-question-circle"></i>
                                                                    <select class="form-control" name="area">
                                                                        
                                                                        <option>Dirección general</option>
                                                                        <option>Auxiliar administrativo</option>
                                                                        <option>Administración y Recursos Humanos</option>
                                                                        <option>Finanzas y Contabilidad</option>
                                                                        <option>Publicidad y Mercadotecnia</option>
                                                                        <option>Informática</option>

                                                                    </select>
                                                                    <span id="aarea" class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('area') }}
                                                                        Choose any</strong>
                                                                    </span>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <a href="#company">
                                                        <button type="button" class="btn btn-outline-danger btn-sm">
                                                            <strong>Down the next step</strong>
                                                        </button>
                                                    </a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">

                                            <div id="generalcom" class="card">

                                                <div class="card-header">
                                                    <h3>Company data
                                                        <a name="company"></a>
                                                    </h3>
                                                </div>
                                                <div id="bodycompany" class="card-body">

                                                    @csrf

                                                    <div class="row">
                                                        <div class=" col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Company name</strong>
                                                                <i id="qnamecompany" class="fas fa-question-circle"></i>

                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-building"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        id="companyname"
                                                                        name="companyname"
                                                                        class="form-control {{ $errors->has('companyname') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('companyname') }}"
                                                                        placeholder="The beauty S.A. de C.V.">
                                                                    <span id="anamecompany" class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('companyname') }}Must have at least 1 name of 3 letters</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>RFC</strong>
                                                                <i id="qrfccompany" class="fas fa-question-circle"></i>

                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-file-alt"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        onkeyup="mayus(this);"
                                                                        id="companyrfc"
                                                                        name="companyrfc"
                                                                        class="form-control {{ $errors->has('companyrfc') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('companyrfc') }}"
                                                                        placeholder="FTGY568765H78">
                                                                    <span id="arfccompany" class="invalid-feedback" role="alert">
                                                                        <strong>
                                                                            {{ $errors->first('companyrfc') }}These must contain at least 12-13 characters</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Telephone</strong>
                                                                <i id="qtelecompany" class="fas fa-question-circle"></i>

                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-phone-alt"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        id="companytelephone"
                                                                        name="companytelephone"
                                                                        class="form-control {{ $errors->has('companytelephone') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('companytelephone') }}"
                                                                        placeholder="5523212321">
                                                                    <span id="atelecompany" class="invalid-feedback" role="alert">
                                                                        <strong>Must have only numbers (10 digits)</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Email</strong>
                                                                <i id="qemailcompany" class="fas fa-question-circle"></i>

                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-envelope"></i>
                                                                    </span>
                                                                    <input
                                                                        type="email"
                                                                        id="companyemail"
                                                                        name="companyemail"
                                                                        class="form-control {{ $errors->has('companyemail') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('companyemail') }}"
                                                                        placeholder="company@exam.com">
                                                                    <span id="aemailcompany" class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('companyemail') }}Must have letters, signs and numbers follow @ and domain</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row"></div>
                                                    <a href="#address">
                                                        <button id="sca2" type="button" class="btn btn-outline-danger btn-sm">
                                                            <strong>Down the next step</strong>
                                                        </button>
                                                    </a>

                                                </div>

                                            </div >

                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="card">

                                                <div class="card-header">

                                                    <h3>Address data
                                                        <a name="address"></a>
                                                    </h3>

                                                </div>
                                                <div id="bodyaddress" class="card-body">

                                                    @csrf

                                                    <div class="row">
                                                        <div class=" col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Zip code</strong>
                                                                <i id="qzip" class="fas fa-question-circle"></i>

                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-sort-numeric-up"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="zipcode"
                                                                        class="form-control {{ $errors->has('zipcode') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('zipcode') }}"
                                                                        placeholder="03231">
                                                                    <span id="azip" class="invalid-feedback" role="alert">
                                                                        <strong>Must have 5 numbers</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>District</strong>
                                                                <i id="qdistrict" class="fas fa-question-circle"></i>

                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-city"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="district"
                                                                        class="form-control {{ $errors->has('district') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('district') }}"
                                                                        placeholder="Benito Juárez">
                                                                    <span id="adistrict" class="invalid-feedback" role="alert">
                                                                        <strong>This field must contain the district</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>Street</strong>
                                                                <i id="qstreet" class="fas fa-question-circle"></i>
                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-road"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="street"
                                                                        class="form-control {{ $errors->has('street') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('street') }}"
                                                                        placeholder="Pedro Santacilia">
                                                                    <span id="astreet" class="invalid-feedback" role="alert">
                                                                        <strong>This field must contain the street.</strong>
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
                                                                <i id="qextnumber" class="fas fa-question-circle"></i>
                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-sort-numeric-down"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="extnumber"
                                                                        class="form-control {{ $errors->has('extnumber') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('extnumber') }}"
                                                                        placeholder="1">
                                                                    <span id="aextnumber" class="invalid-feedback" role="alert">
                                                                        <strong>This field must contain only numbers</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                                            <div class="form-group">
                                                                <strong>In. number</strong>
                                                                <i id="qinnumber" class="fas fa-question-circle"></i>
                                                                <!--Se inicia icono con campo de texto-->
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">
                                                                        <i class="fas fa-sort-numeric-up"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="innumber"
                                                                        class="form-control {{ $errors->has('innumber') ? ' is-invalid' : '' }}"
                                                                        value="{{ old('innumber') }}"
                                                                        placeholder="2">
                                                                    <span id="ainnumber" class="invalid-feedback" role="alert">
                                                                        <strong>This field must contain only numbers.</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button id="divbtns" type="submit" class="btn btn-warning">Register</button>
                                                            <br>
                                                        </div>
                                                    </div>

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