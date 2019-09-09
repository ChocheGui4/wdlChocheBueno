@extends('layouts.wdlicenciamiento')
@section('content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!--WWWWWWWIIIIIIIIIIIIIIIIIIIIIIIIZZZZZZZZZZZZZZAAAAAAAAAAAAAAAAARRRRRRRRRRRDDDDDDDDD-->
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block wizard-content">
                                <h4 class="card-title">Step wizard</h4>
                                <h6 class="card-subtitle">You can find the <a href="http://www.jquery-steps.com" target="_blank">offical website</a></h6>
                                <form action="#" class="tab-wizard wizard-circle">
                                    <!-- Step 1 -->
                                    <h6>Personal Info</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName1">First Name :</label>
                                                    <input type="text" class="form-control" id="firstName1"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName1">Last Name :</label>
                                                    <input type="text" class="form-control" id="lastName1"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="emailAddress1">Email Address :</label>
                                                    <input type="email" class="form-control" id="emailAddress1"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phoneNumber1">Phone Number :</label>
                                                    <input type="tel" class="form-control" id="phoneNumber1"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location1">Select City :</label>
                                                    <select class="custom-select form-control" id="location1" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="Amsterdam">India</option>
                                                        <option value="Berlin">USA</option>
                                                        <option value="Frankfurt">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date1">Date of Birth :</label>
                                                    <input type="date" class="form-control" id="date1"> </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Job Status</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle1">Job Title :</label>
                                                    <input type="text" class="form-control" id="jobTitle1"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="videoUrl1">Company Name :</label>
                                                    <input type="text" class="form-control" id="videoUrl1">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription1">Job Description :</label>
                                                    <textarea name="shortDescription" id="shortDescription1" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>Interview</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="int1">Interview For :</label>
                                                    <input type="text" class="form-control" id="int1"> </div>
                                                <div class="form-group">
                                                    <label for="intType1">Interview Type :</label>
                                                    <select class="custom-select form-control" id="intType1" data-placeholder="Type to search cities" name="intType1">
                                                        <option value="Banquet">Normal</option>
                                                        <option value="Fund Raiser">Difficult</option>
                                                        <option value="Dinner Party">Hard</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Location1">Location :</label>
                                                    <select class="custom-select form-control" id="Location1" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Interview Date :</label>
                                                    <input type="date" class="form-control" id="jobTitle2">
                                                </div>
                                                <div class="form-group">
                                                    <label>Requirements :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Employee</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Contract</span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Remark</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Behaviour :</label>
                                                    <input type="text" class="form-control" id="behName1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control" id="participants1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comments</label>
                                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Validation wizard -->
                <div class="row" id="validation">
                    <div class="col-12">
                        <div class="card wizard-content">
                            <div class="card-block">
                                <h4 class="card-title">Step wizard with validation</h4>
                                <h6 class="card-subtitle">You can us the validation like what we did</h6>
                                <form action="#" class="validation-wizard wizard-circle">
                                    <!-- Step 1 -->
                                    <h6>Step 1</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> First Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlastName2"> Last Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wlastName2" name="lastName"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                                                    <input type="email" class="form-control required" id="wemailAddress2" name="emailAddress"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wphoneNumber2">Phone Number :</label>
                                                    <input type="tel" class="form-control required" id="wphoneNumber2"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2"> Select City : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="wlocation2" name="location">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wdate2">Date of Birth :</label>
                                                    <input type="date" class="form-control" id="wdate2"> </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Step 2</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Company Name :</label>
                                                    <input type="text" class="form-control required" id="jobTitle2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="webUrl3">Company URL :</label>
                                                    <input type="url" class="form-control required" id="webUrl3" name="webUrl3"> </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription3">Short Description :</label>
                                                    <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>Step 3</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wint1">Interview For :</label>
                                                    <input type="text" class="form-control required" id="wint1"> </div>
                                                <div class="form-group">
                                                    <label for="wintType1">Interview Type :</label>
                                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="Banquet">Normal</option>
                                                        <option value="Fund Raiser">Difficult</option>
                                                        <option value="Dinner Party">Hard</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="wLocation1">Location :</label>
                                                    <select class="custom-select form-control required" id="wLocation1" name="wlocation">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wjobTitle2">Interview Date :</label>
                                                    <input type="date" class="form-control required" id="wjobTitle2">
                                                </div>
                                                <div class="form-group">
                                                    <label>Requirements :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Employee</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Contract</span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Step 4</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Behaviour :</label>
                                                    <input type="text" class="form-control required" id="behName1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control required" id="participants1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control required" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comments</label>
                                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    
    
    <!--WWWWWWWIIIIIIIIIIIIIIIIIIIIIIIIZZZZZZZZZZZZZZAAAAAAAAAAAAAAAAARRRRRRRRRRRDDDDDDDDD-->

    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <button
                class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10">
                <i class="ti-settings text-white"></i>
            </button>
            <button class="btn pull-right hidden-sm-down btn-success">
                <i class="mdi mdi-plus-circle"></i>
                Create</button>
            <div class="dropdown pull-right m-r-10 hidden-sm-down">
                <button
                    class="btn btn-secondary dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    January 2017
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">February 2017</a>
                    <a class="dropdown-item" href="#">March 2017</a>
                    <a class="dropdown-item" href="#">April 2017</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Daily Sales</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0">
                            <i class="ti-arrow-up text-success"></i>
                            $120</h2>
                        <span class="text-muted">Todays Income</span>
                    </div>
                    <span class="text-success">80%</span>
                    <div class="progress">
                        <div
                            class="progress-bar bg-success"
                            role="progressbar"
                            style="width: 80%; height: 6px;"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Weekly Sales</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0">
                            <i class="ti-arrow-up text-info"></i>
                            $5,000</h2>
                        <span class="text-muted">Todays Income</span>
                    </div>
                    <span class="text-info">30%</span>
                    <div class="progress">
                        <div
                            class="progress-bar bg-info"
                            role="progressbar"
                            style="width: 30%; height: 6px;"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Monthly Sales</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0">
                            <i class="ti-arrow-up text-purple"></i>
                            $8,000</h2>
                        <span class="text-muted">Todays Income</span>
                    </div>
                    <span class="text-purple">60%</span>
                    <div class="progress">
                        <div
                            class="progress-bar bg-purple"
                            role="progressbar"
                            style="width: 60%; height: 6px;"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Yearly Sales</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0">
                            <i class="ti-arrow-down text-danger"></i>
                            $12,000</h2>
                        <span class="text-muted">Todays Income</span>
                    </div>
                    <span class="text-danger">80%</span>
                    <div class="progress">
                        <div
                            class="progress-bar bg-danger"
                            role="progressbar"
                            style="width: 80%; height: 6px;"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h3>Revenue Statistics</h3>
                                    <h6 class="card-subtitle">January 2017</h6>
                                </div>
                                <div class="ml-auto ">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted">
                                                <i class="fa fa-circle m-r-5 text-success"></i>Product A</h6>
                                        </li>
                                        <li>
                                            <h6 class="text-muted">
                                                <i class="fa fa-circle m-r-5 text-info"></i>Product B</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="total-revenue4" style="height: 350px;">
                                <div class="chartist-tooltip"></div>
                                <svg
                                    xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                    width="100%"
                                    height="100%"
                                    class="ct-chart-line"
                                    style="width: 100%; height: 100%;">
                                    <g class="ct-grids">
                                        <line x1="30" x2="30" y1="15" y2="315" class="ct-grid ct-horizontal"></line>
                                        <line
                                            x1="142.57142857142856"
                                            x2="142.57142857142856"
                                            y1="15"
                                            y2="315"
                                            class="ct-grid ct-horizontal"></line>
                                        <line
                                            x1="255.14285714285714"
                                            x2="255.14285714285714"
                                            y1="15"
                                            y2="315"
                                            class="ct-grid ct-horizontal"></line>
                                        <line
                                            x1="367.7142857142857"
                                            x2="367.7142857142857"
                                            y1="15"
                                            y2="315"
                                            class="ct-grid ct-horizontal"></line>
                                        <line
                                            x1="480.2857142857143"
                                            x2="480.2857142857143"
                                            y1="15"
                                            y2="315"
                                            class="ct-grid ct-horizontal"></line>
                                        <line
                                            x1="592.8571428571429"
                                            x2="592.8571428571429"
                                            y1="15"
                                            y2="315"
                                            class="ct-grid ct-horizontal"></line>
                                        <line
                                            x1="705.4285714285714"
                                            x2="705.4285714285714"
                                            y1="15"
                                            y2="315"
                                            class="ct-grid ct-horizontal"></line>
                                        <line x1="818" x2="818" y1="15" y2="315" class="ct-grid ct-horizontal"></line>
                                        <line y1="315" y2="315" x1="30" x2="818" class="ct-grid ct-vertical"></line>
                                        <line y1="277.5" y2="277.5" x1="30" x2="818" class="ct-grid ct-vertical"></line>
                                        <line y1="240" y2="240" x1="30" x2="818" class="ct-grid ct-vertical"></line>
                                        <line y1="202.5" y2="202.5" x1="30" x2="818" class="ct-grid ct-vertical"></line>
                                        <line y1="165" y2="165" x1="30" x2="818" class="ct-grid ct-vertical"></line>
                                        <line y1="127.5" y2="127.5" x1="30" x2="818" class="ct-grid ct-vertical"></line>
                                        <line y1="90" y2="90" x1="30" x2="818" class="ct-grid ct-vertical"></line>
                                        <line y1="52.5" y2="52.5" x1="30" x2="818" class="ct-grid ct-vertical"></line>
                                        <line y1="15" y2="15" x1="30" x2="818" class="ct-grid ct-vertical"></line>
                                    </g>
                                    <g>
                                        <g class="ct-series ct-series-a">
                                            <path
                                                d="M30,315L30,315C48.762,308.75,105.048,288.438,142.571,277.5C180.095,266.563,217.619,243.125,255.143,249.375C292.667,255.625,330.19,344.688,367.714,315C405.238,285.313,442.762,74.375,480.286,71.25C517.81,68.125,555.333,268.125,592.857,296.25C630.381,324.375,667.905,240,705.429,240C742.952,240,799.238,286.875,818,296.25L818,315Z"
                                                class="ct-area"></path>
                                            <path
                                                d="M30,315C48.762,308.75,105.048,288.438,142.571,277.5C180.095,266.563,217.619,243.125,255.143,249.375C292.667,255.625,330.19,344.688,367.714,315C405.238,285.313,442.762,74.375,480.286,71.25C517.81,68.125,555.333,268.125,592.857,296.25C630.381,324.375,667.905,240,705.429,240C742.952,240,799.238,286.875,818,296.25"
                                                class="ct-line"></path>
                                            <line x1="30" y1="315" x2="30.01" y2="315" class="ct-point" ct:value="0"></line>
                                            <line
                                                x1="142.57142857142856"
                                                y1="277.5"
                                                x2="142.58142857142855"
                                                y2="277.5"
                                                class="ct-point"
                                                ct:value="2"></line>
                                            <line
                                                x1="255.14285714285714"
                                                y1="249.375"
                                                x2="255.15285714285713"
                                                y2="249.375"
                                                class="ct-point"
                                                ct:value="3.5"></line>
                                            <line
                                                x1="367.7142857142857"
                                                y1="315"
                                                x2="367.7242857142857"
                                                y2="315"
                                                class="ct-point"
                                                ct:value="0"></line>
                                            <line
                                                x1="480.2857142857143"
                                                y1="71.25"
                                                x2="480.29571428571427"
                                                y2="71.25"
                                                class="ct-point"
                                                ct:value="13"></line>
                                            <line
                                                x1="592.8571428571429"
                                                y1="296.25"
                                                x2="592.8671428571429"
                                                y2="296.25"
                                                class="ct-point"
                                                ct:value="1"></line>
                                            <line
                                                x1="705.4285714285714"
                                                y1="240"
                                                x2="705.4385714285714"
                                                y2="240"
                                                class="ct-point"
                                                ct:value="4"></line>
                                            <line
                                                x1="818"
                                                y1="296.25"
                                                x2="818.01"
                                                y2="296.25"
                                                class="ct-point"
                                                ct:value="1"></line>
                                        </g>
                                        <g class="ct-series ct-series-b">
                                            <path
                                                d="M30,315L30,315C48.762,302.5,105.048,240,142.571,240C180.095,240,217.619,315,255.143,315C292.667,315,330.19,240,367.714,240C405.238,240,442.762,315,480.286,315C517.81,315,555.333,240,592.857,240C630.381,240,667.905,315,705.429,315C742.952,315,799.238,252.5,818,240L818,315Z"
                                                class="ct-area"></path>
                                            <path
                                                d="M30,315C48.762,302.5,105.048,240,142.571,240C180.095,240,217.619,315,255.143,315C292.667,315,330.19,240,367.714,240C405.238,240,442.762,315,480.286,315C517.81,315,555.333,240,592.857,240C630.381,240,667.905,315,705.429,315C742.952,315,799.238,252.5,818,240"
                                                class="ct-line"></path>
                                            <line x1="30" y1="315" x2="30.01" y2="315" class="ct-point" ct:value="0"></line>
                                            <line
                                                x1="142.57142857142856"
                                                y1="240"
                                                x2="142.58142857142855"
                                                y2="240"
                                                class="ct-point"
                                                ct:value="4"></line>
                                            <line
                                                x1="255.14285714285714"
                                                y1="315"
                                                x2="255.15285714285713"
                                                y2="315"
                                                class="ct-point"
                                                ct:value="0"></line>
                                            <line
                                                x1="367.7142857142857"
                                                y1="240"
                                                x2="367.7242857142857"
                                                y2="240"
                                                class="ct-point"
                                                ct:value="4"></line>
                                            <line
                                                x1="480.2857142857143"
                                                y1="315"
                                                x2="480.29571428571427"
                                                y2="315"
                                                class="ct-point"
                                                ct:value="0"></line>
                                            <line
                                                x1="592.8571428571429"
                                                y1="240"
                                                x2="592.8671428571429"
                                                y2="240"
                                                class="ct-point"
                                                ct:value="4"></line>
                                            <line
                                                x1="705.4285714285714"
                                                y1="315"
                                                x2="705.4385714285714"
                                                y2="315"
                                                class="ct-point"
                                                ct:value="0"></line>
                                            <line x1="818" y1="240" x2="818.01" y2="240" class="ct-point" ct:value="4"></line>
                                        </g>
                                    </g>
                                    <g class="ct-labels">
                                        <foreignObject
                                            style="overflow: visible;"
                                            x="30"
                                            y="320"
                                            width="112.57142857142857"
                                            height="20">
                                            <span
                                                class="ct-label ct-horizontal ct-end"
                                                style="width: 113px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">0</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            x="142.57142857142856"
                                            y="320"
                                            width="112.57142857142857"
                                            height="20">
                                            <span
                                                class="ct-label ct-horizontal ct-end"
                                                style="width: 113px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">4</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            x="255.14285714285714"
                                            y="320"
                                            width="112.57142857142858"
                                            height="20">
                                            <span
                                                class="ct-label ct-horizontal ct-end"
                                                style="width: 113px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">8</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            x="367.7142857142857"
                                            y="320"
                                            width="112.57142857142856"
                                            height="20">
                                            <span
                                                class="ct-label ct-horizontal ct-end"
                                                style="width: 113px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">12</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            x="480.2857142857143"
                                            y="320"
                                            width="112.57142857142861"
                                            height="20">
                                            <span
                                                class="ct-label ct-horizontal ct-end"
                                                style="width: 113px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">16</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            x="592.8571428571429"
                                            y="320"
                                            width="112.57142857142856"
                                            height="20">
                                            <span
                                                class="ct-label ct-horizontal ct-end"
                                                style="width: 113px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">20</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            x="705.4285714285714"
                                            y="320"
                                            width="112.57142857142856"
                                            height="20">
                                            <span
                                                class="ct-label ct-horizontal ct-end"
                                                style="width: 113px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">24</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            x="818"
                                            y="320"
                                            width="30"
                                            height="20">
                                            <span
                                                class="ct-label ct-horizontal ct-end"
                                                style="width: 30px; height: 20px"
                                                xmlns="http://www.w3.org/2000/xmlns/">30</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            y="277.5"
                                            x="10"
                                            height="37.5"
                                            width="10">
                                            <span
                                                class="ct-label ct-vertical ct-start"
                                                style="height: 38px; width: 10px"
                                                xmlns="http://www.w3.org/2000/xmlns/">0k</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            y="240"
                                            x="10"
                                            height="37.5"
                                            width="10">
                                            <span
                                                class="ct-label ct-vertical ct-start"
                                                style="height: 38px; width: 10px"
                                                xmlns="http://www.w3.org/2000/xmlns/">2k</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            y="202.5"
                                            x="10"
                                            height="37.5"
                                            width="10">
                                            <span
                                                class="ct-label ct-vertical ct-start"
                                                style="height: 38px; width: 10px"
                                                xmlns="http://www.w3.org/2000/xmlns/">4k</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            y="165"
                                            x="10"
                                            height="37.5"
                                            width="10">
                                            <span
                                                class="ct-label ct-vertical ct-start"
                                                style="height: 38px; width: 10px"
                                                xmlns="http://www.w3.org/2000/xmlns/">6k</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            y="127.5"
                                            x="10"
                                            height="37.5"
                                            width="10">
                                            <span
                                                class="ct-label ct-vertical ct-start"
                                                style="height: 38px; width: 10px"
                                                xmlns="http://www.w3.org/2000/xmlns/">8k</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            y="90"
                                            x="10"
                                            height="37.5"
                                            width="10">
                                            <span
                                                class="ct-label ct-vertical ct-start"
                                                style="height: 38px; width: 10px"
                                                xmlns="http://www.w3.org/2000/xmlns/">10k</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            y="52.5"
                                            x="10"
                                            height="37.5"
                                            width="10">
                                            <span
                                                class="ct-label ct-vertical ct-start"
                                                style="height: 38px; width: 10px"
                                                xmlns="http://www.w3.org/2000/xmlns/">12k</span>
                                        </foreignObject>
                                        <foreignObject
                                            style="overflow: visible;"
                                            y="15"
                                            x="10"
                                            height="37.5"
                                            width="10">
                                            <span
                                                class="ct-label ct-vertical ct-start"
                                                style="height: 38px; width: 10px"
                                                xmlns="http://www.w3.org/2000/xmlns/">14k</span>
                                        </foreignObject>
                                        <foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="10">
                                            <span
                                                class="ct-label ct-vertical ct-start"
                                                style="height: 30px; width: 10px"
                                                xmlns="http://www.w3.org/2000/xmlns/">16k</span>
                                        </foreignObject>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                            <h1 class="m-b-0 font-light">$54578</h1>
                            <h6 class="text-muted">Total Revenue</h6>
                        </div>
                        <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                            <h1 class="m-b-0 font-light">$43451</h1>
                            <h6 class="text-muted">Online Revenue</h6>
                        </div>
                        <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                            <h1 class="m-b-0 font-light">$44578</h1>
                            <h6 class="text-muted">Product A</h6>
                        </div>
                        <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
                            <h1 class="m-b-0 font-light">$12578</h1>
                            <h6 class="text-muted">Product B</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Sales of the Month</h4>
                    <div
                        id="sales-donute"
                        style="width: 100%; height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0);"
                        _echarts_instance_="1566931801462">
                        <div style="position: relative; overflow: hidden; width: 231px; height: 300px;">
                            <div
                                data-zr-dom-id="bg"
                                class="zr-element"
                                style="position: absolute; left: 0px; top: 0px; width: 290px; height: 300px; user-select: none;"></div>
                            <canvas
                                width="231"
                                height="300"
                                data-zr-dom-id="0"
                                class="zr-element"
                                style="position: absolute; left: 0px; top: 0px; width: 231px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
                            <canvas
                                width="231"
                                height="300"
                                data-zr-dom-id="1"
                                class="zr-element"
                                style="position: absolute; left: 0px; top: 0px; width: 231px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
                            <canvas
                                width="231"
                                height="300"
                                data-zr-dom-id="_zrender_hover_"
                                class="zr-element"
                                style="position: absolute; left: 0px; top: 0px; width: 231px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
                        </div>
                    </div>
                    <div class="round-overlap m-t-20">
                        <i class="mdi mdi-cart"></i>
                    </div>
                    <ul class="list-inline m-t-30 text-center">
                        <li>
                            <i class="fa fa-circle text-purple"></i>
                            Item A</li>
                        <li>
                            <i class="fa fa-circle text-success"></i>
                            Item B</li>
                        <li>
                            <i class="fa fa-circle text-info"></i>
                            Item C</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Sales Prediction</h4>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">$3528</span>
                                    <h6 class="text-muted">(150-165 Sales)</h6>
                                </div>
                                <div class="ml-auto">
                                    <div
                                        id="gauge-chart"
                                        style="width: 150px; height: 150px; -webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0);"
                                        _echarts_instance_="1566931801463">
                                        <div style="position: relative; overflow: hidden; width: 150px; height: 150px;">
                                            <div
                                                data-zr-dom-id="bg"
                                                class="zr-element"
                                                style="position: absolute; left: 0px; top: 0px; width: 150px; height: 150px; user-select: none;"></div>
                                            <canvas
                                                width="150"
                                                height="150"
                                                data-zr-dom-id="0"
                                                class="zr-element"
                                                style="position: absolute; left: 0px; top: 0px; width: 150px; height: 150px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
                                            <canvas
                                                width="150"
                                                height="150"
                                                data-zr-dom-id="1"
                                                class="zr-element"
                                                style="position: absolute; left: 0px; top: 0px; width: 150px; height: 150px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
                                            <canvas
                                                width="150"
                                                height="150"
                                                data-zr-dom-id="_zrender_hover_"
                                                class="zr-element"
                                                style="position: absolute; left: 0px; top: 0px; width: 150px; height: 150px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Sales Difference</h4>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">$4316</span>
                                    <h6 class="text-muted">(150-165 Sales)</h6>
                                </div>
                                <div class="ml-auto">
                                    <div class="ct-chart" style="width:120px; height: 120px;">
                                        <svg
                                            xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                            width="100%"
                                            height="100%"
                                            class="ct-chart-donut"
                                            style="width: 100%; height: 100%;">
                                            <g class="ct-series ct-series-c">
                                                <path
                                                    d="M60,15A45,45,0,0,0,20.951,37.636"
                                                    class="ct-slice-donut"
                                                    ct:value="10"
                                                    style="stroke-width: 20px"></path>
                                            </g>
                                            <g class="ct-series ct-series-b">
                                                <path
                                                    d="M21.029,37.5A45,45,0,0,0,37.636,99.049"
                                                    class="ct-slice-donut"
                                                    ct:value="15"
                                                    style="stroke-width: 20px"></path>
                                            </g>
                                            <g class="ct-series ct-series-a">
                                                <path
                                                    d="M37.5,98.971A45,45,0,1,0,60,15"
                                                    class="ct-slice-donut"
                                                    ct:value="35"
                                                    style="stroke-width: 20px"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="d-flex flex-row">
                        <div class="">
                            <img
                                src="../assets/images/users/1.jpg"
                                alt="user"
                                class="img-circle"
                                width="100"></div>
                            <div class="p-l-20">
                                <h3 class="font-medium">Daniel Kristeen</h3>
                                <h6>UIUX Designer</h6>
                                <button class="btn btn-success">
                                    <i class="ti-plus"></i>
                                    Follow</button>
                            </div>
                        </div>
                        <div class="row m-t-40">
                            <div class="col b-r">
                                <h2 class="font-light">14</h2>
                                <h6>Photos</h6>
                            </div>
                            <div class="col b-r">
                                <h2 class="font-light">54</h2>
                                <h6>Videos</h6>
                            </div>
                            <div class="col">
                                <h2 class="font-light">145</h2>
                                <h6>Tasks</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr></div>
                        <div class="card-block" style="overflow: visible;">
                            <div
                                class="slimScrollDiv"
                                style="position: relative; overflow: visible hidden; width: auto; height: 80px;">
                                <p
                                    class="text-center aboutscroll"
                                    style="overflow: hidden; width: auto; height: 80px;">
                                    Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor
                                    incididunt adipisicing elit, sed do eiusmod tempor incididunLorem ipsum dolor
                                    sit ametetur adipisicing elit, sed do eiusmod tempor incididuntt
                                </p>
                                <div
                                    class="slimScrollBar"
                                    style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 44.4444px;"></div>
                                <div
                                    class="slimScrollRail"
                                    style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                            </div>
                            <ul class="list-icons d-flex flex-item text-center p-t-10">
                                <li class="col">
                                    <a
                                        href="javascript:void(0)"
                                        data-toggle="tooltip"
                                        title=""
                                        data-original-title="Website">
                                        <i class="fa fa-globe font-20"></i>
                                    </a>
                                </li>
                                <li class="col">
                                    <a
                                        href="javascript:void(0)"
                                        data-toggle="tooltip"
                                        title=""
                                        data-original-title="twitter">
                                        <i class="fa fa-twitter font-20"></i>
                                    </a>
                                </li>
                                <li class="col">
                                    <a
                                        href="javascript:void(0)"
                                        data-toggle="tooltip"
                                        title=""
                                        data-original-title="Facebook">
                                        <i class="fa fa-facebook-square font-20"></i>
                                    </a>
                                </li>
                                <li class="col">
                                    <a
                                        href="javascript:void(0)"
                                        data-toggle="tooltip"
                                        title=""
                                        data-original-title="Youtube">
                                        <i class="fa fa-youtube-play font-20"></i>
                                    </a>
                                </li>
                                <li class="col">
                                    <a
                                        href="javascript:void(0)"
                                        data-toggle="tooltip"
                                        title=""
                                        data-original-title="Linkd-in">
                                        <i class="fa fa-linkedin-square font-20"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-block" style="overflow: visible;">
                            <h4 class="card-title">Recent Chats</h4>
                            <div
                                class="slimScrollDiv"
                                style="position: relative; overflow: visible hidden; width: auto; height: 470px;">
                                <div class="chat-box" style="overflow: hidden; width: auto; height: 470px;">
                                    <!--chat Row -->
                                    <ul class="chat-list">
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="../assets/images/users/1.jpg" alt="user"></div>
                                                <div class="chat-content">
                                                    <h5>James Anderson</h5>
                                                    <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                                </div>
                                                <div class="chat-time">10:56 am</div>
                                            </li>
                                            <!--chat Row -->
                                            <li>
                                                <div class="chat-img">
                                                    <img src="../assets/images/users/2.jpg" alt="user"></div>
                                                    <div class="chat-content">
                                                        <h5>Bianca Doe</h5>
                                                        <div class="box bg-light-success">It’s Great opportunity to work.</div>
                                                    </div>
                                                    <div class="chat-time">10:57 am</div>
                                                </li>
                                                <!--chat Row -->
                                                <li class="odd">
                                                    <div class="chat-content">
                                                        <div class="box bg-light-inverse">I would love to join the team.</div>
                                                        <br></div>
                                                        <div class="chat-time">10:58 am</div>
                                                    </li>
                                                    <!--chat Row -->
                                                    <li class="odd">
                                                        <div class="chat-content">
                                                            <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                                            <br></div>
                                                            <div class="chat-time">10:59 am</div>
                                                        </li>
                                                        <!--chat Row -->
                                                        <li>
                                                            <div class="chat-img">
                                                                <img src="../assets/images/users/3.jpg" alt="user"></div>
                                                                <div class="chat-content">
                                                                    <h5>Angelina Rhodes</h5>
                                                                    <div class="box bg-light-primary">Well we have good budget for the project</div>
                                                                </div>
                                                                <div class="chat-time">11:00 am</div>
                                                            </li>
                                                            <!--chat Row -->
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="slimScrollBar"
                                                        style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 428.101px;"></div>
                                                    <div
                                                        class="slimScrollRail"
                                                        style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                                </div>
                                            </div>
                                            <div class="card-block b-t">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <textarea placeholder="Type your message here" class="form-control b-0"></textarea>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <button type="button" class="btn btn-info btn-circle btn-lg">
                                                            <i class="fa fa-paper-plane-o"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-block">
                                                <h4 class="card-title">Recent Messages</h4>
                                                <div class="message-box" style="overflow: visible;">
                                                    <div
                                                        class="slimScrollDiv"
                                                        style="position: relative; overflow: visible hidden; width: auto; height: 570px;">
                                                        <div
                                                            class="message-widget message-scroll"
                                                            style="overflow: hidden; width: auto; height: 570px;">
                                                            <!-- Message -->
                                                            <a href="#">
                                                                <div class="user-img">
                                                                    <img src="../assets/images/users/1.jpg" alt="user" class="img-circle">
                                                                        <span class="profile-status online pull-right"></span>
                                                                    </div>
                                                                    <div class="mail-contnet">
                                                                        <h5>Pavan kumar</h5>
                                                                        <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and
                                                                            type setting industry. Lorem Ipsum has been.</span>
                                                                        <span class="time">9:30 AM</span>
                                                                    </div>
                                                                </a>
                                                                <!-- Message -->
                                                                <a href="#">
                                                                    <div class="user-img">
                                                                        <img src="../assets/images/users/2.jpg" alt="user" class="img-circle">
                                                                            <span class="profile-status busy pull-right"></span>
                                                                        </div>
                                                                        <div class="mail-contnet">
                                                                            <h5>Sonu Nigam</h5>
                                                                            <span class="mail-desc">I've sung a song! See you at</span>
                                                                            <span class="time">9:10 AM</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <a href="#">
                                                                        <div class="user-img">
                                                                            <span class="round">A</span>
                                                                            <span class="profile-status away pull-right"></span>
                                                                        </div>
                                                                        <div class="mail-contnet">
                                                                            <h5>Arijit Sinh</h5>
                                                                            <span class="mail-desc">Simply dummy text of the printing and typesetting industry.</span>
                                                                            <span class="time">9:08 AM</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- Message -->
                                                                    <a href="#">
                                                                        <div class="user-img">
                                                                            <img src="../assets/images/users/4.jpg" alt="user" class="img-circle">
                                                                                <span class="profile-status offline pull-right"></span>
                                                                            </div>
                                                                            <div class="mail-contnet">
                                                                                <h5>Pavan kumar</h5>
                                                                                <span class="mail-desc">Just see the my admin!</span>
                                                                                <span class="time">9:02 AM</span>
                                                                            </div>
                                                                        </a>
                                                                        <!-- Message -->
                                                                        <a href="#">
                                                                            <div class="user-img">
                                                                                <img src="../assets/images/users/1.jpg" alt="user" class="img-circle">
                                                                                    <span class="profile-status online pull-right"></span>
                                                                                </div>
                                                                                <div class="mail-contnet">
                                                                                    <h5>Pavan kumar</h5>
                                                                                    <span class="mail-desc">Welcome to the Elite Admin</span>
                                                                                    <span class="time">9:30 AM</span>
                                                                                </div>
                                                                            </a>
                                                                            <!-- Message -->
                                                                            <a href="#">
                                                                                <div class="user-img">
                                                                                    <img src="../assets/images/users/2.jpg" alt="user" class="img-circle">
                                                                                        <span class="profile-status busy pull-right"></span>
                                                                                    </div>
                                                                                    <div class="mail-contnet">
                                                                                        <h5>Sonu Nigam</h5>
                                                                                        <span class="mail-desc">I've sung a song! See you at</span>
                                                                                        <span class="time">9:10 AM</span>
                                                                                    </div>
                                                                                </a>
                                                                                <!-- Message -->
                                                                                <a href="#">
                                                                                    <div class="user-img">
                                                                                        <img src="../assets/images/users/3.jpg" alt="user" class="img-circle">
                                                                                            <span class="profile-status away pull-right"></span>
                                                                                        </div>
                                                                                        <div class="mail-contnet">
                                                                                            <h5>Arijit Sinh</h5>
                                                                                            <span class="mail-desc">I am a singer!</span>
                                                                                            <span class="time">9:08 AM</span>
                                                                                        </div>
                                                                                    </a>
                                                                                    <!-- Message -->
                                                                                    <a href="#">
                                                                                        <div class="user-img">
                                                                                            <img src="../assets/images/users/4.jpg" alt="user" class="img-circle">
                                                                                                <span class="profile-status offline pull-right"></span>
                                                                                            </div>
                                                                                            <div class="mail-contnet">
                                                                                                <h5>Pavan kumar</h5>
                                                                                                <span class="mail-desc">Just see the my admin!</span>
                                                                                                <span class="time">9:02 AM</span>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="slimScrollBar"
                                                                                        style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 465.473px;"></div>
                                                                                    <div
                                                                                        class="slimScrollRail"
                                                                                        style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Row -->
                                                            <!-- Row -->
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="card">
                                                                        <div class="card-block">
                                                                            <select class="custom-select pull-right">
                                                                                <option selected="">January</option>
                                                                                <option value="1">February</option>
                                                                                <option value="2">March</option>
                                                                                <option value="3">April</option>
                                                                            </select>
                                                                            <h4 class="card-title">Projects of the Month</h4>
                                                                            <div class="table-responsive m-t-40">
                                                                                <table class="table stylish-table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th colspan="2">Assigned</th>
                                                                                            <th>Name</th>
                                                                                            <th>Priority</th>
                                                                                            <th>Budget</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td style="width:50px;">
                                                                                                <span class="round">S</span>
                                                                                            </td>
                                                                                            <td>
                                                                                                <h6>Sunil Joshi</h6>
                                                                                                <small class="text-muted">Web Designer</small>
                                                                                            </td>
                                                                                            <td>Elite Admin</td>
                                                                                            <td>
                                                                                                <span class="label label-light-success">Low</span>
                                                                                            </td>
                                                                                            <td>$3.9K</td>
                                                                                        </tr>
                                                                                        <tr class="active">
                                                                                            <td>
                                                                                                <span class="round">
                                                                                                    <img src="../assets/images/users/2.jpg" alt="user" width="50"></span>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <h6>Andrew</h6>
                                                                                                    <small class="text-muted">Project Manager</small>
                                                                                                </td>
                                                                                                <td>Real Homes</td>
                                                                                                <td>
                                                                                                    <span class="label label-light-info">Medium</span>
                                                                                                </td>
                                                                                                <td>$23.9K</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <span class="round round-success">B</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <h6>Bhavesh patel</h6>
                                                                                                    <small class="text-muted">Developer</small>
                                                                                                </td>
                                                                                                <td>MedicalPro Theme</td>
                                                                                                <td>
                                                                                                    <span class="label label-light-danger">High</span>
                                                                                                </td>
                                                                                                <td>$12.9K</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <span class="round round-primary">N</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <h6>Nirav Joshi</h6>
                                                                                                    <small class="text-muted">Frontend Eng</small>
                                                                                                </td>
                                                                                                <td>Elite Admin</td>
                                                                                                <td>
                                                                                                    <span class="label label-light-success">Low</span>
                                                                                                </td>
                                                                                                <td>$10.9K</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <span class="round round-warning">M</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <h6>Micheal Doe</h6>
                                                                                                    <small class="text-muted">Content Writer</small>
                                                                                                </td>
                                                                                                <td>Helping Hands</td>
                                                                                                <td>
                                                                                                    <span class="label label-light-danger">High</span>
                                                                                                </td>
                                                                                                <td>$12.9K</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <span class="round round-danger">N</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <h6>Johnathan</h6>
                                                                                                    <small class="text-muted">Graphic</small>
                                                                                                </td>
                                                                                                <td>Digital Agency</td>
                                                                                                <td>
                                                                                                    <span class="label label-light-danger">High</span>
                                                                                                </td>
                                                                                                <td>$2.6K</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="card">
                                                                            <div class="card-block">
                                                                                <select class="custom-select pull-right">
                                                                                    <option selected="">Today</option>
                                                                                    <option value="1">Weekly</option>
                                                                                </select>
                                                                                <h4 class="card-title">Weather Report</h4>
                                                                                <div class="d-flex align-items-center flex-row m-t-30">
                                                                                    <div class="p-2 display-5 text-info">
                                                                                        <i class="wi wi-day-showers"></i>
                                                                                        <span>73<sup>°</sup>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="p-2">
                                                                                        <h3 class="m-b-0">Saturday</h3>
                                                                                        <small>Ahmedabad, India</small>
                                                                                    </div>
                                                                                </div>
                                                                                <table class="table no-border">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Wind</td>
                                                                                            <td class="font-medium">ESE 17 mph</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Humidity</td>
                                                                                            <td class="font-medium">83%</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Pressure</td>
                                                                                            <td class="font-medium">28.56 in</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Cloud Cover</td>
                                                                                            <td class="font-medium">78%</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Ceiling</td>
                                                                                            <td class="font-medium">25760 ft</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                                <hr>
                                                                                    <ul class="list-unstyled row text-center city-weather-days">
                                                                                        <li class="col">
                                                                                            <i class="wi wi-day-sunny"></i>
                                                                                            <span>09:30</span>
                                                                                            <h3>70<sup>°</sup>
                                                                                            </h3>
                                                                                        </li>
                                                                                        <li class="col">
                                                                                            <i class="wi wi-day-cloudy"></i>
                                                                                            <span>11:30</span>
                                                                                            <h3>72<sup>°</sup>
                                                                                            </h3>
                                                                                        </li>
                                                                                        <li class="col">
                                                                                            <i class="wi wi-day-hail"></i>
                                                                                            <span>13:30</span>
                                                                                            <h3>75<sup>°</sup>
                                                                                            </h3>
                                                                                        </li>
                                                                                        <li class="col">
                                                                                            <i class="wi wi-day-sprinkle"></i>
                                                                                            <span>15:30</span>
                                                                                            <h3>76<sup>°</sup>
                                                                                            </h3>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Row -->
                                                                    <!-- Row -->
                                                                    <div class="row">
                                                                        <!-- Column -->
                                                                        <div class="col-lg-4">
                                                                            <div class="card">
                                                                                <img
                                                                                    class="card-img-top img-responsive"
                                                                                    src="../assets/images/big/img1.jpg"
                                                                                    alt="Card">
                                                                                    <div class="card-block">
                                                                                        <ul class="list-inline font-14">
                                                                                            <li class="p-l-0">20 May 2016</li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0)" class="link">3 Comment</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Column -->
                                                                            <!-- Column -->
                                                                            <div class="col-lg-4">
                                                                                <div class="card">
                                                                                    <img
                                                                                        class="card-img-top img-responsive"
                                                                                        src="../assets/images/big/img2.jpg"
                                                                                        alt="Card">
                                                                                        <div class="card-block">
                                                                                            <ul class="list-inline font-14">
                                                                                                <li class="p-l-0">20 May 2016</li>
                                                                                                <li>
                                                                                                    <a href="javascript:void(0)" class="link">3 Comment</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                            <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Column -->
                                                                                <!-- Column -->
                                                                                <div class="col-lg-4">
                                                                                    <div class="card">
                                                                                        <img
                                                                                            class="card-img-top img-responsive"
                                                                                            src="../assets/images/big/img4.jpg"
                                                                                            alt="Card">
                                                                                            <div class="card-block">
                                                                                                <ul class="list-inline font-14">
                                                                                                    <li class="p-l-0">20 May 2016</li>
                                                                                                    <li>
                                                                                                        <a href="javascript:void(0)" class="link">3 Comment</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Column -->
                                                                                </div>
                                                                                <!-- Row -->
                                                                                <!-- Row -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="card">
                                                                                            <div class="card-block">
                                                                                                <h4 class="card-title">Recent Comments</h4>
                                                                                            </div>
                                                                                            <!-- ============================================================== -->
                                                                                            <!-- Comment widgets -->
                                                                                            <!-- ============================================================== -->
                                                                                            <div class="comment-widgets">
                                                                                                <!-- Comment Row -->
                                                                                                <div class="d-flex flex-row comment-row">
                                                                                                    <div class="p-2">
                                                                                                        <span class="round">
                                                                                                            <img src="../assets/images/users/1.jpg" alt="user" width="50"></span>
                                                                                                        </div>
                                                                                                        <div class="comment-text w-100">
                                                                                                            <h5>James Anderson</h5>
                                                                                                            <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type
                                                                                                                setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the
                                                                                                                printing and type setting industry.</p>
                                                                                                            <div class="comment-footer">
                                                                                                                <span class="text-muted pull-right">April 14, 2016</span>
                                                                                                                <span class="label label-light-info">Pending</span>
                                                                                                                <span class="action-icons">
                                                                                                                    <a href="javascript:void(0)">
                                                                                                                        <i class="ti-pencil-alt"></i>
                                                                                                                    </a>
                                                                                                                    <a href="javascript:void(0)">
                                                                                                                        <i class="ti-check"></i>
                                                                                                                    </a>
                                                                                                                    <a href="javascript:void(0)">
                                                                                                                        <i class="ti-heart"></i>
                                                                                                                    </a>
                                                                                                                </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Comment Row -->
                                                                                                    <div class="d-flex flex-row comment-row active">
                                                                                                        <div class="p-2">
                                                                                                            <span class="round">
                                                                                                                <img src="../assets/images/users/2.jpg" alt="user" width="50"></span>
                                                                                                            </div>
                                                                                                            <div class="comment-text active w-100">
                                                                                                                <h5>Michael Jorden</h5>
                                                                                                                <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type
                                                                                                                    setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the
                                                                                                                    printing and type setting industry..</p>
                                                                                                                <div class="comment-footer ">
                                                                                                                    <span class="text-muted pull-right">April 14, 2016</span>
                                                                                                                    <span class="label label-light-success">Approved</span>
                                                                                                                    <span class="action-icons active">
                                                                                                                        <a href="javascript:void(0)">
                                                                                                                            <i class="ti-pencil-alt"></i>
                                                                                                                        </a>
                                                                                                                        <a href="javascript:void(0)">
                                                                                                                            <i class="icon-close"></i>
                                                                                                                        </a>
                                                                                                                        <a href="javascript:void(0)">
                                                                                                                            <i class="ti-heart text-danger"></i>
                                                                                                                        </a>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- Comment Row -->
                                                                                                        <div class="d-flex flex-row comment-row">
                                                                                                            <div class="p-2">
                                                                                                                <span class="round">
                                                                                                                    <img src="../assets/images/users/3.jpg" alt="user" width="50"></span>
                                                                                                                </div>
                                                                                                                <div class="comment-text w-100">
                                                                                                                    <h5>Johnathan Doeting</h5>
                                                                                                                    <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type
                                                                                                                        setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the
                                                                                                                        printing and type setting industry.</p>
                                                                                                                    <div class="comment-footer">
                                                                                                                        <span class="text-muted pull-right">April 14, 2016</span>
                                                                                                                        <span class="label label-light-danger">Rejected</span>
                                                                                                                        <span class="action-icons">
                                                                                                                            <a href="javascript:void(0)">
                                                                                                                                <i class="ti-pencil-alt"></i>
                                                                                                                            </a>
                                                                                                                            <a href="javascript:void(0)">
                                                                                                                                <i class="ti-check"></i>
                                                                                                                            </a>
                                                                                                                            <a href="javascript:void(0)">
                                                                                                                                <i class="ti-heart"></i>
                                                                                                                            </a>
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <!-- Comment Row -->
                                                                                                            <div class="d-flex flex-row comment-row">
                                                                                                                <div class="p-2">
                                                                                                                    <span class="round">
                                                                                                                        <img src="../assets/images/users/4.jpg" alt="user" width="50"></span>
                                                                                                                    </div>
                                                                                                                    <div class="comment-text w-100">
                                                                                                                        <h5>James Anderson</h5>
                                                                                                                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type
                                                                                                                            setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the
                                                                                                                            printing and type setting industry..</p>
                                                                                                                        <div class="comment-footer">
                                                                                                                            <span class="text-muted pull-right">April 14, 2016</span>
                                                                                                                            <span class="label label-light-info">Pending</span>
                                                                                                                            <span class="action-icons">
                                                                                                                                <a href="javascript:void(0)">
                                                                                                                                    <i class="ti-pencil-alt"></i>
                                                                                                                                </a>
                                                                                                                                <a href="javascript:void(0)">
                                                                                                                                    <i class="ti-check"></i>
                                                                                                                                </a>
                                                                                                                                <a href="javascript:void(0)">
                                                                                                                                    <i class="ti-heart"></i>
                                                                                                                                </a>
                                                                                                                            </span>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6">
                                                                                                        <div class="card">
                                                                                                            <div class="card-block">
                                                                                                                <button
                                                                                                                    class="pull-right btn btn-sm btn-rounded btn-success"
                                                                                                                    data-toggle="modal"
                                                                                                                    data-target="#myModal">Add Task</button>
                                                                                                                <h4 class="card-title">To Do list</h4>
                                                                                                                <!-- ============================================================== -->
                                                                                                                <!-- To do list widgets -->
                                                                                                                <!-- ============================================================== -->
                                                                                                                <div class="to-do-widget m-t-20">
                                                                                                                    <!-- .modal for add task -->
                                                                                                                    <div
                                                                                                                        class="modal fade"
                                                                                                                        id="myModal"
                                                                                                                        tabindex="-1"
                                                                                                                        role="dialog"
                                                                                                                        aria-hidden="true">
                                                                                                                        <div class="modal-dialog" role="document">
                                                                                                                            <div class="modal-content">
                                                                                                                                <div class="modal-header">
                                                                                                                                    <h4 class="modal-title">Add Task</h4>
                                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                        <span aria-hidden="true">×</span>
                                                                                                                                    </button>
                                                                                                                                </div>
                                                                                                                                <div class="modal-body">
                                                                                                                                    <form>
                                                                                                                                        <div class="form-group">
                                                                                                                                            <label>Name</label>
                                                                                                                                            <input type="text" class="form-control" placeholder="Enter Your Name"></div>
                                                                                                                                            <div class="form-group">
                                                                                                                                                <label>Email address</label>
                                                                                                                                                <input type="email" class="form-control" placeholder="Enter email"></div>
                                                                                                                                            </form>
                                                                                                                                        </div>
                                                                                                                                        <div class="modal-footer">
                                                                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                                                            <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <!-- /.modal-content -->
                                                                                                                                </div>
                                                                                                                                <!-- /.modal-dialog -->
                                                                                                                            </div>
                                                                                                                            <!-- /.modal -->
                                                                                                                            <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                                                                                                                <li class="list-group-item" data-role="task">
                                                                                                                                    <div class="checkbox checkbox-info">
                                                                                                                                        <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                                                                                                                            <label for="inputSchedule" class="">
                                                                                                                                                <span>Schedule meeting with</span>
                                                                                                                                            </label>
                                                                                                                                        </div>
                                                                                                                                        <ul class="assignedto">
                                                                                                                                            <li>
                                                                                                                                                <img
                                                                                                                                                    src="../assets/images/users/1.jpg"
                                                                                                                                                    alt="user"
                                                                                                                                                    data-toggle="tooltip"
                                                                                                                                                    data-placement="top"
                                                                                                                                                    title=""
                                                                                                                                                    data-original-title="Steave"></li>
                                                                                                                                                <li>
                                                                                                                                                    <img
                                                                                                                                                        src="../assets/images/users/2.jpg"
                                                                                                                                                        alt="user"
                                                                                                                                                        data-toggle="tooltip"
                                                                                                                                                        data-placement="top"
                                                                                                                                                        title=""
                                                                                                                                                        data-original-title="Jessica"></li>
                                                                                                                                                    <li>
                                                                                                                                                        <img
                                                                                                                                                            src="../assets/images/users/3.jpg"
                                                                                                                                                            alt="user"
                                                                                                                                                            data-toggle="tooltip"
                                                                                                                                                            data-placement="top"
                                                                                                                                                            title=""
                                                                                                                                                            data-original-title="Priyanka"></li>
                                                                                                                                                        <li>
                                                                                                                                                            <img
                                                                                                                                                                src="../assets/images/users/4.jpg"
                                                                                                                                                                alt="user"
                                                                                                                                                                data-toggle="tooltip"
                                                                                                                                                                data-placement="top"
                                                                                                                                                                title=""
                                                                                                                                                                data-original-title="Selina"></li>
                                                                                                                                                        </ul>
                                                                                                                                                    </li>
                                                                                                                                                    <li class="list-group-item" data-role="task">
                                                                                                                                                        <div class="checkbox checkbox-info">
                                                                                                                                                            <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                                                                                                                                                <label for="inputCall" class="">
                                                                                                                                                                    <span>Give Purchase report to</span>
                                                                                                                                                                    <span class="label label-light-danger">Today</span>
                                                                                                                                                                </label>
                                                                                                                                                            </div>
                                                                                                                                                            <ul class="assignedto">
                                                                                                                                                                <li>
                                                                                                                                                                    <img
                                                                                                                                                                        src="../assets/images/users/3.jpg"
                                                                                                                                                                        alt="user"
                                                                                                                                                                        data-toggle="tooltip"
                                                                                                                                                                        data-placement="top"
                                                                                                                                                                        title=""
                                                                                                                                                                        data-original-title="Priyanka"></li>
                                                                                                                                                                    <li>
                                                                                                                                                                        <img
                                                                                                                                                                            src="../assets/images/users/4.jpg"
                                                                                                                                                                            alt="user"
                                                                                                                                                                            data-toggle="tooltip"
                                                                                                                                                                            data-placement="top"
                                                                                                                                                                            title=""
                                                                                                                                                                            data-original-title="Selina"></li>
                                                                                                                                                                    </ul>
                                                                                                                                                                </li>
                                                                                                                                                                <li class="list-group-item" data-role="task">
                                                                                                                                                                    <div class="checkbox checkbox-info">
                                                                                                                                                                        <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                                                                                                                                                            <label for="inputBook" class="">
                                                                                                                                                                                <span>Book flight for holiday</span>
                                                                                                                                                                            </label>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="item-date">
                                                                                                                                                                            26 jun 2017</div>
                                                                                                                                                                    </li>
                                                                                                                                                                    <li class="list-group-item" data-role="task">
                                                                                                                                                                        <div class="checkbox checkbox-info">
                                                                                                                                                                            <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                                                                                                                                                                <label for="inputForward" class="">
                                                                                                                                                                                    <span>Forward all tasks</span>
                                                                                                                                                                                    <span class="label label-light-warning">2 weeks</span>
                                                                                                                                                                                </label>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="item-date">
                                                                                                                                                                                26 jun 2017</div>
                                                                                                                                                                        </li>
                                                                                                                                                                        <li class="list-group-item" data-role="task">
                                                                                                                                                                            <div class="checkbox checkbox-info">
                                                                                                                                                                                <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                                                                                                                                                                    <label for="inputRecieve" class="">
                                                                                                                                                                                        <span>Recieve shipment</span>
                                                                                                                                                                                    </label>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="item-date">
                                                                                                                                                                                    26 jun 2017</div>
                                                                                                                                                                            </li>
                                                                                                                                                                            <li class="list-group-item" data-role="task">
                                                                                                                                                                                <div class="checkbox checkbox-info">
                                                                                                                                                                                    <input type="checkbox" id="inputpayment" name="inputCheckboxespayment">
                                                                                                                                                                                        <label for="inputpayment" class="">
                                                                                                                                                                                            <span>Send payment today</span>
                                                                                                                                                                                        </label>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="item-date">
                                                                                                                                                                                        26 jun 2017</div>
                                                                                                                                                                                </li>
                                                                                                                                                                                <li class="list-group-item" data-role="task">
                                                                                                                                                                                    <div class="checkbox checkbox-info">
                                                                                                                                                                                        <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                                                                                                                                                                            <label for="inputForward2" class="">
                                                                                                                                                                                                <span>Important tasks</span>
                                                                                                                                                                                                <span class="label label-light-success">2 weeks</span>
                                                                                                                                                                                            </label>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <ul class="assignedto">
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <img
                                                                                                                                                                                                    src="../assets/images/users/1.jpg"
                                                                                                                                                                                                    alt="user"
                                                                                                                                                                                                    data-toggle="tooltip"
                                                                                                                                                                                                    data-placement="top"
                                                                                                                                                                                                    title=""
                                                                                                                                                                                                    data-original-title="Assign to Steave"></li>
                                                                                                                                                                                                <li>
                                                                                                                                                                                                    <img
                                                                                                                                                                                                        src="../assets/images/users/2.jpg"
                                                                                                                                                                                                        alt="user"
                                                                                                                                                                                                        data-toggle="tooltip"
                                                                                                                                                                                                        data-placement="top"
                                                                                                                                                                                                        title=""
                                                                                                                                                                                                        data-original-title="Assign to Jessica"></li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <img
                                                                                                                                                                                                            src="../assets/images/users/4.jpg"
                                                                                                                                                                                                            alt="user"
                                                                                                                                                                                                            data-toggle="tooltip"
                                                                                                                                                                                                            data-placement="top"
                                                                                                                                                                                                            title=""
                                                                                                                                                                                                            data-original-title="Assign to Selina"></li>
                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                </li>
                                                                                                                                                                                            </ul>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <!-- Row -->
                                                                                                                                                                        <!-- ============================================================== -->
                                                                                                                                                                        <!-- End PAge Content -->
                                                                                                                                                                        <!-- ============================================================== -->
                                                                                                                                                                        <!-- ============================================================== -->
                                                                                                                                                                        <!-- Right sidebar -->
                                                                                                                                                                        <!-- ============================================================== -->
                                                                                                                                                                        <!-- .right-sidebar -->
                                                                                                                                                                        <div class="right-sidebar" style="overflow: visible;">
                                                                                                                                                                            <div
                                                                                                                                                                                class="slimScrollDiv"
                                                                                                                                                                                style="position: relative; overflow: visible hidden; width: auto; height: 100%;">
                                                                                                                                                                                <div
                                                                                                                                                                                    class="slimscrollright"
                                                                                                                                                                                    style="overflow: hidden; width: auto; height: 100%;">
                                                                                                                                                                                    <div class="rpanel-title">
                                                                                                                                                                                        Service Panel
                                                                                                                                                                                        <span>
                                                                                                                                                                                            <i class="ti-close right-side-toggle"></i>
                                                                                                                                                                                        </span>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="r-panel-body">
                                                                                                                                                                                        <ul id="themecolors" class="m-t-20">
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <b>With Light sidebar</b>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="default" class="default-theme">1</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="green" class="green-theme">2</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="red" class="red-theme">3</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li class="d-block m-t-30">
                                                                                                                                                                                                <b>With Dark sidebar</b>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a
                                                                                                                                                                                                    href="javascript:void(0)"
                                                                                                                                                                                                    data-theme="default-dark"
                                                                                                                                                                                                    class="default-dark-theme">7</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                        </ul>
                                                                                                                                                                                        <ul class="m-t-20 chatonline">
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <b>Chat option</b>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="javascript:void(0)">
                                                                                                                                                                                                    <img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle">
                                                                                                                                                                                                        <span>Varun Dhavan
                                                                                                                                                                                                            <small class="text-success">online</small>
                                                                                                                                                                                                        </span>
                                                                                                                                                                                                    </a>
                                                                                                                                                                                                </li>
                                                                                                                                                                                                <li>
                                                                                                                                                                                                    <a href="javascript:void(0)">
                                                                                                                                                                                                        <img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle">
                                                                                                                                                                                                            <span>Genelia Deshmukh
                                                                                                                                                                                                                <small class="text-warning">Away</small>
                                                                                                                                                                                                            </span>
                                                                                                                                                                                                        </a>
                                                                                                                                                                                                    </li>
                                                                                                                                                                                                    <li>
                                                                                                                                                                                                        <a href="javascript:void(0)">
                                                                                                                                                                                                            <img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle">
                                                                                                                                                                                                                <span>Ritesh Deshmukh
                                                                                                                                                                                                                    <small class="text-danger">Busy</small>
                                                                                                                                                                                                                </span>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                        </li>
                                                                                                                                                                                                        <li>
                                                                                                                                                                                                            <a href="javascript:void(0)">
                                                                                                                                                                                                                <img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle">
                                                                                                                                                                                                                    <span>Arijit Sinh
                                                                                                                                                                                                                        <small class="text-muted">Offline</small>
                                                                                                                                                                                                                    </span>
                                                                                                                                                                                                                </a>
                                                                                                                                                                                                            </li>
                                                                                                                                                                                                            <li>
                                                                                                                                                                                                                <a href="javascript:void(0)">
                                                                                                                                                                                                                    <img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle">
                                                                                                                                                                                                                        <span>Govinda Star
                                                                                                                                                                                                                            <small class="text-success">online</small>
                                                                                                                                                                                                                        </span>
                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                </li>
                                                                                                                                                                                                                <li>
                                                                                                                                                                                                                    <a href="javascript:void(0)">
                                                                                                                                                                                                                        <img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle">
                                                                                                                                                                                                                            <span>John Abraham<small class="text-success">online</small>
                                                                                                                                                                                                                            </span>
                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                        <a href="javascript:void(0)">
                                                                                                                                                                                                                            <img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle">
                                                                                                                                                                                                                                <span>Hritik Roshan<small class="text-success">online</small>
                                                                                                                                                                                                                                </span>
                                                                                                                                                                                                                            </a>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <a href="javascript:void(0)">
                                                                                                                                                                                                                                <img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle">
                                                                                                                                                                                                                                    <span>Pwandeep rajan
                                                                                                                                                                                                                                        <small class="text-success">online</small>
                                                                                                                                                                                                                                    </span>
                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                            </li>
                                                                                                                                                                                                                        </ul>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                <div
                                                                                                                                                                                                                    class="slimScrollBar"
                                                                                                                                                                                                                    style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                                                                                                                                                                                                <div
                                                                                                                                                                                                                    class="slimScrollRail"
                                                                                                                                                                                                                    style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <!-- ============================================================== -->
                                                                                                                                                                                                        <!-- End Right sidebar -->
                                                                                                                                                                                                        <!-- ============================================================== -->
                                                                                                                                                                                                    </div>

@endsection