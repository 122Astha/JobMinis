<?php
@session_start();
require('../../connection/secure_user.php');
include '../inc/header.php';
require('../inc/navbar.php');
require('../../connection/config.php');
?>

<main>
    <!-- strat wrapper -->
    <div class="h-full flex flex-row flex-wrap bg-white">
        <!-- start sidebar -->

        <!-- end sidbar -->
        <div class="post-wrapper w-full mt-28 h-full bg-gray-100">
            <div class="div w-9/12 mx-auto my-16">
                <div class="post-header">
                    <h1 class="font-bold text-3xl font-serif text-gray-600">Post your job here</h1>
                </div>
                <div class="post-body py-16 grid grid-cols-6 gap-5">
                    <div class="job-left col-span-2 flex space-x-3 p-4 rounded-xl shadow-lg shadow-gray-400 text-center bg-white h-16">
                        <span class="pl-3 text-blue-500 font-semibold">01</span>
                        <h1 class="font-semibold">Information</h1>
                    </div>
                    <div class="job-right col-span-4">
                        <?php
                        if (isset($_GET['msg'])) {
                    if ($_GET['msg']=="error") {
                                        # code...
                                        ?>
                                           <div class="alert text-sm text-white bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>Please provide all the details</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>
                                        <?php
                                    }
                                    if ($_GET['msg']=="sqlErr") {
                                        # code...
                                        ?>
                                           <div class="alert text-sm text-white bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>Couldn't post new job</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>
                                        <?php
                                    }
                                    if ($_GET['msg']=="success") {
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
                                }
                                    ?>
                        <form action="../process/job.php" method="post" enctype="multipart/form-data" class="space-y-5">
                            <div class="company-info bg-white rounded-xl space-y-4 p-10">
                                <h1 class="font-bold text-lg">Project owner personal information</h1>
                                <div class="">
                                    <label for="title" class="text-sm text-gray-500 font-semibold">Enter Job Title</label>
                                    <input type="text" name="title" id="" required class="mt-2 w-full rounded-md bg-gray-100 border-gray-200 placeholder:text-sm" placeholder="Job Title">
                                </div>
                                <div class="text-sm text-gray-500 font-semibold">
                                    <label for="contactPerson" class="w-full">Contact Person</label>
                                    <i class="fa-solid fa-user absolute mt-11 -ml-20 text-blue-500"></i> <input type="text" name="contactPerson" id="" required class="mt-2 pl-10 w-full rounded-md bg-white border-gray-200">
                                </div>

                                <div class="flex">
                                    <div class="text-sm text-gray-500 font-semibold">
                                    <i class="fa-solid fa-envelope absolute mt-11 ml-3 text-blue-500 "></i>  <label for="email" class="w-full">How can we get back to you</label> 
                                       <input type="email" name="email" id="" required class="mt-2 rounded-md bg-gray-100 pl-8 border-gray-200 placeholder:text-sm" placeholder="Enter your email address">
                                    </div>
                                    <div class="text-sm text-gray-500 font-semibold">
                                    <i class="fa-regular fa-message absolute mt-11 ml-3 text-blue-500 "></i>  <label for="phone">We may text you</label>
                                        <input type="tel" name="phone" id="" required class="mt-2  rounded-md bg-gray-100 pl-8 border-gray-200 placeholder:text-sm" placeholder="Phone number">
                                    </div>
                                </div>

                            </div>
                            <div class="job-detail bg-white rounded-xl space-y-4 p-10">
                                <h1 class="font-bold text-lg">Job Detail</h1>
                                
                                    <div class="text-sm text-gray-500 font-semibold">
                                <label for="industry">Pick your industry</label>
                                <select name="industry" id="" required class="w-full mt-2  rounded-md bg-gray-100 border-gray-200">
                                    <option value="" selected>Choose an industry</option>
                                    <?php
                                    $industry_query ="SELECT * FROM job_category WHERE status= 'true'";
                                    $industry_result = mysqli_query($conn,$industry_query);
                                    if (mysqli_num_rows($industry_result)>0) {
                                        # code...
                                        while ($row1 = mysqli_fetch_assoc($industry_result)) {

                                    ?>
                                    <option value="<?php echo $row1['id']; ?>"><?php echo $row1['category']; ?></option>
                                    <?php
                                        }
                                    }
                                    else {
                                        ?>
                                        <h1>industry not found</h1>
                                        <?php
                                    }
                                        ?>
                                </select>
                                </div>
                                <h1 class="font-bold text-lg">When do you want to see the results</h1>
                                <div class="text-sm text-gray-500 font-semibold">
                                <label for="finalDate">Select a specific date</label>
                                <input type="date" name="finalDate" id="" required class="mt-2 w-full rounded-md bg-white border-gray-200 placeholder:text-sm" placeholder="Job Title">
                                </div>
                                <div class="text-sm text-gray-500 font-semibold">
                                <label for="description">Describe the job</label>
                                <textarea name="description" id="" cols="30" required rows="5" class="mt-2 w-full rounded-md bg-gray-100 border-gray-200 placeholder:text-sm" placeholder="Describe about the job"></textarea>
                                </div>
                                <h1 class="font-bold text-lg">What are the job requirements</h1>
                                <div class="text-sm text-gray-500 font-semibold">
                                <label for="skill">Skills</label>
                                <input type="text" name="skill" id="" required class="mt-2 w-full rounded-md bg-white border-gray-200 placeholder:text-sm" placeholder="Skills required">
                                </div>
                                <div class="flex space-x-3">
                                    <div class="text-sm text-gray-500 font-semibold">
                                    <label for="availability">Availability</label>
                                    <input type="text" name="availability" id="" class="mt-2 w-full rounded-md bg-gray-100 border-gray-200 placeholder:text-sm" placeholder="Job Availability">
                                    </div>
                                    <div class="text-sm text-gray-500 font-semibold">
                                    <label for="experience">Experience level (optional)</label>
                                    <input type="text" name="experience" id="" class="mt-2 w-full rounded-md bg-gray-100 border-gray-200 placeholder:text-sm" placeholder="Experience required">
                                    </div>
                                </div>
                                <div class="text-sm text-gray-500 font-semibold">
                                <i class="fa-light fa-language absolute mt-11 ml-3 text-blue-500"></i><label for="language">Language (optional)</label>
                                <input type="text" name="language" id="" class="mt-2 w-full rounded-md bg-white pl-8 border-gray-200 placeholder:text-sm" placeholder="Language required">
                                </div>
                                <h1 class="font-bold text-lg">What does the job pay?</h1>
                                <div class="flex space-x-3">
                                <div class="text-sm text-gray-500 font-semibold">
                                <label for="type">Job type</label>
                                <select name="type" id="" required class="w-full mt-2  rounded-md bg-gray-100 text-sm border-gray-200">
                                <option value="" class="text-xs">Choose a job type</option>
                                <?php
                                    $type_query ="SELECT * FROM job_type WHERE status= 'true'";
                                    $type_result = mysqli_query($conn,$type_query);
                                    if (mysqli_num_rows($type_result)>0) {
                                        # code...
                                        while ($row1 = mysqli_fetch_assoc($type_result)) {

                                    ?>
                                    
                                    <option value="<?php echo $row1['id']; ?>"><?php echo $row1['type']; ?></option>
                                    <?php 
                                        }
                                    }
                                    else {
                                        ?>
                                        <h1>Job type not found</h1>
                                        <?php
                                    }
                                    ?>
                                </select>
                                </div>
                                <div class="text-sm text-gray-500 font-semibold">
                                <i class="fa-solid fa-circle-dollar absolute mt-11 ml-3 text-blue-500"></i><label for="rate">Pay rate (optional)</label>
                                <input type="number" name="rate" id="" class="mt-2 w-full rounded-md bg-gray-100 border-gray-200 placeholder:text-sm" placeholder="Salary">
                                </div>
                                </div>

                                <button name="submit" type="submit" class="bg-blue-600 w-1/4 p-3 rounded-lg text-white font-semibold right-3">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include '../inc/footer.php'
?>