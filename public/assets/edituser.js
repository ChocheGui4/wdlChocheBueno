$(document).ready(function() {
    var title=$('#seccion').val();
    var title2=$('#seccioncompany').val();

    if(title=="Information"){
        $('#profile').hide();
        $('#contact').hide();
        $('#information').show();
        $('#showprofile').css('text-decoration', '');
        $('#showcompany').css('text-decoration', '');
        $('#showinformation').css('text-decoration', 'underline');
    }else{
        if(title2=="Profile"){
            
            $('#profile').show();
            $('#contact').hide();
            $('#information').hide();
            $('#showprofile').css('text-decoration', 'underline');
            $('#showcompany').css('text-decoration', '');
            $('#showinformation').css('text-decoration', '');
        }else{
            $('#profile').hide();
            $('#contact').show();
            $('#information').hide();
            $('#showprofile').css('text-decoration', '');
            $('#showcompany').css('text-decoration', 'underline');
            $('#showinformation').css('text-decoration', '');
        }
        
    }
    
    
});
var i=1;
$('#showprofile').on('click', function(){
    $('#profile').show();
    $('#contact').hide();
    $('#information').hide();
    i=1;
});


$('#showcompany').on('click', function(){
    $('#profile').hide();
    $('#contact').show();
    $('#information').hide();
    i=2;
});
$('#showinformation').on('click', function(){
    $('#profile').hide();
    $('#contact').hide();
    $('#information').show();
    i=3;
});

$('#showprofile').on('click', function(){
    $('#seccion').val("Profile");
});
$('#showcompany').on('click', function(){
    $('#seccioncompany').val("Company");
});
$('#showinformation').on('click', function(){
    $('#seccion').val("Information");
});
$('#showprofile').on('click', function(){
    $('#showprofile').css('text-decoration', 'underline');
    $('#showcompany').css('text-decoration', '');
    $('#showinformation').css('text-decoration', '');
});
$('#showcompany').on('click', function(){
    $('#showprofile').css('text-decoration', '');
    $('#showcompany').css('text-decoration', 'underline');
    $('#showinformation').css('text-decoration', '');
});
$('#showinformation').on('click', function(){
    $('#showprofile').css('text-decoration', '');
    $('#showcompany').css('text-decoration', '');
    $('#showinformation').css('text-decoration', 'underline');
});
