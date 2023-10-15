<div class="row">

    <div class="col-md-12">
        <div class="card mb-5" >


            <?php

            global $connection;
            $query = "SELECT * FROM employee";
            $query_fetch_users = mysqli_query($connection, $query);
            $total_users = mysqli_num_rows($query_fetch_users);
            // echo $total_blood_count;

            if($total_users > 0){

                ?>
                <div class="table-responsive p-3">

                    <table id="example" class="display" style="width:100%!important">
                        <thead>
                        <tr>
                            <th class="ml-5">ID</th>
                            <th> Email </th>
                            <th> Employee ID </th>
                            <th> Name </th>
                            <th> Department </th>
                            <th> Phone </th>
                            <th> profile </th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        while($row = mysqli_fetch_assoc($query_fetch_users)){

                            $db_id  = $row['id'];
                            $db_emp_email  = $row['emp_email'];
                            $db_emp_id  = $row['emp_id'];
                            $db_emp_name  = $row['emp_name'];
                            $db_emp_department  = $row['emp_department'];
                            $db_emp_phone  = $row['emp_phone'];
                            $db_emp_profile  = $row['emp_profile'];

                            ?>
                            <tr>
                                <td><?php echo $db_id ?> </td>
                                <td><?php echo $db_emp_email ?></td>
                                <td><?php echo $db_emp_id ?></td>
                                <td><?php echo $db_emp_name ?></td>
                                <td><?php echo $db_emp_department ?></td>
<!--                                <td>-->
<!---->
<!--                                    --><?php
//
//                                    $query = "SELECT * FROM `department` WHERE department_id = 1";
//                                    $query_fetch_users = mysqli_query($connection, $query);
//                                    while($row = mysqli_fetch_assoc($query_fetch_users)) {
//
//                                        $department_id = $row['department_id'];
//                                        $department_name = $row['department_name'];
//                                        echo $department_name;
//                                    }
//
//                                    ?>
<!---->
<!--                                </td>-->
                                <td><?php echo $db_emp_phone ?></td>

                                <td>
                                    <img src="../upload/<?php echo $db_emp_profile ?>" class="img-fluid" style="height: 80px; border-radius: 50px; text-align: center"/>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">


                                        <a href="users.php?source=view_user&emp_id=<?php echo $db_emp_id; ?>">
                                            <button type="submit" class="btn btn-success btn-sm btn-icon-text mr-3" name="view_employee">
                                                View
                                            </button>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

                <?php
            }

            ?>

        </div>
    </div>

</div>