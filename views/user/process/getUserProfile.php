<?php
require('../../connection/config.php');
session_start();
$id = $_SESSION['userId'];

// form data

if(isset($_POST['id'])){
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$street = $_POST['street'];
$website = $_POST['website'];
$github = $_POST['github'];
$linkedin = $_POST['linkedin'];
$bio = $_POST['bio'];
$account_id = $_POST['account_id'];
$profile_id = $_POST['profile_id'];
$address_id = $_POST['address_id'];

?>

<?php
   $query = "UPDATE profile SET first_name = '$firstname', middle_name = '$middlename', last_name = '$lastname', email = '$email', bio = '$bio', is_active = 'true' WHERE user_id = '$id' AND id = '$profile_id'";
   $result = mysqli_query($conn, $query);

   if ($result) {
    # code...
    $query1 = "UPDATE account SET user_name = '$username' WHERE  id = '$account_id'";
   $result1 = mysqli_query($conn, $query1);
   if ($result1) {
    # code...
    $query2 = "UPDATE addresses SET state = '$state', street = '$street', city = '$city', country = '$country'  WHERE  id = '$address_id'";
    $result2 = mysqli_query($conn, $query2);
    if($result2){
        $query3 = "UPDATE user_setting SET link_value = '$website' WHERE  user_id = '$id' AND link_key = 'website'";
    $result3 = mysqli_query($conn, $query3);
    $query4 = "UPDATE user_setting SET link_value = '$github' WHERE  user_id = '$id' AND link_key = 'github'";
    $result4 = mysqli_query($conn, $query4);
    $query5 = "UPDATE user_setting SET link_value = '$linkedin' WHERE  user_id = '$id' AND link_key = 'linkedin'";
    $result5 = mysqli_query($conn, $query5);

    ?>
    <div id="toast-success" class="flex absolute right-16 bottom-16 items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Profile updated successfully.</div>
    <button type="button" id="notice-close" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>
                    
    <?php
    }
   }
   }
    














   
}
else{
    echo "error"; 
}
?>
<script type="text/javascript" src="../../../dist/js/jQuery.js"></script>
<script type="text/javascript">

$("#notice-close").click(function(){
    $("#toast-success").addClass("hidden");
})

</script>