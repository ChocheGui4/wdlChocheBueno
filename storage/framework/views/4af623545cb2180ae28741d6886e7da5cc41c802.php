 
<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="row page-titles">
            <div class="col-md-7  align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Products</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    
                    <li class="breadcrumb-item active">Product</li>
                </ol>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-5 align-self-center">
                <a
                    href="#"
                    data-toggle="modal"
                    data-target="#WDNGmodal"
                    class="btn pull-right hidden-sm-down float-right"
                    style="background: #31B90C; color: white;">
                    <i class="mdi mdi-plus-circle"></i>
                    Add product</a>
            </div>
            
        </div>
        <!--Notificación-->
        <div class="jq-toast-wrap top-right">
            <div class="jq-toast-single jq-has-icon jq-icon-success" style="text-align: left; display: none;">
                <span class="jq-toast-loader jq-toast-loaded" style="-webkit-transition: width 3.1s ease-in;                       -o-transition: width 3.1s ease-in;                       transition: width 3.1s ease-in;                       background-color: #ff6849;"></span><span class="close-jq-toast-single">×</span><h2 class="jq-toast-heading">Welcome to Monster admin</h2>Use the predefined ones, or specify a custom position object.</div></div>
        <!--Notificación-->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div id="update" class="content-header">
                <div class="container-fluid">
                    <div class="row el-element-overlay">
                        <?php echo csrf_field(); ?>
                        <!-- <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="card">
                                <div class="el-card-item">
                                
                                    <div class="el-card-avatar el-overlay-1">
                                        <img
                                            class="card-img-top img-responsive"
                                            src="<?php echo e(Storage::url($product->urlimg)); ?>"
                                            style="height:190px;"
                                            alt="Card image cap">
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li>
                                                    <a
                                                        id="edit<?php echo e($i); ?>"
                                                        class="btn default btn-outline image-popup-vertical-fit"  
                                                        onClick="newmetod('#edit<?php echo e($i); ?>','#h3<?php echo e($i); ?>','#sm<?php echo e($i); ?>');" 
                                                        data-toggle="modal"
                                                        data-target="#WDNGcreate">
                                                        <i class="mdi mdi-plus-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a 
                                                        id="down"
                                                        class="btn default btn-outline" 
                                                        href="<?php echo e(route('productDeleteGeneral',$product->id)); ?>">
                                                        <i class="mdi mdi-close-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        class="btn default btn-outline"
                                                        href="<?php echo e(route('productsShowSpecific',$product->id)); ?>">
                                                        <i class="mdi mdi-arrow-right-bold"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                        <h3 id="h3<?php echo e($i); ?>" class="box-title"><?php echo e($product->name); ?></h3>
                                        <small id="sm<?php echo e($i); ?>"><?php echo e($product->description); ?></small>
                                        
                                        
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <div id="example23_wrapper" class="dataTables_wrapper">
                                            <table
                                                id="table"
                                                class="display nowrap table table-hover table-striped table-bordered dataTable table-sm"
                                                cellspacing="0"
                                                width="100%"
                                                role="grid"
                                                aria-describedby="example23_info"
                                                style="width: 100%;">
                                                <thead>
                                                    <tr role="row">
                                                        <th
                                                            class="sorting_asc"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width: 300px;">Name</th>
                                                        <th
                                                            class="sorting_asc"
                                                            tabindex="0"
                                                            aria-controls="example23"
                                                            rowspan="1"
                                                            colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Name: activate to sort column descending"
                                                            style="width:400px;">Description</th>
                                                        <th
                                                            style="width: 201px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div>
                                                            <tr role="row" class="odd">
                                                                
                                                                <td><strong> <?php echo e($product->name); ?> </strong></td>
                                                                <td><strong> <?php echo e($product->description); ?> </strong></td>
                                                                <td align="center" >
                                                                    
                                                                    <a
                                                                        id="edit<?php echo e($i); ?>"
                                                                        class="btn image-popup-vertical-fit"  
                                                                        style="background: #31B90C; color: white;"
                                                                        onClick="newmetod('#edit<?php echo e($i); ?>','#h3<?php echo e($i); ?>','#sm<?php echo e($i); ?>');" 
                                                                        data-toggle="modal"
                                                                        data-target="#WDNGcreate">
                                                                        <i class="mdi mdi-plus-circle"></i>
                                                                    </a>
                                                                    <a 
                                                                        id="down"
                                                                        class="btn" 
                                                                        style="background: #b60303; color: white;"
                                                                        href="<?php echo e(route('productDeleteGeneral',$product->id)); ?>">
                                                                        <i class="mdi mdi-close-circle"></i>
                                                                    </a>
                                                                    <a
                                                                        class="btn"
                                                                        style="background: #00A7D9; color: white"
                                                                        href="<?php echo e(route('productsShowSpecific',$product->id)); ?>">
                                                                        <i class="mdi mdi-arrow-right-bold"></i>
                                                                    </a>
                                                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                                                </td>
                                                            </tr>
                                                        </div>
                                                        <h3 hidden id="h3<?php echo e($i); ?>" class="box-title"><?php echo e($product->name); ?></h3>
                                                        <small hidden id="sm<?php echo e($i); ?>"><?php echo e($product->description); ?></small>
                                                        <p hidden><?php echo e($i++); ?></p>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                </tbody>
                                            </table>                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!--Inicia la ventana modal para agregar productos generales-->
    <div
        id="WDNGmodal"
        class="modal fade"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">Warriors Defender</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <form
                    id="productcreate-form"
                    action="<?php echo e(route('productCreate')); ?>"
                    method="POST"
                    autocomplete="off"
                    enctype="multipart/form-data"
                    novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3 class="modal-title">Product Name</h3>
                                <div class="form-group">
                                    <div class="controls">
                                        <input 
                                        id="productnameuc"                            
                                        onkeyup="ucwords(this,'#productnameuc');"
                                        type="text" 
                                        name="name" 
                                        class="form-control" 
                                        value="<?php echo e(old('name')); ?>"
                                        required 
                                        minlength="3"
                                        maxlength="60"
                                        placeholder="Product title"
                                        data-validation-required-message="This field is required">
                                    </div>
                                </div>            
                                <span class="invalid-feedback" role="alert" style="color:red;">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br>
                                <h3>Description</h3> 
                                <div class="form-group">
                                    <div class="controls">
                                        <textarea 
                                            id="description"
                                            name="description" 
                                            class="form-control" 
                                            rows="5" 
                                            cols="2" 
                                            value="<?php echo e(old('description')); ?>"
                                            required
                                            minlength="10"
                                            maxlength="120"
                                            placeholder="Product description"
                                            data-validation-required-message="This field is required"></textarea>
                                    </div>
                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br>
                                <h3>Add image</h3> 
                                <div class="form-group">
                                    <div class="controls">
                                    <input type="file" id="urlimg" name="urlimg" required accept="image/jpeg,.png">
                                    </div>
                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                        <strong><?php echo e($errors->first('companyimg')); ?></strong>
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button
                            id="click"
                            type="submit"
                            
                            style="background: #b60303; color: white;"
                            class="btn waves-effect waves-light">Save product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Termina la ventana modal-->


    <!--Inicia la ventana modal de agrgar productos específicos-->
    <div
        id="WDNGcreate"
        class="modal fade"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 id="htitle" class="modal-title">Warriors Defender</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <form
                    id="productadd-form"
                    action="<?php echo e(route('productAddSpecific')); ?>"
                    method="POST"
                    autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3 class="modal-title">Characteristics</h3>
                                <div class="form-group">
                                    <input hidden id="name" type="text"
                                    name="name"
                                    class="form-control"required
                                    placeholder="Warriors Defender Product">
                                </div>            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Maker</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="maker" class="form-control">
                                                <?php $__currentLoopData = $makers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($maker->namem); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Processor</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="processor" class="form-control">
                                                <?php $__currentLoopData = $processors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $processor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($processor->namep); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Memory</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="memory" class="form-control">
                                                <?php $__currentLoopData = $memories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($memory->sizem); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Disc</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="disc" class="form-control">
                                                <?php $__currentLoopData = $discs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($disc->typed); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div id="numuser"  class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Number users</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="numberuser" class="form-control">
                                                <?php $__currentLoopData = $numberusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($nuser->user); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Years</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="year" class="form-control">
                                                <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($year->year); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div id="storagemail" class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Storage mail</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="storagem" class="form-control">
                                                <?php $__currentLoopData = $mails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($mail->storagem); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div id="storage"  class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Storage</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="storage" class="form-control">
                                                <?php $__currentLoopData = $storage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($sto->storage); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            
                            <div id="numberstorage"  class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Number users storage</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="numberstorage" class="form-control">
                                                <?php $__currentLoopData = $nus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nuss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option><?php echo e($nuss->userstorage); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                            <div id="numberstorage"  class="col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <strong>Offer</strong>
                                    <!--Se inicia icono con campo de texto-->
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <select name="offer" class="form-control">
                                                
                                                <option>Site</option>
                                                <option>Cloud</option>
                                                
                                            </select>

                                        </div>
                                    </div>
                                    <!--Se finaliza icono con campo de texto-->
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button
                            type="submit"
                            style="background: #b60303; color: white;"
                            class="btn waves-effect waves-light">Save product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Termina la ventana modal-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.wdlicenciamiento', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>