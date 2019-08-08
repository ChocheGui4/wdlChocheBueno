@extends('layouts.layout')

@section('content')
<div class="wrapper">
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-12" >
          
        
          <div class="col-sm-4"> 
          
            <select class="form-control">
              <option>ALL</option>
              <option>WDNG</option>
              <option>WDF</option>
            </select>
            
          </div>
          <a href="">
            <i class="right fas fa-question-circle"></i>
          </a>
          <div class="col-md-5"> 
          </div>

          <div class="col-md-2"> 
           
            <button class="btn btn-dark" href="/home" >Back to menu</button>
          </div>
        </div><!-- /.row -->
        <div class="row mb-12">
          <div class="col-sm-12">            
            <h1 align="center" class="m-0 text-dark">Customers</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p >add Customer</p>
                
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" data-toggle="modal" data-target="#modal-default" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
        <div class="row mb-12">
          <div class="col-sm-12">            
            <h1 align="center" class="m-0 text-dark">Companies</h1>
          </div><!-- /.col -->         
        </div><!-- /.row -->

        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-dark">
                  <div class="inner">
                    <h3>150</h3>

                    <p>New Orders</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Bounce Rate</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>44</h3>

                    <p>User Registrations</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <p>Add Company</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>

            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <!-- /.content-wrapper -->
  <!--Inicia la ventana modal-->
  
  <div class="modal fade show" id="modal-default" style="display: none" aria-modal="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Contact data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
        <div class="modal-body">
          <form action="">
            <div class="row" >
              <div class="col-sm-4 " >
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-info"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="col-sm-4 " >
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-info"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Last name">
                </div>
              </div>
              <div class="col-sm-4 " >
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
            </div>
            <div class="row" >
              <div class="col-sm-4 " >
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
              </div>
              <div class="col-sm-4 " >
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="col-sm-4 " >
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="RFC">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-11">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
              </div>
              <div class="col-xl-1">
                <button type="button" class="btn btn-success" data-toggle="modal" data-dismiss="modal" data-target="#modal-default2"> Next</button>                
              </div>
            </div>
          </form>
        </div>


      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal-content -->

  <!--Termina la ventana modal-->

  <div class="modal fade show" id="modal-default2" style="display: none" aria-modal="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Address data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
        <div class="modal-body">
          <form action="">
            <div class="row" >
              <div class="col-sm-4 " >
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Zip code">
                </div>
              </div>
              <div class="col-sm-4 " >
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="District">
                </div>
              </div>
              <div class="col-sm-4 " >
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-road"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Street">
                </div>
              </div>
            </div>
            <div class="row" >
              <div class="col-sm-4 " >
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-sort-numeric-up-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="In number">
                  </div>
              </div>
              <div class="col-sm-4 " >
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-sort-numeric-down-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Ex number">
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-xl-10">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
              </div>
              <div class="col-xl-2">
                <button type="button" class="btn btn-success" data-dismiss="modal" > Saved user</button>                
              </div>
            </div>
            
          
          </form>
        </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div> 

</div>
<!-- ./wrapper -->
@endsection

