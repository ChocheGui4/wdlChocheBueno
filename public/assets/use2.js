//Funciones jquery para formulario de usuarios de empresas
$(document).ready(function () {
    $("#area").hide();
    $("#rfc").hide();
    //$("#bodycompany").hide(); $("#bodyaddress").hide();
    $("#scd").hide();
    $("#sca1").hide();
    //alert($("#kindname").val());

    $("#choose").val($("#kindname").val())
    choose();
    
    
    $("#areas").val($("#areainput").val());
    
});

function mayus(e) {
    e.value = e
        .value
        .toUpperCase();
}

function clear() {
    if ($("#companyname").val() == "Null") {
        $("#companyname").val("");
        $("#companyrfc").val("");
        $("#companytelephone").val("");
        $("#companyemail").val("");
    }

}
function choose() {
    var sel = $("#choose").val();
    if (sel == "Choose") {

        $("#generalcom").show();
        $("#area").hide();
        $("#rfc").hide();
        $("#scd").hide();
        $("#sca1").hide();
    } else if (sel == "Physical") {
        $("#kindname").val("Physical");
        $("#companyname").val("Null");
        $("#companyrfc").val("NOHA000000YAB");
        $("#companytelephone").val("0000000000");
        $("#companyemail").val("nada@example.com");
        $("#generalcom").hide();
        $("#area").hide();
        $("#rfc").show();
        $("#scd").hide();
        $("#sca1").show();

    } else if (sel == "Moral") {
        $("#kindname").val("Moral");
        clear();
        $("#rfcfield").val("NNNNYYYYUUUU0");
        $("#generalcom").show();
        $("#rfc").hide();
        $("#area").show();
        $("#scd").show();
        $("#sca1").hide();
    } else {
        $("#choose").val("Choose")
    }
}
$('#choose').on('click', function () {
    choose();
});

//Do visible forms End visible forms Show regex Physical person
$("#qname").mouseenter(function () {
    $("#aname").show();

});
$("#qname").mouseleave(function () {
    $("#aname").hide();
});

$("#qlastname").mouseenter(function () {
    $("#alastname").show();
});
$("#qlastname").mouseleave(function () {
    $("#alastname").hide();
});

$("#qtele").mouseenter(function () {
    $("#atele").show();
});
$("#qtele").mouseleave(function () {
    $("#atele").hide();
});

$("#qemail").mouseenter(function () {
    $("#aemail").show();
});
$("#qemail").mouseleave(function () {
    $("#aemail").hide();
});

$("#qpassword").mouseenter(function () {
    $("#apassword").show();
});
$("#qpassword").mouseleave(function () {
    $("#apassword").hide();
});

$("#qkind").mouseenter(function () {
    $("#akind").show();
});
$("#qkind").mouseleave(function () {
    $("#akind").hide();
});

$("#qarea").mouseenter(function () {
    $("#aarea").show();
});
$("#qarea").mouseleave(function () {
    $("#aarea").hide();
});

$("#qrfc").mouseenter(function () {
    $("#arfc").show();
});
$("#qrfc").mouseleave(function () {
    $("#arfc").hide();
});
//Moral person
$("#qnamecompany").mouseenter(function () {
    $("#anamecompany").show();
});
$("#qnamecompany").mouseleave(function () {
    $("#anamecompany").hide();
});

$("#qrfccompany").mouseenter(function () {
    $("#arfccompany").show();
});
$("#qrfccompany").mouseleave(function () {
    $("#arfccompany").hide();
});

$("#qtelecompany").mouseenter(function () {
    $("#atelecompany").show();
});
$("#qtelecompany").mouseleave(function () {
    $("#atelecompany").hide();
});

$("#qemailcompany").mouseenter(function () {
    $("#aemailcompany").show();
});
$("#qemailcompany").mouseleave(function () {
    $("#aemailcompany").hide();
});

//Address
$("#qzip").mouseenter(function () {
    $("#azip").show();
});
$("#qzip").mouseleave(function () {
    $("#azip").hide();
});

$("#qdistrict").mouseenter(function () {
    $("#adistrict").show();
});
$("#qdistrict").mouseleave(function () {
    $("#adistrict").hide();
});

$("#qstreet").mouseenter(function () {
    $("#astreet").show();
});
$("#qstreet").mouseleave(function () {
    $("#astreet").hide();
});

$("#qextnumber").mouseenter(function () {
    $("#aextnumber").show();
});
$("#qextnumber").mouseleave(function () {
    $("#aextnumber").hide();
});

$("#qinnumber").mouseenter(function () {
    $("#ainnumber").show();
});
$("#qinnumber").mouseleave(function () {
    $("#ainnumber").hide();
});
// Terminan funciones jquery para formulario de usuarios de empresas Funciones
// jquery para formulario de usuarios de warriors
$("#qwlemail").mouseenter(function () {
    $("#wlemail").show();
});
$("#qwlemail").mouseleave(function () {
    $("#wlemail").hide();
});

$("#qwlpassword").mouseenter(function () {
    $("#wlpassword").show();
});
$("#qwlpassword").mouseleave(function () {
    $("#wlpassword").hide();
});

$("#qwlarea").mouseenter(function () {
    $("#wlarea").show();
});
$("#qwlarea").mouseleave(function () {
    $("#wlarea").hide();
});
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
//

//-------------
