

<?php
require('../../connection/config.php');
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query)
    or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    if($count==1)
    {
        
        $row=mysqli_fetch_assoc($result);
        $_SESSION['email']= $row['email'];
        echo "hello";
        
        // header("Location: http://localhost:3000/admin/dashboard.php");
     
        ?>
       <meta http-equiv="refresh" content="0;url=../app/dashboard.php">
        <?php 
        
    }
    else 
    {
        ?>
        <meta http-equiv="refresh" content="0;url=../../auth/login.php?msg=loginerror">
     
        
        <?php 
    }
}

?>