<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>eHelpDesk</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<style>
	body {
           color:white;
           background: #336699;
        }
	</style>	
</head>
<body>
<div class="container1">
	<div class="header">
		<h1 class="text-center headerText">WELCOME TO THE eHelpDesk PORTAL</h1>
	</div>
	<br><br>
	<?php
	$days = "";
	$target = mktime(0,0,0,2,04,2019);
	$today = time();
	$difference = ($target-$today);
	$dyas = (int) ($difference/86400);
	print "The Semester closes in 13 $days days";
	?>

    <p class="text-center">
        <a class="btn btn-primary" href="login.php">Login</a>
        <a class="btn btn-primary" href="register.php">Register</a>
    </p>

<!--    <p class="text-center">You will find below all the available departmrnts. 
To access your department or make a new request, please click on the  button</p>-->

</div>
<br>
	<p class="text-center help-block">Please note that you need to be authorised before you can use any part 
	of this system. Contact the ICT team personally if you're not already a user.</p>
	<h2 class="text-center" style="margin-bottom: 20px;">DEPARTMENTS</h2>
	<br><br>
	<div class="row departmentsRow">
		<div class="col-sm-3">
			<div class="contain">
				<h3 class="text-center">Technical</h3>
				<p>Manages all users and requestors. Responsible for managing all departments too.</p>
				<p>Responsible for all the technicals that have to do with the system.</p>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="contain">
				<h3 class="text-center">Physical Planning</h3>
				<p>Servicing of all university equipments.</p>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="contain">
				<h3 class="text-center">ICT</h3>
				<p>Manages all Information Technology</p>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="contain">
				<h3 class="text-center">Planning & Works</h3>
				<p></p>
			</div>
		</div>
	</div>
</div>
</body>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>


