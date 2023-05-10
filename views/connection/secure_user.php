<?php
if(!isset($_SESSION['email']))
{
    echo header('Location:../../auth/login.php?msg=invalidUser');

}

?>