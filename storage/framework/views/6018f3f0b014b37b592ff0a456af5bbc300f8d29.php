 <?php $__env->startSection('content'); ?>
<div class="wrapper">
    
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Branch</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/home">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="/companies">Company</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="/companies">Branch</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <a
                href="<?php echo e(route('showBranches',$Company)); ?>"
                class="btn pull-right hidden-sm-down"
                style="background: #383F49; color: white">
                <i class="mdi mdi-arrow-left"></i>
                Back</a>

        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <!---->
            <div class="row mb-12">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <button id="showcompany" class="btn btn-link">

                                <h5>Company<a></a>
                                </h5>

                            </button>
                        </div>
                        <div class="col-sm-2">
                            <button id="showprofile" class="btn btn-link">
                                
                                <h5>Profile<a></a>
                                </h5>
                                
                            </button>
                        </div>
                        <div class="col-xl-3">
                            <button id="showinformation" class="btn btn-link">

                                <h5>Information<a></a>
                                </h5>

                            </button>
                        </div>
                        
                        
                    </div>

                </div>
                    
            </div>
            <!---->
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p id="alert1"><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12">

                            <div id="contact" class="card">

                                <form action="<?php echo e(route('branchUpdateCompany',[$branch->id,$Company])); ?>" 
                                    method="POST" 
                                    enctype="multipart/form-data"
                                    autocomplete="off" 
                                    novalidate>
                                    <div  class="card-block">

                                        <?php echo csrf_field(); ?>

                                        <div class="row">
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <br><br>
                                                <div class="el-card-avatar el-overlay-1">
                                                    <img
                                                        src="<?php echo e(Storage::url($branch->branchimg)); ?>"
                                                        style="width:200px;height: 190px;"
                                                        class="img-circle elevation-2"
                                                        alt="User Image">
                                                </div>
                                                <br><br>
                                                <input type="file" name="branchimg">
                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                    <strong><?php echo e($errors->first('branchimg')); ?></strong>
                                                </span>
                                            </div>
                                            <div class=" col-md-9 col-sm-9 col-xs-9">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <strong>Branch name</strong>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-building"></i>
                                                                    </span>
                                                                    <?php if($branch->branchname=="Own"): ?>
                                                                        <input
                                                                            
                                                                            disabled
                                                                            onkeyup="ucwords(this,'#branchnameuc');"
                                                                            type="text"
                                                                            
                                                                            class="form-control <?php echo e($errors->has('companyname') ? ' is-invalid' : ''); ?>"
                                                                            value="<?php echo e($branch->branchname); ?>"
                                                                            placeholder="The beauty S.A. de C.V."
                                                                            required
                                                                            maxlength="15"
                                                                            pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                            data-validation-pattern-message="The name company must have at least 3 letters">
                                                                        <input
                                                                            id="branchnameuc" 
                                                                            hidden
                                                                            onkeyup="ucwords(this,'#branchnameuc');"
                                                                            type="text"
                                                                            name="branchname"
                                                                            class="form-control <?php echo e($errors->has('companyname') ? ' is-invalid' : ''); ?>"
                                                                            value="<?php echo e($branch->branchname); ?>"
                                                                            placeholder="The beauty S.A. de C.V."
                                                                            required
                                                                            maxlength="15"
                                                                            pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                            data-validation-pattern-message="The name company must have at least 3 letters">
                                                                    <?php elseif($branch->branchname!="Own"): ?>
                                                                        <input
                                                                            id="branchnameuc" 
                                                                            onkeyup="ucwords(this,'#branchnameuc');"
                                                                            type="text"
                                                                            name="branchname"
                                                                            class="form-control <?php echo e($errors->has('companyname') ? ' is-invalid' : ''); ?>"
                                                                            value="<?php echo e($branch->branchname); ?>"
                                                                            placeholder="The beauty S.A. de C.V."
                                                                            required
                                                                            maxlength="15"
                                                                            pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                            data-validation-pattern-message="The name company must have at least 3 letters">
                                                                    <?php endif; ?>
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong><?php echo e($errors->first('branchname')); ?></strong>
                                                                </span>
                                                            </div>
                                                            <!--Se finaliza icono con campo de texto-->

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <!--  -->
                                                        <div class="form-group">
                                                            <strong>First Telephone</strong>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-mobile"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        data-mask="000-000-0000"
                                                                        id="companytelephone"
                                                                        name="branchtelephone1"
                                                                        required
                                                                        class="form-control <?php echo e($errors->has('companytelephone') ? ' is-invalid' : ''); ?>"
                                                                        value="<?php echo e($branch->branchtelephone1); ?>"
                                                                        placeholder="5523212321"
                                                                        required
                                                                        pattern="[0-9].{11}" 
                                                                        data-validation-pattern-message="The telephone number must have 10 digits">
                                                                        <input
                                                                        hidden
                                                                        type="text"
                                                                        id="seccioncompany"
                                                                        name="seccioncompany"
                                                                        class="form-control"
                                                                        placeholder="2"
                                                                        value="<?php echo e(old('seccioncompany')); ?>">
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong><?php echo e($errors->first('branchtelephone1')); ?></strong>
                                                                </span>
                                                            </div>
                                                    <!--Se finaliza icono con campo de texto-->

                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <!--  -->
                                                        <div class="form-group">
                                                            <strong>Second Telephone</strong>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-mobile"></i>
                                                                    </span>
                                                                    <?php switch(true):
                                                                        case ($branch->branchtelephone2=="000-000-0000"): ?>
                                                                            <input
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                id="ctele"
                                                                                class="form-control "
                                                                                placeholder="Example: 5543454323">
                                                                            <?php break; ?>
                                                                        <?php case ($branch->branchtelephone2!="000-000-0000"): ?>
                                                                            <input
                                                                                type="text"
                                                                                data-mask="000-000-0000"
                                                                                id="ctele"
                                                                                class="form-control "
                                                                                value="<?php echo e($branch->branchtelephone2); ?>"
                                                                                placeholder="5523212321">
                                                                            <?php break; ?>
                                                                    <?php endswitch; ?>
                                                                    <input
                                                                        hidden
                                                                        type="text"
                                                                        data-mask="000-000-0000"
                                                                        id="ctele2"
                                                                        name="branchtelephone2"
                                                                        class="form-control "
                                                                        value="<?php echo e($branch->branchtelephone2); ?>"
                                                                        required
                                                                        placeholder="Example: 5523212321"
                                                                        pattern="[0-9].{11}" 
                                                                        data-validation-pattern-message="The telephone number must have 10 digits">
                                                                    
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong><?php echo e($errors->first('branchtelephone2')); ?></strong>
                                                                </span>
                                                            </div>
                                                            <!--Se finaliza icono con campo de texto-->

                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <!--  -->
                                                        <div class="form-group">
                                                            <strong>First Email</strong>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input
                                                                        type="text"
                                                                        name="branchemail1"
                                                                        class="form-control<?php echo e($errors->has('email1') ? ' is-invalid' : ''); ?>"
                                                                        value="<?php echo e($branch->branchemail1); ?>"
                                                                        placeholder="Example: user@exam.com"
                                                                        required
                                                                        maxlength="45"
                                                                        pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                        data-validation-pattern-message="This is not a valid email">
                                                                        
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong><?php echo e($errors->first('branchemail1')); ?></strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!--  -->
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <strong>Second Email</strong>
                                                            <!--Se inicia icono con campo de texto-->
                                                            <div class="controls">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <?php switch(true):
                                                                        case ($branch->branchemail2=="default@default.com"): ?>
                                                                            <input
                                                                                type="text"
                                                                                id="cem2"    
                                                                                class="form-control "
                                                                                placeholder="example: example@exam.com">
                                                                            
                                                                            <?php break; ?>
                                                                        <?php case ($branch->branchemail2!="default@default.com"): ?>
                                                                            <input
                                                                                type="text"
                                                                                id="cem2"
                                                                                class="form-control "
                                                                                value="<?php echo e($branch->branchemail2); ?>"
                                                                                placeholder="example: example@exam.com">
                                                                            
                                                                            <?php break; ?>
                                                                    <?php endswitch; ?>
                                                                    <input
                                                                        hidden
                                                                        type="text"
                                                                        id="cema2"
                                                                        name="branchemail2"
                                                                        class="form-control "
                                                                        value="<?php echo e($branch->branchemail2); ?>"
                                                                        required
                                                                        placeholder="example@exam.com"
                                                                        maxlength="45"
                                                                        pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                        data-validation-pattern-message="This is not a valid email">
                                                                </div>
                                                                <span class="invalid-feedback" role="alert" style="color:red;">
                                                                    <strong><?php echo e($errors->first('branchemail2')); ?></strong>
                                                                </span>
                                                            </div>
                                                            <!--Se finaliza icono con campo de texto-->

                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div align="center">
                                            <button id="updatecompany" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                    
                                    
                                </form>

                            </div >

                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <!--Comienza el perfil-->
                            <div id="profile" class="card">
                                    <!---->
                                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <form action="<?php echo e(route('branchUpdateProfile',[$contact->id,$branch->id,$Company])); ?>"
                                    method="POST" 
                                    enctype="multipart/form-data"
                                    autocomplete="off"
                                    novalidate>
                                    <div class="card-block">                                                
                                        <div class="row">
                                            <?php echo csrf_field(); ?>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>Name</strong>
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="mdi mdi-lead-pencil"></i>
                                                            </span>
                                                            <input
                                                                id="nameuc" 
                                                                onkeyup="mayus(this);"
                                                                type="text"
                                                                name="name"
                                                                class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                                                value="<?php echo e($contact->name); ?>"
                                                                placeholder="Juana"
                                                                required
                                                                maxlength="25"
                                                                pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                data-validation-pattern-message="Name must contain at least 3 letters">
                                                        </div>
                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                                        </span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                
                                                <div class="form-group">
                                                    <strong>Lastname</strong>
                                                    <!--Se inicia icono con campo de texto-->
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="mdi mdi-lead-pencil"></i>
                                                            </span>
                                                            <input
                                                                id="lastnameuc" 
                                                                onkeyup="mayus(this);"
                                                                type="text"
                                                                name="lastname"
                                                                class="form-control<?php echo e($errors->has('lastname') ? ' is-invalid' : ''); ?>"
                                                                required
                                                                maxlength="25"
                                                                pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                data-validation-pattern-message="Lastname must contain at least 3 letters"
                                                                value=<?php echo e($contact->lastname); ?>

                                                                placeholder="Juárez">
                                                        </div>
                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                            <strong><?php echo e($errors->first('lastname')); ?></strong>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>First Telephone</strong>
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-mobile"></i>
                                                            </span>
                                                            <input
                                                                type="text"
                                                                data-mask="000-000-0000"
                                                                name="telephone1"
                                                                class="form-control<?php echo e($errors->has('telephone') ? ' is-invalid' : ''); ?>"
                                                                required
                                                                placeholder="Example: 5523212321"
                                                                pattern="[0-9].{11}" 
                                                                data-validation-pattern-message="The telephone number must have 10 digits"
                                                                value=<?php echo e($contact->telephone1); ?>>
                                                        </div>
                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                            <strong><?php echo e($errors->first('telephone1')); ?></strong>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>Second Telephone </strong>
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-mobile"></i>
                                                            </span>
                                                            <?php switch(true):
                                                                case ($contact->telephone2=="000-000-0000"): ?>
                                                                    <input
                                                                        type="text"
                                                                        data-mask="000-000-0000"
                                                                        id="tele"
                                                                        name="telephone2"
                                                                        class="form-control"
                                                                        placeholder="5523212321">
                                                                    <?php break; ?>
                                                                <?php case ($contact->telephone2!="000-000-0000"): ?>
                                                                    <input
                                                                        type="text"
                                                                        data-mask="000-000-0000"
                                                                        id="tele"
                                                                        class="form-control"
                                                                        placeholder="5523212321"
                                                                        value="<?php echo e($contact->telephone2); ?>">
                                                                    <?php break; ?>
                                                            <?php endswitch; ?>
                                                            <input
                                                                hidden  
                                                                type="text"
                                                                data-mask="000-000-0000"
                                                                id="tele2"
                                                                name="telephone2"
                                                                class="form-control "
                                                                value="<?php echo e($contact->telephone2); ?>"
                                                                required
                                                                placeholder="Example: 5523212321"
                                                                pattern="[0-9].{11}" 
                                                                data-validation-pattern-message="The telephone number must have 10 digits">
                                                        </div>
                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                            <strong><?php echo e($errors->first('telephone2')); ?></strong>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>First Email </strong>
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                            <input
                                                                type="text"
                                                                name="email"
                                                                class="form-control"
                                                                placeholder="example: example@exam.com"
                                                                required
                                                                maxlength="45"
                                                                pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                data-validation-pattern-message="This is not a valid email"
                                                                value=<?php echo e($contact->email); ?>>
                                                        </div>
                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>Second Email</strong>
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                            <?php switch(true):
                                                                case ($contact->email2=="default@default.com"): ?>
                                                                    <input
                                                                        type="text"
                                                                        id="em2"
                                                                        class="form-control"
                                                                        placeholder="example: example@exam.com">
                                                                    <?php break; ?>
                                                                <?php case ($contact->email2!="default@default.com"): ?>
                                                                    <input
                                                                        type="text"
                                                                        id="em2"
                                                                        class="form-control"
                                                                        placeholder="example: example@exam.com"
                                                                        value="<?php echo e($contact->email2); ?>">
                                                                    <?php break; ?>
                                                            <?php endswitch; ?>
                                                            <input
                                                                hidden
                                                                type="text"
                                                                id="ema2"
                                                                name="email2"
                                                                required
                                                                class="form-control "
                                                                value="<?php echo e($contact->email2); ?>"
                                                                placeholder="example@exam.com"
                                                                maxlength="45"
                                                                pattern="^[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[A-Za-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?\.)+[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?$"
                                                                data-validation-pattern-message="This is not a valid email">
                                                        </div>
                                                        <span class="invalid-feedback" role="alert" style="color:red;">
                                                            <strong><?php echo e($errors->first('email2')); ?></strong>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">                                                        
                                                <textarea hidden type="text" id="area1" class="form-control" cols="30" rows="10"><?php echo e($contact->area); ?></textarea>
                                                    <strong >Area</strong>
                                                    <select id="area" class="form-control" name="area">
                                                        <option>Dirección general</option>
                                                        <option>Auxiliar administrativo</option>
                                                        <option>Administración y Recursos Humanos</option>
                                                        <option>Finanzas y Contabilidad</option>
                                                        <option>Publicidad y Mercadotecnia</option>
                                                        <option>Informática</option>
                                                        <option>Marketing</option>
                                                    </select>
                                                </div>
                                            </div>    
                                        </div>
                                        <div align="center">
                                            <button id="updateprofile" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                    
                                </form>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>
                            <!--Termina el perfil-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="information" class="card">
                                <form action="<?php echo e(route('branchUpdateAddress',[$branch->id,$Company])); ?>" 
                                    method="POST" autocomplete="off" novalidate>
                                    <div id="bodyaddress" class="card-block">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class=" col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>Zip code</strong>
                                                    <i id="qzip" class="fa fa-question-circle"></i>

                                                    <!--Se inicia icono con campo de texto-->
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="mdi mdi-numeric"></i>
                                                            </span>
                                                            <input
                                                                type="text"
                                                                data-mask="00000"
                                                                name="zipcode"
                                                                class="form-control <?php echo e($errors->has('zipcode') ? ' is-invalid' : ''); ?>"
                                                                value="<?php echo e($branch->zipcode); ?>"
                                                                placeholder="03231"
                                                                required
                                                                maxlength="5"
                                                                pattern="[0-9].{4}"
                                                                data-validation-pattern-message="This field must have 5 digits">
                                                        </div>
                                                    </div>
                                                    <!--Se finaliza icono con campo de texto-->

                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>District</strong>
                                                    <i id="qdistrict" class="fa fa-question-circle"></i>

                                                    <!--Se inicia icono con campo de texto-->
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="mdi mdi-city"></i>
                                                            </span>
                                                            <input
                                                                id="districtuc" 
                                                                onkeyup="ucwords(this,'#districtuc');"
                                                                type="text"
                                                                name="district"
                                                                class="form-control <?php echo e($errors->has('district') ? ' is-invalid' : ''); ?>"
                                                                value="<?php echo e($branch->district); ?>"
                                                                placeholder="Benito Juárez"
                                                                required
                                                                maxlength="35"
                                                                pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                data-validation-pattern-message="The Districts must have at least 3 letters">
                                                        </div>
                                                    </div>
                                                    <!--Se finaliza icono con campo de texto-->

                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>Street</strong>
                                                    <i id="qstreet" class="fa fa-question-circle"></i>
                                                    <!--Se inicia icono con campo de texto-->
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-road"></i>
                                                            </span>
                                                            <input
                                                                id="streetuc" 
                                                                onkeyup="ucwords(this,'#streetuc');"
                                                                type="text"
                                                                name="street"
                                                                class="form-control <?php echo e($errors->has('street') ? ' is-invalid' : ''); ?>"
                                                                value="<?php echo e($branch->street); ?>"
                                                                placeholder="Pedro Santacilia"
                                                                required
                                                                maxlength="35"
                                                                pattern="^(([A-Z]{1}([a-zñáéíóú]{2,})+[\s]*)+){1,}$" 
                                                                data-validation-pattern-message="The Streets must have at least 3 letters">
                                                        </div>
                                                    </div>
                                                    <!--Se finaliza icono con campo de texto-->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>Ext. number</strong>
                                                    <i id="qextnumber" class="fa fa-question-circle"></i>
                                                    <!--Se inicia icono con campo de texto-->
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="mdi mdi-numeric"></i>
                                                            </span>
                                                            <input
                                                                type="text"
                                                                data-mask="0000"
                                                                name="extnumber"
                                                                class="form-control <?php echo e($errors->has('extnumber') ? ' is-invalid' : ''); ?>"
                                                                value="<?php echo e($branch->exteriornumber); ?>"
                                                                placeholder="1"
                                                                required
                                                                maxlength="4"
                                                                data-validation-required-message="This field must have digits">
                                                        </div>
                                                    </div>
                                                    <!--Se finaliza icono con campo de texto-->

                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <strong>In. number</strong>
                                                    <i id="qinnumber" class="fa fa-question-circle"></i>
                                                    <!--Se inicia icono con campo de texto-->
                                                    <div class="controls">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-addon">
                                                                <i class="mdi mdi-numeric"></i>
                                                            </span>
                                                            <input
                                                                type="text"
                                                                data-mask="00000"
                                                                name="innumber"
                                                                class="form-control <?php echo e($errors->has('innumber') ? ' is-invalid' : ''); ?>"
                                                                value="<?php echo e($branch->insidenumber); ?>"
                                                                placeholder="2"
                                                                required
                                                                maxlength="4"
                                                                data-validation-required-message="This field must have digits">
                                                        </div>
                                                    </div>
                                                    <!--Se finaliza icono con campo de texto-->

                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            
                                        </div>
                                        

                                    </div>
                                    <div align="center">
                                        <button id="updateaddress" class="btn btn-success">Update</button>
                                    </div>
                                    <input
                                        hidden
                                        type="text"
                                        id="seccion"
                                        name="seccion"
                                        class="form-control"
                                        placeholder="2"
                                        value="<?php echo e(old('seccion')); ?>">                                    
                                </form>

                            </div>

                        </div>
                    </div>                    
                </div>
            </div>

        </div>

    </div>

</div>

<div class=" jq-toast-wrap top-right">
    <div
        class="jq-toast-single jq-has-icon jq-icon-success"
        style="text-align: left; display: none;">
        <span
            class="jq-toast-loader jq-toast-loaded"
            style="-webkit-transition: width 3.1s ease-in;
                -o-transition: width 3.1s ease-in;
                transition: width 3.1s ease-in;
                background-color: #ff6849;"></span>
        <span class="close-jq-toast-single">×</span>
        <h2 class="jq-toast-heading">Welcome to Monster admin</h2>Use the predefined ones, or specify a custom position object.
    </div>
</div>


<?php $__env->stopSection(); ?>

<!-- <?php $__env->startSection('file_js'); ?>
<script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
</script>
<?php $__env->stopSection(); ?> -->
<?php echo $__env->make('layouts.wdlicenciamiento', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>