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

    //user profile
    show_user_profile();
    $('#edit_b_date').datepicker({
        dateFormat : "yy-mm-dd"
    });

    $('#save_changes_user_profile').click(function(){
        var data_array = {"data":JSON.stringify($('#form_user_profile').serializeArray())};
        var data_val = $('#form_user_profile').serializeArray();
        if(data_val[0].value = ""){

        }
        alert(data_array.data);
        return false;
    });

});

/*FUNCTIONS*/
//EDIT PROFILE
function show_user_profile(){
    var username = $('#login_user').val();
    var password = $('#login_password').val();
    var user_password_array = new Array();
    user_password_array.push(username,password);
    var obj = {"user_pass": user_password_array};
    $.ajax({
        type: "POST",
        url: "../process/show_user_profile.php",
        data: obj,
        success: function(response){
            console.log(response);
            var obj_data = JSON.parse(response);
            $('#user_profile_img').attr('src',"../upload_pic/"+obj_data.profilepic);
            $('#h_name').html(obj_data.name);
            $('#h_email').html(obj_data.email);
            $('#edit_name').val(obj_data.name);
            $('#edit_email').val(obj_data.email);
            $('#edit_gender').val(obj_data.gender);
            $('#edit_b_date').val(obj_data.bdate);
            $('#edit_age').val(obj_data.age);
        },
        error: function(response){
            console.log("error in showing profile =..= "+JSON.stringify(response));
        }
    })
}