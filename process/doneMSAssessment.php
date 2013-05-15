<?php

    include '../classes/functions.php';
    
    $transactionNo = $_POST['transactionNo'];
    $enrollmentNo = $_POST['enrollmentNo'];
    $studentNo = $_POST['studentNo'];
    $schoolYear = $_POST['schoolYear'];
    $grade_Year = $_POST['gy'];
    $age = $_POST['age'];
    
    $doneMSA = new sqlfunction();
    $doneMSA->doneMSAssessment($transactionNo,$enrollmentNo,$studentNo,$schoolYear,$grade_Year,$age);
    
?>
