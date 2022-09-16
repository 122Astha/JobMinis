<!-- Add new job -->

<?php
require('../../connection/config.php');
@session_start();
$userId = $_SESSION['userId'];
if(isset($_POST['submit'])) {
    
    $title = $_POST['title'];
    $contactPerson = $_POST['contactPerson'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $industry = $_POST['industry'];
    $finalDate = $_POST['finalDate'];
    $description = $_POST['description'];
    $skill = $_POST['skill'];
    $availability = $_POST['availability'];
    $experience = $_POST['experience'];
    $language = $_POST['language'];
    $type = $_POST['type'];
    $rate = $_POST['rate'];
    $isActive ="true";
    $status ="true";
    if ($title=='' || $contactPerson =='' || $email =='' || $phone =='' || $industry =='' || $finalDate =='' || $description =='' || $skill =='' ||$type =='') {
        # code...
        echo header("Location: ../app/newJob.php?msg=error");
    }
    else {
        # code...
        $query ="INSERT INTO `job_details` (user_id,title,job_category_id, contact_person, email, phone,date, description,skill, experience, availability, language, salary, job_type_id, is_active, status) VALUES('$userId', '$title', '$industry', '$contactPerson', '$email', '$phone', '$finalDate', '$description', '$skill', '$experience', '$availability', '$language', '$rate', '$type','$isActive','$status' )";
        $jobResult = mysqli_query($conn,$query);
        
        if ($jobResult) {
            echo header("Location:../app/newJob.php?msg=success");
        }
        else {
            echo header("Location:../app/newJob.php?msg=sqlErr");
        }
    }
}

if ($_POST['type'] == 1) {
    # code...
    $name = $_POST['name'];
    $query = "SELECT * FROM job_details  WHERE user_id ='$userId' AND status='true' AND title LIKE '{$name}%' ";
        $search_result = mysqli_query($conn, $query);
    if (mysqli_num_rows($search_result)>0) {
        # code...
        $sn = 0;
        while ($row1 = mysqli_fetch_assoc($search_result)) {
            $sn += 1;
        ?>
      
 <tr class="bg-white border-b text-sm dark:bg-gray-800 dark:border-gray-700">
                  <td class="py-2 px-4"><?php echo $sn; ?></td>
                  <td class="py-2 px-4 tex-xs"><?php echo $row1['title']; ?></td>
                  <td class="py-2 px-4"><?php  echo $row1['job_category_id']; ?></td>
                  <td class="py-2 px-4"><?php  echo $row1['email']; ?></td>
                  <td class="py-2 px-4 text-xs"><?php  echo $row1['phone']; ?></td>
                  <td class="py-2 px-4 ">
                    <div class="flex justify-between space-x-2">
                      <a name="" id="" class="w-2 btn btn-danger" href="../process/deletefile.php?id=<?php echo $row1['id']; ?>" role="button"><i class="fa-solid fa-trash-can -ml-2"></i></a>
                      <a name="" id="" class="w-2 btn btn-primary" href="editsiteconfig.php?id=<?php echo $row1['id']; ?>" role="button" target="_blank"><i class="fa-solid fa-pen -ml-2"></i></a></td>

                    </div>
                 </td>
                  <td class="py-2 px-4"> <p class="truncate w-36"><?php echo $row1['description'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate w-36"><?php echo $row1['skill'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate w-36"><?php echo $row1['experience'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate "><?php echo $row1['job_type_id'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate "><?php echo $row1['salary'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate "><?php echo $row1['availability'];?></p></td>
                </tr>
        <?php
        };
    }
    else {
        ?>
         <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td colspan="12" class=" p-5 text-md font-semibold">No Record Found</td>
                                </tr>
        <?php
    }
}
if ($_POST['type'] == 2) {
    # code...

    $query_search = "SELECT * FROM job_details  WHERE user_id ='$userId' AND status='true'";
    $search_result = mysqli_query($conn, $query_search);
    if (mysqli_num_rows($search_result)>0) {
        # code...
        $sn = 0;
        while ($row1 = mysqli_fetch_assoc($search_result)) {
        $sn += 1;
        ?>
        
          <tr class="bg-white border-b text-sm dark:bg-gray-800 dark:border-gray-700">
                  <td class="py-2 px-4"><?php echo $sn; ?></td>
                  <td class="py-2 px-4 tex-xs"><?php echo $row1['title']; ?></td>
                  <td class="py-2 px-4"><?php  echo $row1['job_category_id']; ?></td>
                  <td class="py-2 px-4"><?php  echo $row1['email']; ?></td>
                  <td class="py-2 px-4 text-xs"><?php  echo $row1['phone']; ?></td>
                  <td class="py-2 px-4 ">
                    <div class="flex justify-between space-x-2">
                      <a name="" id="" class="w-2 btn btn-danger" href="../process/deletefile.php?id=<?php echo $row1['id']; ?>" role="button"><i class="fa-solid fa-trash-can -ml-2"></i></a>
                      <a name="" id="" class="w-2 btn btn-primary" href="editsiteconfig.php?id=<?php echo $row1['id']; ?>" role="button" target="_blank"><i class="fa-solid fa-pen -ml-2"></i></a></td>

                    </div>
                 </td>
                  <td class="py-2 px-4"> <p class="truncate w-36"><?php echo $row1['description'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate w-36"><?php echo $row1['skill'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate w-36"><?php echo $row1['experience'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate "><?php echo $row1['job_type_id'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate "><?php echo $row1['salary'];?></p></td>
                  <td class="py-2 px-4"> <p class="truncate "><?php echo $row1['availability'];?></p></td>
                </tr>
        <?php
        };
    }
    else {
        ?>
         <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td colspan="12" class=" p-5 text-md font-semibold">No Record Found</td>
                                </tr>
        <?php
    }
}

// Access data from job_details table


?>