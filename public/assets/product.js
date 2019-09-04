/*$('#wdngbutton0').on('click', function(){
    $('#name1').text("Warriors Defender Firewall New Generate");
    $('#name').val("Warriors Defender Firewall New Generate");
});
$('#wdngbutton1').on('click', function(){
    $('#name1').text("Warriors Defender Firewall");
    $('#name').val("Warriors Defender Firewall");
});
$('#wdngbutton2').on('click', function(){
    $('#name1').text("Warriors Defender Mail");
    $('#name').val("Warriors Defender Mail");
});
$('#wdngbutton3').on('click', function(){
    $('#name1').text("Warriors Defender Captive Portal");
    $('#name').val("Warriors Defender Captive Portal");
});
$('#wdngbutton4').on('click', function(){
    $('#name1').text("Warriors Defender Storage");
    $('#name').val("Warriors Defender Storage");
});
$('#wdngbutton5').on('click', function(){
    $('#name1').text("Warriors Defender IPS/IDS");
    $('#name').val("Warriors Defender IPS/IDS");
});
$('#wdngbutton6').on('click', function(){
    $('#name1').text("Warriors Defender Central Console");
    $('#name').val("Warriors Defender Central Console");
});
$('#wdngbutton7').on('click', function(){
    $('#name1').text("Warriors Defender Reporter");
    $('#name').val("Warriors Defender Reporter");
});*/

//Función para llamar acciones de un botón automáticamente 

function button( Hola, desc, name) {
    //alert("Ya entró a la función con botton");
    alert(name);
    alert($(name).val());
    
    $('#name1').text($(name).val());
    alert($('#name1').text());
    //$('#name').val("Warriors Defender Central Console");
    alert($(desc).val());
    
}//Pendiente
$('#type').on('click', function(){
    
    if($('#type').val()=="Sale"){
        $('#users').empty();
        $('#time').empty();
        $('#users').append('<option>15</option>');
        $('#users').append('<option>100</option>');
        $('#users').append('<option>200</option>');
        $('#users').append('<option>300</option>');
        $('#users').append('<option>400</option>');
        $('#users').append('<option>500</option>');
        $('#users').append('<option>600</option>');
        $('#users').append('<option>700</option>');
        $('#users').append('<option>800</option>');
        $('#users').append('<option>900</option>');
        $('#users').append('<option>1000</option>');
        $('#time').append('<option>1</option>');
        $('#time').append('<option>2</option>');
        $('#time').append('<option>3</option>');
        $('#time').append('<option>4</option>');
        $('#time').append('<option>5</option>');
        $('#dm').text("years");
    }else{
        $('#users').empty();
        $('#time').empty();
        $('#users').append('<option>30</option>');
        $('#time').append('<option>5</option>');
        $('#dm').text("days");
    }
    
});

//Products id
$('#edit0').on('click', function(){
    $('#name').val($('#h30').text());
    $('#description').val($('#sm0').text());    
});
$('#edit1').on('click', function(){
    $('#name').val($('#h31').text());
    $('#description').val($('#sm1').text());    
});
$('#edit2').on('click', function(){
    $('#name').val($('#h32').text());
    $('#description').val($('#sm2').text());    
});
$('#edit3').on('click', function(){
    $('#name').val($('#h33').text());
    $('#description').val($('#sm3').text());    
});
$('#edit4').on('click', function(){
    $('#name').val($('#h34').text());
    $('#description').val($('#sm4').text());    
});
$('#edit5').on('click', function(){
    $('#name').val($('#h35').text());
    $('#description').val($('#sm5').text());    
});
$('#edit6').on('click', function(){
    $('#name').val($('#h36').text());
    $('#description').val($('#sm6').text());    
});
$('#edit7').on('click', function(){
    $('#name').val($('#h37').text());
    $('#description').val($('#sm7').text());    
});

