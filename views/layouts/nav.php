<?php
include '../layouts/header.php'
?>
<header>
    <nav class="navigation bg-transparent z-50 top-0 w-full fixed">
        <div class=" header_wrapper flex justify-between mx-10">
            <div class="logo w-48 -mt-7 ml-12  ">
                <img src="../../public/logo.png" alt="">
            </div>
            <div class="navbar">
                <ul class="flex justify-evenly space-x-5 mt-5 text-lg font-semibold">
                    <li class="p-2 hover:text-teal-500 "><a href="../app/">Home</a> </li>
                    <li class="p-2 hover:text-teal-500"><a href="../app/article.php"> Article</a></li>
                    <!-- <li class="p-2 hover:text-teal-500"><a href="">About Us</a> </li> -->
                    <li class="p-2 hover:text-teal-500"><a href="../app/#contact">Contact</a> </li>
                    <li class="p-2 hover:text-teal-500"><a href="../app/#faqs">FAQ</a> </li>
                </ul>
            </div>
            <div class="account flex space-x-3 mt-5">
                <a href="../auth/signup.php">
                    <div class="post_job bg-blue-900 hover:bg-white hover:border hover:border-blue-900 hover:text-blue-900 text-white p-2 px-4 rounded-full">
                        <span>Post a Job</span>
                    </div>
                </a>
                <a href="../auth/login.php">
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
       
        const y= window.scrollY
       
if (y >=50) {
    console.log(y)
    nav[0].classList.remove('bg-transparent');
    nav[0].classList.add('bg-white');
}
else {
   
}
    })

</script>
</header>