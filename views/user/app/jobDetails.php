<?php
@session_start();
require('../../connection/secure_user.php');
include '../inc/header.php';
require('../inc/navbar.php');
require('../../connection/config.php');


if (isset($_GET['id'])) {
    # code...
    $id = $_GET['id'];
    $query = "SELECT * FROM job_details WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

?>

    <main>
        <!-- strat wrapper -->
        <div class="h-full flex flex-row flex-wrap bg-white">
            <!-- start sidebar -->

            <!-- end sidbar -->
            <div class="company-detail-wrapper w-full mt-28 mx-16">
                <div class="content grid grid-cols-12 gap-7">
                    <div class="detail md:col-span-8 col-span-12  mt-16  ">
                        <div class="head mx-20 gap-5 flex">
                            <div class="company-logo">
                                <img src="../../../assets/img/gettyimages-1285342979-612x612.jpg" class="w-3/6" alt="">
                            </div>
                            <div class="w-full">
                                <h1 class="text-2xl font-bold mb-10"><?php echo $row['title']  ?></h1>
                                <div class="flex gap-5">
                                    <button type="submit" name="submit" class="w-full text-white bg-teal-600 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply Now</button>
                                    <button type="submit" name="submit" class="w-full text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Message</button>
                                </div>

                            </div>
                        </div>

                        <div class="about my-12 mx-10">
                            <h1 class="text-xl font-semibold mb-5">Job Description</h1>
                            <p class="text-sm ml-5 font-light text-gray-700"><?php echo $row['description']  ?></p>
                            <?php
                            if ($row['skill'] !== "") {
                                # code...
                            ?>
                                <div class="skills my-7">
                                    <h1 class="text-xl font-semibold mb-5">Skills Required</h1>
                                    <ol>
                                        <?php
                                        $skills = $row['skill'];
                                        $skill_arr = explode(",", $skills);
                                        foreach ($skill_arr as $skill) {
                                        ?>
                                            <li class="text-sm ml-5 font-normal text-gray-800"><?php echo $skill; ?></li>

                                        <?php
                                        }
                                        ?>
                                    </ol>
                                </div>
                            <?php
                            }
                            if ($row['experience'] !== "") {
                            ?>


                                <div class="experience my-7">
                                    <h1 class="text-xl font-semibold mb-5">Experience Required</h1>
                                    <ul>
                                        <?php
                                        $exp = $row['experience'];
                                        $exp_arr = explode(",", $exp);
                                        foreach ($exp_arr as $experience) {
                                        ?>
                                            <li class="text-sm ml-5 font-normal text-gray-800"><?php echo $experience; ?></li>

                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php
                            }
                            if ($row['language'] !== "") {
                            ?>
                                <div class="language my-7">
                                    <h1 class="text-xl font-semibold mb-5">Language Required</h1>
                                    <ul>
                                        <?php
                                        $languages = $row['language'];
                                        $lang_arr = explode(",", $languages);
                                        foreach ($lang_arr as $lang) {
                                        ?>
                                            <li class="text-sm ml-5 font-light text-gray-700"><?php echo $lang; ?></li>

                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php } ?>


                        </div>
                    </div>
                    <div class="company-info md:col-span-3 col-span-12 mb-5 space-y-7">
                        <div class="info-detail bg-blue-50 p-10 space-y-6 rounded-3xl">
                            <div class="industry space-y-1">
                                <h1 class="text-sm text-gray-600 font-extralight">Category</h1>
                                <?php
                                $category = "SELECT * FROM job_category INNER JOIN job_details ON job_category.id = job_details.job_category_id WHERE job_details.id = '$id'";
                                $category_result = mysqli_query($conn, $category);
                                $category_row = mysqli_fetch_assoc($category_result);
                                ?>
                                <h2 class="font-light"><?php echo $category_row['category']; ?></h2>
                            </div>
                            <div class="company-size space-y-1">
                                <h1 class="text-sm text-gray-600 font-extralight">Contact</h1>
                                <h2 class="font-light"><?php echo $row['contact_person']  ?></h2>
                            </div>
                            <div class="founded space-y-1">
                                <h1 class="text-sm text-gray-600 font-extralight">Posted on</h1>
                                <h2 class="font-light"><?php echo $row['date']  ?></h2>
                            </div>
                            <div class="phone space-y-1">
                                <h1 class="text-sm text-gray-600 font-extralight">Phone</h1>
                                <h2 class="font-light"><?php echo $row['phone']  ?></h2>
                            </div>
                            <div class="email space-y-1">
                                <h1 class="text-xs text-gray-600 font-extralight">Email</h1>
                                <h2 class="font-light"><?php echo $row['email']  ?></h2>
                            </div>
                            <div class="availability space-y-1">
                                <h1 class="text-xs text-gray-600 font-extralight">Availability</h1>
                                <h2 class="font-light"><?php echo $row['availability']  ?></h2>
                            </div>
                            <div class="salary space-y-1">
                                <h1 class="text-xs text-gray-600 font-extralight">Salary</h1>
                                <h2 class="font-light"><?php echo $row['salary']  ?></h2>
                            </div>
                            <div class="type space-y-1">
                                <?php
                                $type = "SELECT * FROM job_type INNER JOIN job_details ON job_type.id = job_details.job_type_id WHERE job_details.id = '$id'";
                                $type_result = mysqli_query($conn, $type);
                                $type_row = mysqli_fetch_assoc($type_result);
                                ?>
                                <h1 class="text-xs text-gray-600 font-extralight">Type</h1>
                                <h2 class="font-light"><?php echo $type_row['type']  ?></h2>
                            </div>
                            <div class="location space-y-1">
                                <?php
                                $query1 = "SELECT * FROM addresses INNER JOIN user_details ON addresses.id = user_details.address_id WHERE user_details.id = '$id'";
                                $result1 = mysqli_query($conn, $query1);
                                $row1 = mysqli_fetch_assoc($result1);
                                ?>
                                <h1 class="text-sm text-gray-600 font-extralight">Location</h1>
                                <h2 class="font-light"><?php echo $row1['city']; ?>, <?php echo $row1['country']; ?></h2>
                            </div>
                            <div class="links">
                                <i class="fa-brands fa-facebook-f p-2 bg-teal-50 rounded-lg hover:bg-teal-700 hover:text-white"></i>
                                <i class="fa-brands fa-instagram p-2 hover:bg-teal-700 hover:text-white bg-teal-50 rounded-lg"></i>
                                <i class="fa-brands fa-twitter p-2 bg-teal-50 rounded-lg hover:bg-teal-700 hover:text-white"></i>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </main>
<?php
}
include '../inc/footer.php'
?>