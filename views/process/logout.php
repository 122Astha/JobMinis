<?php

unset($_SESSION['email']);
unset($_SESSION['userId']);
header('Location: ../auth/login.php?msg=logout');


?>