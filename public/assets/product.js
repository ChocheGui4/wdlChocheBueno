//Función para llamar acciones de un botón automáticamente 
/*function button(desc, name) {
    $('#title').text($(name).val());
    $('#namename').val($(name).val());
    $('#desc').val($(desc).val());    
    $('#desc').text($(desc).val());
}*/

//Método para agregar storage ne la creación de nuevos productos
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


//Mostrar opción de storage
var d, n, ti1, per1, us1, sto1, unit1, ty, pro, company, branch;
function button(desc, name, time, period, users, storage, unitstorage, type, prod, comp, br) {
    console.log(comp+" ------ "+br);
    d=desc;
    n=name;
    ti1 = time;
    per1 = period;
    us1 = users;
    sto1 = storage;
    unit1 = unitstorage;
    ty = type;
    pro = prod;
    company = comp;
    branch = br;
    ti = $(time).val();
    per = $(period).val();
    us = $(users).val();
    sto = $(storage).val();
    unit = $(unitstorage).val();
    valcom=$('#valcompany').val();
    valbranch=$('#valbranch').val();
    console.log(valcom+"........."+valbranch);
    if((valcom==company) && (valbranch==branch)){
        $('#type').empty();
        if(type==1|type==2){
            $('#type').append('<option>Sale</option>');
        }else if(type==""){
            $('#type').append('<option>Sale</option>');
            $('#type').append('<option>Demo</option>');
        }
    }else{
        $('#type').empty();
        $('#type').append('<option>Sale</option>');
        $('#type').append('<option>Demo</option>');
    }
    

    if(per=="years"){
        $('#time').empty();
        for (let i = 0; i < ti; i++) {
            $('#time').append('<option>'+[i+1]+'</option>');
        }
        $('#dm').text(per);

    }else{
        $('#time').empty();
        for (let i = 0; i < ti; i++) {
            $('#time').append('<option>'+[i+1]+'</option>');
        }
        $('#dm').text(per);
    }
    $('#users').empty();
    for (let i = 1; i <= us; i++) {
        num = i*100;
        if(num==us){
            $('#users').append('<option>'+num+'</option>');
            i=us+1;
        }else if(num>us){
            $('#users').append('<option>'+us+'</option>');
            i=us+1;
        }else{
            $('#users').append('<option>'+num+'</option>');
        }
    }
    

    if(sto!=""){
        $('#storage1').empty();
        for (let i = 0; i < sto; i++) {
            $('#storage1').append('<option>'+[i+1]+'</option>');
        }
        if(unit=="GB"){
            $('#storage2').text("GB");
        }else{
            $('#storage2').text("TB");
        }
        $('#sto').show();
        
    }else{
        $('#sto').hide();
    }
    $('#title').text($(name).val());
    $('#namename').val($(name).val());
    $('#desc1').val($(desc).val());    
    $('#desc').val($(desc).val());    
    $('#desc').text($(desc).val());
}

//Termina mostrar opción de storage
$('#type').on('click', function(){
    //alert($('#type').val());
    if($('#type').val()=="Sale"){
        //alert(ti+" "+per);
        button(d, n, ti1, per1, us1, sto1, unit1, ty, pro, company, branch);
        $('#dm').text("years");
    }else{
        $('#users').empty();
        $('#time').empty();
        $('#storage1').empty();
        $('#users').append('<option>30</option>');
        $('#time').append('<option>15</option>');
        $('#dm').text("days");
        $('#storage1').append('<option>10</option>');
        $('#storage2').text("GB");
    }
    
});


