<?php
require('../../connection/config.php');
require('../inc/header.php');
require('../inc/navbar.php');
$userId = $_SESSION['userId'];
?>


<main class="bg-white h-full w-full mt-28 fixed">
    <div class="setting-wrapper grid grid-cols-12 h-full w-11/12 mx-auto">
        <aside class="col-span-3 h-full" aria-label="Sidebar">
            <div class="overflow-y-auto py-4 px-3 fixed h-full bg-gray-50 rounded dark:bg-gray-800">
                <h1 class="my-3 text-2xl font-semibold text-center">Settings</h1>
                <ul class="space-y-2">
                    <li>
                        <a href="#skill" id="show-personal-info" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Personal Information</span>
                        </a>
                    </li>
                    <li>
                        <a href="#password-reset" id="show-password" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">About</span>
                        </a>
                    </li>

                </ul>
            </div>
        </aside>
        <aside class="col-span-9  h-full">
            <div class="py-4 px-3">
                <div class="password-reset hidden mt-12 h-full" id="password-reset">
                    <div class="flex justify-center gap-5 py-5">
                        <img src="../uploads/image-removebg-preview(4)1655989779.png" class="w-16 h-16 rounded-full" alt="">
                        <h1 class="text-xl font-medium mt-5">Full Name</h1>
                    </div>
                    <hr>
                    <form action="" method="post">
                        <div class="old-password p-4">
                            <label for="">Old Password</label>
                            <input type="password" class="w-2/4 ml-14">
                        </div>
                        <hr>
                        <div class="new-password p-4">
                            <label for="">New Password</label>
                            <input type="password" class="w-2/4 ml-14">
                        </div>
                        <hr>
                        <div class="confirm-password p-4">
                            <label for="">Confirm Password</label>
                            <input type="password" class="w-2/4 ml-8">
                        </div>
                        <button type="submit" class="bg-blue-600 text-white text-lg px-6 font-medium rounded-lg flex text-center mx-auto p-2">Change Password</button>
                        <span class="my-2 pl-5 text-base text-blue-700 text-center items-center mx-auto"><a href="" class="text-center">Forget your password ?</a></span>
                    </form>
                </div>
<div class="" id="skill">
                <div class="about mt-12 h-full" >

                    <div class="skill p-8">
                        <label for="" class="text-lg font-semibold">Skills</label>
                        <div class=" flex justify-start gap-3 my-2 ml-7">
                            <?php
                            $query = "SELECT * FROM user_skill INNER JOIN skills ON user_skill.skill_id = skills.id WHERE user_skill.user_id = '$userId'";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) > 0) {
                                # code...

                                while ($row1 = mysqli_fetch_assoc($result)) {
                            ?>
                                    <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black"><?php $row1['name']  ?></h1>
                            <?php
                                }
                            }
                            ?>
                        </div>

                        <div class="w-5/6 px-4 hidden" id="skillCheckbox">
                            <div class="flex flex-col items-center relative">
                                <div class="w-full  svelte-1l8159u" id="response">
                                    <div class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                                        <div class="flex flex-auto flex-wrap" id="skillTitle">
                                            <!-- <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                            <div class="text-xs font-normal leading-none max-w-full flex-initial">HTML</div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-teal-400 rounded-full w-4 h-4 ml-2">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div> -->
                                            <!-- <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                            <div class="text-xs font-normal leading-none max-w-full flex-initial">Ruby</div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-teal-400 rounded-full w-4 h-4 ml-2">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div> -->
                                            <!-- <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                            <div class="text-xs font-normal leading-none max-w-full flex-initial">Javascript</div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-teal-400 rounded-full w-4 h-4 ml-2">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div> -->
                                            <div class="flex-1 h-8 w-full overflow-x-scroll overflow-y-scroll">
                                                <input placeholder="Choose your skills..." class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800">
                                            </div>
                                        </div>
                                        <div class="text-gray-300 w-20 py-1 pl-3 pr-1 bg-blue-700 border-l flex items-center border-gray-200 svelte-1l8159u">
                                            <button class="cursor-pointer w-8 h-8 text-white font-semibold outline-none focus:outline-none" type="submit" name="submit">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <ul class="w-full h-44 overflow-y-scroll -mt-2 text-sm font-medium text-gray-900 bg-white rounded-b-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input type="checkbox" id="Vue js" name="skill" value="Vue js" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="vue js" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
                                        </div>
                                    </li>
                                    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input type="checkbox" id="PHP" name="skill" value="PHP" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="PHP" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
                                        </div>
                                    </li>
                                    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input type="checkbox" id="phython" name="skill" value="phython" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="phython" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
                                        </div>
                                    </li>
                                    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input type="checkbox" id="laravel" name="skill" value="laravel" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="laravel" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
                                        </div>
                                    </li>
                                    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input type="checkbox" id="react" name="skill" value="react" class="w-4 h-4 skill text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="react" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">React</label>
                                        </div>
                                    </li>
                                    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input type="checkbox" id="angular" name="skill" value="angular" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="angular" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Angular</label>
                                        </div>
                                    </li>
                                    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input type="checkbox" id="tailwindcss" name="skill" value="tailwindcss" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="tailwindcss" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Laravel</label>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="flex justify-between w-4/5 mt-4">
                            <h3 class="text-sm ml-7 my-3 text-blue-600 font-medium"><button id="skill" class="focus:outline-none">Add new skills</button></h3>
                            <button id="cancel" class="bg-red-500 hidden text-white font-semibold p-2 rounded-lg">Cancel</button>
                        </div>
                        <!-- cancel alert box-->
                        <div id="alert-additional-content-2" class="p-4 hidden z-20 top-44 mb-4 border border-red-300 w-3/6 md:w-2/6 md:ml-20 absolute rounded-lg bg-red-50 dark:bg-red-200" role="alert">
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="w-5 h-5 mr-2 text-red-900 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <h3 class="text-lg font-medium text-red-900 dark:text-red-800">Cancel choosen skill</h3>
                            </div>
                            <div class="mt-2 mb-4 text-sm text-red-900 dark:text-red-800">
                                Are you sure your want to cancel the selected skill ? </div>
                            <div class="flex">
                                <button type="button" id="back" class="text-white bg-red-900 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-red-800 dark:hover:bg-red-900">
                                    <svg aria-hidden="true" class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Back
                                </button>
                                <button type="button" id="proceed" class="text-red-900 bg-transparent border border-red-900 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-red-800 dark:text-red-800 dark:hover:text-white" data-dismiss-target="#alert-additional-content-2" aria-label="Close">
                                    Proceed
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="Education p-8">
                    <label for="" class="text-lg font-semibold">Education</label>
                    <div class=" flex justify-start gap-3 my-2 ml-7">
                        <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black">+2</h1>
                        <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black">BCA</h1>

                    </div>
                    <h3 class="text-sm ml-7 my-3 text-blue-600 font-medium"><a href="">Add new education</a></h3>
                    <input type="text" class="w-2/4 ml-20 hidden">
                </div>
                <hr>
                <div class="favourite p-8">
                    <label for="" class="text-lg font-semibold">Favourite</label>
                    <div class=" flex justify-start gap-3 my-2 ml-7">
                        <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black">Food</h1>
                        <h1 class="bg-blue-100 p-2 px-5 rounded-lg font-medium text-sm text-black">TT</h1>

                    </div>
                    <h3 class="text-sm ml-7 my-3 text-blue-600 font-medium"><a href="">Add new favourite</a></h3>
                    <input type="text" class="w-2/4 ml-12 hidden">
                </div>
            </div>


    </div>
    </aside>

    </div>
</main>
<script type="text/javascript" src="../../../dist/js/jQuery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#skill').click(function() {
            $('#skillCheckbox').removeClass("hidden");
            $('#cancel').removeClass("hidden");
        })
        $('#cancel').click(function() {
            $('#alert-additional-content-2').removeClass("hidden");

        })
        $('#back').click(function() {
            $('#alert-additional-content-2').addClass("hidden");
        })
        $('#proceed').click(function() {
            $('#alert-additional-content-2').addClass("hidden");
            $('#skillCheckbox').addClass("hidden");
            $('#cancel').addClass("hidden");

        })

        $('#show-personal-info').click(function() {

            $('#skill').removeClass("hidden");
            $('#password-reset').addClass("hidden");
        });

        $('#show-password').click(function() {

            $('#password-reset').removeClass("hidden");
            $('#skill').addClass("hidden");

        });
    });
</script>