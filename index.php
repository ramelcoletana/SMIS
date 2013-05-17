<?php
    include "classes/functions.php";
    session_start();
    $login_user = new sqlfunction();
    if(isset($_SESSION['login_user']) && isset($_SESSION['login_password'])){
        header("location: pages/main.php");
    }else{
        if(isset($_POST['signin_username']) && isset($_POST['signin_password'])){
            $login_username = $_POST['signin_username'];
            $login_password = $_POST['signin_password'];
            $exist = $login_user->login_user($login_username, $login_password);
            if($exist=="notexist"){
                $err = "Invalid username or password. ".$login_password;
                $_SESSION['success_msg'] = "";
            }else{
                $err = "";
                $_SESSION['success_msg'] = "Signed in successfully.";
                $_SESSION['login_user'] = $login_username;
                $_SESSION['login_password'] = $login_password;
                header("location: pages/main.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link href="css1/font-awesome.css" rel="stylesheet" type="text/css" media="screen">

    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/jquery-ui-darkhive.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <title>Sign in - SMIS</title>
    <link rel="icon" href='images/sms.ico'/>
    <style type="text/css">
        body {
            padding-top: 40px;
            padding-bottom: 20px;
            background-color: #f5f5f5;
        }
        .form-signin {
            max-width: 400px;
            /*padding: 19px 29px 29px;*/
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .auth-form-header{
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #6C8393;
            background-image: linear-gradient(#7F95A5, #6C8393);
            background-repeat: repeat-x;
            border-color: #6E8290 #6E8290 #586873;
            border-image: none;
            border-radius: 4px 4px 0 0;
            border-style: solid;
            border-width: 1px;
            color: #FFFFFF;
            margin: 0;
            padding-left: 20px;
            position: relative;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.5);
         }
        .auth-form-body{
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            -moz-box-sizing: border-box;
            background-color: #FFFFFF;
            border-color: white #D8DEE2 #D8DEE2;
            border-image: none;
            border-radius: 0 0 4px 4px;
            border-right: 1px solid #D8DEE2;
            border-style: solid;
            border-width: 1px;
            font-size: 14px;
            padding: 15px 25px 20px;
        }
        .auth-form-body label{
            font-weight: bold;
            font-size: 14px;
         }
        .form-signin,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 5px 9px;
    </style>
    <script>
        $(function(){
           $("input[type='text']").val("");
            $("input[type='password']").val("");
        });
    </script>
</head>
<body>
<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar navbar-inner" style="text-align: center;">
        <h2 style="color: #999999;">School Management and Information System</h2>
    </div>
</div>
<br>
<?php
if(isset($err)){
    echo "<div class='alert alert-error container' style='margin-top: 15px; text-align: center;'><i class='icon-exclamation-sign'></i>&nbsp;&nbsp;$err
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
        </div>";
}else{
    echo "";
}
?>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container"> <!-- sign in form -->
     <form class="form-signin" method="POST" action="">
         <div class="auth-form-header"><h4>Sign in</h4></div>
         <div class="auth-form-body">
             <label for="signin_username">Username</label>
             <input type="text" name="signin_username" id="signin_username" class="input-block-level" placeholder="Username" required >
             <label for="signin_password">Password</label>
             <input type="password" name="signin_password" id="signin_password" class="input-block-level" placeholder="Password" required >
             <label class="checkbox">
             <input type="checkbox" value="remember-me">
             Remember me
            </label>
            <button class="btn btn-success" type="submit"><i class="icon-signin"></i>&nbsp;Sign in</button>
             <div class="pull-right"><a href="#" class="btn">Forgot password?</a></div>
          </div>
     </form>
</div>
<!-- END sign in form -->
</body>
</html>