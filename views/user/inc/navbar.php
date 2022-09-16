<?php
@session_start();
$role =  $_SESSION['role'];
$id =  $_SESSION['userId'];
echo $id;
?>
<!-- start navbar -->
<header>
    <nav class="navigation bg-white z-50  top-0 w-full fixed">
        <div class=" header_wrapper flex justify-between">
            <div class="logo w-48 -mt-5 ml-12  ">
                <img src="../../../img/logo.png" alt="">
            </div>
            <div class="navbar">
                <ul class="flex justify-between space-x-5 mt-7 text-lg font-semibold">
                    <li class="p-2 hover:text-teal-700 "><a href="../app/dashboard.php"><?php echo $_SESSION['userId']; ?></a> </li>
                    <li class="p-2 hover:text-teal-700"><a href="../app/"> Job</a></li>
                    <!-- <li class="p-2 hover:text-teal-700"><a href="">About Us</a> </li> -->
                    <li class="p-2 hover:text-teal-700"><a href="../app/companyList.php">Company</a> </li>
                    <li class="p-2 hover:text-teal-700"><a href="../app/candidateList.php">Candidate</a> </li>

                </ul>
            </div>

            <div class="flex space-x-3 mt-8 mr-12">
                <?php


                # code...
                ?>
                <div>
                    <button id="dropdownJob" data-dropdown-toggle="job" class=" bg-teal-700 p-2 text-white hover:bg-white hover:text-teal-700 focus:ring-4 hover:ring-2 hover:ring-teal-600 focus:outline-none focus:ring-teal-600 px-2 font-medium rounded-lg text-sm text-center inline-flex items-center  type=" button">Post a job</button>
                    <!-- Dropdown menu -->
                    <div id="job" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownJob">
                            <li>
                                <a href="../app/newJob.php" class="block px-4 py-2 hover:bg-teal-700 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white"><i class="fa-solid fa-file-plus pr-3"></i>New job</a>
                            </li>
                            <li>
                                <a href="../app/manageJob.php" class="block px-4 py-2 hover:bg-teal-700 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">Manage job</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <?php


                ?>

                <div>
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class=" hover:text-teal-700 focus:ring-4 focus:outline-none focus:ring-teal-600 px-2 font-medium rounded-lg text-sm text-center inline-flex items-center  type=" button"><i class="fa-solid fa-gear text-lg"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="../app/setting.php" class="block px-4 py-2 hover:bg-teal-700 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white"><i class="fa-solid fa-key pr-3"></i>Security and login</a>
                            </li>
                            <li>
                                <a href="../../process/logout.php" class="block px-4 py-2 hover:bg-teal-700 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white"><i class="fa-solid fa-right-from-bracket pr-3"></i>Log out</a>
                            </li>
                            <?php
                            if ($role == "job-seeker") {
                            ?>
                                <li>

                                    <button class="block px-4 py-2 text-left hover:bg-teal-700 w-full hover:text-white dark:hover:bg-gray-600 dark:hover:text-white" type="button" data-modal-toggle="authentication-modal"><i class="fa-solid fa-file-circle-plus pr-3"></i>CV</button>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>

                <div class="notification">
                    <button id="notification" onclick="notificationHandler(false)"><i class="fa-solid fa-bell text-lg px-2 hover:text-teal-700"></i></button>
                </div>
                <div class="profile flex space-x-2">
                    <a href="../app/profile.php"> <img src="../../../img/user.svg" class="w-9 -mt-1 " alt=""></a>
                    <a href="../app/profile.php"> <span class="hover:text-teal-700 text-lg font-semibold">Simran</span></a>
                </div>
            </div>
        </div>

        <!-- notification start -->
        <div class="w-full h-full hidden bg-opacity-90 top-24 overflow-y-auto overflow-x-hidden fixed sticky-0" id="chec-div">
            <div class="w-full absolute z-10 right-0 h-full overflow-x-hidden transform translate-x-0 transition ease-in-out duration-700" id="notification">
                <div class="2xl:w-4/12 bg-gray-50 h-screen overflow-y-auto p-8 absolute right-0">
                    <div class="flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-2xl font-semibold leading-6 text-gray-800">Notifications</p>
                        <button role="button" id="close" aria-label="close modal" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 rounded-md cursor-pointer" onclick="notificationHandler(false)">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg1.svg" alt="icon" />

                        </button>
                    </div>

                    <div class="w-full p-3 mt-8 bg-white rounded flex">
                        <div tabindex="0" aria-label="heart icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex items-center justify-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg2.svg" alt="icon" />

                        </div>
                        <div class="pl-3">
                            <p tabindex="0" class="focus:outline-none text-sm leading-none"><span class="text-indigo-700">James Doe</span> favourited an <span class="text-indigo-700">item</span></p>
                            <p tabindex="0" class="focus:outline-none text-xs leading-3 pt-1 text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                    <div class="w-full p-3 mt-4 bg-white rounded shadow flex flex-shrink-0">
                        <div tabindex="0" aria-label="group icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex flex-shrink-0 items-center justify-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg3.svg" alt="icon" />

                        </div>
                        <div class="pl-3 w-full">
                            <div class="flex items-center justify-between w-full">
                                <p tabindex="0" class="focus:outline-none text-sm leading-none"><span class="text-indigo-700">Sash</span> added you to the group: <span class="text-indigo-700">UX Designers</span></p>
                                <div tabindex="0" aria-label="close icon" role="button" class="focus:outline-none cursor-pointer">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg4.svg" alt="icon" />

                                </div>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs leading-3 pt-1 text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                    <div class="w-full p-3 mt-4 bg-white rounded flex">
                        <div tabindex="0" aria-label="post icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex items-center justify-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg5.svg" alt="icon" />

                        </div>
                        <div class="pl-3">
                            <p tabindex="0" class="focus:outline-none text-sm leading-none"><span class="text-indigo-700">Sarah</span> posted in the thread: <span class="text-indigo-700">Update gone wrong</span></p>
                            <p tabindex="0" class="focus:outline-none text-xs leading-3 pt-1 text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                    <div class="w-full p-3 mt-4 bg-red-100 rounded flex items-center">
                        <div tabindex="0" aria-label="storage icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-red-200 flex items-center flex-shrink-0 justify-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg6.svg" alt="icon" />

                        </div>
                        <div class="pl-3 w-full flex items-center justify-between">
                            <p tabindex="0" class="focus:outline-none text-sm leading-none text-red-700">Low on storage: 2.5/32gb remaining</p>
                            <p tabindex="0" class="focus:outline-none text-xs leading-3 cursor-pointer underline text-right text-red-700">Manage</p>
                        </div>
                    </div>
                    <div class="w-full p-3 mt-4 bg-white rounded flex">
                        <div tabindex="0" aria-label="loading icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex items-center justify-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg7.svg" alt="icon" />

                        </div>
                        <div class="pl-3">
                            <p tabindex="0" class="focus:outline-none text-sm leading-none">Shipmet delayed for order<span class="text-indigo-700"> #25551</span></p>
                            <p tabindex="0" class="focus:outline-none text-xs leading-3 pt-1 text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                    <h2 tabindex="0" class="focus:outline-none text-sm leading-normal pt-8 border-b pb-2 border-gray-300 text-gray-600">YESTERDAY</h2>
                    <div class="w-full p-3 mt-6 bg-white rounded flex">
                        <div tabindex="0" aria-label="post icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex items-center justify-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg8.svg" alt="icon" />

                        </div>
                        <div class="pl-3">
                            <p tabindex="0" class="focus:outline-none text-sm leading-none"><span class="text-indigo-700">Sarah</span> posted in the thread: <span class="text-indigo-700">Update gone wrong</span></p>
                            <p tabindex="0" class="focus:outline-none text-xs leading-3 pt-1 text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                    <div class="w-full p-3 mt-4 bg-white rounded flex">
                        <div tabindex="0" aria-label="loading icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex items-center justify-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg9.svg" alt="icon" />

                        </div>
                        <div class="pl-3">
                            <p tabindex="0" class="focus:outline-none text-sm leading-none">Shipmet delayed for order<span class="text-indigo-700"> #25551</span></p>
                            <p tabindex="0" class="focus:outline-none text-xs leading-3 pt-1 text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                    <div class="w-full p-3 mt-4 bg-white rounded flex">
                        <div tabindex="0" aria-label="heart icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 flex items-center justify-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg10.svg" alt="icon" />

                        </div>
                        <div class="pl-3">
                            <p tabindex="0" class="focus:outline-none text-sm leading-none"><span class="text-indigo-700">James Doe</span> favourited an <span class="text-indigo-700">item</span></p>
                            <p tabindex="0" class="focus:outline-none text-xs leading-3 pt-1 text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                    <div class="w-full p-3 mt-8 bg-green-100 rounded flex items-center">
                        <div tabindex="0" aria-label="success icon" role="img" class="focus:outline-none w-8 h-8 border rounded-full border-green-200 flex flex-shrink-0 items-center justify-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/notification_1-svg11.svg" alt="icon" />
                        </div>
                        <div class="pl-3 w-full">
                            <div class="flex items-center justify-between">
                                <p tabindex="0" class="focus:outline-none text-sm leading-none text-green-700">Design sprint completed</p>
                                <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs leading-3 underline cursor-pointer text-green-700">View</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justiyf-between">
                        <hr class="w-full">
                        <p tabindex="0" class="focus:outline-none text-sm flex flex-shrink-0 leading-normal px-3 py-16 text-gray-500">Thats it for now :)</p>
                        <hr class="w-full">
                    </div>
                </div>
            </div>
        </div>

        <!-- notification ending -->

        <!-- cv upload start -->

        <!-- Modal toggle -->


        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Upload your CV</h3>
                        <form class="space-y-6" id="cv-upload" method="POST" action="" enctype="multipart/form-data">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">File name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="sapna cv" required="">
                            </div>
                            <div class="">
                                <label for="file" class="block  text-sm font-medium text-gray-900 dark:text-gray-300">Choose file</label>
                                <input type="file" name="file" id="file" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                            </div>

                            <button type="submit" name="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- cv upload ending -->

        <!-- success notice -->
        <div id="toast-success" class="flex hidden fixed z-50 right-10 bottom-32 items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">Profile updated successfully.</div>
            <button type="button" id="notice-close" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!-- error notice -->
        <div id="toast-warning" class="flex hidden fixed z-50 right-10 bottom-32 items-center p-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Warning icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">Error uploading your cv</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>


    </nav>
    <script type="text/javascript" src="../../../dist/js/jQuery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#notification').click(function() {
                $('#chec-div').removeClass("hidden");

            });
            $('#notification').dblclick(function() {
                $('#chec-div').addClass("hidden");

            });
            $('#close').click(function() {
                $('#chec-div').addClass("hidden");

            });
        });


        const nav = document.getElementsByClassName("navigation")
        window.addEventListener('scroll', () => {

            const y = window.scrollY

            if (y >= 50) {
                console.log(y)
                nav[0].classList.remove('bg-transparent');
                nav[0].classList.add('bg-white');
            } else {

            }
        })

        let notification = document.getElementById("notification");
        let checdiv = document.getElementById("chec-div");

        let flag3 = false;
        const notificationHandler = () => {
            if (!flag3) {
                checdiv.classList.remove("hidden");
                checdiv.classList.remove("block");

                setTimeout(function() {
                    checdiv.classList.add("hidden");
                }, 500);
                flag3 = true;
            } else {

                checdiv.classList.remove("hidden");
                setTimeout(function() {

                }, 500);

                flag3 = false;
            }
        };
    </script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</header>

<?php

if (isset($_POST['submit'])) {
    # code...

    $name = $_POST['name'];
    $type = "cv";
    $imageName = $_FILES['file']['name'];
    $imageSize = $_FILES['file']['size'];
    $tempName = $_FILES['file']['tmp_name'];

    $validImageExtention = ['pdf', 'doc', 'docx', 'png', 'txt', 'csv'];
    $imageExtension = explode('.', $imageName);
    $imageExtension =   strtolower(end($imageExtension));
    if (!in_array($imageExtension, $validImageExtention)) {
        # code...

        echo "
        <script> 
        
        $('#toast-warning').removeClass('hidden');
         </script> 
        ";
    } else {
        $newImageName = $imageName . " - " . date("Y.m.d" . " - " . date("h.i.sa"));
        $newImageName .= "." . $imageExtension;
        $query = "INSERT INTO files(name, filelink,ext, status, type, user_id) VALUES('$name','$newImageName','$imageExtension', 'Active', '$type','$id') ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            # code...
            move_uploaded_file($tempName, '../uploads/' . $newImageName);
            echo
            "
            <script>
            $('#toast-success').removeClass('hidden');

            </script>
            
            
            ";
        }
    }
}
?>