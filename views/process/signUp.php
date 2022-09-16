<?php
require('../connection/config.php');
@session_start();

$skill = $_POST["skills"];
 

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmpassword']);

    if ($email == "" || $password == "" || $confirmPassword == "") {
        echo header("Location: ../auth/signup.php?msg=error#signup");
    } else {
        if ($password == $confirmPassword) {
            $status = "inactive";
            $user = "INSERT INTO `user` (email,status) VALUES('$email','$status')";
            
            $result = mysqli_query($conn, $user);
            if ($result) {
                $userQuery ="SELECT id from `user` WHERE email='$email'";
                $userResult = mysqli_query($conn, $userQuery);
                if ($userResult) {
                    # code...
                    $row=mysqli_fetch_assoc($userResult);
                   
                    $_SESSION["userId"] = $row['id'];
                    $_SESSION["email"] = $row['email'];
                }
                
                $credentialsType = "password";
                $v = "null";
                $active = "false";
                $credentialsQuery = "INSERT INTO `credentials`(credentials_type,user_id,k,e,v,is_active) VALUES('$credentialsType',LAST_INSERT_ID(),LAST_INSERT_ID(),'$password','$v','$active')";
           
                $result2 = mysqli_query($conn, $credentialsQuery);
            
                if ($result2) {
                   
                    echo header("Location:../auth/signup.php#username");
                }
                else{
                    
                    echo header("Location:../auth/signup.php?msg=Error#signup");
                }
                
            }
            else {
               
                echo header("Location:../auth/signup.php?msg=Error#signup");
            }
           
        }
        else {
            echo header("Location: ../auth/signup.php?msg=password#signup");
        }
    }
}
if (isset($_POST['submit1'])) {
    
    $username = $_POST['username'];
    if ($username == "") {
        # code...
        echo header("Location: ../auth/signup.php?msg=usernameError#username");
    }
    else {
        $active = "false";
        $accountQuery = "INSERT INTO `account` (user_name,slug,is_active) VALUES('$username','$username','$active')";
            
        $result = mysqli_query($conn, $accountQuery);
        if ($result) {
            echo header("Location:../auth/signup.php#accountType");
        }
        else {
            echo header("Location:../auth/signup.php?msg=Error#username");
        }
    }


}
if (isset($_POST['account'])) {
    
    $account = $_POST['account'];
    $active = "false";
    $p_type ="g";
    $role = "";
    $userId = $_SESSION["userId"];
    if ($account === "work") {
        # code...
        $role ="job-seeker";

    }
    else {
        $role ="job-provider";
    }
    $accountQuery = "INSERT INTO `permissions` (p_type,v0,v1,v2,is_active) VALUES('$p_type','$userId','$role','$role','$active')";
        
    $result = mysqli_query($conn, $accountQuery);
    if ($result) {
        $id =  $_SESSION["userId"];

            //assign permission
            $permissionQuery = "SELECT v2 FROM `permissions` WHERE v0 = '$id'";
            $permissionResult = mysqli_query($conn, $permissionQuery);
           
            if ($permissionResult) {
                # code...
                $row = mysqli_fetch_assoc($permissionResult);
                if ($row['v2'] == 'job-provider' || $row['v2'] == 'job-seeker') {
                    # code...
                   if ($row['v2'] == 'job-provider') {
                    # code...
                    $_SESSION['role'] = "job-provider";
                   }
                   else {
                    # code...
                    echo header("Location:../auth/signup.php#skillSelect");
                    $_SESSION['role'] = "job-seeker";
                   }
?>

                <?php
                } elseif ($row['v2'] == 'admin') {
                    # code...
                    $_SESSION['role'] = "admin";
                ?>
                    <meta http-equiv="refresh" content="0;url=../admin/app/index.php">
                <?php
                } else {
                   

                ?>
                    <meta http-equiv="refresh" content="0;url=../app/index.php">
<?php
                }
            }
        // echo header("Location:../admin/app/dashboard.php");
    }
    else {
        echo header("Location:../auth/signup.php?msg=error#accountType");
    }
    
  
}

?>