<?php

//Register Users

global $connection;
if(isset($_POST['register_emp'])){

    $emp_email =  real_escape($_POST['emp_email']);
    $emp_id = real_escape($_POST['emp_id']);
    $emp_password = real_escape($_POST['emp_password']);
    $emp_name = real_escape($_POST['emp_name']);
    $emp_department = $_POST['emp_department'];
    $emp_designation = $_POST['emp_designation'];
    $joining_date = $_POST['joining_date'];
    $emp_blood_group = $_POST['emp_blood_group'];
    $emp_nid_number = real_escape($_POST['emp_nid_number']);
    $emp_birth_date = real_escape($_POST['emp_birth_date']);
    $emp_passport_number = real_escape($_POST['emp_passport_number']);
    $emp_phone = real_escape($_POST['emp_phone']);
    $emp_relationship_status = real_escape($_POST['emp_relationship_status']);
    $emp_role = real_escape($_POST['emp_role']);

    $emp_profile = $_FILES['emp_profile']['name'];
    $emp_profile_loc = $_FILES['emp_profile']['tmp_name'];

    $duplicate_emp_email = mysqli_query($connection,"SELECT `emp_email` FROM `employee` WHERE `emp_email` ='$emp_email'");
    $duplicate_emp_id = mysqli_query($connection,"SELECT `emp_id` FROM `employee` WHERE `emp_id` ='$emp_id'");

//    Query Insert

    $query = "INSERT INTO `employee`(`emp_email`, `emp_id`, `emp_password`, `emp_name`, `emp_department`, `emp_designation`, `joining_date`, `emp_blood_group`, `emp_nid_number`, `emp_birth_date`, `emp_passport_number`, `emp_phone`, `emp_profile`, `emp_relationship_status`, `emp_role`) VALUES ('$emp_email','$emp_id','$emp_password','$emp_name','$emp_department','$emp_designation','$joining_date','$emp_blood_group','$emp_nid_number','$emp_birth_date','$emp_passport_number','$emp_phone','$emp_profile','$emp_relationship_status','$emp_role')";

    $query_run = mysqli_query($connection,$query);

    if($query_run){

        move_uploaded_file($emp_profile_loc,"../upload/$emp_profile");
        echo "<h6 class='bg-warning text-center p-3 text-white'>Congratulations Added Successfully </h6>";

    }else{
        echo "<h6 class='bg-warning text-center p-3 text-white'>Failed</h6>";
    }


}


?>


<div class="row">


    <div class="col-md-10 m-auto">

        <div class="card mb-5 register_cards">
            <div class="card-body">

                <h4 class="card-title text-center p-3" style="color: #fb8500"> Employee Register Panel </h4>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="register-form row">
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Employee Email Address</label>
                            <input type="email" class='form-control' name='emp_email' placeholder='Email Address' required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Employee ID Number</label>
                            <input type="text" class='form-control' name='emp_id' placeholder='Employee ID. ' required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Employee Password</label>
                            <input type="text" class='form-control' name='emp_password' placeholder='Employee Password' required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Employee Name</label>
                            <input type="text" class='form-control' name='emp_name' placeholder='Employee Name' required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Select Department </label>
                            <select name="emp_department" class='form-control'>
                                <option value="">-select-</option>
                                <?php
                                $query = "SELECT * FROM department";
                                $query_run = mysqli_query($connection,$query);
                                while($row = mysqli_fetch_assoc($query_run)){
                                    $department_id = $row['department_id'];
                                    $department_name = $row['department_name']; ?>
                                    <option value="<?php echo $department_name ?>"><?php echo $department_name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Employee Designation </label>
                            <input type="text" class='form-control' name='emp_designation'  placeholder='Employee Designation' required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Joining Date </label>
                            <input type="date" class='form-control' name='joining_date'  placeholder='Joining Date' required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Select blood group </label>
                            <select name="emp_blood_group" class='form-control'>
                                <option value="">-select-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="A-">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> NID Number (optional) </label>
                            <input type="text" class='form-control' name='emp_nid_number'  placeholder='NID Number'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Birth Date </label>
                            <input type="date" class='form-control' name='emp_birth_date'  placeholder='Birth Date' required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Passport Number (optional) </label>
                            <input type="text" class='form-control' name='emp_passport_number'  placeholder='Passport Number'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Phone Number </label>
                            <input type="text" class='form-control' name='emp_phone'  placeholder='Phone Number' required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Status (Optional) </label>
                            <input type="text" class='form-control' name='emp_relationship_status'  placeholder='Relationship Status' >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" style="color: #fb8500"> Employee Role </label>
                            <select name="emp_role" class="form-control">
                                <option value="">-select-</option>
                                <option value="employee">Employee</option>
                                <option value="hr">HR</option>
                                <option value="head">Head</option>
                                <option value="product_lead">Product Lead</option>
                                <option value="admin">admin</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="" style="color: #fb8500"> Employee Profile Picture </label>
                            <input type="file" class='form-control' name='emp_profile' id="formFile" required>
                            <small class="text-danger" style="color: #fb8500">Upload your profile photo!</small>
                        </div>

                        <div class="text-center col-md-12">
                            <button type='submit' name='register_emp' id='register-btn' class="btn add_button">Register Account</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>


</div>