<?php
include '../../connection/config.php';
require('../inc/header.php');
?>


<!-- strat wrapper -->
<div class="h-screen flex flex-row">
    <!-- start sidebar -->
  
     <section class="content w-4/6 mt-28 ml-96  h-full" >
          <!-- left column -->
          <div class="">
            <!-- general form elements -->
            
            <?php
        if (isset($_POST['submit'])) {
            $filename = $_POST['filename'];

            $dataFile = $_FILES['dataFile']['name'];
            //$dataFile consit info like hello.jpg
            $filesize = $_FILES['dataFile']['size'];
            $explode_values = explode('.', $dataFile);
            //$explode_values become array having data in the form $explode_values = ['hello','jpg']
            $name = $explode_values[0];
            $fname = str_replace(' ', '', $name);
            $finalname = strtolower($fname . time());
            $ext = $explode_values[1];
            $finalfile = $finalname . '.' . $ext;

            if ($filename != "") {
                if ($filesize < 2000000) {
                    if ($ext == 'jpg' || $ext == 'png' || $ext == 'pdf' || $ext == 'jpeg') {
                        if (move_uploaded_file($_FILES['dataFile']['tmp_name'], "../uploads/" . $finalfile)) {
                            $query = "INSERT INTO files (name,filelink,ext) VALUES('$filename','$finalfile','$ext')";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
        ?>
                                <meta http-equiv="refresh" content="0; URL=managefile.php?msg=csuccess" />
        <?php
                                echo "File is uploaded successfully.";
                            } else {
                                echo "File couldn't uploaded successfully.";
                            }
                        }
                    } else {
                        echo "File Extension doesn't match. We only accept jpg, png, pdf.";
                    }
                } else {
                    echo "File size exceeded.";
                }
            } else {
                echo "File name is necessary.";
            }
        }
        ?>
            <div class="card card-primary w-11/12 mx-auto my-6 relative">
              <div class="card-header">
                <h3 class="card-title text-3xl">Add Upload</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body" >
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" > File Name:</label>
                    <input type="text" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="filename" placeholder="">
                  </div>
                  <div class="form-group mt-5">
                    <label for="exampleInputEmail1" >File</label>
                    <input type="file" class="form-control border-solid border-2 rounded-md  w-full p-2" id="exampleInputEmail1" name="dataFile" placeholder="">
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











