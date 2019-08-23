@extends('layouts.layout') @section('content')
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-12">

                    <div class="col-sm-4">

                        <select class="form-control">
                            <option>ALL</option>
                            <option>WDNG</option>
                            <option>WDF</option>
                        </select>

                    </div>
                    <a href="">
                        <i class="right fas fa-question-circle"></i>
                    </a>
                    <div class="col-md-5"></div>

                    <div class="col-md-2">

                        <a class="btn btn-dark" href="/customandcompanies">Back to company</a>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row mb-12">
                    <div class="col-sm-12">
                        <h1 align="center" class="m-0 text-dark">Branch office</h1><br>
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
                <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    @foreach ($branches as $branch)
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-link">
                            <div class="inner">
                                <div align="center">

                                    <img
                                        class="imgre img-circle elevation-2"
                                        src="{{ asset('assets/dist/img/HillsongThisisliving1.jpg') }}">
                                    <br>
                                </div>

                                <p>{{ $branch->name }}</p>
                                <div>
                                    <p>{{ $branch->street }},
                                        {{ $branch->exteriornumber }}-{{ $branch->insidenumber }},
                                        {{ $branch->zipcode }},
                                        {{ $branch->district }}</p>

                                </div>

                            </div>
                            <div align="right">
                                <a href="#">Inpection<i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    @endforeach

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <p >add Branch</p>

                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('createBranches',$company)}}" class="small-box-footer">Go
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

                <!-- /.row (main row) -->
            </div>
            <!-- /.container-fluid -->
        </section>
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