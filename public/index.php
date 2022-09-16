<?php
include '../views/connection/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobMinis</title>
    <link rel="stylesheet" href="./assets/css/landing.css">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <script src="https://kit.fontawesome.com/6daaebb091.js" crossorigin="anonymous"></script>
    <style>
        #company{
            background-image: url("../assets/img/posters-technology-background.jpg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>


</head>

<body>

    <header>
        <nav class="navigation bg-transparent z-50 top-0 w-full fixed">
            <div class=" header_wrapper flex justify-between mx-10">
                <div class="logo w-48 -mt-7 ml-12  ">
                    <img src="./assets/img/logo.png" alt="">
                </div>
                <div class="navbar">
                    <ul class="flex justify-evenly space-x-5 mt-5 text-lg font-semibold">
                        <li class="p-2 hover:text-teal-500 "><a href="../public/index.php">Home</a> </li>
                        <li class="p-2 hover:text-teal-500"><a href="../app/article.php"> Article</a></li>
                        <!-- <li class="p-2 hover:text-teal-500"><a href="">About Us</a> </li> -->
                        <li class="p-2 hover:text-teal-500"><a href="../public/index.php#contact">Contact</a> </li>
                        <li class="p-2 hover:text-teal-500"><a href="../public/index.php#faqs">FAQ</a> </li>
                    </ul>
                </div>
                <div class="account flex space-x-3 mt-5">
                    <a href="../views/auth/signup.php">
                        <div class="post_job bg-blue-900 hover:bg-white hover:border hover:border-blue-900 hover:text-blue-900 text-white p-2 px-4 rounded-full">
                            <span>Post a Job</span>
                        </div>
                    </a>
                    <a href="../views/auth/signup.php">
                        <div class="post_job bg-blue-900 hover:bg-white hover:border hover:border-blue-900 hover:text-blue-900 text-white p-2 px-4 rounded-full">
                            <span>Sign In</span>
                        </div>
                    </a>
                </div>
            </div>

        </nav>

        <script>
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
        </script>
    </header>
    <main>
        <section class="" id="home">
            <div class="main-content py-16 bg-teal-100">
                <?php
                $slider_query = "SELECT * FROM sliders";
                $slider_result = mysqli_query($conn, $slider_query);
                $count = 0;
                while ($data = mysqli_fetch_array($slider_result)) {
                    $count += 1; //$sn=$sn+1
                ?>
                    <div class="container_wrapper grid grid-cols-2 mt-20">
                        <div class="search_wrapper col-span-1 w-full space-x-7">

                            <div class="search_content space-y-8 text-center <?php if ($count == 1) {
                                                                                    echo "active";
                                                                                } ?>"">

                        <div class=" content_text space-y-4 ml-32">
                                <h1 class="text-6xl font-extrabold font-serif"><?php echo $data['h1'] ?></h1>
                                <!-- <div class="flex space-x-6">
                                <span class="text-6xl font-extrabold font-serif text-teal-600">Job</span>
                                <h1 class="text-6xl font-extrabold font-serif">for you</h1>
                            </div> -->
                            </div>
                            <h2 class="text-gray-600 text-2xl font-extralight font-serif"><?php echo $data['p']; ?></h2>
                            <div class="search_area p-2 w-3/4 rounded-full bg-white shadow-lg shadow-gray-500 mx-auto">
                                <input type="text" class="p-3 w-5/6 border border-white bg-white" placeholder="Job Title or Keyword">
                               <a href="../views/auth/login.php"><i class="fa-solid fa-magnifying-glass text-white p-4 rounded-full bg-teal-700"></i></a> 
                            </div>
                            <div class="popular_search text-left ml-32 space-y-3">
                                <h2 class="text-xl font-semibold font-serif">Popular Searches</h2>
                                <ul class="flex space-x-3">
                                    <li class="bg-teal-100 px-3 hover:text-white hover:bg-teal-700 text-teal-600 p-2 rounded-full">Work from home</li>
                                    <li class="bg-teal-100 px-3 hover:text-white hover:bg-teal-700 text-teal-600 p-2 rounded-full">IT</li>
                                    <li class="bg-teal-100 px-3 hover:text-white hover:bg-teal-700 text-teal-600 p-2 rounded-full">Finance</li>
                                    <li class="bg-teal-100 px-3 hover:text-white hover:bg-teal-700 text-teal-600 p-2 rounded-full">Retail</li>


                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="photo_icon col-span-1 w-full pl-28">
                        <div class="photo_content absolute top-32 h-2/5 rounded-3xl bg-gradient-to-b from-zinc-800 z-30 to-gray-200 w-1/4">
                            <img src="../assets/img/image-removebg-preview (4).png" class="py-6 w-full pr-3" alt="" width="1200">

                        </div>

                        <div class="div1 h-2/5 origin-bottom-left z-10 rotate-3 rounded-3xl w-1/4 bg-blue-900 absolute top-32"></div>
                        <div class="div2 h-2/5 origin-bottom-left rotate-6 rounded-3xl w-1/4 bg-teal-700 absolute top-32"></div>
                    </div>

            </div>
        <?php
                }
        ?>
        </div>
        </section>

        <!-- search by category started-->
        <section id = "company" class="-mt-20">
            <div class="search-wrapper text-center">
                <div class="search-title my-10 pt-20 bg-transparent">
                    <h1 class="text-5xl font-extrabold mb-4 text-white">Search by Company</h1>
                    <span class="font-serif text-gray-200 font-medium text-xl">Search your career oppourtunity here</span>
                </div>
                <div class="search-button mx-auto p-3 flex space-x-3 mb-5">
                <button class=" rounded-lg bg-teal-500 mx-auto p-2 text-white text-lg font-semibold text-center"><a href="../views/auth/login.php"> Apply Now</a></button>

            </div>
                <div class="company pb-3">
                    <img src="../assets/img/Screenshot from 2022-09-15 12-27-41.png" alt="" class="w-3/5 mx-auto rounded-lg">
                </div>
            </div>
     
        </section>
        <!-- end of search by category -->

        

        <!-- beginning of FAQ -->
        <section id="faqs" class=" md:py-[120px] relative">
            <div class="container">
                <div class="flex flex-wrap -mx-4 mb-4 wow fadeInUp ">
                    <?php
                    $name_query = "SELECT * FROM siteconfig WHERE name='questions'";
                    $name_result = mysqli_query($conn, $name_query);
                    $row = $name_result->fetch_assoc();

                    ?>
                    <div class="w-full px-4">
                        <h3 class="font-bold text-center text-3xl sm:text-4xl md:text-[40px] text-dark mb-4">
                            <?php
                            echo $row['site_key'];
                            ?>
                        </h3>
                        <p class="text-base text-center sm:text-xl leading-relaxed sm:leading-relaxed text-body-color">
                            <?php
                            echo $row['site_value'];
                            ?>
                        </p>
                    </div>
                </div>
                <div class=" sm:mx-auto sm:mb-2 -mx-2 py-2 wow fadeInUp">
                    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                        <div class="w-full lg:w-1/2 px-4 py-2">
                            <?php
                            $name_query = "SELECT * FROM siteconfig WHERE name='questions1'";
                            $name_result = mysqli_query($conn, $name_query);
                            $row = $name_result->fetch_assoc();

                            ?>
                            <details class="mb-4 border rounded-lg">
                                <summary class="cursor-pointer text-dark bg-light-400 py-2 px-4 pl-2 shadow">
                                    <?php
                                    echo $row['site_key'];
                                    ?>
                                </summary>
                                <div class=" py-2 px-4 text-justify">
                                    <span class="">
                                        <?php
                                        echo $row['site_value'];
                                        ?>
                                    </span>
                                </div>
                            </details>
                            <?php
                            $name_query = "SELECT * FROM siteconfig WHERE name='questions2'";
                            $name_result = mysqli_query($conn, $name_query);
                            $row = $name_result->fetch_assoc();

                            ?>
                            <details class="mb-4 border rounded-lg">
                                <summary class="cursor-pointer text-dark bg-light-400 py-2 px-4 pl-2 shadow">
                                    <?php echo $row['site_key'];
                                    ?>
                                </summary>
                                <div class="bg-light-400 py-2 px-4 text-justify">
                                    <span class="">
                                        <?php
                                        echo $row['site_value'];
                                        ?>
                                    </span>
                                </div>
                            </details>
                            <details class="mb-4 border rounded-lg">
                                <summary class="cursor-pointer text-dark bg-light-400 py-2 px-4 pl-2 shadow">
                                    Is my data secure on this site?
                                </summary>
                                <div class="bg-light-400 py-2 px-4 text-justify">
                                    <span class="">
                                        We store the csv files you've uploaded on our platform in a secured vault and account
                                        activity logs. We don't store any data records you request for processing.
                                    </span>
                                </div>
                            </details>
                        </div>
                        <div class="w-full lg:w-1/2 px-4 py-2">
                            <details class="mb-4 border rounded-lg">
                                <summary class="cursor-pointer text-dark bg-light-400 py-2 px-4 pl-2 shadow">
                                    Can I create multiple users in my account?
                                </summary>
                                <div class="bg-light-400 py-2 px-4 text-justify">
                                    <span class="">
                                        We are giving our best to bring up this feature ASAP.
                                    </span>
                                </div>
                            </details>
                            <details class="mb-4 border rounded-lg">
                                <summary class="cursor-pointer text-dark bg-light-400 py-2 px-4 pl-2 shadow">
                                    Can I add new operations?
                                </summary>
                                <div class="bg-light-400 py-2 px-4 text-justify">
                                    <span class="">
                                        We are excited learn new ideas and feedback from you. You can always request new
                                        features and we will try implement it after some study.
                                        For now, you can create flow with operations provided on this site. Get started by
                                        choose one of the <a href="#pricing" class="text-secondary hover:text-lite">plans</a> to
                                        get started.
                                    </span>
                                </div>
                            </details>
                            <details class="mb-4 border rounded-lg">
                                <summary class="cursor-pointer text-dark bg-light-400 py-2 px-4 pl-2 shadow">
                                    Can I cancel the plan?
                                </summary>
                                <div class="py-2 px-4 text-justify">
                                    <span class="">
                                        You can request cancellation of plan at any time. Since the plans are life-time in
                                        period, refunds are not made.
                                        Good news is you can request for <a href="#contact" class="text-secondary hover:text-lite">demo</a> before choosing the plan.
                                        Or you can use our <a href="#pricing" class="text-secondary hover:text-lite">Pay as you
                                            go</a> option.
                                    </span>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- eend of FAQ -->

        <!-- ====== Contact Start ====== -->
        <section id="contact" class="py-20 md:py-28 relative">
            <div class="absolute z-[-1] w-full h-1/2 lg:h-[45%] xl:h-1/2 bg-teal-100 top-0 left-0 pattern-body"></div>
            <div class="container px-4">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="lg:text-left md:text-center sm:text-center px-4 w-full lg:w-7/12 xl:w-8/12">
                        <div class="ud-contact-content-wrapper">
                            <div class="ud-contact-title mb-12 lg:mb-[150px]">
                                <span class="text-teal-700 font-semibold text-xl mb-5">
                                    CONTACT US
                                </span>
                                <h2 class="text-[35px] font-semibold">
                                    Let's talk about
                                </h2>
                            </div>
                            <div class="flex justify-between mb-12 lg:mb-0">
                                <div class="flex max-w-full w-[390px] mb-8">
                                    <div class="text-[32px] text-primary mr-6">
                                        <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                                            <path d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z" />
                                            <path d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z" />
                                        </svg>
                                    </div>
                                    <?php
                                    $name_query = "SELECT * FROM siteconfig WHERE name='location'";
                                    $name_result = mysqli_query($conn, $name_query);
                                    $row = $name_result->fetch_assoc();

                                    ?>
                                    <div>

                                        <h5 class="text-lg font-semibold mb-6">
                                            <?php

                                            echo $row['site_key'];
                                            ?>
                                        </h5>
                                        <p class="text-base text-body-color">

                                            <?php

                                            echo $row['site_value'];
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="flex max-w-full w-[390px] mb-8">
                                    <div class="text-[32px] text-primary mr-6">
                                        <svg width="34" height="25" viewBox="0 0 34 25" class="fill-current">
                                            <path d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z" />
                                        </svg>
                                    </div>
                                    <?php
                                    $name_query = "SELECT * FROM siteconfig WHERE name='location'";
                                    $name_result = mysqli_query($conn, $name_query);
                                    $row = $name_result->fetch_assoc();

                                    ?>
                                    <div>
                                        <h5 class="text-lg font-semibold mb-6">
                                            <?php echo $row['site_key'];
                                            ?>
                                        </h5>
                                        <p class="text-base text-body-color">
                                            <?php echo $row['site_value'];
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 w-full lg:w-5/12 xl:w-4/12">

                        <div class="shadow-testimonial rounded-lg bg-white py-10 px-8 md:p-[60px] lg:p-10 2xl:p-[60px] sm:py-12 sm:px-10 lg:py-12 lg:px-10 wow fadeInUp" data-wow-delay=".2s">
                            <?php
                            if (isset($_POST['submit'])) {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $message = $_POST['message'];
                                if ($name != "" && $email != "" && $phone != "" && $message != "") {
                                    $query = "INSERT INTO contact (name,email,phone,message) VALUES('$name','$email','$phone','$message')";
                                    $result = mysqli_query($conn, $query);
                                    if ($result) {
                            ?>
                                        <               
<div id="toast-success" class="flex   fixed z-50 right-10 bottom-32 items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Message send successfully.</div>
    <button type="button" id="notice-close" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>



                            <?php
                                    } else {
                                        ?>
                                        <!-- error notice -->
    <div id="toast-warning" class="flex  fixed z-50 right-10 bottom-32 items-center p-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">

    <div class="inline-flex flex-shrink-0 justify-cente r items-center w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Warning icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Error while sending message</div>
    <button type="button" id="notice-close" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>
                                        <?php
                                    }
                                }
                            }
                            ?>
                            <h3 class="font-semibold mb-8 text-2xl md:text-[26px]">
                                Send us a Message
                            </h3>

                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="mb-6">
                                    <label for="fullName" class="block text-xs text-dark">Full Name*</label>
                                    <input required type="text" name="name" placeholder="Adam Gelius" class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="block text-xs text-dark">Email*</label>
                                    <input required type="email" name="email" placeholder="example@yourmail.com" class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
                                </div>
                                <div class="mb-6">
                                    <label required for="phone" class="block text-xs text-dark">Phone*</label>
                                    <input type="text" name="phone" placeholder="+885 1254 5211 552" class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4" />
                                </div>
                                <div class="mb-6">
                                    <label required for="message" class="block text-xs text-dark">Message*</label>
                                    <textarea required type="text" name="message" rows="1" placeholder="type your message here" class="w-full border-0 border-b border-[#f1f1f1] focus:border-primary focus:outline-none py-4 resize-none"></textarea>
                                </div>
                                <div class="mb-0">
                                    <button type="submit" name="submit" class="inline-flex items-center justify-center py-4 px-6 rounded text-white bg-blue-600 text-base font-medium hover:bg-lite transition duration-300 ease-in-out">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Contact End ====== -->
    </main>

    <footer class="bg-teal-700">
        <div class="footer-container grid grid-cols-3 py-9 ">
            <div class="website-detail ml-20">
                <div class="logo w-48 -mt-7">
                    <img src="./assets/img/logo.png" alt="">
                </div>
                <div class="flex space-x-3 mt-7">
                    <h1 class="font-bold text-white">Contact Us on</h1> <span class="text-teal-200">(123) 234-7150</span>
                </div>
                <div class="logo-link text-black mt-2">
                    <i class="fa-brands fa-facebook-f p-2 bg-teal-50 rounded-lg"></i>
                    <i class="fa-brands fa-instagram p-2 bg-teal-50 rounded-lg"></i>
                    <i class="fa-brands fa-twitter p-2 bg-teal-50 rounded-lg"></i>
                </div>
            </div>
            <div class="navbar-links text-center text-white space-y-1">
                <span class="text-lg font-semibold">UseFul Links</span>
                <h1 class="text-base hover:text-xl hover:font-semibold"><a href="../public/index.php">Home</a> </h1>
                <h1 class="hover:text-xl hover:font-semibold"><a href="../public/index.php">Article</a></h1>
                <h1 class="hover:text-xl hover:font-semibold"><a href="../public/index.php#contact">Contact</a></h1>
                <h1 class="hover:text-xl hover:font-semibold"><a href="../public/index.php#faq">FAQ</a></h1>
            </div>
            <div class="footer-address text-white text-center space-y-1">
                <h1 class="text-lg font-semibold">Address</h1>
                <h2 class="text-sm font-medium">127 USA</h2>
                <h2 class="text-sm font-medium text-white">London USA</h2>
            </div>

        </div>
        <div>
            <h1 class="text-center text-white font-light py-5">All rights reserved by @jobminis 2020</h1>
        </div>

    </footer>
    <script type="text/javascript" src="../assets/js/jQuery.js"></script>
    <script>
        $("#notice-close").click(function(){
            $("#toast-success").addClass("hidden");
            $("#toast-warning").addClass("hidden");

        })

        </script>

</body>

</html>