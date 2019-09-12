//Funciones jquery para formulario de usuarios de empresas
$(document).ready(function () {
    $("#area").hide();
    $("#rfcdiv").hide();
    $("#scd").hide();
    $("#sca1").hide();
    
    
    $("#areas").val($("#areainput").val());
    
    
});

function mayus(e) {
    e.value = e
        .value
        .toUpperCase();
}

//Do visible forms End visible forms Show regex Physical person

// Terminan funciones jquery para formulario de usuarios de warriors Visualizar
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
