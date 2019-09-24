$(document).ready(function() {
    // Edit Company and Branch
    var title=$('#seccion').val();
    var title2=$('#seccioncompany').val();
    // $('#areaset').val($('#area').val());
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
    // End edit Company and Branch
    // ------------------------------------------------------------    
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
// $('#swettb').on('click', function(){
//     alert("adaffd");
// });
// $('#swettb').on('click', function(){
//     alert($('#getroute').val());
// });
// $('#swettb').on('click', function(){
//     var hey=$('#getroute').val();
//     swal({
//         title: "Are you sure?",
//         text: "Your will not be able to recover this imaginary file!",
//         type: "warning",
//         showCancelButton: true,
//         confirmButtonClass: "btn-danger",
//         confirmButtonText: "Yes, delete it!",
//         closeOnConfirm: false
//         },
//         function(){
//             $.ajax({

//                 type:'POST',
     
//                 url:"{{url('/customerdeletet')}}",
     
//                 data:{id:hey},
     
//                 success:function(data){
                    
//                    alert(data.success);
     
//                 },error : function(data){
//                     alert(data);
//                 }
     
//              });
            
//             swal("Deleted!", "Your imaginary file has been deleted.", "success");
//         });
// });
// Customer-----------------------
$( "#tele" ).keyup(function() {
    var val = $('#tele').val();
    if(val==""){
        $('#tele2').val("000-000-0000");    
    }else{
        $('#tele2').val();
        $('#tele2').val(val);
    }
});

$( "#em2" ).keyup(function() {
    var val = $('#em2').val();
    if(val==""){
        $('#ema2').val("default@default.com");    
    }else{
        $('#ema2').val();
        $('#ema2').val(val);
    }
});


$( "#ctele" ).keyup(function() {
    var val = $('#ctele').val();
    if(val==""){
        $('#ctele2').val("000-000-0000");    
    }else{
        $('#ctele2').val();
        $('#ctele2').val(val);
    }
});

$( "#cem2" ).keyup(function() {
    var val = $('#cem2').val();
    if(val==""){
        $('#cema2').val("default@default.com");    
    }else{
        $('#cema2').val();
        $('#cema2').val(val);
    }
});
