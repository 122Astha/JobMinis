<?php
    session_start();
    include_once "../../connection/config.php";
    $outgoing_id = $_SESSION['userId'];
    $sql = "SELECT * FROM user WHERE NOT id = {$outgoing_id} ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>