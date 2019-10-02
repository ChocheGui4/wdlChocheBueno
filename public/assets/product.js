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
function newmetod(param1,param2,param3){
    $('#htitle').text($(param2).text());
    $('#name').val($(param2).text());
    $('#description').val($(param3).text());
    var title = $(param2).text();
    console.log(title+"r");
    if(title=="Warriors Defender Storage"){
        $('#numuser').hide();
        $('#storagemail').hide();
        $('#storage').show();
        $('#numberstorage').show();
    }else if(title=="Warriors Defender Mail"){
        $('#numuser').show();
        $('#storagemail').show();
        $('#storage').hide();
        $('#numberstorage').hide();
    }else{
        $('#numuser').show();
        $('#storagemail').hide();
        $('#storage').hide();
        $('#numberstorage').hide();
    }
}

//Add product especific
$('#productadd-form').on('submit',function(e) {  //Don't foget to change the id form
console.log($(this).serialize());
  $.ajax({
      url:'productaddspecific', //===PHP file name====
      data:$(this).serialize(),
      type:'POST',
      success:function(data){
        console.log(data);
        $("#WDNGcreate").modal('hide');//ocultamos el modal
        $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
        $('.modal-backdrop').remove();
        //Success Message == 'Title', 'Message body', Last one leave as it is
        swal({   
            title: "Product added Successfully!",   
            text:"",   
            type:"success",
            timer: 2000,   
            showConfirmButton: false 
        });
	    // swal("¡Success!", "Message sent!", "success");
      },
      error:function(data){
        //Error Message == 'Title', 'Message body', Last one leave as it is
	    swal("Oops...", "Something went wrong :(", "error");
      }
    });
    e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
});

//Add general product
$('body').on('click','#delete', function(event){
    event.preventDefault();
    var me = $(this),
        url = me.attr("href"),
        title = me.attr("title"),
        csrf_token = $('meta[name="csrf-token"]').attr("content");
    swal({   
        title: "Are you sure delete?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#C52300",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false 
    }, function(){   
        $.ajax({
            url:url, //===PHP file name====
            data:{
                '_method':'GET',
                'token':csrf_token
            },
            type:'POST',
            success:function(data){              
                $('#task').DataTable().ajax.reload();
                console.time("t1");
                swal({   
                    title: "Product removed!",   
                    text: "",   
                    type:"success",
                    timer: 2000,   
                    showConfirmButton: false 
                    
                });
                
                console.timeEnd("t1");
                // window.setInterval(alert("Holaaaaa"),50000);

                
              
              // swal("¡Success!", "Message sent!", "success");
            },
            error:function(data){
              //Error Message == 'Title', 'Message body', Last one leave as it is
              swal("Oops...", "Something went wrong :(", "error");
            }
          });
        // swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
    }); 
    
});

$('body').on('click','#down', function(event){
    event.preventDefault();
    var me = $(this),
        url = me.attr("href"),
        title = me.attr("title"),
        csrf_token = $('meta[name="csrf-token"]').attr("content");
    swal({   
        title: "Are you sure delete?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#C52300",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false 
    }, function(){   
        $.ajax({
            url:url, //===PHP file name====
            data:{
                '_method':'GET',
                'token':csrf_token
            },
            type:'POST',
            success:function(data){              
                swal({   
                    title: "Element removed!",   
                    text: "",   
                    type:"success",
                    timer: 2000,   
                    showConfirmButton: false 
                    
                });
                setTimeout("document.location.reload()", 1500);
              // swal("¡Success!", "Message sent!", "success");
            },
            error:function(data){
              //Error Message == 'Title', 'Message body', Last one leave as it is
              swal("Oops...", "Something went wrong :(", "error");
            }
          });
        // swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
    }); 
    
});

//Add Company Product
$('body').on('click','#add', function(event){
    event.preventDefault();
    var me = $(this),
        url = me.attr("href"),
        title = me.attr("title"),
        csrf_token = $('meta[name="csrf-token"]').attr("content");
    swal({   
        title: "Are you sure add?",   
        showCancelButton: true,   
        confirmButtonColor: "#31B90C",   
        confirmButtonText: "Yes, add it!",   
        closeOnConfirm: false 
    }, function(){   
        $.ajax({
            url:url, //===PHP file name====
            data:{
                '_method':'GET',
                'token':csrf_token
            },
            type:'POST',
            success:function(data){              
                $('#task').DataTable().ajax.reload();
                console.time("t1");
                swal({   
                    title: "Product added!",   
                    text: "",   
                    type:"success",
                    timer: 2000,   
                    showConfirmButton: false 
                    
                });
                
                console.timeEnd("t1");
                // window.setInterval(alert("Holaaaaa"),50000);

                
              
              // swal("¡Success!", "Message sent!", "success");
            },
            error:function(data){
              //Error Message == 'Title', 'Message body', Last one leave as it is
              swal("Oops...", "Something went wrong :(", "error");
            }
          });
        // swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
    }); 
    
});
//Mostrar opción de storage
// var d, n, ti1, per1, us1, sto1, unit1, ty, pro, company, branch;
// function button(desc, name, time, period, users, storage, unitstorage, type, prod, comp, br) {
//     console.log(comp+" ------ "+br);
//     d=desc;
//     n=name;
//     ti1 = time;
//     per1 = period;
//     us1 = users;
//     sto1 = storage;
//     unit1 = unitstorage;
//     ty = type;
//     pro = prod;
//     company = comp;
//     branch = br;
//     ti = $(time).val();
//     per = $(period).val();
//     us = $(users).val();
//     sto = $(storage).val();
//     unit = $(unitstorage).val();
//     valcom=$('#valcompany').val();
//     valbranch=$('#valbranch').val();
//     console.log(valcom+"........."+valbranch);
//     if((valcom==company) && (valbranch==branch)){
//         $('#type').empty();
//         if(type==1|type==2){
//             $('#type').append('<option>Sale</option>');
//         }else if(type==""){
//             $('#type').append('<option>Sale</option>');
//             $('#type').append('<option>Demo</option>');
//         }
//     }else{
//         $('#type').empty();
//         $('#type').append('<option>Sale</option>');
//         $('#type').append('<option>Demo</option>');
//     }
    

//     if(per=="years"){
//         $('#time').empty();
//         for (let i = 0; i < ti; i++) {
//             $('#time').append('<option>'+[i+1]+'</option>');
//         }
//         $('#dm').text(per);

//     }else{
//         $('#time').empty();
//         for (let i = 0; i < ti; i++) {
//             $('#time').append('<option>'+[i+1]+'</option>');
//         }
//         $('#dm').text(per);
//     }
//     $('#users').empty();
//     for (let i = 1; i <= us; i++) {
//         num = i*100;
//         if(num==us){
//             $('#users').append('<option>'+num+'</option>');
//             i=us+1;
//         }else if(num>us){
//             $('#users').append('<option>'+us+'</option>');
//             i=us+1;
//         }else{
//             $('#users').append('<option>'+num+'</option>');
//         }
//     }
    

//     if(sto!=""){
//         $('#storage1').empty();
//         for (let i = 0; i < sto; i++) {
//             $('#storage1').append('<option>'+[i+1]+'</option>');
//         }
//         if(unit=="GB"){
//             $('#storage2').text("GB");
//         }else{
//             $('#storage2').text("TB");
//         }
//         $('#sto').show();
        
//     }else{
//         $('#sto').hide();
//     }
//     $('#title').text($(name).val());
//     $('#namename').val($(name).val());
//     $('#desc1').val($(desc).val());    
//     $('#desc').val($(desc).val());    
//     $('#desc').text($(desc).val());
// }

//Termina mostrar opción de storage
// $('#type').on('click', function(){
//     //alert($('#type').val());
//     if($('#type').val()=="Sale"){
//         //alert(ti+" "+per);
//         button(d, n, ti1, per1, us1, sto1, unit1, ty, pro, company, branch);
//         $('#dm').text("years");
//     }else{
//         $('#users').empty();
//         $('#time').empty();
//         $('#storage1').empty();
//         $('#users').append('<option>30</option>');
//         $('#time').append('<option>15</option>');
//         $('#dm').text("days");
//         $('#storage1').append('<option>10</option>');
//         $('#storage2').text("GB");
//     }
    
// });


