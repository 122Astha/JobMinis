<?php
@session_start();
require('../../connection/secure_user.php');
include '../inc/header.php';
require('../inc/navbar.php');
require('../../connection/config.php');


if (isset($_GET['id'])) {
    # code...
    $id = $_GET['id'];
    $query = "SELECT * FROM profile  WHERE id = '$id'";
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
                    <div class="detail md:col-span-8 col-span-12">
                        <div class="company-image">
                            <?php
                            $user = $row['user_id'];
                            $pic_query = "SELECT * FROM galleries  WHERE user_id = '$user'";
                            $pic_result = mysqli_query($conn, $pic_query);
                            $row1 = mysqli_fetch_assoc($pic_result);
                            if ($row1['type'] == "background-image") {
                                # code...
                            ?>

                                <img src="../uploads/<?php echo $row1['link']; ?>" class="rounded-3xl w-full" alt="">

                            <?php
                            }
                            if ($row1['type'] == "profile") {
                                # code...
                            ?>
                                <img src="../uploads/<?php echo $row1['link'] ?>" class="absolute -mt-28 rounded-3xl ml-5" width="120" alt="">

                            <?php
                            }
                            ?>

                            <img src="../../../assets/img/download.jpeg" class="absolute -mt-28 rounded-3xl ml-5" width="120" alt="">
                        </div>
                        <div class="about my-12">
                            <h1 class="text-2xl font-bold mb-10"><?php echo $row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name'];  ?></h1>
                            <p class="text-base font-light text-gray-700"><?php echo $row['bio']  ?></p>
                            <div class="gallery grid grid-cols-2 my-12 gap-8">
                                <?php
                                $gallery_query = "SELECT * FROM galleries INNER JOIN profile ON galleries.user_id = profile.user_id WHERE profile.id = '$id' AND galleries.status = 'true'";
                                $gallery_result = mysqli_query($conn, $gallery_query);

                                while ($row3 = mysqli_fetch_array($gallery_result)) {

                                    # code...
                                ?>

                                    <img src="../uploads/<?php echo $row3['link'] ?>" class="rounded-3xl" alt="">
                                <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                    <div class="company-info md:col-span-3 col-span-12 space-y-7">
                        <div class="info-detail bg-blue-50 p-10 space-y-6 rounded-3xl">


                            <div class="email space-y-1">
                                <h1 class="text-xs text-gray-600 font-extralight">Email</h1>
                                <h2 class="font-medium"><?php echo $row['email']  ?></h2>
                            </div>
                            <div class="location space-y-1">
                                <?php
                                $query1 = "SELECT * FROM addresses INNER JOIN user_details ON addresses.id = user_details.address_id WHERE user_details.id = '$id'";
                                $result1 = mysqli_query($conn, $query1);
                                $row1 = mysqli_fetch_assoc($result1);
                                ?>
                                <h1 class="text-sm text-gray-600 font-extralight">Location</h1>
                                <h2 class="font-medium"><?php echo $row1['city']; ?>Nepal<?php echo $row1['country']; ?></h2>
                            </div>
                            <div class="links">
                                <i class="fa-brands fa-facebook-f p-2 bg-teal-50 rounded-lg hover:bg-teal-700 hover:text-white"></i>
                                <i class="fa-brands fa-instagram p-2 hover:bg-teal-700 hover:text-white bg-teal-50 rounded-lg"></i>
                                <i class="fa-brands fa-twitter p-2 bg-teal-50 rounded-lg hover:bg-teal-700 hover:text-white"></i>
                            </div>
                        </div>
                        <!-- <div class="company-contact bg-blue-50 p-10 space-y-6 rounded-3xl">
                        <h1 class="text-xl font-semibold">Contact Company</h1>
                        <form action="#" method"post" class="space-y-4">
                            <div class="space-y-4">
                                <label for="name" class="text-sm text-gray-600 font-semibold">Name</label>
                                <input type="text" name="name" placeholder="Enter your name" class="w-full h-12 rounded-3xl placeholder:pl-3">
                            </div>
                            <div class="space-y-4">
                                <label for="email" class="text-sm text-gray-600 font-semibold">Email</label>
                                <input type="email" name="email" placeholder="Enter your email" class="w-full h-12 rounded-3xl placeholder:pl-3">
                            </div>
                            <div class="space-y-4">
                                <label for="message" class="text-sm text-gray-600 font-semibold">Message</label>
                                <textarea name="message" cols="30" rows="5" placeholder="Type your message here" class="w-full p-3 rounded-3xl placeholder:pl-3 "></textarea>
                            </div>

                            <button name="submit" type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold w-full p-3 rounded-3xl">Send Message</button>
                        </form>
                    </div> -->

                    </div>
                </div>
                <div class="available-job my-5 mx-5">
                    <div class="skills mb-10">
                        <h1 class="text-xl font-semibold">Skills: </h1>
                        <div class="skill-body w-1/4 grid grid-cols-2 gap-5 my-4">
                            <?php
                            $skill_query = "SELECT * FROM user_skill INNER JOIN skills ON user_skill.skill_id = skills.id WHERE user_skill.user_id = '$user' AND skills.status ='true'";
                            $skill_result = mysqli_query($conn, $skill_query);
                            if (mysqli_num_rows($skill_result) > 0) {
                                # code...
                                while ($skill_row = mysqli_fetch_array($skill_result)) {
                                    # code...
                            ?>
                                    <div class="skill-card bg-gray-200 p-2 text-center  shadow-lg shadow-black ">
                                        <h1><?php echo $skill_row['name']; ?></h1>

                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <h1 class="text-sm text-gray-600 ml-10">No Skill found</h1>
                            <?php
                            }

                            ?>

                        </div>

                    </div>

                <?php
            }

                ?>

                </div>
            </div>
        </div>
        </div>

    </main>
    <?php

    include '../inc/footer.php'
    ?>