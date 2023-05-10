<?php
@session_start();
require('../../connection/secure_user.php');
include '../inc/header.php';
require('../inc/navbar.php');
require('../../connection/config.php');
$role = "job-seeker";
?>


<!-- strat wrapper -->
<div class="h-full flex flex-row flex-wrap bg-slate-200">
  <!-- start sidebar -->
  
  <!-- end sidbar -->
  <div class="candidate-list-wrapper  w-full h-full bg-slate-50">
  <div class="candidate-list-header w-full bg-teal-100 p-24 mt-8">             
        <h1 class="text-5xl font-bold mb-4">Search Candidate</h1>
        <span class="text-lg text-gray-600">Work with the most suitable candidates in the world</span>
        
    </div>
            <div class="list col-span-9 py-7">
            <div class="list-header">
                <?php
        
                     
        $query = "SELECT profile.id  FROM permissions INNER JOIN profile ON permissions.v0 = profile.user_id WHERE permissions.v1 = '$role' AND profile.is_active = 'true'";
        $result = mysqli_query($conn,$query);
        $count = mysqli_num_rows($result);
       
                ?>
                    <h1 class="text-2xl font-semibold text-gray-600">Showing <span class="text-black"><?php echo $count; ?></span> candidates</h1>
                </div>
                <div class="list-body my-5 pt-5 mx-20 grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 " id ="candidate">
                <?php
                       
                     
                   $query = "SELECT profile.first_name AS first, profile.middle_name AS middle, profile.last_name AS last, profile.id AS id, profile.user_id AS userId, profile.email AS email, profile.bio AS bio FROM permissions INNER JOIN profile ON permissions.v0 = profile.user_id WHERE permissions.v1 = '$role' AND profile.is_active = 'true'";
                   $result = mysqli_query($conn,$query);
                  
if (mysqli_num_rows($result) > 0) {
   # code...
   while ($row = mysqli_fetch_assoc($result)) {
       # code...

       ?>
        <div class="candidate-card hover:shadow hover:shadow-gray-500 border bg-white border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../assets/img/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 "><?php echo $row['first'].' '.$row['middle'].' '.$row['last']; ?></h1>
        <?php
        $profileId = $row['id'];
        $add_query = "SELECT * FROM profile_addresses INNER JOIN addresses ON profile_addresses.address_id = addresses.id WHERE profile_addresses.profile_id = '$profileId'";
        $add_result = mysqli_query($conn,$add_query);
        $add_row = mysqli_fetch_assoc($add_result);  ?>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <?php
if ($add_row['city'] !='') {
    # code...
    ?>
            <h1><?php echo $add_row['city'].' '. $add_row['country']; ?></h1>
<?php
}
        ?>
        
        </div>
        <div class="py-6 pb-8 ">
        <a href="../app/candidateDetails.php?id=<?php echo $profileId ?>" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

<?php
   }
}
?>
    </div>
    </div>
   
            </div>
        </div>
    </div>
<!-- <div class="candidate-list-wrapper  w-full h-full bg-slate-50">
    <div class="candidate-list-header w-full bg-teal-50 p-24 mt-8">             
        <h1 class="text-5xl font-bold mb-4">Search Candidate</h1>
        <span class="text-lg text-gray-600">Work with the most suitable candidates in the world</span>
        <form  class="mt-10 bg-white rounded-full p-3 grid grid-cols-4 gap-3">
            <input type="text" placeholder="Candidate Name" class="p-2 border-r ">
            <input type="text" placeholder="Location" class="border-r p-2">
            <select name="post" id="">
                <option value="All industries" selected>All industries</option>
                <option value="Project Manager" >Project Manager</option>
                <option value="Finance" >Finance</option>
                <option value="Human Resource" >Human Resource</option>
            </select>
            <button type="submit" name="submit" class="bg-blue-800 mx-5 rounded-full  text-white font-semibold">Find Candidate</button>
        </form>
    </div>
    <div class="list p-20">
    <div class="list-header">
                    <h1 class="text-2xl font-semibold text-gray-600">Showing <span class="text-black"> 1523 </span> companies</h1>
                </div>
    </div>
    <div class="list-body my-3 mx-20 grid grid-cols-3 gap-5">
        <div class="candidate-card hover:shadow hover:shadow-gray-500 border bg-white border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>
       
        

    </div>
</div> -->
</div>

<script type="text/javascript" src="../../../assets/js/jQuery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
     
        $("#name").keyup(function(){
            var name = $(this).val();
             if (name != "") {
                $.ajax({
                    url: "../process/getCandidate.php",
                    method: "POST",
                    data:{
				type: 1,
                name: name,
			},
            success: function(data){
              
                $("#candidate").html(data);

            }
                });
             }
             else{
                $.ajax({
                    url: "../process/getCandidate.php",
                    method: "POST",
                    data:{
				type: 2,
			},
            success: function(data){
              
                $("#candidate").html(data);

            }
                });

             }
             
        });


    });

</script>
<?php
include '../inc/footer.php'
?>
Write to Simran Baniya
