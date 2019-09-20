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
function MaysPrimera(e){
    // var str = $('ul.dropdown-menu > li.dropdown-submenu > a');
    e.each(function() {
        $(this).text($(this).text().charAt(0).toUpperCase() + $(this).text().slice(1).toLowerCase());
    });
}
function ucwords(oracion){
    return oracion.replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1){
       return $1.toUpperCase(); 
    });
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
