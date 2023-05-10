<?php
include '../views/layouts/header.php';
include '../views/layouts/nav.php';
include '../views/connection/config.php';
?>

<main>
    <section class="" id="home">
        <div class="main-content py-16 bg-teal-50">
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
                            <input type="text" class="p-3 w-5/6 bg-white" placeholder="Job Title or Keyword">
                            <i class="fa-solid fa-magnifying-glass text-white p-4 rounded-full bg-teal-700"></i>
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
                <div class="photo_icon col-span-1 w-full pl-48">
                    <div class="photo_content absolute top-28 w-1/5 rounded-3xl bg-gradient-to-b from-zinc-800 z-50 to-gray-200 h-3/6">
                        <img src="../views/admin/uploads/image-removebg-preview(5)1655989739.png" class="py-16" alt="" width="1000">
                       
                    </div>

                    <div class="div1 w-1/5 origin-bottom-left z-10 rotate-6 rounded-3xl h-3/6 bg-blue-900 absolute top-28"></div>
                    <div class="div2 w-1/5 origin-bottom-left rotate-12 rounded-3xl h-3/6 bg-teal-700 absolute top-28"></div>
                </div>

        </div>
    <?php
            }
    ?>
    </div>
    </section>

    <!-- search by category started-->
    <section>
        <div class="search-wrapper text-center">
            <div class="search-title my-20 bg-white">
                <h1 class="text-5xl font-extrabold mb-4">Search by Category</h1>
                <span class="font-serif text-gray-500 font-medium text-xl">Search your career oppourtunity here</span>
            </div>
            <div class="search-container mx-10 grid grid-cols-4 space-x-7">
                <div class="search-card bg-teal-50 p-8 rounded-3xl col-span-1 ">
                    <div class="job-logo w-24 mx-auto rounded-3xl bg-white">

                        <i class="fa-solid text-black text-center text-4xl p-6  fa-business-time"></i>
                    </div>
                    <div class="job-title text-lg font-semibold">
                        <h2>Business</h2>
                    </div>
                    <div class="total-job text-sm font-extralight my-10">
                        <span>133 jobs available</span>
                    </div>
                </div>
                <div class="search-card bg-teal-50 p-8 rounded-3xl col-span-1 ">
                    <div class="job-logo w-24 mx-auto rounded-3xl bg-white">

                        <i class="fa-solid fa-business-time text-black text-center text-4xl p-6"></i>
                    </div>
                    <div class="job-title text-lg font-semibold">
                        <h2>Business</h2>
                    </div>
                    <div class="total-job text-sm font-extralight my-10">
                        <span>133 jobs available</span>
                    </div>
                </div>
                <div class="search-card bg-teal-50 p-8 rounded-3xl col-span-1 ">
                    <div class="job-logo w-24 mx-auto rounded-3xl bg-white">

                        <i class="fa-solid fa-business-time text-black text-center text-4xl p-6"></i>
                    </div>
                    <div class="job-title text-lg font-semibold">
                        <h2>Business</h2>
                    </div>
                    <div class="total-job text-sm font-extralight my-10">
                        <span>133 jobs available</span>
                    </div>
                </div>
                <div class="search-card bg-teal-50 p-8 rounded-3xl col-span-1 ">
                    <div class="job-logo w-24 mx-auto rounded-3xl bg-white">

                        <i class="fa-solid fa-business-time text-black text-center text-4xl p-6"></i>
                    </div>
                    <div class="job-title text-lg font-semibold">
                        <h2>Business</h2>
                    </div>
                    <div class="total-job text-sm font-extralight my-10">
                        <span>133 jobs available</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="search-button mx-auto mt-10 p-3 flex space-x-3 hover:w-52  bg-teal-700 rounded-3xl w-48 ">
            <button class=" rounded-3xl text-white text-lg font-semibold text-center">All Categories</button>

            <i class="fa-solid fa-chevron-right text-md mt-2 font-semibold text-white"></i>
        </div>
    </section>
    <!-- end of search by category -->

    <!-- beginning of feature job -->
    <section>
        <div class="search-wrapper my-12 text-center pb-10 bg-amber-50">
            <div class="search-title pt-24 pb-20 ">
                <h1 class="text-5xl font-extrabold mb-4">Featured Job Offer</h1>
                <span class="font-serif text-gray-500 font-medium text-lg">Search your career oppourtunity here</span>
            </div>
            <div class="job-container mx-10 py-9 grid grid-cols-2 gap-9">
                <div class="job-card group bg-white p-8 rounded-3xl col-span-1 space-y-6 ">
                    <div class="job-title flex space-x-4">
                        <i class="fa-solid fa-bullhorn bg-teal-50 rounded-lg group-hover:bg-teal-600 group-hover:text-white p-2"></i>
                        <h1 class="font-light group-hover:text-teal-600 text-md">Marketing and Communication</h1>
                    </div>
                    <div class="job-position font-semibold">
                        <h1 class="text-lg text-left">Senior Manager</h1>
                    </div>
                    <div class="job-place flex space-x-6">
                        <div class="flex space-x-3">
                            <i class="fa-solid fa-earth-asia"></i>
                            <h1 class="text-sm font-semibold text-left">San Francisco, CA</h1>
                        </div>
                        <span class="text-sm font-light">Full Time</span>

                    </div>
                    <div class="job-time flex space-x-6">

                        <span class="text-sm text-gray-500 font-light">3 days ago</span>
                        <div class="company-logo">

                        </div>

                    </div>
                </div>
                <div class="job-card group bg-white p-8 rounded-3xl col-span-1 space-y-6 ">
                    <div class="job-title flex space-x-4">
                        <i class="fa-solid fa-bullhorn bg-teal-50 rounded-lg group-hover:bg-teal-600 group-hover:text-white p-2"></i>
                        <h1 class="font-light group-hover:text-teal-600 text-md">software Developer</h1>
                    </div>
                    <div class="job-position font-semibold">
                        <h1 class="text-lg text-left">Senior Manager</h1>
                    </div>
                    <div class="job-place flex space-x-6">
                        <div class="flex space-x-3">
                            <i class="fa-solid fa-earth-asia"></i>
                            <h1 class="text-sm font-semibold text-left">San Francisco, CA</h1>
                        </div>
                        <span class="text-sm font-light">Full Time</span>

                    </div>
                    <div class="job-time flex space-x-6">

                        <span class="text-sm text-gray-500 font-light">3 days ago</span>
                        <div class="company-logo">

                        </div>

                    </div>
                </div>
                <div class="job-card group bg-white p-8 rounded-3xl col-span-1 space-y-6 ">
                    <div class="job-title flex space-x-4">
                        <i class="fa-solid fa-bullhorn bg-teal-50 rounded-lg group-hover:bg-teal-600 group-hover:text-white p-2"></i>
                        <h1 class="font-light group-hover:text-teal-600 text-md">Scientist</h1>
                    </div>
                    <div class="job-position font-semibold">
                        <h1 class="text-lg text-left">Senior Researcher</h1>
                    </div>
                    <div class="job-place flex space-x-6">
                        <div class="flex space-x-3">
                            <i class="fa-solid fa-earth-asia"></i>
                            <h1 class="text-sm font-semibold text-left">San Francisco, CA</h1>
                        </div>
                        <span class="text-sm font-light">Part Time</span>

                    </div>
                    <div class="job-time flex space-x-6">

                        <span class="text-sm text-gray-500 font-light">3 days ago</span>
                        <div class="company-logo">

                        </div>

                    </div>
                </div>
                <div class="job-card group bg-white p-8 rounded-3xl col-span-1 space-y-6 ">
                    <div class="job-title flex space-x-4">
                        <i class="fa-solid fa-bullhorn bg-teal-50 rounded-lg group-hover:bg-teal-600 group-hover:text-white p-2"></i>
                        <h1 class="font-light group-hover:text-teal-600 text-md">Marketing and Communication</h1>
                    </div>
                    <div class="job-position font-semibold">
                        <h1 class="text-lg text-left">Senior Manager</h1>
                    </div>
                    <div class="job-place flex space-x-6">
                        <div class="flex space-x-3">
                            <i class="fa-solid fa-earth-asia"></i>
                            <h1 class="text-sm font-semibold text-left">San Francisco, CA</h1>
                        </div>
                        <span class="text-sm font-light">Full Time</span>

                    </div>
                    <div class="job-time flex space-x-6">

                        <span class="text-sm text-gray-500 font-light">3 days ago</span>
                        <div class="company-logo">

                        </div>

                    </div>
                </div>

            </div>
            <div class="search-button mx-auto  p-3 flex hover:w-52 space-x-3 bg-teal-700 rounded-3xl w-48 ">
                <button class=" rounded-3xl text-white text-lg font-semibold pl-3 text-center">All Job Offers</button>

                <i class="fa-solid fa-chevron-right text-md mt-2 font-semibold text-white"></i>
            </div>
        </div>

    </section>
    <!-- end of feature job -->

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
        <div class="absolute z-[-1] w-full h-1/2 lg:h-[45%] xl:h-1/2 bg-teal-50 top-0 left-0 pattern-body"></div>
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
                                    <div class="bg-teal-100 fixed right-0 bottom-16 rounded-xl p-3 mt-2 transform ease-in-out -translate-x-1 scale-110 duration-700 transition delay-300">
                                        <p class="text-base font-bold">Success</p>
                                        <p class="text-sm text-gray-400">Contact is added successfully.</p>
                                    </div>
                        <?php
                                } else {
                                    echo "Contact couldn't added successfully.";
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
<?php
include '../views/layouts/footer.php'
?>