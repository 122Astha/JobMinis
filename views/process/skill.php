

<?php
include_once "../connection/config.php";
$id = $_SESSION['userId'];

$skill = $_POST['skills'];
$type = $_POST['type'];

$query = "INSERT INTO user_skill(user_id,skill_id) VALUES('$id', '$skill')";
$skill_result = mysqli_query($conn, $query);
echo $query;
if ($skill_result) {
    # code...
    echo "true";
}
?>