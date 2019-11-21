@extends('layouts.wdlicenciamiento')
@section('content')

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
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

                <!-- <button
                    class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10">
                    <i class="ti-settings text-white"></i>
                </button>
                <button class="btn pull-right hidden-sm-down btn-success">
                    <i class="mdi mdi-plus-circle"></i>
                    Create</button> -->
                
            </div>
        </div>
        <!--  -->        
        
        
        <div>
            <div class="row">
                <div class="col-md-5">
                    <!-- <div id="piechart" style="width: 600px; height: 500px;"></div> -->
                    <h3 align="center">Customers and Companies</h3>
                    <canvas id="myChart1" width="100" height="100"></canvas>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                    <h3 align="center">Products in use</h3>
                    <canvas id="myChart2" width="100" height="100"></canvas>
                </div>
                
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-5">
                    <!-- <div id="piechart" style="width: 600px; height: 500px;"></div> -->
                    <h3 align="center">Branches office</h3>
                    <canvas id="myChart3" width="100" height="100"></canvas>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                    <canvas id="myChart4" width="100" height="100"></canvas>
                </div>
                
            </div>
        </div>
        

    </div>
@endsection

@section('file_js')
<script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
</script>

<script>

//Calcular compañías y clientes
var ctx = document.getElementById('myChart1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [
            'Companies','Customers'
            
        ],
        datasets: [{
            label: '# of Votes',
            data: [
                @foreach($array as $ar)
                    {{$ar}},
                @endforeach
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

//Productos
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [
            @foreach ($licenses as $lic)
                '{{$lic->name}}',
            @endforeach
            
        ],
        datasets: [{
            label: '# of Votes',
            data: [
                @foreach ($licenses as $lic)
                    {{$lic->id}},
                @endforeach
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


//Calcular sucursales
var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [
            @foreach($cuscompany as $cuscomp)
                '{{$cuscomp->companyname}}',
            @endforeach
            
        ],
        datasets: [{
            label: '# of Votes',
            data: [
                @foreach($compa as $ar)
                    {{$ar}},
                @endforeach
                
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection