<?php
include '../inc/header.php';
require('../inc/navbar.php');
?>


<!-- strat wrapper -->
<div class="h-full flex flex-row flex-wrap bg-slate-200">
  <!-- start sidebar -->
  
  <!-- end sidbar -->
  <div class="candidate-list-wrapper  w-full h-full bg-slate-50">
  <div class="candidate-list-header w-full bg-teal-50 p-24 mt-8">             
        <h1 class="text-5xl font-bold mb-4">Search Candidate</h1>
        <span class="text-lg text-gray-600">Work with the most suitable candidates in the world</span>
        <form  class="mt-10 bg-white rounded-full p-1 grid grid-cols-3 gap-3 px-4">
            <input type="text" placeholder="Candidate Name" class="p-3 rounded-xl border-none">
            <input type="text" placeholder="Location" class="border-r p-2 border-none">
            <button type="submit" name="submit" class="bg-blue-800 mx-5 rounded-full  text-white font-semibold">Find Candidate</button>
        </form>
    </div>
        <div class="company-list my-8 mx-16 grid grid-cols-12 gap-5">
            <div class="search-company bg-blue-50 space-y-6 h-2/4  rounded-3xl p-8  col-span-3">
                <div class="name space-y-3">
                <h1 class="text-lg font-semibold">Search by keyword</h1>
                <input type="text" name="name" placeholder="Candidate Name" class="w-full h-12 rounded-3xl placeholder:pl-3">
                <i class="fa-solid fa-magnifying-glass absolute pt-4 -ml-10"></i>
                </div>

                <div class="location space-y-3">
                <h1 class="text-lg font-semibold">Location</h1>
                <input type="text" name="location" placeholder="Enter Location" class="w-full h-12 rounded-3xl placeholder:pl-3">
                <i class="fa-solid fa-earth-americas absolute pt-4 -ml-10"></i>
                </div>

               
            </div>
            <div class="list col-span-9 py-7">
            <div class="list-header">
                    <h1 class="text-2xl font-semibold text-gray-600">Showing <span class="text-black"> 5 </span> candidates</h1>
                </div>
                <div class="list-body my-5 pt-5 mx-20 grid grid-cols-3 gap-5">
        <div class="candidate-card hover:shadow hover:shadow-gray-500 border bg-white border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../assets/img/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../assets/img/image-removebg-preview (5).png" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Arbin Poudel</h1>
        <span class="text-sm">Software developer</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">london</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../assets/img/user2.jpg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">James Smith</h1>
        <span class="text-sm">Manager</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">US</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../assets/img/user3.jpg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Mickel</h1>
        <span class="text-sm">Marketing Advisor</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Kathmandu, Nepal</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../assets/img/user1.jpg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>
       
        

    </div>
    </div>
   
            </div>
        </div>
    </div>
<!-- <div class="candidate-list-wrapper  w-full h-full bg-slate-50">
    <div class="candidate-list-header w-full bg-teal-50 p-24 mt-8">             
        <h1 class="text-5xl font-bold mb-4">Search Candidate</h1>
        <span class="text-lg text-gray-600">Work with the most suitable candidates in the world</span>
        <form  class="mt-10 bg-white rounded-full p-3 grid grid-cols-4 gap-3">
            <input type="text" placeholder="Candidate Name" class="p-2 border-r ">
            <input type="text" placeholder="Location" class="border-r p-2">
            <select name="post" id="">
                <option value="All industries" selected>All industries</option>
                <option value="Project Manager" >Project Manager</option>
                <option value="Finance" >Finance</option>
                <option value="Human Resource" >Human Resource</option>
            </select>
            <button type="submit" name="submit" class="bg-blue-800 mx-5 rounded-full  text-white font-semibold">Find Candidate</button>
        </form>
    </div>
    <div class="list p-20">
    <div class="list-header">
                    <h1 class="text-2xl font-semibold text-gray-600">Showing <span class="text-black"> 1523 </span> companies</h1>
                </div>
    </div>
    <div class="list-body my-3 mx-20 grid grid-cols-3 gap-5">
        <div class="candidate-card hover:shadow hover:shadow-gray-500 border bg-white border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>

        <div class="candidate-card hover:shadow bg-white hover:shadow-gray-500 border border-gray-300 space-y-2 text-center rounded-3xl">
        <div class="image">
            <img src="../../../public/download.jpeg" class=" rounded-full w-24 h-24 mx-auto my-6 " alt="">
        </div>
        <h1 class="font-bold text-xl mt-3 ">Scott Goodwin</h1>
        <span class="text-sm">Marketing Expert</span>
        <div class="location space-x-2 flex justify-center pt-4">
        <i class="fa-solid fa-earth-americas"></i>
        <h1 class="text-base font-medium -mt-1">Los Angles, CA</h1>
        </div>
        <div class="py-6 pb-8 ">
        <a href="#" class="text-lg text-blue-600 hover:text-blue-700 font-normal">View Profile  <i class="fa-solid fa-chevron-right text-sm font-semibold"></i></a>
        </div>
        </div>
       
        

    </div>
</div> -->
</div>
<?php
include '../inc/footer.php'
?>