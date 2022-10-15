<?php
include('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

if (isset($_POST["loanApply"])) {

    $c_name = $db_handle->checkValue($_POST['c_name']);
    $e_name = $db_handle->checkValue($_POST['e_name']);
    $identy_num = $db_handle->checkValue($_POST['identy_num']);
    $dob = $db_handle->checkValue($_POST['dob']);
    $contact_num = $db_handle->checkValue($_POST['contact_num']);
    $pay_method = $db_handle->checkValue($_POST['pay_method']);
    $applicant_type = $db_handle->checkValue($_POST['applicant_type']);
    $loan_amount = $db_handle->checkValue($_POST['loan_amount']);
    $other_info = $db_handle->checkValue($_POST['other_info']);

    $inserted_at=date("Y-m-d H:i:s");

    $insert = $db_handle->insertQuery("INSERT INTO `loan_apply`(`c_name`, `e_name`, `identy_num`, `dob`, `contact_num`, `pay_method`, `applicant_type`, `loan_amount`, `other_info`, `inserted_at`) VALUES ('$c_name','$e_name','$identy_num','$dob','$contact_num','$pay_method','$applicant_type','$loan_amount','$other_info','$inserted_at')");

    echo "<script>
                alert('Data Inserted Successful');
                window.location.href='index.php';
                </script>";
}
