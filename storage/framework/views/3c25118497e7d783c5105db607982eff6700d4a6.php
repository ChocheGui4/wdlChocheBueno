 
<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="row page-titles">
        <div class="col-md-8  align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Branch</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="/companies">Company</a>
                </li>
                <li class="breadcrumb-item active">Branch</li>
            </ol>
        </div>

        <div class="col-md-4 ">
            <div class="col-md-12 col-sm-12 col-xs-12 align-self-center">
                <a
                    href="<?php echo e(route('companyShow')); ?>"
                    class="btn pull-right hidden-sm-down" 
                    style="background: #383F49; color: white">
                    <i class="mdi mdi-arrow-left"></i>
                    Back</a>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9 align-self-center">

                <a
                    href="<?php echo e(route('createBranches',$company)); ?>"
                    class="btn pull-right hidden-sm-down btn-success float-right">
                    <i class="mdi mdi-plus-circle"></i>
                    Create</a>

            </div>

        </div>

    </div>
    <!-- <div class="row page-titles">
        <div class="col-md-3 ">
                <a
                    href="<?php echo e(route('createBranches',$company)); ?>"
                    class="btn pull-right hidden-sm-down btn-success float-left">
                    <i class="mdi mdi-plus-circle"></i>
                    Create</a>
        </div>
    </div> -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row el-element-overlay">

                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img src="<?php echo e(Storage::url($branch->branchimg)); ?>" 
                                    style="width:230px;height:230px;"
                                    alt="user">
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li>
                                                <a
                                                    class="btn default btn-outline image-popup-vertical-fit"
                                                    href="<?php echo e(route('branchEdit',[$branch->id,$company])); ?>">
                                                    <i class="mdi mdi-account-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="down" class="btn default btn-outline" href="<?php echo e(route('deleteBranch',$branch->id)); ?>">
                                                    <i class="mdi mdi-close-circle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="btn default btn-outline"
                                                    href="<?php echo e(route('showBranchesProducts',[$company,$branch->id])); ?>">
                                                    <i class="mdi mdi-arrow-right-bold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title"><?php echo e($branch->branchname); ?>

                                    </h3>
                                    <small><?php echo e($branch->street); ?>,
                                        <?php echo e($branch->exteriornumber); ?>-<?php echo e($branch->insidenumber); ?>,
                                        <?php echo e($branch->zipcode); ?>,
                                        <?php echo e($branch->district); ?></small>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.wdlicenciamiento', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>