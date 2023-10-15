<?php

// Update Profile Picture
global $connection;
if(isset($_POST['change_profile'])){
    $emp_id = $_POST['emp_id'];

    $change_profile = $_FILES['change_profile']['name'];
    $change_profile_loc = $_FILES['change_profile']['tmp_name'];

   $query = "UPDATE `employee` SET `emp_profile`='$change_profile_loc' WHERE `emp_id`=$emp_id";
    $query_update_user = mysqli_query($connection,$query);
    confirmQuery($query_update_user);

}


?>



<?php

if($_GET['emp_id']){

    $emp_id = $_GET['emp_id'];
    $query = "SELECT * FROM employee WHERE emp_id =$emp_id ";
    $query_fetch_users = mysqli_query($connection, $query);
    $total_users = mysqli_num_rows($query_fetch_users);

    while($row = mysqli_fetch_assoc($query_fetch_users)) {

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
        $db_emp_birth_date= $row['emp_birth_date'];
        $db_emp_birth_date = $row['emp_birth_date'];
        $db_emp_phone = $row['emp_phone'];
        $db_emp_profile = $row['emp_profile'];
        $db_emp_relationship_status = $row['emp_relationship_status'];
        $db_emp_role = $row['emp_role'];
        $db_create_date = $row['create_date'];
    }

   // echo $db_emp_name;
    ?>


    <div class="employee-wrapper">
        <div class="container">
            <div class="employee_container">

                <div class="employee_card">
                    <img src="../../upload/<?php echo $db_emp_profile ?>" class="img-fluid" style="width: 300px; border-radius: 20px;"/>
                    <h5 style="margin: 10px 0;"><span style="color: #fb8500"> Name : </span> <?php echo $db_emp_name; ?></h5>
                    <h5 style="margin: 10px 0;"><span style="color: #fb8500"> Department : </span> <?php echo $db_emp_department; ?></h5>
                    <h5 style="margin: 10px 0;"><span style="color: #fb8500">  Designation : </span> <?php echo $db_emp_designation; ?></h5>

                    <h5 style="margin: 10px 0;"><span style="color: #fb8500">  Joining Date : </span> <?php echo $db_joining_date; ?></h5>
                    <h5 style="margin: 10px 0;"><span style="color: #fb8500">  Blood Group : </span> <?php echo $db_emp_blood_group; ?></h5>
                    <h5 style="margin: 10px 0;"><span style="color: #fb8500">  NID Number : </span> <?php echo $db_emp_nid_number; ?></h5>
                    <h5 style="margin: 10px 0;"><span style="color: #fb8500">  Birth Date : </span> <?php echo $db_emp_birth_date; ?></h5>
                    <h5 style="margin: 10px 0;"><span style="color: #fb8500">  Phone Number : </span> <?php echo $db_emp_phone; ?></h5>
                    <h5 style="margin: 10px 0;"><span style="color: #fb8500">  Status : </span> <?php echo $db_emp_relationship_status; ?></h5>
                    <h5 style="margin: 10px 0;"><span style="color: #fb8500">  Account Creation Date : </span> <?php echo $db_create_date; ?></h5>
                </div>

                <div class="employee_card">
                    <div class="change-profile text-center">
                        <h6><span style="color: #fb8500"> Change Profile Picture </span></h6>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" name="change_profile" id="" value="<?php echo $db_emp_profile ?>">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="emp_id" id="" value="<?php echo $emp_id; ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="change_profile" class="add_button"> Change Profile</button>
                            </div>
                        </form>
                    </div>
                    <div class="change-profile text-center">

                        <h6><span style="color: #fb8500">  </span></h6>
                        <button type="submit" name="change_profile" class="add_button"> Update Profile Data </button>
                    </div>
                    <div class="change-profile text-center">
                        <h6><span style="color: #fb8500">  </span></h6>
                        <button type="submit" name="change_profile" class="add_button"> Delete Profile Data </button>
                    </div>
                </div>



            </div>
        </div>
    </div>


<?php }else{
    echo "No";
}