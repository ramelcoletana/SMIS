<?php
    include '../classes/functions.php';

    $studentId = $_POST['studentId_FM'];
    $enrollNo = $_POST['enrollNo'];
    $transactionNo = $_POST['transactionNo'];
    $get = new sqlfunction();
    $get->getCPayment($studentId,$enrollNo,$transactionNo);
?>