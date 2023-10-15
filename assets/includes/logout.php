<?php session_start(); ?>
<?php
$_SESSION['id'] = NULL;
$_SESSION['emp_email'] = NULL;
$_SESSION['emp_id'] = NULL;
$_SESSION['emp_password'] = NULL;
$_SESSION['emp_name'] = NULL;
$_SESSION['emp_department'] = NULL;
$_SESSION['emp_designation'] = NULL;
$_SESSION['joining_date'] = NULL;
$_SESSION['emp_blood_group'] = NULL;
$_SESSION['emp_nid_number'] = NULL;
$_SESSION['emp_birth_date'] = NULL;
$_SESSION['emp_passport_number'] = NULL;
$_SESSION['emp_phone'] = NULL;
$_SESSION['emp_profile'] = NULL;
$_SESSION['emp_relationship_status'] = NULL;
$_SESSION['emp_role'] = NULL;
$_SESSION['create_date'] = NULL;

    session_unset();
    session_destroy();
    header('Location: ../../login.php');

?>
