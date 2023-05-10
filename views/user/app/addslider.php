<?php
include '../../connection/config.php';
require('../inc/header.php');
require('../inc/navbar.php');
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
                $btn_txt= $_POST['btn_txt'];
                $btn_link = $_POST['btn_link'];
                $img = $_POST['img'];

                if($name!="" && $h1!="" && $p!="" && $btn_txt !=""  && $btn_link!="" && $img !="")
                {
                    $query ="INSERT INTO sliders (name,h1,p,btn_txt,btn_link,img) VALUES('$name','$h1','$p','$btn_txt','$btn_link','$img')";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                      ?>
                      <meta http-equiv="refresh" content="0; URL=manageslider.php?msg=csuccess" />
                        <?php
                        echo "Slider is added successfully.";
                    }
                    else 
                    {
                        echo "Slider couldn't added successfully.";
                    }
                }


              }
            ?>
            <div class="card card-primary w-11/12 mx-auto my-6 relative">
              <div class="card-header">
                <h3 class="card-title text-3xl">Add Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body" >
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" > Slider Name:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="name" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Slider Header:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="h1" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Slider Text:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="p" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Slider Button Text:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="btn_txt" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Slider Button link:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="btn_link" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >Slider Image Link</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="img" placeholder="">
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