<?php
@session_start();
require('../../connection/secure_user.php');
include '../inc/header.php';
require('../inc/navbar.php');
require('../../connection/config.php');
$id = $_SESSION['userId'];
?>


<main>
    <!-- strat wrapper -->
    <div class="h-full flex flex-row flex-wrap bg-white">
        <!-- start sidebar -->

        <!-- end sidbar -->
        <div class="company-list-wrapper w-full mt-28 h-full">
            <div class="title bg-teal-100 py-20 text-center">
                <h1 class="text-6xl font-extrabold mb-3">Search Jobs</h1>
                <span class="text-xl font-light text-gray-600 font-sans">search your career opportunity through different jobs</span>
            </div>
            <div class="company-list my-8 mx-16 grid grid-cols-12 gap-5">


            </div>
            <div class="list col-span-9 py-7 ">
            <?php
                        if (isset($_GET['msg'])=="success") {
                            # code...
                            ?>
 <div class="alert text-sm text-white mx-10 bg-teal-400 p-1 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>New Job posted successfully</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>
                            <?php
                        }
  

?>
                     
                     <?php
                        if (isset($_GET['msg'])=="error") {
                            # code...
                            ?>
        <!-- error notice -->
       
                    <?php

                        }
                

                    ?>
                <div class="list-header my-5 gap-5 grid md:grid-cols-2 mx-16 grid-cols-1 ">
               
                   <?php

                    $job_query = "SELECT * FROM job_details INNER JOIN job_type ON job_details.job_type_id = job_type.id WHERE job_details.status = 'true'";
                    $job_result = mysqli_query($conn, $job_query);
                    while ($row4 = mysqli_fetch_array($job_result)) {
                        # code...
                    ?>
                        <div class="job-card border border-gray-400 hover:shadow hover:shadow-gray-400 rounded-3xl">
                            <div class="job-title p-4 py-5 flex gap-5">
                                <div class="title space-y-2">
                                    <a href="./jobDetails.php?id=<?php echo $row4['id']; ?>">
                                        <h1 class="text-lg font-semibold"><?php echo $row4['title'];  ?></h1>
                                    </a>
                                    <div class="place flex gap-9">
                                        <div class="flex gap-3">
                                            <i class="fa-solid fa-earth-americas "></i>
                                            <h2 class="text-sm font-medium">Paris, France</h2>
                                        </div>

                                        <h2 class="text-sm font-light"><?php echo $row4['type'];  ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="time text-sm text-gray-700 font-extralight mb-4 text-right mr-12">

                                <h2 class="text-xs"><?php echo $row4['created_at'];  ?> <strong><?php echo $row4['contact_person'];  ?></strong> </h2>

                            </div>
                            <div class="w-2/3 mx-auto mb-7">
                                <button type="submit" id="submit" name="submit" value="<?php $row4['id']; ?>" class="w-full text-white bg-teal-600 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply Now</button>
                            </div>
                        </div>

                        <div id="apply" tabindex="-1" aria-hidden="true" class=" overflow-y-auto overflow-x-hidden fixed mx-64 my-56  z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center hidden ">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" id="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Apply for the job</h3>
                                        <form class="space-y-6" id="cv-upload" method="POST" action="../process/applyJob.php" enctype="multipart/form-data">
                                            <div>
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Job title</label>
                                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="title" required="">
                                            </div>
                                            <div>
                                                <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Bio</label>
                                                <input type="text" name="bio" id="bio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="sapna cv" required="">
                                            </div>
                                            <div class="">
                                                <label for="file" class="block  text-sm font-medium text-gray-900 dark:text-gray-300">Choose CV</label>
                                                <input type="file" name="file" id="file" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                                <input type="hidden" name="id" value="<?php $row4['id']; ?>">
                                            </div>



                                            <button type="submit" name="apply-submit" value="<?php $row4['id']; ?>" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (isset($_GET['msg'])==="success") {
                            # code...
                            ?>
 <div class="alert text-sm text-white bg-teal-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>New Job posted successfully</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>
                            <?php
                        }
  

?>
                     
                     <?php
                        if (isset($_GET['msg'])=="error") {
                            # code...
                            ?>
        <!-- error notice -->
       
                    <?php

                        }
                    }

                    ?>
                </div>
                <!-- <div class="list-body grid grid-cols-2 mt-16 gap-5" id="companySearch">
                    </div> -->
                <!-- Main modal -->

            </div>
        </div>
    </div>
    </div>
</main>



<script type="text/javascript" src="../../../assets/js/jQuery.js"></script>
<script>
    $('#submit').click(function() {
        $('#apply').removeClass("hidden");

    });
    $('#button').click(function() {
        $('#apply').addClass("hidden");

    });
</script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#name").keyup(function() {
            var name = $(this).val();
            if (name != "") {
                $.ajax({
                    url: "../process/getCompany.php",
                    method: "POST",
                    data: {
                        type: 1,
                        name: name,
                    },
                    success: function(data) {

                        $("#company").html(data);

                    }
                });
            } else {
                $.ajax({
                    url: "../process/getCompany.php",
                    method: "POST",
                    data: {
                        type: 2,
                    },
                    success: function(data) {

                        $("#company").html(data);

                    }
                });

            }

        })

    });
</script>
<?php
include '../inc/footer.php'
?>

<?php

?>