<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'students_table');

$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if ($conn) {
//    echo "Connected";
}
else
{
    echo "Not connected";
}
