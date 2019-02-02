<?php
    require 'includes/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $password = "";
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $sql = "SELECT * FROM students_table WHERE student_email = '$email' AND student_password = '$password'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            session_start();

            $_SESSION['auth'] = true;
            $_SESSION['admin-id'] = $row['admin'];
            $_SESSION['user-id'] = $row['student_id'];

            $_SESSION['name'] = $row['student_name'];
        }
        if ($_SESSION['auth'] === true) {

            header("Location: profile.php");
            exit();
        }
    }else{
        $err = "Invalid email or password";
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
    <title>Login page</title>
    <!-- boostrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- overidecustom css -->
    <link rel="stylesheet" href="css/styles.css">

<style>
    body {
           color:white;
           background: #003366;
        }
</style>        
</head>
<body>
<div class="loginContainer">
    <div class="loginHeader">
        <a href="index.php" class="btn btn-info float-right">Home</a>
        <h1 class="text-center">LOGIN HERE</h1>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="email">Email address</label>
        <input type="email" name="email" placeholder="Enter email address" class="form-control" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter password " class="form-control" required>
        <p style="color: red"><?php
            if(isset($err)){
                echo $err;
            }
            ?></p>
        <input type="submit" class="btn btn-info" value="Login"><br>
        <ul style="list-style: none; width: border-box">
            <li><p>Haven't registered yet? <a href="register.php" style="color: #005cbf; font-weight: bold;">Register</a></p></li>
        </ul>
    </form>
</div>
</body>
</html>