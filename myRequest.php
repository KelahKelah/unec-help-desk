<?php
include('includes/config.php');
session_start();
$admin_id = $_SESSION["admin-id"];
$user_id =  $_SESSION["user-id"];
$sql = "SELECT * FROM request_table WHERE user_id= '$user_id'";
$query = mysqli_query($conn, $sql);


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
            <h2 class="">My Requests</h2>
            <a href="addRequests.php" class="btn btn-primary float-right" style="margin-top: -30px;">Add</a>
            <hr>

            <div class="responsive">
                <table class="table table-striped table-bordered adminTable ">
                    <thead>
                    <tr>
                        <th scope="col">Department</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body</th>
                        <th scope="col">Priority</th>
                        <th scope="col">Date</th>
                        <th scope="col">Answered</th>
                        <th scope="col">Reply</th>
                    </tr>
                    </thead>

                    <?php
                    if ($query) {
                        while ($row = mysqli_fetch_assoc($query)) {
//                            $student_id = urlencode($row['student_id']);
                            $department = $row['request_department'];
                            $title = $row['request_title'];
                            $body = $row['request_body'];
                            $priority = $row['request_priority'];
                            $date = $row['request_date'];
                            $answered = $row['request_answered'];
                            $reply = $row['reply'];

                            ?>
                            <tr>
                                <th scope="row"><?php
                                    echo $department
                                    ?></th>
                                <th scope="row"><?php
                                    echo $title
                                    ?></th>
                                <th scope="row"><?php
                                    echo $body
                                    ?></th>
                                <th scope="row"><?php
                                    echo $priority
                                    ?></th>
                                <th scope="row"><?php
                                    echo $date
                                    ?></th>
                                <th scope="row"><?php
                                    echo $answered
                                    ?></th>

                                <th scope="row"><?php
                                    echo $reply
                                    ?></th>
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
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script>$('a[href="' + this.location.pathname + '"]').parents('ul').addClass('active');</script>
</html>