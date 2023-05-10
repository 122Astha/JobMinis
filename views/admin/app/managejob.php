<?php
@session_start();
require('../../connection/config.php');
require('../inc/header.php');
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
  <div class="bg-gray-100 w-3/4 flex-auto pr-8 md:mt-16">


    <div class=" flex flex-row flex-wrap">
      <!-- start sidebar -->

      <section class="content w-full ">
        <div class="container-fluid md:w-5/6 mx-auto ">
          <!-- Small boxes (Stat box) -->

          <!-- left column -->
          <div class="col-md-12">
            <div class="card rounded-xl">
              <div class="card-header bg-gray-800 rounded-t-xl">
                <h3 class="card-title text-center font-semibold text-lg text-white">Manage Job</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body overflow-x-auto relative">
                <table id="example1" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>

                      <th scope="col" class="py-3 px-6">S.N.</th>
                      <th scope="col" class="py-3 px-6">Title</th>
                      <th scope="col" class="py-3 px-6">Contact Person</th>
                      <th scope="col" class="py-3 px-6">Email</th>
                      <th scope="col" class="py-3 px-6">Phone</th>
                      <th scope="col" class="py-3 px-6">Date</th>
                      <th scope="col" class="py-3 px-6">Description</th>
                      <th scope="col" class="py-3 px-6">Skill</th>
                      <th scope="col" class="py-3 px-6">Experience</th>
                      <th scope="col" class="py-3 px-6">Availability</th>
                      <th scope="col" class="py-3 px-6">Language</th>
                      <th scope="col" class="py-3 px-6">Salary</th>
                      <th scope="col" class="py-3 px-6">Job Type</th>
                      <th scope="col" class="py-3 px-6">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM job_details ORDER BY created_at DESC";
                    $result = mysqli_query($conn, $query);
                    $sn = 0;
                    while ($data = mysqli_fetch_array($result)) {
                      $sn += 1; //$sn = $sn+1
                    ?>
                      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" id="<?php echo $data['id'] ;?>">
                        <td class="py-2 px-4"><?php echo $sn; ?></td>
                        <td class="py-2 px-4"><?php echo $data['title']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['contact_person']; ?></p>
                        </td>
                        <td class="py-2 px-4"><?php echo $data['email']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['phone']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['date']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['description']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['skill']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['experience']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['availability']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['language']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['salary']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['job_type_id']; ?></td>
                        <td class="py-2 px-4 ">
                        <select name="status" id="status" class=" w-20 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                          <?php
                          if ($status== "true") {
                            # code...
                          ?>
                            <option value="<?php echo $status; ?>" selected>Active</option>
                            <option value="false">Inactive</option>

                          <?php
                          } else {
                          ?>
                            <option value="<?php echo $status; ?>" selected>Inactive</option>
                            <option value="true">Active</option>


                          <?php
                          }
                          ?>
                          </td>
                          <td class="py-2">
                          <div class="flex justify-between space-x-2">
                            <a name="" id="" class="w-1 btn btn-danger btn-sm remove"  role="button"><i class="fa-solid fa-trash-can -ml-2"></i></a>
                            <a name="" id="" class="w-1 btn btn-primary" href="../process/editjob.php?id=<?php echo $data['id']; ?>" role="button" target="_blank"><i class="fa-solid fa-pen -ml-2"></i></a>
                        </td>

              </div>
              </td>
              </tr>
            <?php
                    }
            ?>
            </tfoot>
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

<!-- end content -->

</div>
<!-- end wrapper -->

