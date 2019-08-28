@extends('layouts.wdlicenciamiento') @section('content')
<div class="wrapper">

    <!-- iniContent Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <!---->
                <div class="card-block">
                    <h4 class="card-title">Data Export</h4>
                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF &amp; Print</h6>
                    <div class="table-responsive m-t-40">
                        <div id="example23_wrapper" class="dataTables_wrapper">
                            <div class="dt-buttons">
                                <a
                                    class="dt-button buttons-copy buttons-html5"
                                    tabindex="0"
                                    aria-controls="example23"
                                    href="#">
                                    <span>Copy</span></a>
                                <a
                                    class="dt-button buttons-csv buttons-html5"
                                    tabindex="0"
                                    aria-controls="example23"
                                    href="#">
                                    <span>CSV</span></a>
                                <a
                                    class="dt-button buttons-excel buttons-html5"
                                    tabindex="0"
                                    aria-controls="example23"
                                    href="#">
                                    <span>Excel</span></a>
                                <a
                                    class="dt-button buttons-pdf buttons-html5"
                                    tabindex="0"
                                    aria-controls="example23"
                                    href="#">
                                    <span>PDF</span></a>
                                <a
                                    class="dt-button buttons-print"
                                    tabindex="0"
                                    aria-controls="example23"
                                    href="#">
                                    <span>Print</span></a>
                            </div>
                            <div id="example23_filter" class="dataTables_filter">
                                <label>Search:
                                    <input type="search" class="" placeholder="" aria-controls="example23"></label>
                            </div>
                            <table
                                id="example23"
                                class="display nowrap table table-hover table-striped table-bordered dataTable"
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
                                            style="width: 140px;">Name</th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="example23"
                                            rowspan="1"
                                            colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="width: 206px;">Position</th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="example23"
                                            rowspan="1"
                                            colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="width: 105px;">Office</th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="example23"
                                            rowspan="1"
                                            colspan="1"
                                            aria-label="Age: activate to sort column ascending"
                                            style="width: 51px;">Age</th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="example23"
                                            rowspan="1"
                                            colspan="1"
                                            aria-label="Start date: activate to sort column ascending"
                                            style="width: 101px;">Start date</th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="example23"
                                            rowspan="1"
                                            colspan="1"
                                            aria-label="Salary: activate to sort column ascending"
                                            style="width: 87px;">Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Position</th>
                                        <th rowspan="1" colspan="1">Office</th>
                                        <th rowspan="1" colspan="1">Age</th>
                                        <th rowspan="1" colspan="1">Start date</th>
                                        <th rowspan="1" colspan="1">Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                                class="dataTables_info"
                                id="example23_info"
                                role="status"
                                aria-live="polite">Showing 1 to 10 of 57 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="example23_paginate">
                                <a
                                    class="paginate_button previous disabled"
                                    aria-controls="example23"
                                    data-dt-idx="0"
                                    tabindex="0"
                                    id="example23_previous">Previous</a>
                                <span>
                                    <a
                                        class="paginate_button current"
                                        aria-controls="example23"
                                        data-dt-idx="1"
                                        tabindex="0">1</a>
                                    <a
                                        class="paginate_button "
                                        aria-controls="example23"
                                        data-dt-idx="2"
                                        tabindex="0">2</a>
                                    <a
                                        class="paginate_button "
                                        aria-controls="example23"
                                        data-dt-idx="3"
                                        tabindex="0">3</a>
                                    <a
                                        class="paginate_button "
                                        aria-controls="example23"
                                        data-dt-idx="4"
                                        tabindex="0">4</a>
                                    <a
                                        class="paginate_button "
                                        aria-controls="example23"
                                        data-dt-idx="5"
                                        tabindex="0">5</a>
                                    <a
                                        class="paginate_button "
                                        aria-controls="example23"
                                        data-dt-idx="6"
                                        tabindex="0">6</a>
                                </span>
                                <a
                                    class="paginate_button next"
                                    aria-controls="example23"
                                    data-dt-idx="7"
                                    tabindex="0"
                                    id="example23_next">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->

                <div class="row mb-12">
                    <div class="col-sm-12">
                        <h1 align="center" class="m-0 text-dark">Users</h1>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row mb-2">
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm">
                            <input
                                class="form-control"
                                type="search"
                                placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6"></div>
                    <div class="col-sm-2">
                        <div class="input-group input-group-sm">
                            <a href="/usercreate">
                                <button class="btn btn-success">
                                    <i class="fas fa-user-plus"></i>
                                    Create user
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>id</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                    </tr>

                                    @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $usuario->role }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('userEdit',$usuario->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a
                                                id="deleteuser"
                                                href="{{ route('userEdit',$usuario->id) }}"
                                                class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                            @csrf @method('DELETE')

                                            <!--<button class="btn btn-danger" data-toggle="modal"
                                            data-target="#exampleModalLong">Eliminar</button>-->

                                        </td>
                                    </tr>
                                    @endforeach
                                </table>

                                {!! $usuarios->links() !!}
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- /.card -->
                    </div>

                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <div class="modal fade" id="confirm" style="display: none;" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">
                        <i class="fas fa-exclamation-triangle deletet"></i>Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div align="center" class="modal-body">
                    <h5>Are you sure?</h5>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>
<!-- ./wrapper -->
@endsection