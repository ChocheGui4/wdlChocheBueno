@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">
    @csrf
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Customers</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Customers</li>
                <li class="breadcrumb-item active">Edit</li>
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
                <div class="row mb-12">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-2">
                                <button id="showprofile" class="btn btn-link">
                                    
                                    <h5>Profile<a></a>
                                    </h5>
                                    
                                </button>
                            </div>
                            <div class="col-xl-3">
                                <button id="showinformation" class="btn btn-link">

                                    <h5>Information<a></a>
                                    </h5>

                                </button>
                            </div>
                            
                            
                        </div>

                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div id="profile" class="card">
                                        
                                            <!---->
                                            <form action="{{ route('customerUpdateProfile',$peoples->id) }}" method="POST" autocomplete="off">
                                                <div class="card-block">                                                
                                                
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
                                                                            <i id="qname" class="fa fa-question-circle"></i>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-addon">
                                                                                    <i class="mdi mdi-lead-pencil"></i>
                                                                                </span>
                                                                                <input
                                                                                    type="text"
                                                                                    name="name"
                                                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                                    value={{$peoples->name}}
                                                                                    placeholder="Juana">
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                                        
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
                                                                                    value={{$peoples->lastname}}
                                                                                    placeholder="Juárez">
                                                                            </div>
                                                            <!--Se finaliza icono con campo de texto-->

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6 col-sm-6 col-md-6">
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
                                                                                    value={{$peoples->telephone}}
                                                                                    placeholder="5523212321"
                                                                                    data-mask="(999) 9999999">
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-6 col-sm-6 col-md-6">
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
                                                                                    value={{$peoples->rfc}}
                                                                                    placeholder="RJSU987635HYS87J">

                                                                            </div>
                                                                    <!--Se finaliza icono con campo de texto-->

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                        

                                                            </div>
                                                        </div>
                                                                
                                                            
                                                    </div>
                                                    <div align="center">
                                                    <button id="updateprofile" class="btn btn-success">Update</button>
                                                </div>
                                                </div>
                                                
                                            </form>

                                            <!---->
                                            

                                        
                                        
                                        

                                    </div>

                                </div>
                            </div>
                            
                            <div class="row">

                                <div class="col-md-12">

                                    <div id="information" class="card">
                                        <a name="address"></a>

                                        <div id="bodyaddress" class="card-block">

                                            @csrf
                                            <!---->
                                            <form action="{{ route('customerUpdateAddress',$peoples->id)}}" method="POST" autocomplete="off">
                                                <div id="bodyaddress" class="card-body">

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
                                                                        value={{$peoples->zipcode}}
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
                                                                        value={{$peoples->district}}
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
                                                                        value={{$peoples->street}}
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
                                                                        value={{$peoples->exteriornumber}}
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
                                                                        value={{$peoples->insidenumber}}
                                                                        placeholder="2">



                                                                        <input
                                                                        hidden
                                                                        type="text"
                                                                        id="seccion"
                                                                        name="seccion"
                                                                        class="form-control"
                                                                        placeholder="2"
                                                                        value="{{ old('seccion') }}"">

                                                                </div>
                                                                <!--Se finaliza icono con campo de texto-->

                                                            </div>
                                                        </div>

                                                    </div>
                                                    

                                                </div>
                                                <div align="center">
                                                    <button id="updateaddress" class="btn btn-success">Update</button>
                                                </div>
                                                
                                            </form>
                                            <!---->
                                            

                                        </div>

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