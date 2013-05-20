<?php
    include "../classes/functions.php";
    $data = $_POST['user_pass'];
    $show = new sqlfunction();
    $show -> show_user_profile($data);