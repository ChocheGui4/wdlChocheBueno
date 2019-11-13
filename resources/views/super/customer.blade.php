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
                class="btn pull-right hidden-sm-down"
                style="background: #31B90C; color: white;">
                <i class="mdi mdi-plus-circle"></i>
                Create</a>

        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p id="alert1">{{ $message }}</p>
        </div>
    @endif
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            
                <!--Inicio de información de la empresa-->
                <div class="row el-element-overlay">

                    @foreach ($peoples as $people)
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img
                                        src="{{ Storage::url($people->img)}}"
                                        style="max-width:100%;"
                                        alt="user">
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li>    
                                                <a
                                                    class="btn default btn-outline image-popup-vertical-fit"
                                                    href="{{ route('customerEdit',$people->id)}}">
                                                    <i class="mdi mdi-account-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="down" href="{{ route('customerDelete',$people->id)}}" class="btn default btn-outline" >
                                                    <i class="mdi mdi-close-circle"></i>
                                                </a>                                                
                                            </li>
                                            <!-- <li>
                                                <a class="btn default btn-outline" href="{{ route('showPeopleProducts',$people->id)}}">
                                                    <i class="mdi mdi-arrow-right-bold"></i>
                                                </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{ $people->name }}
                                    </h3>
                                    <small>{{ $people->email }}</small>
                                    
                                    <br><br>
                                    <div class="btn-group dropright">
                                        
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Add Product
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <h5 class="dropdown-header" style="color: #b60303; font-size: 13px;">Products</h5>
                                            <div class="dropdown-divider"></div>
                                            @foreach ($productos as $prod)
                                                    <li><a class="dropdown-item" href="#" style="font-size: 13px;">{{$prod->name}}</a></li>
                                            @endforeach
                                            
                                            
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="btn-group dropright">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acquired
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

                                            <h5 class="dropdown-header" style="color: #b60303; font-size: 13px;">Products</h5>
                                            <div class="dropdown-divider"></div>
                                            @foreach ($product as $prod)
                                                @if($people->id == $prod->people_id)
                                                    <li><a class="dropdown-item" href="{{ route('AddCustomerProduct',[$people->id,$prod->id])}}" style="font-size: 13px;">{{$prod->name}}</a></li>
                                                @endif
                                            @endforeach
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Inicia la ventana modal-->
                    
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
<!--  Sweet Alert-->

<!-- End Sweet Alert -->

@endsection
@section('scripts')
<script>
    $('#swettb').on('click', function(){
        alert("adaffd");
        console.log("1111");
    });
</script>
@endsection