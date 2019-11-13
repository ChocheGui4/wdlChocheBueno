@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">
    
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Contact</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="/companies">Contact company</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a
                href="{{ route('companyShow')}}"
                class="btn pull-right hidden-sm-down"
                style="background: #383F49; color: white">
                <i class="mdi mdi-arrow-left"></i>
                Back</a>
        </div>
    </div>

    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card wizard-content">
                    <div class="card-block">
                        <form class="" action="{{ route('contactAddCompany') }}" method="POST" autocomplete="off" novalidate>
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
                                                                            onkeyup="mayus(this);"
                                                                            type="text"
                                                                            name="name"
                                                                            class="form-control required"
                                                                            value="{{ old('name') }}"
                                                                            placeholder="Example: Juana"
                                                                            required
                                                                            maxlength="25"
                                                                            pattern="^((([A-ZÑÁÉÍÓÚ]{3,})+[\s]*)+){1,}$" 
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
                                                                        onkeyup="mayus(this);"
                                                                        type="text"
                                                                        name="lastname"
                                                                        class="form-control required"
                                                                        value="{{ old('lastname') }}"
                                                                        placeholder="Example: Juárez"
                                                                        required
                                                                        maxlength="25"
                                                                        pattern="^((([A-ZÑÁÉÍÓÚ]{3,})+[\s]*)+){1,}$" 
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
                                                                        value="{{ old('email1') }}"
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
                                                                <select class="form-control" name="area" required>

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
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <div id="">
                                                                <strong >Company</strong>
                                                                <span class="text-danger">*</span>
                                                                <select class="form-control" name="companyname" required>
                                                                    @foreach ($companies as $company)
                                                                        <option>{{ $company->companyname}}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>

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