<?php ob_start(); ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

    <title> authLab - Panel </title>

    <link rel="stylesheet" href="assets/css/register.css">
    <link href="assets/img/authlab.png" rel="icon">

</head>
<body id="login-page">

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container employee-form rounded">
                <div class="row align-items-center">

                    <div class="col-md-12 text-center p-3">
                        <h4> ( authLab Panel - Login into Account ) </h4>
                    </div>

                    <div class="col-lg-8 p-3 m-auto">
                        <?php

                        if(isset($_SESSION['st_id'])){ ?>
                            <h4 class="text-primary text-center">You are Logged In</h4>
                            <p> Go the Home Page? <a href='index.php'>Home Page </a></p>
                        <?php }else{ ?>

                            <form action="assets/includes/action.php" method="post" enctype="multipart/form-data">
                                <div class="login-form">

                                    <div class="form-group">
                                        <input type="text" class='form-control' name='emp_id' placeholder='Email
 Address'
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class='form-control' name='emp_password' placeholder='Password' required>
                                    </div>

                                    <div class="submit-regiter text-center">
                                        <button type='submit' name='login_btn' id='login-btn'>GO INSIDE</button>
                                    </div>

                                </div>

                            </form>
                        <?php }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>



</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"</script>

</body>
</html>