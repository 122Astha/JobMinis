<?php
@session_start();
require('../../connection/config.php');
require('../inc/header.php');
require('../inc/navbar.php');
$userId = $_SESSION['userId'];
?>


<main class="bg-white h-full w-full mt-28 fixed">
    <div class="setting-wrapper grid grid-cols-12 h-full w-11/12 mx-auto">
        <aside class="col-span-3 h-full" aria-label="Sidebar">
            <div class="overflow-y-auto py-4 px-3 fixed h-full bg-gray-50 rounded dark:bg-gray-800">
                <h1 class="my-3 text-2xl font-semibold text-center">Settings</h1>
                <ul class="space-y-2">

                    <li>
                        <a href="#password-reset" id="show-password" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Password</span>
                        </a>
                    </li>
                   

                </ul>
            </div>
        </aside>
        <aside class="col-span-9  h-full">
            <div class="py-4 px-3">
                <div class="password-reset  mt-12 h-full" id="password-reset">
                    <div class="flex justify-center gap-5 py-5">
                        <img src="../uploads/image-removebg-preview(4)1655989779.png" class="w-16 h-16 rounded-full" alt="">
                        <h1 class="text-xl font-medium mt-5">Full Name</h1>
                    </div>
                    <hr>

<?php
 
if (isset($_POST['password-submit'])) {
    # code...
    $old = md5($_POST['old']);
    $new = md5($_POST['new']);
    $confirm = md5($_POST['confirm']);
    if ($old ==='' || $new ==='' || $confirm==='') {
        # code...
        ?>
<div class="alert text-sm text-white bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>Provide full details</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>

<?php

    }
    elseif ($new !== $confirm) {
        ?>
<div class="alert text-sm text-white bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>credential doesnot match</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>

<?php
    }
    else {
        $query = " SELECT e FROM  credentials  WHERE  e ='$old' AND k = '$userId'";
 $result = mysqli_query($conn, $query);
 $count = mysqli_num_rows($result);
 if ($count == 1) {

 $query = " UPDATE credentials SET e = '$new' WHERE k = '$userId'";
 $result = mysqli_query($conn, $query);
if ($result) {
    # code...
    ?>
    <div class="alert text-sm text-white bg-teal-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>Password updated successfully</strong> 
  </div>
  
  <script>
    $(".alert").alert();
  </script>
  <?php
}
   
 }

        
    }


}

?>
                    
                                        
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="old-password p-4">
                            <label for="old">Old Password</label>
                            <input type="password" name="old" class="w-2/4 ml-14">
                        </div>
                        <hr>
                        <div class="new-password p-4">
                            <label for="new">New Password</label>
                            <input type="password" name="new" class="w-2/4 ml-14">
                        </div>
                        <hr>
                        <div class="confirm-password p-4">
                            <label for="confirm">Confirm Password</label>
                            <input type="password" name="confirm" class="w-2/4 ml-8">
                        </div>
                        <button type="submit" name="password-submit"  class="bg-blue-600 text-white text-lg px-6 font-medium rounded-lg flex text-center mx-auto p-2">Change Password</button>
                    </form>
                </div>
                


            </div>
        </aside>

    </div>
</main>


<script type="text/javascript" src="../../../dist/js/jQuery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#skill').click(function() {
            $('#skillCheckbox').removeClass("hidden");
            $('#cancel').removeClass("hidden");
        })
        $('#cancel').click(function() {
            $('#alert-additional-content-2').removeClass("hidden");

        })
        $('#back').click(function() {
            $('#alert-additional-content-2').addClass("hidden");
        })
        $('#proceed').click(function() {
            $('#alert-additional-content-2').addClass("hidden");
            $('#skillCheckbox').addClass("hidden");
            $('#cancel').addClass("hidden");

        })

        $('#show-personal-info').click(function() {

            $('#skill').removeClass("hidden");
            $('#password-reset').addClass("hidden");
        });

        $('#show-password').click(function() {

            $('#password-reset').removeClass("hidden");
            $('#skill').addClass("hidden");

        });
    });
</script>