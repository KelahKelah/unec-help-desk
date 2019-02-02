<?php
include('includes/config.php');

$sql = "SELECT * FROM students_table";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portal Page</title>
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style>
    body {
           color:white;
           background: #336699;
        }
</style>     
   
</head>
<body>
<div class="adminContainer">
    <?php
    session_start();
//    include 'includes/adminHeader.php';
    include 'includes/sideMenu.php';
    ?>
    <div class="content float-right col-md-9">
        <div class="container">
            <h2 class="">All Users</h2>
            <a href="register.php" class="btn btn-primary float-right" style="margin-top: -30px;">Add</a>
            <hr>

            <div class="table-responsive">
                <table class="table table-striped table-bordered adminTable ">
                    <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Department</th>
                        <th scope="col">Email</th>
                        <th scope="col">Matric No</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Admin</th>
<!--                        <th scope="col">Actions</th>-->
                    </tr>
                    </thead>
                    <?php
                    if ($query) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $student_id = urlencode($row['student_id']);
                        $student_name = $row['student_name'];
                        $student_dept = $row['student_dept'];
                        $student_matric_no = $row['student_matric_no'];
                        $student_email = $row['student_email'];
                        $student_phone = $row['student_phone'];
                        $admin = $row['admin'];







                        
                        ?>
                        <tr>
                            <th scope="row"><?php
                                echo $student_name
                                ?></th>
                            <th scope="row"><?php
                                echo $student_dept
                                ?></th>
                            <th scope="row"><?php
                                echo $student_email
                                ?></th>
                            <th scope="row"><?php
                                echo $student_matric_no
                                ?></th>
                            <th scope="row"><?php
                                echo $student_phone
                                ?></th>
                            <th scope="row"><?php
                                echo $admin
                                ?></th>
<!--                            <th scope="row">-->
<!--                                <a href="#">View</a><br>-->
<!--                                <a href="#">Edit</a>-->
<!--                            </th>-->
                        </tr>

                        <?php
                        }
                    }
                    ?>
                </table>
            </div>


        </div>


    </div>
</div>


</body>
<script src="js/custom.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>