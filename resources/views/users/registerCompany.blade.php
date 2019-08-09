@extends('layouts.layout2')

@section('content')
<div id="gif" class="loader"></div>
<div class="contanier">
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
                    Contact data
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contactdata.store') }}" method="POST">
                        @csrf
                        
                            <div class="row">
                                <div class=" col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Juana">
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Apellidos:</strong>
                                        <input type="text" name="apellidos" class="form-control" placeholder="Juárez">
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Telephone:</strong>
                                        <input type="text" name="telephone" class="form-control" placeholder="5523212321">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Password:</strong>
                                        <input type="password" name="password" class="form-control" placeholder="secreta">
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Confirm password:</strong>
                                        <input type="password" name="confirmpassword" class="form-control" placeholder="secreta">
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Password:</strong>
                                        <input type="email" name="email" class="form-control" placeholder="example@user.com">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Kind of person</strong>                                        
                                        <select id="choose" class="form-control">
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
                                <div id="divbtns"class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-warning">Next (datos de dirección)</button>
                                </div>
                            </div>
                        
                        </form>
                        <div class="row">
                            <div id="divbtnn" class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button id="btnn" class="btn btn-warning">Next (address data)</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div >
        </div>
    </div>
    
</div>

@endsection
@section('scripts')
<script>

    $(document).ready(function() {
        $("#area").hide();
        $("#rfc").hide();
        $("#divbtns").hide();
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