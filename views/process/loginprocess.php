<?php
require('../connection/config.php');
@session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    if ($email == "" || $password == "") {
        echo header("Location: ../auth/login.php?msg=error");
    } else {
        $query = "  SELECT user.id, user.email FROM user INNER JOIN credentials ON user.id = credentials.user_id WHERE user.email='$email' AND credentials.e ='$password'";

        $result = mysqli_query($conn, $query)
            or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);

        if ($count == 1) {

            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['email'];
            $_SESSION['userId'] = $row['id'];
            $id = $row['id'];

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
                    $_SESSION['role'] = "job-seeker";
                   }
?>

                    <meta http-equiv="refresh" content="0;url=../user/app/dashboard.php">
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

            // header("Location: http://localhost:3000/admin/dashboard.php");
            // echo header("Location:../auth/login.php?msg=loginerror");
        } else {

            echo header("Location:../auth/login.php?msg=loginerror");
        }
    }
}

?>