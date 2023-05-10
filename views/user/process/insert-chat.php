<?php 
    session_start();
    if(isset($_SESSION['userId'])){
        include_once "../../connection/config.php";
        $outgoing_id = $_SESSION['userId'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }else{
        header("location: ../../auth/login.php");
    }


    
?>