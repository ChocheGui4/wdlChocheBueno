@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Companies</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Companies</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a 
            href="{{ route('companyCreate')}}" 
            class="btn pull-right hidden-sm-down"
            style="background: #31B90C; color: white;">
                <i class="mdi mdi-plus-circle"></i>
                Create</a>
        </div>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">

                <!--Inicio de información de la empresa-->
                <div class="row el-element-overlay">

                    @foreach ($companies as $company)
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ $company->companyimg }}" alt="user">
                                    <!-- <img src="{{ asset('bundle/assets/images/customers/HillsongThisisliving1.jpg') }}" alt="user"> -->
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li>
                                                <a
                                                    class="btn default btn-outline image-popup-vertical-fit"
                                                    href="{{ route('companyEdit',$company->id)}}">
                                                    <i class="mdi mdi-account-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn default btn-outline" href="javascript:void(0);">
                                                    <i class="mdi mdi-close-circle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn default btn-outline" href="{{ route('showBranches',$company->id)}}">
                                                    <i class="mdi mdi-arrow-right-bold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{ $company->companyname }}
                                    </h3>
                                    <small>{{ $company->street }},
                                        {{ $company->exteriornumber }}-{{ $company->insidenumber }},
                                        {{ $company->zipcode }},
                                        {{ $company->district }}</small>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--Fin de la información de la empresa-->
                
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!--Inicia la ventana modal-->

</div>
<!-- ./wrapper -->
@endsection