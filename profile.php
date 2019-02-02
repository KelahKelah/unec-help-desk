<?php
session_start();
require 'includes/config.php';

$user_id = $admin_id = "";

$admin_id = $_SESSION["admin-id"];
$user_id =  $_SESSION["user-id"];

$sql = "SELECT * FROM students_table WHERE student_id = '$user_id' ";
$query = mysqli_query($conn, $sql);
if ($query) {
    $row = mysqli_num_rows($query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portal Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<style>
    body{
           color:white;
           background: #003366;
           
        }
</style>     
</head>
<body>
<div class="adminContainer">
    <?php
//    include 'includes/adminHeader.php';
    include 'includes/sideMenu.php';
    ?>

    <div class="content float-right col-md-9">
        <div class="container">
            <h2 class="">User  Profile</h2>
            <hr>
            <div class="container">
                <?php
                if ($query) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $student_name = $row['student_name'];
                        $department = $row['student_dept'];
                        $matric = $row['student_matric_no'];
                        $email = $row['student_email'];
                        $phone = $row['student_phone'];

                        ?>
                        <tr>
                            <p class="text-right"><span class="text-center" style="font-weight:bolder;">User:</span>  <span ><?php
                                    echo $student_name;
                                    ?></span></p>
                            <p class="text-left"><span class="text-center" style="font-weight:bolder;">Department:</span>  <span ><?php
                                    echo $department
                                    ?></span></p>
                            <p class="text-right"><span class="text-center" style="font-weight:bolder;">Matric No:</span>  <span ><?php
                                    echo $matric
                                    ?></span></p>
                            <p class="text-left"><span class="text-center" style="font-weight:bolder;">Email:</span>  <span ><?php
                                    echo $email
                                    ?></span></p>
                            <p class="text-right"><span class="text-center" style="font-weight:bolder;">Phone:</span>  <span ><?php
                                    echo $phone
                                    ?></span></p>

                        </tr>

                        <?php
                    }
                }
                ?>
            </div>

        </div>


    </div>
</div>


</body>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script>$('a[href="' + this.location.pathname + '"]').parents('ul').addClass('active');</script>
</html>