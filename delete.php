
<?php
include('includes/config.php');
$btn = $btn_del = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $btn = $_POST["del"];


    $sql = "DELETE FROM request_table WHERE request_id = '$btn' ";
    $query1 = mysqli_query($conn, $sql);
    if($query1){
        header("Location: myRequest.php");
    }
}
?>