$(document).ready(function() {
  $("#area").hide();
  $("#rfc").hide();
  //$("#bodycompany").hide();
  //$("#bodyaddress").hide();
  $("#scd").hide();
  $("#sca1").hide();
  $("#ltelephone").hide();
  
});
$('#choose').on('click', function(){
  var sel=$("#choose").val();
  if(sel=="Choose"){
      $("#bodycompany").hide();
      $("#bodyaddress").hide();
      $("#generalcom").show();
      $("#area").hide();
      $("#rfc").hide();
      $("#scd").hide();
      $("#sca1").hide();
  }else if(sel=="Physical"){
      
      $("#generalcom").hide();
      $("#area").hide();
      $("#rfc").show();
      $("#scd").hide();
      $("#sca1").show();
      
  }else{
      $("#generalcom").show();
      
      $("#rfc").hide();
      $("#area").show();
      $("#scd").show();
      $("#sca1").hide();
  }
  });
  $("#btnn").on('click',function() {
      
});

 //Show regex
    //Physical person
$("#qname").mouseenter(function(){
  $("#aname").show();
});
$("#qname").mouseleave(function(){
    $("#aname").hide();
});

$("#qlastname").mouseenter(function(){
    $("#alastname").show();
});
$("#qlastname").mouseleave(function(){
    $("#alastname").hide();
});

$("#qtele").mouseenter(function(){
    $("#atele").show();
});
$("#qtele").mouseleave(function(){
    $("#atele").hide();
});

$("#qemail").mouseenter(function(){
    $("#aemail").show();
});
$("#qemail").mouseleave(function(){
    $("#aemail").hide();
});

$("#qpassword").mouseenter(function(){
    $("#apassword").show();
});
$("#qpassword").mouseleave(function(){
    $("#apassword").hide();
});

$("#qkind").mouseenter(function(){
    $("#akind").show();
});
$("#qkind").mouseleave(function(){
    $("#akind").hide();
});

$("#qarea").mouseenter(function(){
    $("#aarea").show();
});
$("#qarea").mouseleave(function(){
    $("#aarea").hide();
});

$("#qrfc").mouseenter(function(){
    $("#arfc").show();
});
$("#qrfc").mouseleave(function(){
    $("#arfc").hide();
});
//Moral person
$("#qnamecompany").mouseenter(function(){
    $("#anamecompany").show();
});
$("#qnamecompany").mouseleave(function(){
    $("#anamecompany").hide();
});

$("#qrfccompany").mouseenter(function(){
    $("#arfccompany").show();
});
$("#qrfccompany").mouseleave(function(){
    $("#arfccompany").hide();
});

$("#qtelecompany").mouseenter(function(){
    $("#atelecompany").show();
});
$("#qtelecompany").mouseleave(function(){
    $("#atelecompany").hide();
});

$("#qemailcompany").mouseenter(function(){
    $("#aemailcompany").show();
});
$("#qemailcompany").mouseleave(function(){
    $("#aemailcompany").hide();
});

//Address
$("#qzip").mouseenter(function(){
    $("#azip").show();
});
$("#qzip").mouseleave(function(){
    $("#azip").hide();
});

$("#qdistrict").mouseenter(function(){
    $("#adistrict").show();
});
$("#qdistrict").mouseleave(function(){
    $("#adistrict").hide();
});

$("#qstreet").mouseenter(function(){
    $("#astreet").show();
});
$("#qstreet").mouseleave(function(){
    $("#astreet").hide();
});

$("#qextnumber").mouseenter(function(){
    $("#aextnumber").show();
});
$("#qextnumber").mouseleave(function(){
    $("#aextnumber").hide();
});

$("#qinnumber").mouseenter(function(){
  $("#ainnumber").show();
});
$("#qinnumber").mouseleave(function(){
  $("#ainnumber").hide();
});

//End show regex