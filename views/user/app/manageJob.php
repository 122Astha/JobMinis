<?php
include '../inc/header.php';
require('../inc/navbar.php');
require('../../connection/config.php');
@session_start();
$id = $_SESSION['userId'];
?>

<main>
    <!-- strat wrapper -->
    <div class="h-full flex flex-row flex-wrap bg-white">
        <!-- start sidebar -->

        <!-- end sidbar -->
        <div class="post-wrapper w-full mt-28 h-full bg-gray-100">
        <div class="bg-gray-100 w-5/6 mx-auto flex-auto pr-8 my-14">


<div class=" flex flex-row flex-wrap">
  <!-- start sidebar -->

 <section class="content w-full ">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <a href="../app/newJob.php" class="absolute right-96 mt-4"> <button class="btn btn-primary p-2">Post New Job</button></a> 
<input type="text" name="search" id="search" class="absolute right-36 w-1/6 mt-4 rounded-lg" placeholder="Search Job title ..">
        <!-- left column -->
        <div class="col-md-12">
        <div class="card rounded-xl">
            <div class="card-header bg-gray-800 rounded-t-xl">
              <h3 class="card-title text-white">Manage Job Post</h3>
             
            </div>
            <!-- /.card-header -->
            <div class="card-body overflow-x-auto relative">
              <table id="example1" width="100%" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr >
               
                  <th scope="col" class="py-3 px-6">S.N.</th>
                  <th scope="col" class="py-3 px-6">Job Title</th>
                  <th scope="col" class="py-3 px-6">Job industry</th>
                  <th scope="col" class="py-3 px-6">Email</th>
                  <th scope="col" class="py-3 px-6">Phone</th>
                  <th scope="col" class="py-3 px-6">Action</th>
                  <th scope="col" class="py-3 px-6">Description</th>
                  <th scope="col" class="py-3 px-6">Skills</th>
                  <th scope="col" class="py-3 px-6">Experience</th>
                  <th scope="col" class="py-3 px-6">Job Type</th>
                  <th scope="col" class="py-3 px-6">Pay rate</th>
                  <th scope="col" class="py-3 px-6">Available</th>
                 
                </tr>
                </thead>
                <tbody id="jobList">
                <?php
                              $query = "SELECT * FROM job_details  WHERE user_id ='$id' AND status='true' ";
                              $result = mysqli_query($conn, $query);
                              $count = mysqli_num_rows($result);
                            
                              $sn = 0;
                              while ($data = mysqli_fetch_array($result)) {
                                  $sn += 1; //$sn = $sn+1
                                 
                              ?>
                <tr class="bg-white border-b text-sm dark:bg-gray-800 dark:border-gray-700">
                  <td class="py-2 px-4"><?php echo $sn; ?></td>
                  <td class="py-2 px-4 tex-xs"><?php echo $data['title']; ?></td>
                  <td class="py-2 px-4"><?php  echo $data['job_category_id']; ?></td>
                  <td class="py-2 px-4"><?php  echo $data['email']; ?></td>
                  <td class="py-2 px-4 text-xs"><?php  echo $data['phone']; ?></td>
                  <td class="py-2 px-4 ">
                    <div class="flex justify-between space-x-2">
                      <a name="" id="" class="w-2 btn btn-danger" href="../process/deletefile.php?id=<?php echo $data['id']; ?>" role="button"><i class="fa-solid fa-trash-can -ml-2"></i></a>
                      <a name="" id="" class="w-2 btn btn-primary" href="editsiteconfig.php?id=<?php echo $data['id']; ?>" role="button" target="_blank"><i class="fa-solid fa-pen -ml-2"></i></a></td>

                    </div>
                 </td>
                  <td class="py-2 px-4"> <p class="truncate w-36"><?php echo $data['description'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate w-36"><?php echo $data['skill'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate w-36"><?php echo $data['experience'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate "><?php echo $data['job_type_id'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate "><?php echo $data['salary'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate "><?php echo $data['availability'];?></p></td>
                </tr>
                  <?php
                }
                ?>
                <?php
                if($count==0){
                                ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td colspan="12" class="text-center p-5 text-md font-semibold">No Record Found</td>
                                </tr>
                                    <?php
                               
                              }
                              ?>
                </tbody>
              </table>
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
        </div>
    </div>
</main>
<script type="text/javascript" src="../../../dist/js/jQuery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
     
        $("#search").keyup(function(){
            var title = $(this).val();
             if (title != "") {
                $.ajax({
                    url: "../process/job.php",
                    method: "POST",
                    data:{
				        type: 1,
                name: title,
			},
            success: function(data){
              
                $("#jobList").html(data);

            }
                });
             }
             else{
                $.ajax({
                    url: "../process/job.php",
                    method: "POST",
                    data:{
				       type: 2,
			},
            success: function(data){
              
                $("#jobList").html(data);

            }
                });

             }
             
        })

    });

</script>
<?php
include '../inc/footer.php'
?>