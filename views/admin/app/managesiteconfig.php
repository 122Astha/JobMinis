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
          <a href="addsiteconfig.php" class="relative left-8 top-14"> <button class="btn  btn-primary p-2">Add</button></a>
          <!-- left column -->
          <div class="col-md-12">
            <div class="card rounded-xl">
              <div class="card-header bg-gray-800 rounded-t-xl">
                <h3 class="card-title text-center font-semibold text-lg text-white">Manage Siteconfig</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body overflow-x-auto relative">
                <table id="example1" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>

                      <th scope="col" class="py-3 px-6">S.N.</th>
                      <th scope="col" class="py-3 px-6">Name</th>
                      <th scope="col" class="py-3 px-6">Site Key</th>
                      <th scope="col" class="py-3 px-6">Site Value</th>
                      <th scope="col" class="py-3 px-6">Status</th>
                      <th scope="col" class="py-3 px-6">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM siteconfig ORDER BY created_at DESC";
                    $result = mysqli_query($conn, $query);
                    $sn = 0;
                    while ($data = mysqli_fetch_array($result)) {
                      $sn += 1; //$sn = $sn+1
                    ?>
                      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" id="<?php echo $data['id'] ?>">
                        <td class="py-2 px-4"><?php echo $sn; ?></td>
                        <td class="py-2 px-4"><?php echo $data['name']; ?></td>
                        <td class="py-2 px-4"><?php echo $data['site_key']; ?></p>
                        </td>
                        <td class="py-2 px-4 w-48">
                          <h1 class="truncate w-48"><?php echo $data['site_value']; ?></h1>
                        </td>

                        <td class="py-2 px-4"><?php echo $data['status']; ?></td>

                        <td class="py-2 px-4 ">
                          <div class="flex justify-between space-x-2">
                            <a name="" id="" class="w-1 btn btn-danger btn-sm remove" role="button"><i class="fa-solid fa-trash-can -ml-2"></i></a>
                            <a name="" id="" class="w-1 btn btn-primary" href="../process/editsiteconfig.php?id=<?php echo $data['id']; ?>" role="button" target="_blank"><i class="fa-solid fa-pen -ml-2"></i></a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  $(".remove").click(function() {
    var id = $(this).parents("tr").attr("id");


    if (confirm('Are you sure to remove this record ?')) {
      $.ajax({
        url: '../process/deletesiteconfig.php',
        type: 'GET',
        data: {
          id: id
        },
        error: function() {
          alert('Something is wrong');
        },
        success: function(data) {
          $("#" + id).remove();
          alert("Record removed successfully");
        }
      });
    }
  });
</script>