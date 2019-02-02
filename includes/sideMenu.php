
<div class="adminHeader">
    <a href="#" class="float-left">Unec HelpDesk Portal</a> <a href="logout.php" class="btn btn-primary btn-sm float-right" style="margin-top: -5px;">
    Sign-out</a> <p  href="#" class="float-right btn-primary btn-sm"  style="margin-right: 10px"><?php
        //        session_start();
        echo $_SESSION['name'];
        ?></p>
</div>

<div class="sideMenu float-left col-md-3">
    <ul class="list-group nav" id="sideMenu">
        <li class="list-group-item" style="background-color: #000000;">SIDE MENU</li>
        <a href="myRequest.php" class=""><li class="list-group-item">My Requests</li></a>
        <a href="profile.php" class=""><li class="list-group-item">My Profile</li></a>

        <?php if (isset($_SESSION['admin-id']) || $_SESSION['admin-id'] == 1 || $_SESSION['admin-id'] == 2) { ?>

        <li class="list-group-item" style="background-color: #000000;"><div class="listHeader">MY DEPARTMENTS</div></li>
        <a href="serviceRequest.php" class=""><li class="list-group-item">Servicing</li></a>

        <?php } ?>

        <?php if (isset($_SESSION['admin-id']) && $_SESSION['admin-id'] == 2) { ?>

        <li class="list-group-item" style="background-color: #000000;"><div class="listHeader">ADMIN</div></li>
        <a href="users.php" class=""><li class="list-group-item">Users</li></a>
        <a href="allDepartments.php" class=""><li class="list-group-item">Departments</li></a>
        <a href="allRequests.php" class=""><li class="list-group-item">All Requests</li></a>
        <?php } ?>
    </ul>
</div>
