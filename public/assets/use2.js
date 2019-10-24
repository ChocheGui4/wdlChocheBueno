//Funciones jquery para formulario de usuarios de empresas
$(document).ready(function () {
    $("#rfcdiv").hide();
    $("#scd").hide();
    $("#sca1").hide();
    var val=$("#area1").val();
    $("#area option:contains("+ val +")").attr("selected",true);

    // var val=$("#area2").val();
    // $("#areas option:contains("+ val +")").attr("selected",true);

});

function mayus(e) {
    e.value = e
        .value
        .toUpperCase();
}

function ucwords(e, string){
    var val = e.value.replace(/\b[a-z]/g,c=>c.toUpperCase());
    $(string).val(val);
}


// Do visible forms End visible forms Show regex Physical person Terminan
// funciones jquery para formulario de usuarios de warriors Visualizar
// contraseña

var i = 1;
$('#showpass').click(function () {
    i++;
    if (i % 2 == 0) {
        $('#password').attr('type', 'text');
    } else {
        $('#password').attr('type', 'password');
    }

});
//button delete
$('#deleteuser').on('click', function (e) {
    var $form = $(this).closest('form');
    e.preventDefault();
    $('#confirm')
        .modal({backdrop: 'static', keyboard: false})
        .one('click', '#delete', function () {
            $form.trigger('submit'); // submit the form
        });
    // .one() is NOT a typo of .on()
});

//Button delete customer

// -------------
$('#divbtns').on('click', function (e) {
    alert($('[name="telephone"]').val());

});



$('#cargar').on('click', function (e) {
    // $('#upload').load('/companybranches/{id}');
    // $('#upload').load('/companybranches/1');
    $.ajax({
        url: "/companybranches/1",
        type: 'get',
        success: function(response) {
        //   alert(response);
          console.log(response[0].branchname);
        },
        error: function() {
          console.log("No se ha podido obtener la información");
          alert("Noooooooo salio");
        }
      });
});

// $('#bajar').on('click', function (e) {
//     // $('#upload').load('/companybranches/{id}');
//     $('#upload').remove('/companybranches/1');
// });