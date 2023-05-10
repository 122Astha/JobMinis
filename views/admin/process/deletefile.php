<?php 
require('../../connection/config.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM files WHERE id=$id";
    $result = mysqli_query($conn,$query);
    echo 'Deleted successfully.';
}else{
    echo 'Failed To Delete';
}
?>
