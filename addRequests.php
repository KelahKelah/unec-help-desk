<?php
include('includes/config.php');
session_start();
$department = $title  = $description = $priority = $date = "";

$user_id =  $_SESSION["user-id"];
$user_name = $_SESSION['name'];
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $department = test_input($_POST["department"]);
    $priority = test_input($_POST["priority"]);
    $title = test_input($_POST["title"]);
    $description = test_input($_POST["description"]);
    $date =  date("Y-m-d")." ". date("h:i:sa");

    $sql = "INSERT INTO request_table (	request_department, request_title, request_body, request_priority, request_date, user_id, user_name)
VALUES ( '$department', '$title', '$description', '$priority','$date', '$user_id', '$user_name')";

    if (mysqli_query($conn, $sql)) {
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

function kelah($hair, $bags,$money){
    echo "Yay, thats a cool ".$hair." hair<br>" ;
    echo $money. " is how much i've got<br>";
    echo "the ".$bags." is blue<br>";
}

kelah("brazillian", "gucci", "90,000 dollars");
kelah("peruvian", "hermes", "100,000 dollars");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portal Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>-->

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
            <h2 class="">Add Request</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label>Assigned Department:</label><br>
                <select name="department" class="custom-select col-md-6">
                    <option value="ict">ICT</option>
                    <option value="servicing">SERVICING</option>
                </select>
                <br>
                <label>Title</label>
                <input type="text" id="title" placeholder="Enter title " class="form-control" name="title" required>

                <br>
                <label>Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="5" ></textarea>

                <br>
                    <label>Priority Level</label>
                    <select name="priority" class="custom-select col-md-6">
                        <option value="Normal">NORMAL</option>
                        <option value="Urgent">URGENT</option>
                    </select>
                    <br>

                <input type="submit" value="Submit" class="btn btn-info">
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