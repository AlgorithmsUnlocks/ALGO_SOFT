<?php
session_start();
?>
<?php include "../../panel-admin/includes/functions.php"; ?>
<?php include "../../panel-admin/includes/database.php"; ?>
<?php
global $connection;
if(isset($_POST['login_btn'])){

    $emp_id = real_escape($_POST['emp_id']);
    $emp_password = real_escape($_POST['emp_password']);

    $query = "SELECT * FROM `employee` WHERE `emp_id` = '$emp_id'";
    $query_fetch_users = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($query_fetch_users)){

       $db_id = $row['id'];
       $db_emp_email = $row['emp_email'];
       $db_emp_id = $row['emp_id'];
       $db_emp_password = $row['emp_password'];
       $db_emp_name = $row['emp_name'];
       $db_emp_department = $row['emp_department'];
       $db_emp_designation = $row['emp_designation'];
       $db_joining_date = $row['joining_date'];
       $db_emp_blood_group = $row['emp_blood_group'];
       $db_emp_nid_number = $row['emp_nid_number'];
       $db_emp_birth_date = $row['emp_birth_date'];
       $db_emp_passport_number = $row['emp_passport_number'];
       $db_emp_phone = $row['emp_phone'];
       $db_emp_profile = $row['emp_profile'];
       $db_emp_relationship_status = $row['emp_relationship_status'];
       $db_emp_role = $row['emp_role'];
       $db_create_date = $row['create_date'];

    }
    if( $emp_id !== $db_emp_id && $emp_password !== $db_emp_password ){
        header('Location: ../../login.php');
    }else if( $emp_id === $db_emp_id && $emp_password === $db_emp_password ) {


            $_SESSION['id'] = $db_id;
            $_SESSION['emp_email'] = $db_emp_email;
            $_SESSION['emp_id'] = $db_emp_id;
            $_SESSION['emp_password'] = $db_emp_password;
            $_SESSION['emp_name'] = $db_emp_name;
            $_SESSION['emp_department'] = $db_emp_department;
            $_SESSION['emp_designation'] = $db_emp_designation;
            $_SESSION['joining_date'] = $db_joining_date;
            $_SESSION['emp_blood_group'] = $db_emp_blood_group;
            $_SESSION['emp_nid_number'] = $db_emp_nid_number;
            $_SESSION['emp_birth_date'] = $db_emp_birth_date;
            $_SESSION['emp_passport_number'] = $db_emp_passport_number;
            $_SESSION['emp_phone'] = $db_emp_phone;
            $_SESSION['emp_profile'] = $db_emp_profile;
            $_SESSION['emp_relationship_status'] = $db_emp_relationship_status;
            $_SESSION['emp_role'] = $db_emp_role;
            $_SESSION['create_date'] = $db_create_date;

            header('Location: ../../panel-admin/user_profiles.php');
    }else{
        header('Location: ../../login.php');
    }

}

?>