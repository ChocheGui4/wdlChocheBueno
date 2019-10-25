 <?php $__env->startSection('content'); ?>
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
            href="<?php echo e(route('companyCreate')); ?>" 
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
    <!--  -->
    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item dropdown-toggle" href="">Submenu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu action</a></li>
                                        <li><a class="dropdown-item" href="#">Another submenu action</a></li>


                                        <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>
                                                <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
                                                <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Submenu action 2</a></li>
                                        <li><a class="dropdown-item" href="#">Another submenu action 2</a></li>


                                        <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Subsubmenu action 1 3</a></li>
                                                <li><a class="dropdown-item" href="#">Another subsubmenu action 2 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu 3</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Subsubmenu action 3 </a></li>
                                                <li><a class="dropdown-item" href="#">Another subsubmenu action 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
    <!--  -->
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1" >
                                    <img 
                                        src="<?php echo e(Storage::url($company->companyimg)); ?>"
                                        style="width:230px;height:230px;"
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
                                                <a id="down" class="btn default btn-outline" href="<?php echo e(route('companyDelete',$company->id)); ?>">
                                                    <i class="mdi mdi-close-circle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn default btn-outline" href="<?php echo e(route('showBranches',$company->id)); ?>">
                                                    <i class="mdi mdi-arrow-right-bold"></i>
                                                </a>
                                                
                                            </li>
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
                                        
                                        
                                        <div class="btn-group dropright">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Branch Office
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($customer->companies_id == $company->id): ?>
                                                        <?php if($customer->acquisitions_id != ""): ?>
                                                            <li><a class="dropdown-item" href="#"><?php echo e($customer->branchname); ?></a></li>
                                                            <!-- Level two dropdown-->
                                                                <li class="dropdown-submenu">
                                                                    <a id="dropdown-menu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                                                                    <ul aria-labelledby="dropdown-menu" class="dropdown-menu border-0 shadow">
                                                                    <li>
                                                                        <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                                                    </li>

                                                                <!-- Level three dropdown-->
                                                                <li class="dropdown-submenu">
                                                                <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                                                <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
                                                                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                                </ul>
                                                                </li>
                                                                <!-- End Level three -->

                                                                <li><a href="#" class="dropdown-item">level 2</a></li>
                                                                <li><a href="#" class="dropdown-item">level 2</a></li>
                                                            </ul>
                                                            </li>
            <!-- End Level two -->
 
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