<?php
include_once "../../connection/config.php";

$id=$_GET['id'];
echo $_GET['id'];
$status=$_GET['status'];
echo $_GET['status'];

$sql = mysqli_query($conn, "UPDATE user SET status = '{$status}' WHERE id = $id");
mysqli_query($conn,$sql)
?>