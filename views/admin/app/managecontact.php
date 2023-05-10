
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

        <a href="addcompany.php" class="relative left-8 top-14"> <button class="btn  btn-primary p-2">Add</button></a> 

          <!-- left column -->
          <div class="col-md-12">
          <div class="card rounded-xl">
              <div class="card-header bg-gray-800 rounded-t-xl">
                <h3 class="card-title text-center font-semibold text-lg text-white">Manage Company</h3>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body overflow-x-auto relative">
                <table id="example1" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr >
                 
                    <th scope="col" class="py-3 px-6">S.N.</th>
                    <th scope="col" class="py-3 px-6">Name</th>
                    <th scope="col" class="py-3 px-6">Email</th>
                    <th scope="col" class="py-3 px-6">Phone</th>
                    <th scope="col" class="py-3 px-6">Message</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                                $query = "SELECT * FROM contact ORDER BY created_at DESC";
                                $result = mysqli_query($conn, $query);
                                $sn = 0;
                                while ($data = mysqli_fetch_array($result)) {
                                    $sn += 1; //$sn = $sn+1
                                ?>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-2 px-4"><?php echo $sn; ?></td>
                    <td class="py-2 px-4"><?php echo $data['name']; ?></td>
                    <td class="py-2 px-4"><?php echo $data['email'];?></p></td>
                    <td class="py-2 px-4"><?php  echo $data['phone']; ?></td>
                    <td class="py-2 px-4"><?php  echo $data['message']; ?></td>
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
