<?php
@session_start();
$id = $_SESSION['userId'];
require('../../connection/config.php');

if (isset($_POST['apply-submit'])) {

    $name = $_POST['name'];
    $bio = $_POST['bio'];
    
    $imageName = $_FILES['file']['name'];
    $imageSize = $_FILES['file']['size'];
    $tempName = $_FILES['file']['tmp_name'];

    $validImageExtention = ['pdf', 'doc', 'docx', 'png', 'txt', 'csv', 'jpg', 'jpeg'];
    $imageExtension = explode('.', $imageName);
    $imageExtension =   strtolower(end($imageExtension));
    if (!in_array($imageExtension, $validImageExtention)) {
        # code...
       
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=../../user/app/jobList.php?msg=error\">";

    } else {
        $newImageName = $imageName . " - " . date("Y.m.d" . " - " . date("h.i.sa"));
        $newImageName .= "." . $imageExtension;
        $query = "INSERT INTO applyjob ( user_id,filelink,job_title, job_detail_id, status, bio) VALUES('$id','$newImageName','$name','1','Active', '$bio') ";
  
        $result = mysqli_query($conn, $query);
     
        if ($result) {
            # code...
            move_uploaded_file($tempName, '../../user/uploads/' . $newImageName);

         
           
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=../../user/app/jobList.php?msg=success\">";
        }
    
}
}

?>