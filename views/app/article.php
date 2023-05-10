<?php
include '../layouts/header.php';
include '../layouts/nav.php'
?>

<main>
    <div class="article-wrapper m-16 mx-20">
        <div class="article-header">
            <h1 class="text-5xl font-bold">Articles</h1>
        </div>
        <div class="article-content grid grid-cols-12 gap-6 mt-20">
            <div class="article-card col-span-9">
                <div class="article-body grid grid-cols-3 gap-6">
                    <div class="card border border-gray-400 rounded-3xl">
                        <div class="card-header space-y-5 bg-teal-50 pb-5 rounded-3xl">
                            <div class="card-image">
                                <img src="../../public/gettyimages-157399544-612x612.jpeg" class="rounded-3xl" alt="">
                            </div>
                            <div class="mx-10 space-y-1">
                                <span class="text-sm font-light">August 31, 2004</span>
                                <h1 class="font-medium">Assessments</h1>
                            </div>
                        </div>
                        <div class="card-body p-7 space-y-2">
                            <h1 class="text-lg font-semibold">How to start looking for a job</h1>
                            <p class="text-sm font-light text-gray-500 truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur</p>
                            <a href="../app/articleDetail.php"><button class="pt-8 text-blue-700 hover:text-black">Read More</button></a>
                        </div>
                    </div>
                    <div class="card border border-gray-400 rounded-3xl">
                        <div class="card-header space-y-5 bg-teal-50 pb-5 rounded-3xl">
                            <div class="card-image">
                                <img src="../../public/gettyimages-157399544-612x612.jpeg" class="rounded-3xl" alt="">
                            </div>
                            <div class="mx-10 space-y-1">
                                <span class="text-sm font-light">August 31, 2004</span>
                                <h1 class="font-medium">Assessments</h1>
                            </div>
                        </div>
                        <div class="card-body p-7 space-y-2">
                            <h1 class="text-lg font-semibold">How to start looking for a job</h1>
                            <p class="text-sm font-light text-gray-500 truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur</p>
                            <a href="../app/articleDetail.php"><button class="pt-8 text-blue-700 hover:text-black">Read More</button></a>
                        </div>
                    </div>
                    <div class="card border border-gray-400 rounded-3xl">
                        <div class="card-header space-y-5 bg-teal-50 pb-5 rounded-3xl">
                            <div class="card-image">
                                <img src="../../public/gettyimages-157399544-612x612.jpeg" class="rounded-3xl" alt="">
                            </div>
                            <div class="mx-10 space-y-1">
                                <span class="text-sm font-light">August 31, 2004</span>
                                <h1 class="font-medium">Assessments</h1>
                            </div>
                        </div>
                        <div class="card-body p-7 space-y-2">
                            <h1 class="text-lg font-semibold">How to start looking for a job</h1>
                            <p class="text-sm font-light text-gray-500 truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur</p>
                            <a href="../app/articleDetail.php"><button class="pt-8 text-blue-700 hover:text-black">Read More</button></a>
                        </div>
                    </div>

                </div>
                <div class="pagination py-6 text-right ">
            <button class="bg-teal-600 text-white font-semibold p-3 px-6 hover:bg-teal-700 rounded-3xl">Show me more</button>
            </div>
            </div>
            <div class="article-search col-span-3">
                <div class="search-article bg-blue-50 space-y-6  rounded-3xl p-8  col-span-3">
                    <div class="name space-y-3">
                        <h1 class="text-xl font-semibold">Search by keyword</h1>
                        <input type="text" name="name" placeholder="Search article" class="w-full h-12 rounded-3xl placeholder:pl-3">
                        <i class="fa-solid fa-magnifying-glass absolute pt-4 -ml-10"></i>
                    </div>
                    <div class="recent-article space-y-3">
                        <h1 class="text-xl font-semibold">Recent Articles</h1>
                        <div class="articles">
                            <div class="card grid grid-cols-6 gap-3 my-4">
                                <div class="card-right col-span-4">
                                    <h1 class="font-semibold">How to apply for job</h1>
                                    <span class="text-sm text-gray-500 font-light">September 2, 2005</span>
                                </div>
                            </div>
                            <div class="card grid grid-cols-6 gap-3 my-4">
                                
                                <div class="card-right col-span-4">
                                    <h1 class="font-semibold">How to apply for job</h1>
                                    <span class="text-sm text-gray-500 font-light">September 2, 2005</span>
                                </div>
                            </div>
                            <div class="card grid grid-cols-6 gap-3 my-4">
                                <div class="card-right col-span-4">
                                    <h1 class="font-semibold">How to apply for jobs</h1>
                                    <span class="text-sm text-gray-500 font-light">September 2, 2005</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
       
    </div>
</main>
<?php
include '../layouts/footer.php'
?>