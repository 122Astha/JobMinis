<?php
include('../layouts/header.php');
require('../connection/config.php');
@session_start();

?>

<div class="div ">

    <div id="signup" class="container mt-20 ">

        <div class="lg:flex g-0">
            <div class="lg:w-6/12  ml-32 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none   bg-teal-50">
                <img src="../../assets/img/login.png" alt="">
            </div>
            <div class="lg:w-6/12 ml-10 px-10 md:px-0 ">
                <div class="md:p-12 md:mx-6 ">
                    <div class="text-center ">
                        <h4 class="text-3xl font-semibold mt-1 mb-12 pb-1 ">Sign Up</h4>
                    </div>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 'error') {
                            # code...

                            # code...
                    ?>

                            <div class="alert text-white text-sm bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Please provide valid email and password</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                        <?php
                        }
                        if ($_GET['msg'] == "password") {
                            # code...
                        ?>
                            <div class="alert text-sm text-white bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Password and Confirm Password does not match</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                        <?php
                        }
                        if ($_GET['msg'] == "Error") {
                            # code...
                        ?>
                            <div class="alert text-sm text-white bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Cannot sign up</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                    <?php
                        }
                    }
                    ?>
                    <form method="post" action="../process/signUp.php" enctype="multipart/form-data">
                        <div class="mb-4 ">
                            <input type="email" name="email" class="form-control block w-full rounded-full px-5 py-4 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Email " />
                        </div>
                        <div class="mb-4 ">
                            <input type="password" name="password" class="form-control block w-full rounded-full px-5 py-4 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Password" />
                        </div>
                        <div class="mb-4 ">
                            <input type="password" name="confirmpassword" class="form-control block w-full rounded-full px-5 py-4 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Confirm Password " />
                        </div>
                        <div class="text-center pt-1 mb-12 pb-1 ">
                            <button type="submit" name="submit" value="submit" class="inline-block px-3 py-5 text-white font-medium text-10 rounde rounded-full  leading-tight uppercase shadow-md hover:bg-teal-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg
                        transition duration-150 ease-in-out w-full mb-3  bg-teal-500 " id="signUpbtn" data-mdb-ripple="true " data-mdb-ripple-color="light ">
                                Sign up
                            </button>

                        </div>
                        <div class=" items-center justify-between pb-6 text-center ">
                            <p class="mb-0 mr-2 text-center">Already have a account?</p>
                            <a href="login.php" class="mb-0 mr-2 text-center text-teal-400 ">Sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="username-wrapper bg-teal-50 h-screen " id="signupDetail">

        <div id="username" class="content absolute w-4/12 h-4/6 py-12 mx-auto mt-8 left-1/3 rounded-md shadow-lg shadow-gray-500 bg-white">
            <div class="header-logo flex justify-between">
                <button id="backToSign" onclick="BackSign()">
                    <i class="fa-solid fa-chevron-left absolute ml-10 text-gray-400 -mt-2"></i>
                </button>
                <img src="../../assets/img/logo.png" class="w-2/3 -mt-10 -mb-10 mx-auto" alt="">
            </div>
            <div class="username-info mx-10 mt-6">
                <?php
                if (isset($_GET['msg'])) {
                    if ($_GET['msg'] == 'usernameError') {
                        # code...

                        # code...
                ?>
                        <div class="alert text-sm text-white bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Username cannot be empty</strong>
                        </div>

                        <script>
                            $(".alert").alert();
                        </script>
                <?php
                    }
                }
                ?>
                <form method="post" action="../process/signUp.php" enctype="multipart/form-data" class="space-y-7">
                    <h1 class="text-xl font-bold mb-3">Choose a username</h1>
                    <span class="text-gray-600 text-sm font-light">Please note a username cannot be changed once choose</span>
                    <input type="text" name="username" placeholder="Username" class="border border-gray-400 p-2 w-full placeholder:pl-4 rounded-md">
                    <div class="m-auto pt-3">
                        <button type="submit" name="submit1" value="submit1" id="usernameBtn" class="bg-teal-500 rounded-full text-white text-md w-full font-semibold text-center p-3">Next</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="accountType" class=" content absolute w-4/12 h-4/6 py-10 mx-auto mt-8 left-1/3 rounded-md shadow-lg shadow-gray-500 bg-white">
            <div class="header-logo flex justify-between">
                <button id="backToUsername" onclick="BackUsername()">
                    <i class="fa-solid fa-chevron-left absolute ml-10 text-gray-400 -mt-2"></i>
                </button>
                <img src="../../assets/img/logo.png" class="w-2/3 -mt-10 -mb-10 mx-auto" alt="">
            </div>
            <div class="account-info mx-10 mt-8 ">
                <form method="post" action="../process/signUp.php" enctype="multipart/form-data" class="space-y-9">
                    <h1 class="text-xl font-bold mb-3">Select Account type</h1>

                    <div class="type grid grid-cols-2 gap-4">
                        <button type="submit" name="account" value="work">

                            <div class="type1 border bg-white shadow text-center shadow-gray-500 hover:shadow-lg hover:shadow-gray-600 py-6 rounded-2xl">
                                <i class="fa-solid fa-user-nurse text-3xl text-teal-700"></i>
                                <h1 class="text-base font-medium">I want to work</h1>

                                <i class="fa-solid fa-arrow-right text-xl text-blue-600 pt-3"></i>
                            </div>
                        </button>
                        <button type="submit" name="account" value="hire">
                            <div class="type2 border shadow text-center shadow-gray-500 hover:shadow-lg hover:shadow-gray-600 bg-white py-6 rounded-2xl">
                                <i class="fa-solid fa-address-card text-3xl text-teal-700"></i>
                                <h1 class="text-base font-medium">I want to hire</h1>
                                <i class="fa-solid fa-arrow-right text-xl text-blue-600 pt-3"></i>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div id="skillSelect" class=" content absolute md:w-5/12 w-6/12 h-4/6 py-10 mx-auto mt-8 left-1/3 rounded-md shadow-lg shadow-gray-500 bg-white">
            <div class="header-logo flex justify-between">
                <button id="backToAccount" onclick="BackAccount()">
                    <i class="fa-solid fa-chevron-left absolute ml-10 text-gray-400 -mt-2"></i>
                </button>
                <img src="../../assets/img/logo.png" class="w-2/3 -mt-10 -mb-10 mx-auto" alt="">
            </div>

            <!-- select skill -->
            <div class="skill-select mx-10 mt-8 ">
                <form id="skillForm" class="space-y-9">
                    <h1 class="text-xl font-bold mb-3">Choose Skills you have</h1>

                    <div class="type">
                    <div class="w-full flex flex-col items-center h-20 mx-auto">
    <div class="w-full px-4">
        <div class="flex flex-col items-center relative">
            <div class="w-full  svelte-1l8159u" id="response">
                <div class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                    <div class="flex flex-auto flex-wrap" id="skillTitle">
                       
                        <div class="flex-1 h-8 w-full overflow-x-scroll overflow-y-scroll">
                            <input placeholder="" class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800">
                        </div>
                    </div>
                    <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">
                        <button class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up w-4 h-4">
                                <polyline points="18 15 12 9 6 15"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
           
<ul class="w-full h-44 overflow-y-scroll -mt-2 text-sm font-medium text-gray-900 bg-white rounded-b-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input  type="checkbox" id="Vue js" name="skill" value="Vue js" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue js" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input  type="checkbox" id="PHP" name="skill" value="PHP" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="PHP" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input  type="checkbox" id="phython" name="skill" value="phython" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="phython" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input  type="checkbox" id="laravel" name="skill" value="laravel" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="laravel" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Vue JS</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input  type="checkbox" id="react" name="skill" value="react" class="w-4 h-4 skill text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="react" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">React</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input  type="checkbox" id="angular" name="skill" value="angular" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="angular" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Angular</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input  type="checkbox" id="tailwindcss" name="skill" value="tailwindcss" class="w-4 skill h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="tailwindcss" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Laravel</label>
        </div>
    </li>
</ul>

        </div>
    </div>
</div>
<button id="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="../../assets/js/frontend.js"></script>
<script type="text/javascript" src="../../assets/js/jQuery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".skill").change(function(e){
           
            e.preventDefault();
    var skills = [];
    skills.push($(this).val());
    $(".skill:checkbox").each(function(){
        if ($(this).is(":checked")) {
           
            
            console.log('#'+$(this).val());
            $("#skillTitle").append     ('<div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">'
                          +  '<div class="text-xs font-normal leading-none max-w-full flex-initial">' + $(this).val() + '</div>'
                           + '<div class="flex flex-auto flex-row-reverse">'
                             +   '<div>'
                                 +   '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-teal-400 rounded-full w-4 h-4 ml-2">'
                                    +    '<line x1="18" y1="6" x2="6" y2="18">' + '</line>'
                                       + '<line x1="6" y1="6" x2="18" y2="18">' + '</line>'
                                  +  '</svg>'
                              +  '</div>'
                           + '</div>'
                      +  '</div>' )
        }
    });
        })
    })
</script>
</body>

</html>