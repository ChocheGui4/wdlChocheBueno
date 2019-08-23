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
                        <h1 align="center" class="m-0 text-dark">Create Warriors User</h1>
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
                        <form action="{{ route('wluserUpdate',$usuario->id) }}" method="POST" autocomplete="off">
                            @csrf
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class=" col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <div >
                                                    <strong >Area</strong>
                                                    <i id="qwlarea" class="fas fa-question-circle"></i>
                                                    <select id="areas" name="areas"  class="form-control{{ $errors->has('areas') ? ' is-invalid' : '' }}"
                                                        >
                                                        <option>Dirección general</option>
                                                        <option>Antivirus</option>
                                                        <option>Administración y Recursos Humanos</option>
                                                        <option>Finanzas y Contabilidad</option>
                                                        <option>Ventas</option>
                                                        <option>Soporte</option>

                                                    </select>
                                                    <span id="wlarea" class="invalid-feedback" role="alert">
                                                        <strong>This field is required.</strong>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <strong>Email</strong>
                                                <i id="qwlemail" class="fas fa-question-circle"></i>

                                                <!--Se inicia icono con campo de texto-->
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                    <input
                                                        type="email"
                                                        name="email"
                                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                        value={{ $usuario->email }}>

                                                    <span id="wlemail" class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}Must have letters, signs and/or numbers follow "@" and domain</strong>
                                                    </span>

                                                </div>
                                                <!--Se finaliza icono con campo de texto-->

                                            </div>

                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                
                                                <div class="input-group mb-3">                                                    
                                                    <textarea hidden id="areainput" cols="30" rows="10">{{ $usuario->role }}</textarea>
                                                </div>
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
@endsection @section('scripts')
<script></script>
@endsection