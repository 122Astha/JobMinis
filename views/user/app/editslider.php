<?php
include '../../connection/config.php';
require('../inc/header.php');
require('../inc/navbar.php');
?>
<?php 
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $show_query = "SELECT * FROM sliders WHERE id=$id"; 
  $show_result = mysqli_query($conn,$show_query);
  $row = $show_result->fetch_assoc();
  $name = $row['name'];
  $h1 = $row['h1'];
  $p=$row['p'];
  $btn_txt=$row['btn_txt'];
  $btn_link=$row['btn_link'];
  $img=$row['img'];

}
?>



<!-- strat wrapper -->
<div class="h-screen flex flex-row">
    <!-- start sidebar -->
    
     <section class="content w-4/6 mt-28 ml-96 h-full" >
          <!-- left column -->
          <div class="">
            <!-- general form elements -->
            
            <?php
              if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $h1 = $_POST['h1'];
                $p= $_POST['p'];
                $btn_txt = $_POST['btn_txt'];
                $btn_link = $_POST['btn_link'];
                $img= $_POST['img'];

                if($name!="" && $h1!="" && $p!="" && $btn_txt !="" && $btn_link!="" && $img !="")
                {
                    $query ="UPDATE sliders SET name='$name', h1='$h1', p='$p', btn_txt='$btn_txt', btn_link='$btn_link', img='$img' WHERE id=$id";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                        echo "Slider is updated successfully.";
                        ?>
                        <meta http-equiv="refresh" content="0; URL=manageslider.php?msg=csuccess" />
                          <?php
                        
                    }
                    else 
                    {
                        echo "Slider couldn't updated successfully.";
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
                    <label for="exampleInputEmail1" > Slider Name:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full" id="exampleInputEmail1" value="<?php echo $name; ?>" name="name" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Slider Header:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full" id="exampleInputEmail1" value="<?php echo $h1; ?>" name="h1" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Slider Text:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full" id="exampleInputEmail1" value="<?php echo $p; ?>" name="p" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Slider Button Text:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full" id="exampleInputEmail1" value="<?php echo $btn_txt; ?>" name="btn_txt" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Slider Button link:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full" id="exampleInputEmail1" value="<?php echo $btn_link; ?>" name="btn_link" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Slider Image Link</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full" id="exampleInputEmail1" value="<?php echo $img; ?>" name="img" placeholder="">
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