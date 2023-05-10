<?php
@session_start();
$role =  $_SESSION['role'];
$id =  $_SESSION['userId'];
$email = $_SESSION['email'];

?>
<?php include_once "header.php"; ?>
<?php require('../../connection/secure_user.php'); ?>
<!-- start navbar -->
<header>
    <nav class="navigation bg-white z-50  top-0 w-full fixed">
        <div class=" header_wrapper flex justify-between">
            <div class="logo w-48 -mt-5 ml-12  ">
                <img src="../../../img/logo.png" alt="">
            </div>
            <div class="navbar">
                <ul class="flex justify-between space-x-5 mt-7 text-lg font-semibold">
                    <li class="p-2 hover:text-teal-700 "><a href="../app/dashboard.php">Home</a> </li>
                    <li class="p-2 hover:text-teal-700"><a href="../app/jobList.php"> Job</a></li>
                    <!-- <li class="p-2 hover:text-teal-700"><a href="">About Us</a> </li> -->
                    <li class="p-2 hover:text-teal-700"><a href="../app/companyList.php">Company</a> </li>
                    <li class="p-2 hover:text-teal-700"><a href="../app/candidateList.php">Candidate</a> </li>

                </ul>
            </div>

            <div class="flex space-x-3 mt-8 mr-12">
                <?php
                if ($role == "job-provider") {
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
                }
                ?>
                <div class="chat">

                    <button id="chat" onclick="chatHandler(false)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M4.804 21.644A6.707 6.707 0 006 21.75a6.721 6.721 0 003.583-1.029c.774.182 1.584.279 2.417.279 5.322 0 9.75-3.97 9.75-9 0-5.03-4.428-9-9.75-9s-9.75 3.97-9.75 9c0 2.409 1.025 4.587 2.674 6.192.232.226.277.428.254.543a3.73 3.73 0 01-.814 1.686.75.75 0 00.44 1.223zM8.25 10.875a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25zM10.875 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875-1.125a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
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
                <div class="profile flex space-x-2">
                    <h1><?php echo $email;  ?></h1>


                </div>
            </div>
        </div>


        <!-- chat start-->
        <div class="w-full h-full hidden bg-opacity-90 top-24 overflow-y-auto overflow-x-hidden fixed sticky-0" id="chat-div">
            <div class="w-full absolute z-10 right-0 h-full overflow-x-hidden transform translate-x-0 transition ease-in-out duration-700" id="chat">
                <div class="2xl:w-4/12 bg-gray-50 h-screen overflow-y-auto p-8 absolute right-0">
                    <div class="flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-2xl font-semibold leading-6 text-gray-800">Chats</p>

                    </div>

                    <section class="users">
                        <header>
                            <div class="content">
                                <?php
                                $sql =  "SELECT * FROM user WHERE 'id' ='$id'";
                                
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                ?>
                                    <a href="dashboard.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                                    <div class="details">
                                        <span><?php echo $row['email'] ?></span>
                                        <p><?php echo $row['status']; ?></p>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </header>
                        <div class="search">
                            <span class="text">Select an user to start chat</span>
                            <input type="text" placeholder="Enter name to search...">
                            <button><i class="fas fa-search"></i></button>
                        </div>
                        <div class="users-list">

                        </div>
                    </section>

                </div>
            </div>
        </div>

        <!-- chat ending -->

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

    <script src="../../../assets/js/users.js"></script>
    <script type="text/javascript" src="../../../assets/js/jQuery.js"></script>
    <!-- chat -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#chat').click(function() {
                $('#chat-div').removeClass("hidden");

            });
            $('#chat').dblclick(function() {
                $('#chat-div').addClass("hidden");

            });
            $('#close').click(function() {
                $('#chat-div').addClass("hidden");

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

        let chat = document.getElementById("chat");
        let chatdiv = document.getElementById("chat-div");

        let flag3 = false;
        const chatHandler = () => {
            if (!flag3) {
                chatdiv.classList.remove("hidden");
                chatdiv.classList.remove("block");

                setTimeout(function() {
                    chatdiv.classList.add("hidden");
                }, 500);
                flag3 = true;
            } else {

                chatdiv.classList.remove("hidden");
                setTimeout(function() {

                }, 500);

                flag3 = false;
            }
        };
    </script>

    <!-- chat -->
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