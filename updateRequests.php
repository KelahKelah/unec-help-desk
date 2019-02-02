<?php
include('includes/config.php');
session_start();
$department = $title  = $description = $priority = $date =  "";

$request_id =  $_SESSION['ID'];
//$_SESSION['id'] = $request_id;

$sqlUp = "SELECT * FROM request_table WHERE request_id = '$request_id'";
$queryUp = mysqli_query($conn, $sqlUp);

if (isset($_POST['updateBtn'])) {
    $answeredUp = $replyUp = "";

//    $request_id = $_SESSION['id'];

    $answeredUp =  $_POST["answeredUp"];
    $replyUp =  $_POST["replyUp"];


//    $department = test_input($_POST["department"]);
//    $priority = test_input($_POST["priority"]);
//    $title = test_input($_POST["title"]);
//    $description = test_input($_POST["description"]);
//    $date =  date("Y-m-d")." ". date("h:i:sa");

//    $sql = "INSERT INTO request_table (	request_department, request_title, request_body, request_priority, request_date, user_id)
//VALUES ( '$department', '$title', '$description', '$priority','$date', '$user_id')";

    $sql = "UPDATE request_table SET request_answered = '$answeredUp', reply = '$replyUp' WHERE request_id = $request_id";

    if (mysqli_query($conn, $sql)) {
        echo $answeredUp;
        echo $replyUp;
        header("Location: myRequest.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portal Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>-->
</head>
<body>
<div class="adminContainer">
    <?php
//    include 'includes/adminHeader.php';
    include 'includes/sideMenu.php';
    ?>
    <div class="content float-right col-md-9">
        <div class="container">
            <h2 class="">Update Request</h2>
            <form action="updateRequests.php" method="post">
                <?php
                if ($queryUp) {
                    while ($row = mysqli_fetch_assoc($queryUp)) {
//                        $department = $row['request_department'];
//                        $user_id = $row['user_id'];
//                        $title = $row['request_title'];
//                        $body = $row['request_body'];
//                        $priority = $row['request_priority'];
//                        $date = $row['request_date'];
                        $answered = $row['request_answered'];
                        $reply = $row['reply'];
//                        $request_id = $row['request_id'];

                        ?>

                        <?php
                    }
                }
                ?>
<!--                <label>Assigned Department:</label><br>-->
<!--                <select name="department" class="custom-select col-md-6">-->
<!--                    <option value="ict">ICT</option>-->
<!--                    <option value="servicing">SERVICING</option>-->
<!--                </select>-->
<!--                <br>-->
<!--                <label>Title</label>-->
<!--                <input type="text" id="title" placeholder="Enter title " class="form-control" name="title" required>-->
<!---->
<!--                <br>-->
<!--                <label>Description</label>-->
<!--                <textarea name="description" class="form-control" id="" cols="30" rows="5" ></textarea>-->
<!---->
<!--                <br>-->
<!--                    <label>Priority Level</label>-->
<!--                    <select name="priority" class="custom-select col-md-6">-->
<!--                        <option value="Normal">NORMAL</option>-->
<!--                        <option value="Urgent">URGENT</option>-->
<!--                    </select>-->
                    <br>
                <label>Answered</label><br>
                <input value="<?php echo $answered?>" class="form-control" name="answeredUp">
                <label>Reply</label><br>
                <textarea name="replyUp" class="form-control" id="" cols="30" rows="5" ><?php echo $reply?></textarea>
<!--                <input value="--><?php //echo $reply?><!--" class="form-control" name="replyUp">-->
                <br>
                <input type="submit" value="Update" class="btn btn-info" name="updateBtn">
                <br><br>
            </form>

        </div>


    </div>
</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>