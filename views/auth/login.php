<?php
@session_start();
include ('../layouts/header.php');
require('../connection/config.php');
?>

<body>
    <div class="container mt-28">
        <div class="lg:flex g-0">
            <div class="lg:w-6/12  ml-32 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none   bg-teal-50">
                <img src="../../public/assets/img/login.png" alt="">
            </div>
            <div class="lg:w-6/12 ml-10 px-10 md:px-0 ">
                <div class="md:p-12 md:mx-6 ">
                    <div class="text-center ">
                        <h4 class="text-3xl font-semibold mt-1 mb-12 pb-1 ">Sign In</h4>
                    </div>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg']=='error') {
                            # code...
                        
                        # code...
                    ?>

                               <div class="alert text-white text-sm bg-red-400 p-3 mx-10 rounded-md my-4 alert-dismissible fade show" role="alert">
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
                                    if ($_GET['msg']=="loginerror") {
                                        # code...
                                        ?>
                                           <div class="alert text-sm text-white mx-10 bg-red-400 p-3 rounded-md my-4 alert-dismissible fade show" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <strong>Your email or credentials are not matched.</strong> 
                                    </div>
                                    
                                    <script>
                                      $(".alert").alert();
                                    </script>
                                    
                                        <?php
                                    }
                                
                                    }
                                    ?>
                                    <?php
                                        if(isset($_GET['msg'])){
                                            $msg= $_GET['msg'];
                                            if($msg=='invaliduser')
                                            {
                                               ?>
                                                       <div class="alert alert-danger alert-dismissible fade show"  role="alert">
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                         </button>
                                                         <strong>You are invalid user You need permission to access those pages. Please first login.</strong> 
                                                         </div>
                        
                                                         <script>
                                                            $(".alert").alert();
                                                        </script>
                                               <?php
                                            }
                                        }
?>
                    <form class="user"  action="../process/loginprocess.php" method="POST" enctype="multipart/form-data" >
                        <div class="mb-4 ">
                            <input type="email " name="email" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none "  placeholder="Email " />
                        </div>
                        <div class="mb-4 ">
                            <input type="password" name="password" class="form-control block w-full rounded-full px-3 py-5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-blue-600 focus:outline-none "  placeholder="Password " />
                        </div>
                        <div class="text-center pt-1 mb-12 pb-1 ">
                            <button class="inline-block px-3 py-5 text-white font-medium text-10 rounde rounded-full  leading-tight uppercase shadow-md hover:bg-teal-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg
                        transition duration-150 ease-in-out w-full mb-3  bg-teal-500 " type="submit " data-mdb-ripple="true " data-mdb-ripple-color="light " name="login" >
                    Log in
                  </button>
                            <a class="text-teal-400 " href="pswdindex.php ">Forgot password?</a>
                        </div>
                        <div class=" items-center justify-between pb-6 text-center ">
                            <p class="mb-0 mr-2 text-center">New to JobMinis?</p>
                            <a href="signup.php" class="mb-0 mr-2 text-center text-teal-400 ">Create an accounts</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>