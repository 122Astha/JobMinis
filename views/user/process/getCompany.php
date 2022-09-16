<?php
require('../../connection/config.php');
$role= "job-provider";


if ($_POST['type'] == 1) {
    # code...
    $name = $_POST['name'];
    $query_search = "SELECT * FROM permissions INNER JOIN user_details ON permissions.v0 = user_details.user_id WHERE permissions.v1 = '$role' AND user_details.name LIKE '{$name}%'";
    $search_result = mysqli_query($conn, $query_search);
    if (mysqli_num_rows($search_result)>0) {
        # code...
        while ($row1 = mysqli_fetch_assoc($search_result)) {
        ?>
 <div class="list-card border border-gray-300 p-8 rounded-3xl space-y-4 hover:shadow hover:shadow-gray-300">
                            <div class="card-logo ">
                                <img src="../../../public/maxresdefault.jpeg" class="border rounded-2xl" width="100" alt="">
                            </div>
                            <a href="../app/companyDetails.php">
                                <h1 class="text-lg font-semibold"><?php echo $row1['name'] ?></h1>
                            </a>
                            <p class="text-gray-500 font-extralight text-base font-serif"><?php echo $row1['information'] ?></p>
                            <h2 class="font-medium">10 jobs</h2>
                            <div class=" pb-3 text-center">
                                <a href="../app/companyDetails.php" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
                            </div>
                        </div>
        <?php
        };
    };
}
if ($_POST['type'] == 2) {
    # code...

    $query_search = "SELECT * FROM permissions INNER JOIN user_details ON permissions.v0 = user_details.user_id WHERE permissions.v1 = '$role'";
    $search_result = mysqli_query($conn, $query_search);
    if (mysqli_num_rows($search_result)>0) {
        # code...
        while ($row1 = mysqli_fetch_assoc($search_result)) {
        ?>
 <div class="list-card border border-gray-300 p-8 rounded-3xl space-y-4 hover:shadow hover:shadow-gray-300">
                            <div class="card-logo ">
                                <img src="../../../public/maxresdefault.jpeg" class="border rounded-2xl" width="100" alt="">
                            </div>
                            <a href="../app/companyDetails.php">
                                <h1 class="text-lg font-semibold"><?php echo $row1['name'] ?></h1>
                            </a>
                            <p class="text-gray-500 font-extralight text-base font-serif"><?php echo $row1['information'] ?></p>
                            <h2 class="font-medium">10 jobs</h2>
                            <div class=" pb-3 text-center">
                                <a href="../app/companyDetails.php" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
                            </div>
                        </div>
        <?php
        };
    };
}

?>