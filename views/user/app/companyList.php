<?php
include '../inc/header.php';
require('../inc/navbar.php');
require('../../connection/config.php');
?>

<main>
    <!-- strat wrapper -->
    <div class="h-full flex flex-row flex-wrap bg-white">
        <!-- start sidebar -->

        <!-- end sidbar -->
        <div class="company-list-wrapper w-full mt-28 h-full">
            <div class="title bg-teal-50 py-20 text-center">
                <h1 class="text-6xl font-extrabold mb-3">Search Companies</h1>
                <span class="text-xl font-light text-gray-600 font-sans">Work for the best company in the world</span>
            </div>
            <div class="company-list my-8 mx-16 grid grid-cols-12 gap-5">
                <div class="search-company bg-blue-50 space-y-6 h-2/4  rounded-3xl p-8  col-span-3">
                    <div class="name space-y-3">
                        <h1 class="text-lg font-semibold">Search by Name</h1>
                        <input type="text" name="name" id="name" placeholder="Company Name" class="w-full h-12 rounded-3xl placeholder:pl-3">
                        <i class="fa-solid fa-magnifying-glass absolute pt-4 -ml-10"></i>
                    </div>

                    <!-- <div class="location space-y-3">
                        <h1 class="text-lg font-semibold">Location</h1>
                        <input type="text" name="location" id="location" placeholder="Enter Location" class="w-full h-12 rounded-3xl placeholder:pl-3">
                        <i class="fa-solid fa-earth-americas absolute pt-4 -ml-10"></i>
                    </div> -->

                    <!-- <div class="category  space-y-3">
                        <h1 class="text-lg font-semibold">Search by industry</h1>
                        <input type="text" name="industry" id="industry" placeholder="Enter Industry" class="w-full h-12 rounded-3xl placeholder:pl-3">

                        <i class="fa-solid fa-earth-americas absolute pt-4 -ml-10"></i>
                    </div> -->

                </div>
                <div class="list col-span-9 py-7">
                    <div class="list-header">
                        <h1 class="text-2xl font-semibold text-gray-600">Showing <span class="text-black"> 1523 </span> companies</h1>
                    </div>
                    <div class="list-body grid grid-cols-2 mt-16 gap-5" id="company">
                        <?php
                       
                        $role = "job-provider";
                    $query = "SELECT * FROM permissions INNER JOIN user_details ON permissions.v0 = user_details.user_id WHERE permissions.v1 = '$role'";
                    $result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) > 0) {
    # code...
    while ($row = mysqli_fetch_assoc($result)) {
        # code...
        ?>
        <div class="list-card border border-gray-300 p-8 rounded-3xl space-y-4 hover:shadow hover:shadow-gray-300">
                            <div class="card-logo ">
                                <img src="../../../public/maxresdefault.jpeg" class="border rounded-2xl" width="100" alt="">
                            </div>
                            <a href="../app/companyDetails.php">
                                <h1 class="text-lg font-semibold"><?php echo $row['name'] ?></h1>
                            </a>
                            <p class="text-gray-500 font-extralight text-base font-serif"><?php echo $row['information'] ?></p>
                            <h2 class="font-medium">10 jobs</h2>
                            <div class=" pb-3 text-center">
                                <a href="../app/companyDetails.php" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
                            </div>
                        </div>
        <?php
    }
}
else {
    echo $return = "<h4>No record found </h4>";
}
?>
                    </div>
                    <!-- <div class="list-body grid grid-cols-2 mt-16 gap-5" id="companySearch">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript" src="../../../dist/js/jQuery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
     
        $("#name").keyup(function(){
            var name = $(this).val();
             if (name != "") {
                $.ajax({
                    url: "../process/getCompany.php",
                    method: "POST",
                    data:{
				type: 1,
                name: name,
			},
            success: function(data){
              
                $("#company").html(data);

            }
                });
             }
             else{
                $.ajax({
                    url: "../process/getCompany.php",
                    method: "POST",
                    data:{
				type: 2,
			},
            success: function(data){
              
                $("#company").html(data);

            }
                });

             }
             
        })

    });

</script>
<?php
include '../inc/footer.php'
?>