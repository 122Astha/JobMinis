<?php
require('../../connection/config.php');
require('../inc/header.php');
require('../../connection/config.php');

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
  <div class="bg-gray-100 w-3/4 flex-auto pr-8 md:mt-16">


    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


      <!-- card -->
      <div class="report-card">
        <div class="card">
          <div class="card-body flex flex-col">

            <!-- top -->
            <div class="flex flex-row justify-between items-center">
              <div class="h6 text-indigo-700 fad fa-shopping-cart"></div>
              <span class="rounded-full text-white badge bg-teal-400 text-xs">
              <?php
                $query = "SELECT id FROM job_details";
                $result = mysqli_query($conn, $query);
                $row = mysqli_num_rows($result);
                ?>
                <?php echo $row ; ?>
                
                <i class="fal fa-chevron-up ml-1"></i>
              </span>
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
              <h1 class="h5 num-4"></h1>
              <p>Total Jobs</p>
            </div>
            <!-- end bottom -->

          </div>
        </div>
        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->


      <!-- card -->
      <div class="report-card">
        <div class="card">
          <div class="card-body flex flex-col">

            <!-- top -->
            <div class="flex flex-row justify-between items-center">
              <div class="h6 text-red-700 fad fa-store"></div>
              <span class="rounded-full text-white badge bg-red-400 text-xs">
              <?php
                $query1 = "SELECT id FROM user_details ";
                $result1 = mysqli_query($conn, $query1);
                $row1 = mysqli_num_rows($result1);
                ?>
                <?php echo $row1 ; ?>
                <i class="fal fa-chevron-down ml-1"></i>
              </span>
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
              <h1 class="h5 num-4"></h1>
              <p>Total Company</p>
            </div>
            <!-- end bottom -->

          </div>
        </div>
        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->


      <!-- card -->
      <div class="report-card">
        <div class="card">
          <div class="card-body flex flex-col">

            <!-- top -->
            <div class="flex flex-row justify-between items-center">
              <div class="h6 text-yellow-600 fad fa-sitemap"></div>
              <span class="rounded-full text-white badge bg-teal-400 text-xs">
              <?php
                $query2 = "SELECT id FROM contact ";
                $result2 = mysqli_query($conn, $query2);
                $row2 = mysqli_num_rows($result2);
                ?>
                <?php echo $row2 ; ?>
                <i class="fal fa-chevron-up ml-1"></i>
              </span>
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
              <h1 class="h5 num-4"></h1>
              <p>Total Contacts</p>
            </div>
            <!-- end bottom -->

          </div>
        </div>
        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->


      <!-- card -->
      <div class="report-card">
        <div class="card">
          <div class="card-body flex flex-col">

            <!-- top -->
            <div class="flex flex-row justify-between items-center">
              <div class="h6 text-green-700 fad fa-users"></div>
              <span class="rounded-full text-white badge bg-teal-400 text-xs">
              <?php
                $query3 = "SELECT id FROM profile WHERE email_verified='true'";
                $result3 = mysqli_query($conn, $query3);
                $row3 = mysqli_num_rows($result3);
                ?>
                <?php echo $row3 ; ?>
                <i class="fal fa-chevron-up ml-1"></i>
              </span>
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
              <h1 class="h5 num-4"></h1>
              <p>Total Users</p>
            </div>
            <!-- end bottom -->

          </div>
        </div>
        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
      </div>
      <!-- end card -->


    </div>
    <!-- End General Report -->

    <!-- strat Analytics -->
    <div class="mt-6  gap-6 xl:grid-cols-1">

      <!-- update section -->
      <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
        <div class="card-body flex flex-row">

          <!-- image -->
          <div class="img-wrapper w-40 h-40 flex justify-center items-center">
            <img src="../../../assets/img/happy.svg" alt="img title">
          </div>
          <!-- end image -->

          <!-- info -->
          <div class="py-2 ml-10">
          <?php
                $query = "SELECT first_name FROM profile WHERE user_id='$id'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
            <h1 class="h6">Good Job, <?php echo $row['first_name']; ?>!</h1>

            <ul class="mt-4">
              <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Control User</li>
              <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Update your information</li>
            </ul>
          </div>
          <!-- end info -->

        </div>
      </div>
      <!-- end update section -->

 


    </div>
    <!-- end Analytics -->








  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->
