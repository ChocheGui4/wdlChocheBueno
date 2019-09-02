@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">
    <div class="row page-titles">
        <div class="col-md-8  align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Add Products</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Company</li>
                <li class="breadcrumb-item active">Branch</li>
                <li class="breadcrumb-item active">Product</li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
        </div>

        <div class="col-md-4 ">
            <div class="col-md-12 align-self-center">
                <a
                    href="{{ route('showBranchesProducts',[$company,$branch])}}"
                    class="btn pull-right hidden-sm-down btn-primary">
                    <i class="mdi mdi-arrow-left"></i>
                    Back</a>
            </div>
            <div class="col-md-9 align-self-center"></div>

        </div>

    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row el-element-overlay">
                    <div class="col-lg-2 col-md-6">
                        <div class="card">
                            <img
                                class="card-img-top img-responsive"
                                src="{{ asset('bundle/assets/images/users/antivirus.png') }}"
                                alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">WDNG</h4>

                                <a
                                    href="#"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#WDNGmodal">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="card">
                            <img
                                class="card-img-top img-responsive"
                                src="{{ asset('bundle/assets/images/users/antivirus.png') }}"
                                alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">WDF</h4>

                                <a
                                    href="#"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#WDNGmodal">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="card">
                            <img
                                class="card-img-top img-responsive"
                                src="{{ asset('bundle/assets/images/users/antivirus.png') }}"
                                alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">WDCP</h4>

                                <a
                                    href="#"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#WDNGmodal">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="card">
                            <img
                                class="card-img-top img-responsive"
                                src="{{ asset('bundle/assets/images/users/antivirus.png') }}"
                                alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">WDIPS/IDS</h4>

                                <a
                                    href="#"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#WDNGmodal">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="card">
                            <img
                                class="card-img-top img-responsive"
                                src="{{ asset('bundle/assets/images/users/antivirus.png') }}"
                                alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">WDM</h4>

                                <a href="#" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="card">
                            <img
                                class="card-img-top img-responsive"
                                src="{{ asset('bundle/assets/images/users/antivirus.png') }}"
                                alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">WDS</h4>

                                <a href="#" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row el-element-overlay">
                    <div class="col-lg-2 col-md-6">
                        <div class="card">
                            <img
                                class="card-img-top img-responsive"
                                src="{{ asset('bundle/assets/images/users/antivirus.png') }}"
                                alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">WDCC</h4>

                                <a href="#" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="card">
                            <img
                                class="card-img-top img-responsive"
                                src="{{ asset('bundle/assets/images/users/antivirus.png') }}"
                                alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">WDR</h4>

                                <a
                                    href="#"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#exampleModalLong">
                                    Go
                                </a>
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
    <div
        id="WDNGmodal"
        class="modal fade"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">WDNG</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form
                    class="m-t-40"
                    action="{{ route('showBranchesAddProduct',[$company,$branch])}}"
                    method="POST"
                    autocomplete="off"
                    novalidate="novalidate">
                    <div class="modal-body">

                        <div align="center">
                            <h3 class="modal-title">Warriors Defender Firewall New Generate</h3>
                            <br>
                            <small>Little description: Lorem, ipsum dolor sit amet consectetur adipisicing
                                elit. Non eveniet quibusdam hic temporibus itaque minus cupiditate suscipit odio
                                sed fugit quas, qui ex repellat a, ratione sint provident minima facere.</small>
                        </div>

                        
                            <div class="container col-md-12">
                                <div clas="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <p>Acquisiton time</p>
                                        <div class="form-group">
                                            <select class="form-control" name="years">
                                                <option >1</option>
                                                <option >2</option>
                                                <option >3</option>
                                                <option >4</option>
                                                <option >5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <p>Users number</p>
                                        <div class="form-group">
                                            <select class="form-control" name="years">
                                                <option >15</option>
                                                <option >100</option>
                                                <option >200</option>
                                                <option >300</option>
                                                <option >400</option>
                                                <option >500</option>
                                                <option >600</option>
                                                <option >700</option>
                                                <option >800</option>
                                                <option >900</option>
                                                <option >1000</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Termina la ventana modal-->

</div>
@endsection