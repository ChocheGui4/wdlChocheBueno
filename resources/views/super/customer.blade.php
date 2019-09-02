@extends('layouts.wdlicenciamiento') 
@section('content')
<div class="wrapper">
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Customers</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Customers</li>
                
                
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">

            <a
                href="{{ route('customerCreate')}}"
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
            
                <!--Inicio de información de la empresa-->
                <div class="row el-element-overlay">

                    @foreach ($usuarios as $people)
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img
                                        src="{{ asset('bundle/assets/images/users/HillsongThisisliving1.jpg') }}"
                                        alt="user">
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li>
                                                <a
                                                    class="btn default btn-outline image-popup-vertical-fit"
                                                    href="{{ route('customerEdit',$people->people_id)}}">
                                                    <i class="mdi mdi-account-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="deletecustomer" data-toggle="modal" data-target="#myModal" class="btn default btn-outline" >
                                                    <i class="mdi mdi-close-circle"></i>
                                                </a>
                                                
                                            </li>
                                            <li>
                                                <a class="btn default btn-outline" href="javascript:void(0);">
                                                    <i class="mdi mdi-arrow-right-bold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{ $people->name }}
                                    </h3>
                                    <small>{{ $people->email }}</small>
                                    
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Inicia la ventana modal-->
                    <div
                        class="modal fade"
                        id="myModal"
                        style="display: none;"
                        aria-modal="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    
                                    <h4 class="modal-title"><i class="fa fa-exclamation-triangle deletet"></i>Delete</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div align="center" class="modal-body">
                                    <h5>Are you sure?</h5>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="{{ route('customerDelete',$people->people_id) }}" >Confirm</a>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!--Termina la ventana modal-->
                    @endforeach

                </div>
                <!--Fin de la información de la empresa-->

            </div>
            <!-- /.container-fluid -->
        </div>
        
    </div>
    <!-- /.content-wrapper -->   
    
</div>
<!-- ./wrapper -->
<!-- ./wrapper -->


@endsection
@section('scripts')
<script>
function Sweetal() {
    Swal.fire({
        position: 'top-end',
        type: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
    })
}
$("#alertt").click(function(){
swal({
title:’Hola mundo!’,
text:"Hola, estamos probando Sweet Alert 2",
type:’success’
})

});
</script>
@endsection