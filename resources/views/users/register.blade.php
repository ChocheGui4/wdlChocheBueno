@extends('layouts.layout2')

@section('content')
<div id="gif" class="loader"></div>
<div class="contanier">
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
                    </div>
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
                                            <strong>Password:</strong>
                                            <input type="password" name="password" class="form-control" placeholder="secreta" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Confirm password:</strong>
                                            <input type="password" name="confirmpassword" class="form-control" placeholder="secreta" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Password:</strong>
                                            <input type="email" name="email" class="form-control" placeholder="example@user.com" required autofocus>
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
                            <button class="btn btn-warning"> <a href="#company" > Next</a></button>
                            
                            
                        </div>
                    </div>
                <div >
                
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
                    </div>
                        <div class="card-header">
                        
                        <h3>Company data <A name="company"></a></h3>
                        
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
                                            <strong>Password:</strong>
                                            <input type="password" name="password" class="form-control" placeholder="secreta" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Confirm password:</strong>
                                            <input type="password" name="confirmpassword" class="form-control" placeholder="secreta" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Password:</strong>
                                            <input type="email" name="email" class="form-control" placeholder="example@user.com" required autofocus>
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
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button id="divbtns" type="submit" class="btn btn-warning">Next (datos de dirección)</button>
                                            <br>
                                            
                                            
                                    </div>
                                </div>
                            
                            
                            
                        </div>
                    </div>
                <div >
                
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
                    </div>
                        <div class="card-header">
                        
                        <h3>Address data <A name="address"></a></h3>
                        
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
                                            <strong>Password:</strong>
                                            <input type="password" name="password" class="form-control" placeholder="secreta" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Confirm password:</strong>
                                            <input type="password" name="confirmpassword" class="form-control" placeholder="secreta" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>Password:</strong>
                                            <input type="email" name="email" class="form-control" placeholder="example@user.com" required autofocus>
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
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button id="divbtns" type="submit" class="btn btn-warning">Next (datos de dirección)</button>
                                            <br>
                                            
                                            
                                    </div>
                                </div>
                            
                            
                            
                        </div>
                    </div>
                <div >
                
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
        
    });
    $('#choose').on('click', function(){
    var sel=$("#choose").val();
    if(sel=="Choose"){
        $("#area").hide();
        $("#rfc").hide();
    }else if(sel=="Physical"){
        $("#area").hide();
        $("#rfc").show();
        
    }else{
        $("#rfc").hide();
        $("#area").show();
    }
    });
    $("#btnn").on('click',function() {
        
    });
    
    
</script>
@endsection