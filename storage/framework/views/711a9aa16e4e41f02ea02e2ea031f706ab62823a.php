 
<?php $__env->startSection('content'); ?>
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
                href="<?php echo e(route('customerCreate')); ?>"
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

                    <?php $__currentLoopData = $peoples; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $people): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1">
                                    <img
                                        src="<?php echo e(Storage::url($people->img)); ?>"
                                        style="width:230px;height:230px;"
                                        alt="user">
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li>
                                                <a
                                                    class="btn default btn-outline image-popup-vertical-fit"
                                                    href="<?php echo e(route('customerEdit',$people->id)); ?>">
                                                    <i class="mdi mdi-account-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a id="down" href="<?php echo e(route('customerDelete',$people->id)); ?>" class="btn default btn-outline" >
                                                    <i class="mdi mdi-close-circle"></i>
                                                </a>                                                
                                            </li>
                                            <li>
                                                <a class="btn default btn-outline" href="<?php echo e(route('showPeopleProducts',$people->id)); ?>">
                                                    <i class="mdi mdi-arrow-right-bold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title"><?php echo e($people->name); ?>

                                    </h3>
                                    <small><?php echo e($people->email); ?></small>
                                    
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Inicia la ventana modal-->
                    
                    <!--Termina la ventana modal-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $('#swettb').on('click', function(){
        alert("adaffd");
        console.log("1111");
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.wdlicenciamiento', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>