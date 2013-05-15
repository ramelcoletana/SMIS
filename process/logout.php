<?php
    session_start();
    if(isset($_SESSION['login_user']) &&isset($_SESSION['login_password'])){
        session_destroy();
        session_unset();
    }
header("location: ../index.php");