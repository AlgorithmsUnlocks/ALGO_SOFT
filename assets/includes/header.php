<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "panel-admin/includes/functions.php"; ?>
<?php include "panel-admin/includes/database.php"; ?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Dev Portfolio - Ruman Ahmed</title>

    <!--Linking CSS for Dev -->
    <link rel='stylesheet' href='./assets/css/dev.css'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'
          integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>

    <!-- Font Awesome CDN -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css'
          integrity='sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=='
          crossorigin='anonymous' referrerpolicy='no-referrer'/>

    <!-- Google Fonts Setup -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap'
          rel='stylesheet'>

</head>
<body>

<!--Page Loader-->
<div class='loader-wrapper'>
    <div class='loader'></div>
</div>

<!--Header Data Fetch From Header Table-->
<?php
    global $connection;
    $query = "SELECT * FROM `headerData`";
    $fetch_data = mysqli_query($connection, $query);
    confirmQuery($fetch_data);
    $data_count = mysqli_num_rows($fetch_data);
    /*
     * Data Shows from the Database.
     */
    if($data_count > 0){
        while($row = mysqli_fetch_assoc($fetch_data)){
            $name = $row['name'];
            $nav1 = $row['nav1'];
            $nav2 = $row['nav2'];
            $nav3 = $row['nav3'];
        }
?>
        <!-- Header Design for Dev -->
        <header class='header fixed-top'>
            <div class='container'>
                <div class='row align-items-center justify-content-between'>
                    <a href='index.php' class='logo'><?php echo $name ?> <span>. </span></a>
                    <nav class='navbar'>
                        <a href='./my-works.php'><?php echo $nav1 ?></a>
                        <a href='./get-in-touch.php'><?php echo $nav2 ?></a>
                        <a href='#'><?php echo $nav3 ?></a>
                    </nav>
                    <div id='menu-btn' class='fas fa-bars'>
                    </div>
                </div>
            </div>
        </header>

 <?php
    }else{
        echo "No Data found in the ".$query." table";
    }

?>
