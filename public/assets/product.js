//Función para llamar acciones de un botón automáticamente 

function button(desc, name) {
    $('#title').text($(name).val());
    $('#namename').val($(name).val());
    $('#desc').val($(desc).val());    
    $('#desc').text($(desc).val());
}

function selectedcheck(){
    if ($('#check').prop('checked') ) {
        $('#storage1').prop('disabled',true);
        $('#unitstorage1').prop('disabled',true);
        $("#storage").val(0);
        if($('#unitstorage1').val()=="GB"){
            $("#unitstorage").val("GB");
        }else{
            $("#unitstorage").val("TB");
        }
        
    }else{
        $("#storage1").prop('disabled',false);
        //$("#storage").val('');
        $('#unitstorage1').prop('disabled',false);
    }
}
$("#storage1").keyup(function() {
    $('#storage').val($('#storage1').val());    
});
$('#unitstorage1').on('click', function(){
    $('#unitstorage').val($('#unitstorage1').val());
});
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



