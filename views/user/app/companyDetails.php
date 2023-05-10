<?php
@session_start();
require('../../connection/secure_user.php');
include '../inc/header.php';
require('../inc/navbar.php');
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
                        <img src="../../../assets/img/business-team-members-standing-over-260nw-1397307989.webp" class="rounded-3xl w-full" alt="">
                        <img src="../../../public/maxresdefault.jpeg" class="absolute -mt-28 rounded-3xl ml-5" width="120" alt="">
                    </div>
                    <div class="about my-12">
                        <h1 class="text-2xl font-bold mb-10">Orgware Construct</h1>
                        <p class="text-base font-light text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint autem nam animi dolore consequuntur aspernatur sit, nemo alias culpa neque cupiditate unde quas laborum, mollitia inventore? Incidunt quia optio doloribus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quia libero vel quas vero nesciunt voluptate sit eaque suscipit, molestiae consequatur perferendis deleniti hic in? Ratione repellat dolorem sequi non? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut blanditiis, nostrum expedita laborum distinctio voluptate vel asperiores fugiat quaerat dolor eum tempore non deserunt porro temporibus quam. Molestias, recusandae aperiam.</p>
                        <div class="gallery grid grid-cols-2 my-12 gap-8">
                            <img src="../../../public/business-team-members-standing-over-260nw-1397307989.webp" class="rounded-3xl" alt="">
                            <img src="../../../public/pexels-photo-269077.jpeg" class="rounded-3xl" alt="">
                        </div>

                    </div>
                </div>
                <div class="company-info md:col-span-3 col-span-12 space-y-7">
                    <div class="info-detail bg-blue-50 p-10 space-y-6 rounded-3xl">
                        <div class="industry space-y-1">
                            <h1 class="text-sm text-gray-600 font-extralight">Industry</h1>
                            <h2 class="font-medium">Software</h2>
                        </div>
                        <div class="company-size space-y-1">
                            <h1 class="text-sm text-gray-600 font-extralight">companysize</h1>
                            <h2 class="font-medium">50-100</h2>
                        </div>
                        <div class="founded space-y-1">
                            <h1 class="text-sm text-gray-600 font-extralight">Founded in</h1>
                            <h2 class="font-medium">2005</h2>
                        </div>
                        <div class="phone space-y-1">
                            <h1 class="text-sm text-gray-600 font-extralight">Phone</h1>
                            <h2 class="font-medium">98523577643</h2>
                        </div>
                        <div class="email space-y-1">
                            <h1 class="text-xs text-gray-600 font-extralight">Email</h1>
                            <h2 class="font-medium">creativevenue@gmail.com</h2>
                        </div>
                        <div class="location space-y-1">
                            <h1 class="text-sm text-gray-600 font-extralight">Location</h1>
                            <h2 class="font-medium">Paris</h2>
                        </div>
                        <div class="links">
                            <i class="fa-brands fa-facebook-f p-2 bg-teal-50 rounded-lg hover:bg-teal-700 hover:text-white"></i>
                            <i class="fa-brands fa-instagram p-2 hover:bg-teal-700 hover:text-white bg-teal-50 rounded-lg"></i>
                            <i class="fa-brands fa-twitter p-2 bg-teal-50 rounded-lg hover:bg-teal-700 hover:text-white"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="available-job my-10 mx-5">
                <h1 class="text-3xl font-bold">Available Jobs</h1>
                <div class="job-list my-5 gap-7 grid md:grid-cols-2 grid-cols-1">
                    <div class="job-card border border-gray-400 hover:shadow hover:shadow-gray-400 rounded-3xl">
                        <div class="job-title p-4 py-7 flex gap-5">
                            <div class="title space-y-2">
                                <h1 class="text-lg font-semibold">Technical Support Engineer</h1>
                                <div class="place flex gap-9">
                                    <div class="flex gap-3">
                                        <i class="fa-solid fa-earth-americas "></i>
                                        <h2 class="text-sm font-medium">Paris, France</h2>
                                    </div>

                                    <h2 class="text-sm font-light">Full Time</h2>
                                </div>
                            </div>
                        </div>
                        <div class="time text-sm text-gray-500 font-extralight mb-4 text-right mr-12">
                            <h2 class="text-xs">3 days ago by <strong>Craftagencies</strong> </h2>
                        </div>
                    </div>
                    <div class="job-card border border-gray-400 hover:shadow hover:shadow-gray-400 rounded-3xl">
                        <div class="job-title p-4 py-7 flex gap-5">
                            <div class="title space-y-2">
                                <h1 class="text-lg font-semibold">Software Manager</h1>
                                <div class="place flex gap-9">
                                    <div class="flex gap-3">
                                        <i class="fa-solid fa-earth-americas "></i>
                                        <h2 class="text-sm font-medium">Paris, France</h2>
                                    </div>

                                    <h2 class="text-sm font-light">Full Time</h2>
                                </div>
                            </div>
                        </div>
                        <div class="time text-sm text-gray-500 font-extralight mb-4 text-right mr-12">
                            <h2 class="text-xs">3 days ago by <strong>Craftagencies</strong> </h2>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>
    </div>
</main>
<?php
include '../inc/footer.php'
?>