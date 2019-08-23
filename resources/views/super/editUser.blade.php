@extends('layouts.layout')

<div class="wrapper">
    @section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-12">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-2">
                                <button id="showprofile">
                                    <u>
                                        <h5>Profile<a></a>
                                        </h5>
                                    </u>
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button id="showcontact">

                                    <h5>Company<a></a>
                                    </h5>

                                </button>
                            </div>
                            <div class="col-xl-3">
                                <button id="showinformation">

                                    <h5>Information<a></a>
                                    </h5>

                                </button>
                            </div>
                            
                            
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-10">
                                
                            </div>
                           
                            <div class="col-xl-2">
                                <a href="/user">
                                    <button class="btn btn-dark">Back</button>
                                </a>
                            </div>
                            
                        </div>

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

                        
                            <div class="card-body">
                                <div class="row ">

                                    <div class="col-md-12">
                                        
                                        <div id="profile" class="card">
                                            <form action="{{ route('userUpdateProfile',$people->id) }}" method="POST" autocomplete="off">
                                                <div class="card-body">                                                
                                                
                                                    <div class="row">
                                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                                            <img
                                                                src="{{ asset('assets/dist/img/HillsongThisisliving1.jpg') }}"
                                                                class="img-circle elevation-2"
                                                                alt="User Image">

                                                        </div>
                                                        
                                                        @csrf

                                                            <div class="col-xs-9 col-sm-9 col-md-9">
                                                            
                                                                <div class="row">
                                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <strong>Name</strong>
                                                                            
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text">
                                                                                    <i class="fas fa-user-edit"></i>
                                                                                </span>
                                                                                <input
                                                                                    type="text"
                                                                                    name="name"
                                                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                                    placeholder="Juan"
                                                                                    value={{ $people->name }}>
                                                                                <span id="aname" class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                                </span>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <strong>Lastname</strong>
                                                                            
                                                                            <!--Se inicia icono con campo de texto-->
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text">
                                                                                    <i class="fas fa-user-edit"></i>
                                                                                </span>
                                                                                <input
                                                                                    type="text"
                                                                                    name="lastname"
                                                                                    class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                                                                    placeholder="Juárez"
                                                                                    value={{ $people->lastname }}>
                                                                                <span id="alastname" class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                                                </span>

                                                                            </div>
                                                                            <!--Se finaliza icono con campo de texto-->

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <strong>Telephone</strong>
                                                                            

                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text">
                                                                                    <i class="fas fa-mobile-alt"></i>
                                                                                </span>
                                                                                
                                                                                
                                                                                    <input
                                                                                        type="text"
                                                                                        name="telephone"
                                                                                        class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}"
                                                                                        placeholder="2451232123"
                                                                                        value={{ $people->telephone }}>
                                                                                
                                                                                <span id="atele" class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $errors->first('telephone') }}</strong>
                                                                                </span>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <strong>Email</strong>

                                                                            <!--Se inicia icono con campo de texto-->
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text">
                                                                                    <i class="fas fa-envelope"></i>
                                                                                </span>
                                                                                <input
                                                                                    type="email"
                                                                                    name="email"
                                                                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                                                    placeholder="example@exam.com"
                                                                                    value={{ $usuario->email }}>

                                                                                <span id="aemail" class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                                </span>

                                                                            </div>
                                                                            <!--Se finaliza icono con campo de texto-->

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    
                                                                    <div class="col-xs-6 col-sm-6 col-md-6">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div align="center">
                                                    <button id="updateprofile" class="btn btn-success">Update</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-12">

                                        <div id="contact" class="card">

                                            <form action="">

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
                                                        
                                                    </a>

                                                </div>
                                                <div align="center">
                                                    <button id="updatecompany" class="btn btn-success">Update</button>
                                                </div>
                                                
                                            </form>

                                        </div >

                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-12">

                                        <div id="information" class="card">
                                            <form action="{{ route('userUpdateAddress',$people->id)}}" method="POST" autocomplete="off">
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
                                                                        placeholder="03231"
                                                                        value={{ $people->zipcode}}
                                                                        >
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
                                                                        placeholder="Benito Juárez"
                                                                        value={{ $people->district}}>
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
                                                                        placeholder="Pedro Santacilia"
                                                                        value={{ $people->street}}>
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
                                                                        placeholder="1"
                                                                        value={{ $people->exteriornumber}}>
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
                                                                        placeholder="2"
                                                                        value={{ $people->insidenumber}}>
                                                                        <input
                                                                        hidden
                                                                        type="text"
                                                                        id="seccion"
                                                                        name="seccion"
                                                                        class="form-control"
                                                                        placeholder="2"
                                                                        value="{{ old('seccion') }}"">
                                                                    <span id="ainnumber" class="invalid-feedback" role="alert">
                                                                        <strong>This field must contain only numbers.</strong>
                                                                    </span>

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        
                                                    </div>

                                                </div>
                                                <div align="center">
                                                    <button id="updateaddress" class="btn btn-success">Update</button>
                                                </div>
                                                
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            
                        

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection