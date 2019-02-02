<?php
include('includes/config.php');

 $password  = $password2 = $email = $user = $phone = $matric_no = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($password != $password2){
        $err = "Passwords don't match";
    }else{
        $password = $password2;
    }

    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $password2 = test_input($_POST["password2"]);
    $user = test_input($_POST["user"]);
    $phone = test_input($_POST["phone"]);
    $matric_no = test_input($_POST["matric_no"]);



    $sql = "INSERT INTO students_table (student_name, student_matric_no, student_password, student_email, student_phone)
VALUES ( '$user', '$matric_no', '$password', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        header("Location: profile.php");
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
    <title>Registration page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="loginContainer">
    <div class="loginHeader">
        <a href="index.php" class="btn btn-info float-right">Home</a>
        <h1 class="text-center">REGISTER HERE</h1>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <label for="user">Username</label>
        <input type="text" name="user" placeholder="Enter username " class="form-control" required>

        <label for="user">Phone No</label>
        <input type="text" name="phone" placeholder="Enter username " class="form-control" required>

        <label for="user">Matric No</label>
        <input type="text" name="matric_no" placeholder="Enter username " class="form-control" required>

        <label for="email">Email address</label>
        <input type="email" name="email" placeholder="Enter email address" class="form-control" required>

        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter password " class="form-control" required>

        <label for="password">Confirm Password</label>
        <input type="password" name="password2" placeholder="Enter password " class="form-control" required>

        <p style="color: red"><?php
            if(isset($err)){
                echo $err;
            }
            ?></p>
        <input type="submit" class="btn btn-info" value="Register"><br>
        <ul style="list-style: none; width: border-box">
            <li><p>Already Registered? <a href="login.php" style="color: #005cbf; font-weight: bold;">Login</a></p></li>
        </ul>

    </form>
</div>
</body>
</html>