
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
  <div class="bg-gray-100 w-3/4 flex-auto pr-8 md:mt-16">


  <div class=" flex flex-row flex-wrap">
    <!-- start sidebar -->
  
   <section class="content w-full ">
      <div class="container-fluid md:w-5/6 mx-auto ">
        <!-- Small boxes (Stat box) -->
        <a href="uploadfile.php" class="relative left-8 top-14"> <button class="btn  btn-primary p-2">Add</button></a> 

          <!-- left column -->
          <div class="col-md-12">
          <div class="card rounded-xl">
              <div class="card-header bg-gray-800 rounded-t-xl">
                <h3 class="card-title text-center font-semibold text-lg text-white">Manage Site Config</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body overflow-x-auto relative">
                <table id="example1" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr >
                 
                    <th scope="col" class="py-3 px-6">S.N.</th>
                    <th scope="col" class="py-3 px-6">Name</th>
                    <th scope="col" class="py-3 px-6">Site Key</th>
                    <th scope="col" class="py-3 px-6">Site Value</th>
        
                    <th scope="col" class="py-3 px-6">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                                $query = "SELECT * FROM siteconfig WHERE user_id = '$id' ORDER BY created_at DESC";
                                $result = mysqli_query($conn, $query);
                                $sn = 0;
                                while ($data = mysqli_fetch_array($result)) {
                                    $sn += 1; //$sn = $sn+1
                                ?>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-2 px-4"><?php echo $sn; ?></td>
                    <td class="py-2 px-4"><?php echo $data['name']; ?></td>
                    <td class="py-2 px-4"><?php  echo $data['site_key']; ?></td>
                    <td class="py-2 px-4"> <p class="truncate w-36"><?php echo $data['site_value'];?></p></td>

                    <td class="py-2 px-4 ">
                      <div class="flex justify-between space-x-2">
                        <a name="" id="" class="w-1 btn btn-danger" href="../process/deletefile.php?id=<?php echo $data['id']; ?>" role="button"><i class="fa-solid fa-trash-can -ml-2"></i></a>
                        <a name="" id="" class="w-1 btn btn-primary" href="../process/editsiteconfig.php?id=<?php echo $data['id']; ?>" role="button" target="_blank"><i class="fa-solid fa-pen -ml-2"></i></a></td>

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
