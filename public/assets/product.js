$('#wdngbutton').on('click', function(){
    $('#name1').text("Warriors Defender Firewall New Generate");
    $('#name').val("Warriors Defender Firewall New Generate");
});
$('#wdfbutton').on('click', function(){
    $('#name1').text("Warriors Defender Firewall");
    $('#name').val("Warriors Defender Firewall");
});
$('#wdcpbutton').on('click', function(){
    $('#name1').text("Warriors Defender Captive Portal");
    $('#name').val("Warriors Defender Captive Portal");
});
$('#wdipsbutton').on('click', function(){
    $('#name1').text("Warriors Defender IPS/IDS");
    $('#name').val("Warriors Defender IPS/IDS");
});

$('#click').on('click', function(){
    alert($('#name').val());
    
});