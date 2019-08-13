@extends('layouts.layout2')

@section('content')
<div id="gif" class="loader"></div>
<div class="contanier">
<h1>{{ $errors}}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>cuidado!</strong> Hay algún problema con tus datos<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('contactdata.store') }}" method="POST">
        <div class="row justify-content-center">
            
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>cuidado!</strong> Hay algún problema con tus datos<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-8">
                
                <div class="card">
                    
                    <div class="card-header">
                        <h3>Contact data</h3>
                    </div>
                    <div class="card-body">
                        
                        @csrf
                        
                            <div class="row">
                                <div class=" col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Juana" required autofocus>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Apellidos:</strong>
                                        <input type="text" name="apellidos" class="form-control" placeholder="Juárez" required autofocus>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Telephone:</strong>
                                        <input type="text" name="telephone" class="form-control" placeholder="5523212321" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="email" name="email" class="form-control" placeholder="user@exam.com" required autofocus>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Password:</strong>
                                        <input type="password" name="password" class="form-control" placeholder="Secret" required autofocus>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Confirm password:</strong>
                                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm secret" required autofocus>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong >Kind of person</strong>
                                        <select id="choose" class="form-control" required autofocus>
                                        <option>Choose</option>
                                        <option>Physical</option>
                                        <option>Moral</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <div id="area">
                                            <strong  >Area</strong>
                                            
                                            <select class="form-control" >
                                            <option>Choose</option>
                                            <option>Physical</option>
                                            <option>Moral</option>
                                            </select>
                                        </div>

                                        <div id="rfc">
                                            <strong  > RFC:</strong>
                                            <input type="text" name="rfc" class="form-control" placeholder="RJSU987635HYS87J" >
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <a  href="#company"><button id="scd" type="button" class="btn btn-outline-danger btn-sm">
                                <strong>Next</strong>
                            </button></a>
                            <a  href="#address"><button id="sca1" type="button" class="btn btn-outline-danger btn-sm">
                                <strong>Next</strong>
                            </button></a>
                        
                        
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="row justify-content-center">
            
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>cuidado!</strong> Hay algún problema con tus datos<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-8">
                
                <div id="generalcom" class="card">
                    
                    <div class="card-header">
                        <h3>Company data <A name="company"></a></h3>                    
                    </div>
                    <div id="bodycompany" class="card-body">
                        
                        @csrf
                        
                            <div class="row">
                                <div class=" col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Company name:</strong>
                                        <input type="text" name="companyname" class="form-control" placeholder="The beauty S.A. de C.V." required autofocus>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>CFR:</strong>
                                        <input type="text" name="companyrfc" class="form-control" placeholder="FTGY568765H78" required autofocus>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Telephone:</strong>
                                        <input type="text" name="telephone" class="form-control" placeholder="5523212321" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="email" name="companyemail" class="form-control" placeholder="company@exam.com" required autofocus>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            <div class="row">
                                
                                
                                
                                
                            </div>
                            <a  href="#address"><button id="sca2" type="button" class="btn btn-outline-danger btn-sm">
                                <strong>Next</strong>
                            </button></a>
                        
                        
                    </div>
                  
                </div >
                
            </div>
        </div>
        <div class="row justify-content-center">
            
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>cuidado!</strong> Hay algún problema con tus datos<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-8">
                
                <div class="card">
                    
                        <div class="card-header">
                        
                        <h3>Address data <A name="address"></a></h3>
                        
                        </div>
                        <div id="bodyaddress" class="card-body">
                            
                            @csrf
                            
                                <div class="row">
                                    <div class=" col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Zip code:</strong>
                                            <input type="number" name="zipcode" class="form-control" placeholder="03231" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>District:</strong>
                                            <input type="text" name="district" class="form-control" placeholder="Benito Juárez" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Street:</strong>
                                            <input type="text" name="street" class="form-control" placeholder="Pedro Santacilia" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Ext. number:</strong>
                                            <input type="number" name="enumber" class="form-control" placeholder="1" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>In. number:</strong>
                                            <input type="number" name="inumber" class="form-control" placeholder="2" required autofocus>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button id="divbtns" type="submit" class="btn btn-warning">Register</button>
                                            <br>
                                    </div>
                                </div>
                            
                            
                            
                        </div>
                    
                </div>
                
            </div>
        </div>
    </form>
    
</div>

@endsection
@section('scripts')
<script>

    $(document).ready(function() {
        $("#area").hide();
        $("#rfc").hide();
        $("#bodycompany").hide();
        $("#bodyaddress").hide();
        $("#scd").hide();
        $("#sca1").hide();
        
    });
    $('#choose').on('click', function(){
        var sel=$("#choose").val();
        if(sel=="Choose"){
            $("#bodycompany").hide();
            $("#bodyaddress").hide();
            $("#generalcom").show();
            $("#area").hide();
            $("#rfc").hide();
            $("#scd").hide();
            $("#sca1").hide();
        }else if(sel=="Physical"){
            $("#bodyaddress").hide();
            $("#generalcom").hide();
            $("#area").hide();
            $("#rfc").show();
            $("#scd").hide();
            $("#sca1").show();
            
        }else{
            $("#generalcom").show();
            $("#bodyaddress").hide();
            $("#bodycompany").hide();
            $("#rfc").hide();
            $("#area").show();
            $("#scd").show();
            $("#sca1").hide();
        }
        });
        $("#btnn").on('click',function() {
            
    });

    $('#scd').on('click', function(){
        $("#bodycompany").show();
    });

    $('#sca1').on('click', function(){
        $("#bodyaddress").show();
    });

    $('#sca2').on('click', function(){
        $("#bodyaddress").show();
    });
    
    
</script>
@endsection