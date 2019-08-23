@extends('layouts.layout')

<div class="wrapper">
    @section('content')

    <!-- iniContent Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-12">
                    <div class="col-sm-12">
                        <h1 align="center" class="m-0 text-dark">Create Branch</h1>
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('addBranches',$company) }}" method="POST" autocomplete="off">
                            @csrf
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class=" col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Branch name</strong>
                                                <i id="qnamecompany" class="fas fa-question-circle"></i>

                                                <!--Se inicia icono con campo de texto-->
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-building"></i>
                                                    </span>
                                                    <input
                                                        type="text"
                                                        id="companyname"
                                                        name="name"
                                                        class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                        value="{{ old('name') }}"
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
                                    </div>
                                    <div class="row">
                                        <div class=" col-sm-4 col-md-4">
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

                                </div>
                            </div>
                            <div align="center">
                                <button type="submit" class="btn btn-success">
                                    Add user
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