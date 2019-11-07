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
                Create company</a>
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
                    <div class="col-lg-3 col-md-4 col-sm-3 col-xs-3">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1" >
                                    <img 
                                        src="{{ Storage::url($company->companyimg)}}"
                                        style="max-width:100%;"
                                        alt="user">
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
                                                <a id="" class="btn default btn-outline" href="{{ route('companyDelete',$company->id)}}">
                                                    <i class="mdi mdi-close-circle"></i>
                                                </a>
                                            </li>
                                            <!-- <li>
                                                <a class="btn default btn-outline" href="#">
                                                    <i class="fa fa-user-plus"></i>
                                                </a>
                                                
                                            </li> -->
                                            <!-- <li>
                                                <a class="btn default btn-outline" href="{{ route('showBranches',$company->id)}}">
                                                    <i class="mdi mdi-arrow-right-bold"></i>
                                                </a>
                                                
                                            </li> -->
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
                                    <br><br>
                                    
                                    <div class="btn-group dropright">
                                        
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Contacts
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <h5 class="dropdown-header" style="color: #b60303; font-size: 13px;">Actions</h5>
                                            <li><a class="dropdown-item" href="{{ route('contactCompany') }}" style="font-size: 13px;"><i class="fa fa-user-plus"></i> Add contacts</a></li>
                                            <li><a class="dropdown-item" href="#" style="font-size: 13px;"><i class="fa fa-users"></i> See contacts</a></li>
                                            
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="btn-group dropright">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Branches
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

                                            <h5 class="dropdown-header" style="color: #b60303; font-size: 13px;">Actions</h5>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="{{ route('createBranches',$company->id)}}" style="font-size: 13px;"><i class="mdi mdi-plus-circle"></i> Create branch</a></li>
                                            <li><a class="dropdown-item" href="{{ route('showBranches',$company->id)}}" style="font-size: 13px;"><i class="fa fa-edit"></i> Edit branches</a></li>

                                            <div class="dropdown-divider"></div>
                                            <h5 class="dropdown-header" style="color: #b60303; font-size: 13px;">Branches</h5>
                                            <div class="dropdown-divider"></div>
                                            @foreach ($customers as $customer)
                                                @if($customer->companies_id == $company->id)
                                                    @if ($customer->acquisitions_id == "")
                                                        <li><a class="dropdown-item" href="{{ route('showBranchesProducts',[$customer->companies_id,$customer->bid])}}" style="font-size: 13px;">{{$customer->branchname}}</a></li>
                                                    @endif
                                                @endif
                                            @endforeach
                                            <p hidden>{{$i++}}</p>
                                        </div>
                                    </div>
                                    
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <!--Fin de la información de la empresa-->
                <!-- <button id="cargar" class="btn btn-warning">Cargar</button>
                <button id="bajar" class="btn btn-warning">Bajar</button>
                <div id="upload"></div> -->
                
                
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!--Inicia la ventana modal-->

</div>
<!-- ./wrapper -->
@endsection