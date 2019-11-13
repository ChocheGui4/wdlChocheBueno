 <?php $__env->startSection('content'); ?>
<div id="looooad" class="wrapper">
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
            href="<?php echo e(route('companyCreate')); ?>" 
            class="btn pull-right hidden-sm-down"
            style="background: #31B90C; color: white;">
                <i class="mdi mdi-plus-circle"></i>
                Create company</a>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p id="alert1"><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">

                <!--Inicio de información de la empresa-->
                <div class="row el-element-overlay">
    
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-3 col-xs-3">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1" >
                                    <img 
                                        src="<?php echo e(Storage::url($company->companyimg)); ?>"
                                        style="max-width:100%;"
                                        alt="user">
                                    <!-- <img src="<?php echo e(asset('bundle/assets/images/customers/HillsongThisisliving1.jpg')); ?>" alt="user"> -->
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li>
                                                <a
                                                    class="btn default btn-outline image-popup-vertical-fit"
                                                    href="<?php echo e(route('companyEdit',$company->id)); ?>">
                                                    <i class="mdi mdi-account-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="del" class="btn default btn-outline" href="<?php echo e(route('companyDelete',$company->id)); ?>">
                                                    <i class="mdi mdi-close-circle"></i>
                                                </a>
                                            </li>
                                            <!-- <li>
                                                <a class="btn default btn-outline" href="#">
                                                    <i class="fa fa-user-plus"></i>
                                                </a>
                                                
                                            </li> -->
                                            <!-- <li>
                                                <a class="btn default btn-outline" href="<?php echo e(route('showBranches',$company->id)); ?>">
                                                    <i class="mdi mdi-arrow-right-bold"></i>
                                                </a>
                                                
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="el-card-content">
                                    <h3 class="box-title"><?php echo e($company->companyname); ?>

                                    </h3>
                                    <small><?php echo e($company->street); ?>,
                                        <?php echo e($company->exteriornumber); ?>-<?php echo e($company->insidenumber); ?>,
                                        <?php echo e($company->zipcode); ?>,
                                        <?php echo e($company->district); ?></small>
                                    <br><br>
                                    
                                    <div class="btn-group dropright">
                                        
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Contacts
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <h5 class="dropdown-header" style="color: #b60303; font-size: 13px;">Actions</h5>
                                            <li><a class="dropdown-item" href="<?php echo e(route('contactCompany')); ?>" style="font-size: 13px;"><i class="fa fa-user-plus"></i> Add contacts</a></li>
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
                                            <li><a class="dropdown-item" href="<?php echo e(route('createBranches',$company->id)); ?>" style="font-size: 13px;"><i class="mdi mdi-plus-circle"></i> Create branch</a></li>
                                            <li><a class="dropdown-item" href="<?php echo e(route('showBranches',$company->id)); ?>" style="font-size: 13px;"><i class="fa fa-edit"></i> Edit branches</a></li>

                                            <div class="dropdown-divider"></div>
                                            <h5 class="dropdown-header" style="color: #b60303; font-size: 13px;">Branches</h5>
                                            <div class="dropdown-divider"></div>
                                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($customer->companies_id == $company->id): ?>
                                                    <?php if($customer->acquisitions_id == ""): ?>
                                                        <li><a class="dropdown-item" href="<?php echo e(route('showBranchesProducts',[$customer->companies_id,$customer->bid])); ?>" style="font-size: 13px;"><?php echo e($customer->branchname); ?></a></li>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <p hidden><?php echo e($i++); ?></p>
                                        </div>
                                    </div>
                                    
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.wdlicenciamiento', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>