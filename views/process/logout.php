<?php

session_start();
unset($_SESSION['email']);
header('Location: ../auth/login.php?msg=logout');


?>