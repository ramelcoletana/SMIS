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
                $err = "Invalid username or password.";
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

    <title>S M I S | LOGIN PAGE</title>
    <link rel="icon" href='images/deped_logo_old.jpg'/>
    <style type="text/css">
        body {
            padding-top: 40px;
            padding-bottom: 20px;
            background-color: #f5f5f5;
        }
        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
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
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
    </style>
    <script>
        $(function(){
           $("input[type='text']").val("");
            $("input[type='password']").val("");
        });
    </script>
</head>
<body>

<div class="container"> <!-- sign in form -->
     <form class="form-signin" method="POST" action="">
         <h2 class="form-signin-heading">Please sign in</h2>
             <?php
             if(isset($err)){
                 echo "<div class='alert alert-error' style='margin-top: 15px;'><i class='icon-exclamation-sign'></i>&nbsp;$err</div>";
             }else{
                 echo "";
             }
         ?>
             <input type="text" name="signin_username" id="signin_username" class="input-block-level" placeholder="Username" required >
             <input type="password" name="signin_password" id="signin_password" class="input-block-level" placeholder="Password" required >
         <label class="checkbox">
             <input type="checkbox" value="remember-me">
             Remember me
         </label>
         <br>
         <button class="btn btn-success" type="submit"><i class="icon-signin"></i>&nbsp;Sign in</button>


     </form>
</div>
<!-- END sign in form -->
</body>
</html>