$(document).ready(function() {
    var title=$('#seccion').val();
    
    

    if(title=="Company"){
        $('#profile').hide();
        $('#contact').show();
        $('#information').hide();
    }else if(title=="Information"){
        $('#profile').hide();
        $('#contact').hide();
        $('#information').show();
    }else{
        $('#profile').show();
        $('#contact').hide();
        $('#information').hide();
    }
    
});

$('#showprofile').on('click', function(){
    $('#profile').show();
    $('#contact').hide();
    $('#information').hide();
});

$('#showcontact').on('click', function(){
    $('#profile').hide();
    $('#contact').show();
    $('#information').hide();
});
$('#showinformation').on('click', function(){
    $('#profile').hide();
    $('#contact').hide();
    $('#information').show();
});

$('#updateprofile').on('click', function(){
    $('#seccion').val("Profile");
});
$('#updatecompany').on('click', function(){
    $('#seccion').val("Company");
});
$('#updateaddress').on('click', function(){
    $('#seccion').val("Information");
});