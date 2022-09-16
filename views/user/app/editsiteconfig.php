<?php
include '../../connection/config.php';
require('../inc/header.php');
require('../inc/navbar.php');
?>
<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $show_query = "SELECT * FROM siteconfig WHERE id=$id"; 
    $show_result = mysqli_query($conn,$show_query);
    $row = $show_result->fetch_assoc();
    $name = $row['name'];
    $site_key = $row['site_key'];
    $site_value=$row['site_value'];
  
 
}
?>


<!-- strat wrapper -->
<div class="h-screen flex flex-row">
    <!-- start sidebar -->
   
     <section class="content w-full h-full" >
          <!-- left column -->
          <div class="">
            <!-- general form elements -->
            
            <?php
              if(isset($_POST['submit']))
            {
                $name = $_POST['name'];
                $site_key = $_POST['site_key'];
                $site_value= $_POST['site_value'];

                if($name!="" && $site_key!="" && $site_value!=""  )
                {
                    $query ="UPDATE siteconfig SET name='$name', site_key='$site_key', site_value='$site_value' WHERE id=$id";
                    echo $query;
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                        ?>
                          <meta http-equiv="refresh" content="0; URL=managesiteconfig.php?msg=csuccess" />
                            <?php
                        echo "SiteConfig Us is updated successfully.";
                      
                    }
                    else 
                    {
                        echo "SiteConfig Us couldn't updated successfully.";
                    }
                }
            }

           
            ?>
            <div class="card card-primary w-11/12 mx-auto my-6 relative">
              <div class="card-header">
                <h3 class="card-title text-3xl">Add Why Choose Us</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body" >
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" class="text-xl"> Name:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full" value="<?php echo $name; ?>" id="exampleInputEmail1" name="name" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" class="text-xl">Site_key:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full" value="<?php echo $site_key; ?>" id="exampleInputEmail1" name="site_key" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" class="text-xl">Site_value:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full" value="<?php echo $site_value; ?>" id="exampleInputEmail1" name="site_value" placeholder=""></input>
                  </div>
                
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
</div>
<!-- end wrapper -->

<?php
require('../inc/footer.php');
?>