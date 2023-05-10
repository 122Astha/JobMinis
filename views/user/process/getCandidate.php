<?php
require('../../connection/config.php');
$role = "job-seeker";


if ($_POST['type'] == 1) {
    # code...
    $name = $_POST['name'];
    $query_search = "SELECT * FROM permissions INNER JOIN profile ON permissions.v0 = profile.user_id WHERE permissions.v1 = '$role' AND profile.first_name LIKE '{$name}%' OR profile.middle_name LIKE '{$name}%' OR profile.last_name LIKE '{$name}%'";
    $search_result = mysqli_query($conn, $query_search);
    if (mysqli_num_rows($search_result) > 0) {
        # code...
        while ($row1 = mysqli_fetch_assoc($search_result)) {
?>

            <div class="candidate-card hover:shadow hover:shadow-gray-500 border bg-white border-gray-300 space-y-2 text-center rounded-3xl">
                <div class="image">
                    <img src="../../../assets/img/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
                </div>
                <h1 class="font-bold text-xl mt-3 "><?php echo $row1['first'] . ' ' . $row1['middle'] . ' ' . $row1['last']; ?></h1>
                <?php
                $profileId = $row1['id'];
                $add_query = "SELECT * FROM profile_addresses INNER JOIN addresses ON profile_addresses.address_id = addresses.id WHERE profile_addresses.profile_id = '$profileId'";
                $add_result = mysqli_query($conn, $add_query);
                $add_row = mysqli_fetch_assoc($add_result);  ?>
                <div class="location space-x-2 flex justify-center pt-4">
                    <i class="fa-solid fa-earth-americas"></i>
                    <h1><?php echo $add_row['city'] . ' ' . $add_row['country']; ?></h1>
                </div>
                <div class="py-6 pb-8 ">
                    <a href="../app/candidateDetails.php?id=<?php echo $profileId ?>" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
                </div>
            </div>
        <?php
        };
    };
}
if ($_POST['type'] == 2) {
    # code...


    $query = "SELECT profile.first_name AS first, profile.middle_name AS middle, profile.last_name AS last, profile.id AS id, profile.user_id AS userId, profile.email AS email, profile.bio AS bio FROM permissions INNER JOIN profile ON permissions.v0 = profile.user_id WHERE permissions.v1 = '$role' AND profile.is_active = 'true'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        # code...
        while ($row = mysqli_fetch_assoc($result)) {
            # code...

        ?>
            <div class="candidate-card hover:shadow hover:shadow-gray-500 border bg-white border-gray-300 space-y-2 text-center rounded-3xl">
                <div class="image">
                    <img src="../../../assets/img/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
                </div>
                <h1 class="font-bold text-xl mt-3 "><?php echo $row['first'] . ' ' . $row['middle'] . ' ' . $row['last']; ?></h1>
                <?php
                $profileId = $row['id'];
                $add_query = "SELECT * FROM profile_addresses INNER JOIN addresses ON profile_addresses.address_id = addresses.id WHERE profile_addresses.profile_id = '$profileId'";
                $add_result = mysqli_query($conn, $add_query);
                $add_row = mysqli_fetch_assoc($add_result);  ?>
                <div class="location space-x-2 flex justify-center pt-4">
                    <i class="fa-solid fa-earth-americas"></i>
                    <h1><?php echo $add_row['city'] . ' ' . $add_row['country']; ?></h1>
                </div>
                <div class="py-6 pb-8 ">
                    <a href="../app/candidateDetails.php?id=<?php echo $profileId ?>" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
                </div>
            </div>
<?php
        }
    }
}
?>