$(function(){
    var alert_success = $('#alert_success').html();
    if(alert_success === "" || alert_success === null || alert_success === NaN){
        $('#alert_success').hide();
    }else{
        $('#alert_success').fadeOut(3000);
    }

    /*adding class active to horizontal navigation*/
    var $_current = $(".current_page").val();
    if($_current == "home"){
        $("#home").addClass("active");
    }else if($_current == "new-ass"){
        $('#new-ass').addClass("active");
    }else if($_current == "pay"){
        $("#pay").addClass("active");
    }
});