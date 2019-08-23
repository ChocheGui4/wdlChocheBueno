$(document).ready(function() {
    $('#profile').show();
    $('#contact').hide();
    $('#information').hide();
});

$('#showprofile').on('click', function(){
    $('#profile').show();
    $('#contact').hide();
    $('#information').hide();
});

$('#showcontact').on('click', function(){
    $('#profile').hide();
    $('#contact').show();
    $('#information').hide();
});
$('#showinformation').on('click', function(){
    $('#profile').hide();
    $('#contact').hide();
    $('#information').show();
});