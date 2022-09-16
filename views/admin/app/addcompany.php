
<?php
require('../../connection/config.php');
require('../inc/header.php');
session_start();
$id = $_SESSION['userId'];

?>



<!-- strat wrapper -->
<div class="h-1/2 flex w-full justify-between absolute right-0 flex-row flex-wrap">
  <!-- start sidebar -->
  <div class="w-1/4">
  <?php
 require('../inc/sidebar.php');
  ?>
  </div>
  <!-- end sidbar -->
  <!-- strat content -->
  <div class="bg-gray-100 w-3   /4 flex-auto md:pr-8 md:mt-16">


  <div class=" flex flex-row flex-wrap">
    <!-- start sidebar -->
  
   <section class="content w-full ">
      <div class="container-fluid w-4/5 mx-auto">
        <!-- Small boxes (Stat box) -->
        <a href="uploadfile.php" class="relative  mx-auto top-16 left-6"> <button class="btn btn-primary p-2">Manage</button></a> 

          <!-- left column -->
          <div class="col-md-12">
          <div class="card  rounded-xl">
              <div class="card-header bg-gray-800 rounded-t-xl">
                <h3 class="card-title text-white text-center font-semibold text-lg">Add New Company</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body overflow-x-auto relative">
                <form action="" method="post" enctype="multipart/form-data" class="md:w-4/5 w-3/4 mx-auto">
                <div id="error" class="bg-red-100 mb-2 hidden border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">Please fill all the fields!</strong>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-red-500" role="button" id="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
       Company Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="name" type="text" placeholder="Jane">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="information">
      Company Information
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="information" name="information" type="text" placeholder="information">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="founded">
       founded_at
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="founded" name="founded" type="text" placeholder="founded">
      <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
    </div>
    <div class="w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
       Email
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email" type="email" placeholder="email">
      <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-1/3 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="size">
       Size
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="size" name="size" type="number" placeholder="size">
      <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
    </div>
    <div class="w-1/3 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
       Phone
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phone" name="phone" type="number" placeholder="phone">
      <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
    </div>
    <div class="w-1/3 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="status">
       Status
      </label>
      <select name="status" id="status" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
     
       
            <option value="true" selected>Active</option>
            <option value="false" >Inactive</option>

      </select>
   
    </div>
  </div>


  <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>


                </form>

                <!-- notice body -->
                
<div id="toast-success" class="flex hidden fixed z-50 right-10 bottom-32 items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Company added successfully.</div>
    <button type="button" id="notice-close" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>

<!-- error notice -->
<div id="toast-warning" class="flex hidden fixed z-50 right-10 bottom-32 items-center p-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-cente r items-center w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Warning icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Error while adding Company</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>

              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!--/.col (left) -->
      
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>




  </div>

  <!-- end content -->

</div>
<!-- end wrapper -->
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script type="text/javascript" src="../../../assets/js/jQuery.js"></script>
<?php
 
 if (isset($_POST['submit'])) {
    # code...
   
$name = $_POST['name'];

$information = $_POST['information'];
$email = $_POST['email'];
$founded = $_POST['founded'];
$phone = $_POST['phone'];
$size = $_POST['size'];
$status = $_POST['status'];


    if ($name ==''||$information == ''|| $email=='' || $founded==''|| $size=='' || $status=='') {
        # code...

        echo "
        <script> 
        
        $('#error').removeClass('hidden');
         </script> 
        ";
        
    } else {
        
        $query = "INSERT INTO user_details (name, information, size, founded_at, email, phone, status,  user_id) VALUES('$name','$information','$size','$founded','$email','$phone', 'Active','$id') ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            # code...
            echo
            "
            <script>
            $('#toast-success').removeClass('hidden');

            </script>
            
            
            ";
        }
        else{
          echo
          "
          <script>
          $('#toast-danger').removeClass('hidden');

          </script>
          
          
          ";
        }
        
    }
}
?>

<script type="text/javascript">
$("#close").click(function(){
  $("#error").addClass("hidden");
})
</script>