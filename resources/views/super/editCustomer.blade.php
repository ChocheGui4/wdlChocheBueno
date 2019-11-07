@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">
    
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Customer</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="/customers">Customer</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">

            <a
                href="/customers"
                class="btn pull-right hidden-sm-down"
                style="background: #383F49; color: white">
                <i class="mdi mdi-arrow-left"></i>
                Back</a>

        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <!---->
            <div class="row mb-12">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <button id="showcompany" class="btn btn-link">

                                <h5>Profile<a></a>
                                </h5>

                            </button>
                        </div>
                        <!-- <div class="col-sm-2">
                            <button id="showprofile" class="btn btn-link">
                                
                                <h5>Profile<a></a>
                                </h5>
                                
                            </button>
                        </div> -->
                        <div class="col-xl-3">
                            <button id="showinformation" class="btn btn-link">

                                <h5>Information<a></a>
                                </h5>

                            </button>
                        </div>
                        
                        
                    </div>

                </div>
                    
            </div>
            <!---->
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p id="alert1">{{ $message }}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                   
                    <div class="row ">
                        <div class="col-md-12">
                            <!--Comienza el perfil-->
                            <div id="contact" class="card">

                                <form action="{{ route('customerUpdateProfile',[$people->id,$customer]) }}" 
                                    method="POST" 
                                    enctype="multipart/form-data"
                                    autocomplete="off" 
                                    novalidate>
                                    <div  class="card-block">

                                        @csrf

                                        <div class="row">
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <br><br><br><br>
                                                <div class="el-card-avatar el-overlay-1">
                                                    <img
                                                        src="{{ Storage::url($people->img) }}"
                                                        style="width:200px;height: 190px;"
                                                        class="img-circle elevation-2"
                                                        alt="User Image">
                                                </div>
                                                <br><br>
                                                <input type="file" name="img" accept="image/jpeg,.png">
                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                    <strong>{{ $errors->first('companyimg') }}</strong>
                                                </span>
                                            </div>
                                            <div class=" col-md-9 col-sm-9 col-xs-9">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                        <strong>Name</strong>
                                                        <!--Se inicia icono con campo de texto-->
                                                        <div class="controls">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-building"></i>
                                                                </span>
                                                                <input
                                                                    id="nameuc"
                                                                    onkeyup="mayus(this);"
                                                                    type="text"
                                                                    name="name"
                                                                    class="form-control "
                                                                    value="{{$people->name}}"
                                                                    placeholder="The beauty S.A. de C.V."
                                                                    required
                                                                    maxlength="25"
                                                                    pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                    data-validation-pattern-message="Name must contain at least 3 letters">

                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            </div>
                                                            <!--Se finaliza icono con campo de texto-->

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <!--  -->
                                                        <div class="form-group">
                                                            <strong>Lastname</strong>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file"></i>
                                                                    </span>
                                                                    <input
                                                                        id="lastnameuc"
                                                                        onkeyup="mayus(this);"
                                                                        type="text"
                                                                        id="lastname"
                                                                        name="lastname"
                                                                        class="form-control"
                                                                        value="{{$people->lastname}}"
                                                                        required
                                                                        maxlength="35"
                                                                        pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                        data-validation-pattern-message="Lastname must contain at least 3 letters">
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                                </span>
                                                            </div>
                                                            <!--Se finaliza icono con campo de texto-->
                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <!--  -->
                                                        <div class="form-group">
                                                            <strong>RFC</strong>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        onkeyup="mayus(this);"
                                                                        id="companyrfc"
                                                                        name="rfc"
                                                                        class="form-control {{ $errors->has('companyrfc') ? ' is-invalid' : '' }}"
                                                                        value="{{$people->rfc}}"
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
                                                            <!--Se finaliza icono con campo de texto-->
                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <!--  -->
                                                        <div class="form-group">
                                                            <strong>First Telephone</strong>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-mobile"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        data-mask="000-000-0000"
                                                                        id="companytelephone"
                                                                        name="telephone1"
                                                                        required
                                                                        class="form-control {{ $errors->has('companytelephone') ? ' is-invalid' : '' }}"
                                                                        value="{{$people->telephone1}}"
                                                                        placeholder="5523212321"
                                                                        required
                                                                        pattern="[0-9].{11}" 
                                                                        data-validation-pattern-message="The telephone number must have 10 digits">
                                                                        <input
                                                                        hidden
                                                                        type="text"
                                                                        id="seccioncompany"
                                                                        name="seccioncompany"
                                                                        class="form-control"
                                                                        placeholder="2"
                                                                        value="{{ old('seccioncompany') }}">
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('telephone1') }}</strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <!--  -->
                                                        <div class="form-group">
                                                            <strong>Second Telephone</strong>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-mobile"></i>
                                                                    </span>
                                                                    @switch(true)
                                                                        @case($people->telephone2=="000-000-0000")
                                                                            <input
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                id="tele"
                                                                                class="form-control"
                                                                                value=""
                                                                                placeholder="Example: 5523212321">
                                                                            @break
                                                                        @case($people->telephone2!="000-000-0000")
                                                                            <input
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                id="tele"
                                                                                class="form-control {{ $errors->has('companyname') ? ' is-invalid' : '' }}"
                                                                                value="{{$people->telephone2}}"
                                                                                placeholder="Example: 5523212321">
                                                                            @break
                                                                    @endswitch
                                                                    
                                                                    @switch(true)
                                                                        @case($people->telephone2=="000-000-0000")
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
                                                                            @break
                                                                        @case($people->telephone2!="000-000-0000")
                                                                            <input
                                                                                hidden
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                id="tele2"
                                                                                name="telephone2"
                                                                                class="form-control {{ $errors->has('companyname') ? ' is-invalid' : '' }}"
                                                                                value="{{$people->telephone2}}"
                                                                                required
                                                                                placeholder="Example: 5523212321"
                                                                                pattern="[0-9].{11}" 
                                                                                data-validation-pattern-message="The telephone number must have 10 digits">
                                                                            @break
                                                                    @endswitch
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('telephone2') }}</strong>
                                                                </span>
                                                            </div>
                                                            <!--Se finaliza icono con campo de texto-->

                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <strong>First Email</strong>
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="email"
                                                                        class="form-control{{ $errors->has('email1') ? ' is-invalid' : '' }}"
                                                                        value="{{$people->email}}"
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
                                                        <!--  -->
                                                    </div>                                                    
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <strong>Second Email</strong>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    
                                                                        @switch(true)
                                                                            @case($people->email2=="default@default.com")
                                                                                <input
                                                                                    type="text"
                                                                                    id="em2"
                                                                                    
                                                                                    class="form-control "
                                                                                    value=""
                                                                                    placeholder="example: example@exam.com">
                                                                                @break
                                                                            @case($people->email2!="default@default.com")
                                                                                <input
                                                                                    type="text"
                                                                                    id="em2"
                                                                                    
                                                                                    class="form-control "
                                                                                    value="{{$people->email2}}"
                                                                                    placeholder="example: example@exam.com">
                                                                                @break
                                                                        @endswitch
                                                                        @switch(true)
                                                                            @case($people->email2=="")
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
                                                                                @break
                                                                            @case($people->email2!="")
                                                                                <input
                                                                                    hidden
                                                                                    type="text"
                                                                                    id="ema2"
                                                                                    name="email2"
                                                                                    class="form-control"
                                                                                    value="{{$people->email2}}"
                                                                                    required
                                                                                    placeholder="example@exam.com"
                                                                                    maxlength="45"
                                                                                    pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                                    data-validation-pattern-message="This is not a valid email">
                                                                                @break
                                                                        @endswitch
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong>{{ $errors->first('email2') }}</strong>
                                                                </span>
                                                            </div>
                                                            <!--Se finaliza icono con campo de texto-->

                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div align="center">
                                            <button id="updatecompany" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </form>

                            </div >
                            <!--Termina el perfil-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="information" class="card">
                                <form action="{{ route('customerUpdateAddress',[$people->id,$customer])}}" method="POST" autocomplete="off" novalidate>
                                    <div id="bodyaddress" class="card-block">
                                        @csrf
                                        <div class="row">
                                            <div class=" col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>Zip code</strong>
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
                                                                value="{{$people->zipcode}}"
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
                                                                value="{{$people->district}}"
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
                                                                value="{{$people->street}}"
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
                                                                value="{{$people->exteriornumber}}"
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
                                                                value="{{$people->insidenumber}}"
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
                                    <div align="center">
                                        <button id="updateaddress" class="btn btn-success">Update</button>
                                    </div>
                                    <input
                                        hidden
                                        type="text"
                                        id="seccion"
                                        name="seccion"
                                        class="form-control"
                                        placeholder="2"
                                        value="{{ old('seccion') }}">                                    
                                </form>

                            </div>

                        </div>
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