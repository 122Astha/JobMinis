<?php
include '../../connection/config.php';
require('../inc/header.php');
require('../inc/navbar.php');
?>


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    <!-- start sidebar -->
   
    <section class="content w-4/6 mt-28 ml-96 h-full">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <a href="addslider.php"> <button class="btn btn-primary p-2" style="margin-left:1110px;">Add</button></a>
           
                <!-- left column -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Manage Slider</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" width="100%" class="table table-bordered table-striped">
                        <thead>
                  <tr>
                    <th>S.N.</th>
                    <th>Slider Name</th>
                    <th>Slider Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $query = "SELECT * FROM sliders ORDER BY created_at DESC";
                  $result = mysqli_query($conn,$query);
                  $sn = 0;
                  while($data=mysqli_fetch_array($result))
                  {
                    $sn+=1; //$sn = $sn+1
                    ?>
                  <tr >
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td> <img src="../uploads/<?php echo $data['img'];?>" alt="" height="80px;" width="80px;"></td>
                    <td>
                        <a name="" id="" class="btn btn-primary w-5/6 btn-sm" href="editslider.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>
                        <a name="" id="" class="btn btn-danger w-5/6 btn-xl" href="../process/deleteslider.php?id=<?php echo $data['id']; ?>" role="button">Delete</a>
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
            <!--/.col (left) -->
</div><!-- /.container-fluid -->
</section>
</div>
<!-- end wrapper -->

<?php
require('../inc/footer.php');
?>