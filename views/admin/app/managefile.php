
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
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <a href="uploadfile.php" class="absolute right-16 mx-auto top-20"> <button class="btn btn-primary p-2">Add</button></a> 

          <!-- left column -->
          <div class="col-md-12">
          <div class="card rounded-xl">
              <div class="card-header bg-gray-800 rounded-t-xl">
                <h3 class="card-title text-white">Manage Files</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body overflow-x-auto relative">
                <table id="example1" width="100%" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr >
                 
                    <th scope="col" class="py-3 px-6">S.N.</th>
                    <th scope="col" class="py-3 px-6">File Name</th>
                    <th scope="col" class="py-3 px-6">File Link</th>
                    <th scope="col" class="py-3 px-6">Type</th>
                    <th scope="col" class="py-3 px-6">Images</th>
        
                    <th scope="col" class="py-3 px-6">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $query = "SELECT * FROM files WHERE user_id = '$id'  ORDER BY created_at DESC";
                  $result = mysqli_query($conn,$query);
                  $sn = 0;
                  while($data=mysqli_fetch_array($result))
                  {
                    $sn+=1; //$sn = $sn+1
                    ?>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-2 px-4"><?php echo $sn; ?></td>
                    <td class="py-2 px-4"><?php echo $data['name']; ?></td>
                    <td class="py-2 px-4"><?php echo $data['filelink']; ?></td>
                    <td class="py-2 px-4"><?php echo $data['type']; ?></td>
                    <td class="py-2 px-4"> <img src="../../user/uploads/<?php echo $data['filelink'];?>" alt="" class="w-10 h-10"></td>

                    <td class="py-2">
                      <div class="flex justify-between space-x-2">
                        <a name="" id="" class="w-1 btn btn-danger" href="../process/deletefile.php?id=<?php echo $data['id']; ?>" role="button"><i class="fa-solid fa-trash-can -ml-2"></i></a>
                        <a name="" id="" class="w-1 btn btn-primary" href="../process/editfile.php?id=<?php echo $data['id']; ?>" role="button" target="_blank"><i class="fa-solid fa-pen -ml-2"></i></a>
                        <a name="" id="" class="w-1 btn bg-yellow-200 hover:bg-yellow-300" href="../../user/uploads/<?php echo $data['filelink']; ?>" role="button" target="_blank"><i class="fa-solid fa-eye -ml-2 text-yellow-500"></i></a></td>

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
