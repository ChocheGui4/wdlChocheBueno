@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Branch</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Company</li>
                <li class="breadcrumb-item active">Branch</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <button
                class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10">
                <i class="ti-settings text-white"></i>
            </button>
            <a
                href="{{ route('createBranches',$company)}}"
                class="btn pull-right hidden-sm-down btn-success">
                <i class="mdi mdi-plus-circle"></i>
                Create</a>

        </div>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row el-element-overlay">

                    @foreach ($branches as $branch)
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="{{ asset('bundle/assets/images/users/company.png') }}" alt="user">
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li>
                                                <a
                                                    class="btn default btn-outline image-popup-vertical-fit"
                                                    href="../plugins/images/users/1.jpg">
                                                    <i class="mdi mdi-account-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn default btn-outline" href="javascript:void(0);">
                                                    <i class="mdi mdi-close-circle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="btn default btn-outline"
                                                    href="{{ route('showBranches',$company)}}">
                                                    <i class="mdi mdi-arrow-right-bold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{ $branch->name }}
                                    </h3>
                                    <small>{{ $branch->street }},
                                        {{ $branch->exteriornumber }}-{{ $branch->insidenumber }},
                                        {{ $branch->zipcode }},
                                        {{ $branch->district }}</small>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

    </div>
    <!-- /.content-wrapper -->
    <!--Inicia la ventana modal-->

</div>
<!-- ./wrapper -->
@endsection