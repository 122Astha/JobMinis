<?php
require('../../connection/config.php');
require('../inc/header.php');
require('../inc/navbar.php');

$id = $_SESSION['userId'];
$name = '';
$profile = '';
$type = 'background-image';
$query = "SELECT * FROM galleries WHERE user_id = '$id' AND type = '$type' ";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    # code...
    while ($row1 = mysqli_fetch_assoc($result)) {
        $name = $row1['name'];
    }
}
?>


<main>
    <div class="profile-wrapper mt-36 w-10/12 mx-auto">

        <div class="background-image">
            <form action="" id="form" method="post" enctype="multipart/form-data">
                <div class="image w-full h-56 object-fill bg-gradient-to-br rounded-tl-3xl from-teal-100 to-red-200">
                    <img src="../uploads/<?php echo $name; ?>" class="w-full rounded-tl-3xl object-cover h-56" alt="" id="background">
                </div>
                <div class="camera absolute right-56 -mt-16 bg-red-600  rounded-md opacity-60 ring-offset-1 ring-1 ring-white">
                    <label for="image"><i class="fa-solid fa-camera text-2xl text-white p-1 px-2 focus:ring-offset-1 focus:ring-1 focus:ring-white"></i> </label>
                    <input type="file" name="image" id="image" class="absolute -right-56" accept=".jpg, .png, .jpeg" style="display:none;">

                </div>
            </form>
        </div>


        <?php
        $type = 'profile';
        $query = "SELECT * FROM galleries WHERE user_id = '$id' AND type = '$type' ";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            # code...
            while ($row1 = mysqli_fetch_assoc($result)) {
                $profile = $row1['name'];
            }
        }
        ?>
        <form action="" id="profile" method="post" enctype="multipart/form-data">

            <div class="profile-image w-36 h-36 bg-slate-300 rounded-full absolute  ml-20 -mt-12 ring-offset-2 ring-2 ring-white">
                <img src="../uploads/<?php echo $profile; ?>" class="w-36  object-cover h-36 rounded-full" alt="" id="background">

                <div class="camera absolute  bg-red-600 ml-28 -mt-12  rounded-full opacity-60  ring-1 ">
                    <label for="profileImage"><i class="fa-solid fa-camera text-xl text-white p-1 px-2  focus:ring-1 focus:ring-white"></i> </label>
                    <input type="file" name="profileImage" id="profileImage" class="absolute -right-56" accept=".jpg, .png, .jpeg" style="display:none;">

                </div>
            </div>
        </form>
        <div class="info bg-white">
            <form action=""  id="profile_form" class="pt-8">
                <div class="info-header w-4/6 mx-auto flex justify-between">
                    <div class="title ml-32">
                        <h1 class="text-3xl font-semibold mb-2">Profile</h1>
                        <span class="text-gray-500 font-medium">Update you photo and personal details</span>

                    </div>
                    <div class="button space-x-1 absolute right-44 mt-28">
                        <button name="cancel" class="border border-gray-400 bg-red-600  text-white p-2 px-2 rounded-xl hover:bg-red-700 hover:text-white font-semibold " id="cancel">Cancel</button>
                        <button name="update"   class="border border-gray-400 p-2 px-2 bg-blue-700 text-white rounded-xl hover:bg-teal-700 hover:text-white font-semibold " id= "update">Update</button>
                    </div>
                </div>
                <div class="info-body mt-24 w-10/12 mx-auto mb-10 pb-5">
                    <div class="form">
                        <div class="update-notice" id="update-notice"></div>
                    <?php
                $account_id = '';
     $profile_id ='';
     $address_id = '';
    $query_search = "SELECT profile.first_name AS first_name, profile.id AS id, profile.middle_name AS middle_name, profile.last_name AS last_name, profile.email AS email, profile.first_name AS first_name , profile.bio AS bio, account_profiles.account_id AS account_id  FROM profile INNER JOIN account_profiles ON profile.id = account_profiles.profile_id WHERE profile.user_id = '$id' ";
    $search_result = mysqli_query($conn, $query_search);
    if (mysqli_num_rows($search_result)>0) {
        # code...
      while ($row1 = mysqli_fetch_assoc($search_result)) {
        ?>
                    <div class="name w-full grid grid-cols-3  py-5 pb-10 border-b border-b-gray-100">
                        <div class="first ">
                            <label for="firstname" class="text-gray-600 text-base font-semibold text-center">First Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="Eg: John" value="<?php echo $row1['first_name'];  ?>" class="border placeholder:text-gray-400 border-gray-300 placeholder:text-sm rounded-md p-3" required>
                            <input type="text" name="id"class="hidden" id="id" value="<?php echo $id;  ?>">
                            <input type="text" name="profile_id"class="hidden" id="profile_id" value="<?php echo $row1['id'];  ?>">

                        </div>
                        <div class="middle ">
                            <label for="middlename" class="text-gray-600 text-base  font-semibold text-center">Middle Name</label>
                            <input type="text" id="middlename" name="middlename" placeholder="Eg: Kaccy" value="<?php echo $row1['middle_name'];  ?>" class="border placeholder:text-gray-400 border-gray-300 placeholder:text-sm rounded-md p-3">
                        </div>
                        <div class="last ">
                            <label for="lastname" class="text-gray-600 text-base    font-semibold text-center">Last Name</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Eg: Smith" value="<?php echo $row1['last_name'];  ?>" class="border placeholder:text-gray-400 border-gray-300 placeholder:text-sm rounded-md p-3" required>
                        </div>

                    </div>
                    <div class="username w-full space-x-8  flex justify-start py-7 pb-10 border-b border-b-gray-100">
<?php
 $account_id = $row1['account_id'];
 $profile_id = $row1['id'];
        $search = "SELECT account.user_name AS username, profile_addresses.address_id AS address_id, profile_addresses.name AS name FROM account INNER JOIN profile_addresses ON account.id = profile_addresses.account_id WHERE profile_addresses.account_id = '$account_id' AND  profile_addresses.profile_id = '$profile_id'";
$result = mysqli_query($conn, $search);

if (mysqli_num_rows($result)>0) {
    # code...
    while ($row2 = mysqli_fetch_assoc($result)) {
    ?>
                        <label for="username" class="text-gray-600 text-base    font-semibold text-center">User Name</label>
                        <input type="text" id="username" name="username" placeholder="Eg: John12" value="<?php echo $row2['username'];  ?>" class="border placeholder:text-gray-400 w-2/4 border-gray-300 placeholder:text-sm rounded-md p-3" required>
                        <input type="text" name="account_id"class="hidden" id="account_id" value="<?php echo $account_id;  ?>">

                    </div>
                    <div class="email w-full space-x-20 flex justify-start pb-10 py-5 border-b border-b-gray-100">
                        <label for="email" class="text-gray-600 text-base   font-semibold text-center">Email</label>
                        <input type="email" id="email" name="email" placeholder="example@gmail.com" value="<?php echo $row1['email'];  ?>" class="border w-2/4 placeholder:text-gray-400 placeholder:text-sm border-gray-300 rounded-md p-3">

                    </div>
                    <?php
 $address_id = $row2['address_id'];
 $search_address = "SELECT * FROM addresses WHERE id='$address_id' ";
 $address_result = mysqli_query($conn, $search_address);
 if (mysqli_num_rows($address_result)>0) {
   # code...
 while ($row3 = mysqli_fetch_assoc($address_result)) {
                    ?>
                    <div class="address w-full grid grid-cols-4 md:gap-8 pb-10 py-5 border-b border-b-gray-100">
                    <input type="text" name="address_id"class="hidden" id="address_id" value="<?php echo $address_id;  ?>">

                    <div class="country ">
                            <label for="country" class="text-gray-600 text-base font-semibold text-center">Country</label>
                            <input type="text" id="country" name="country" placeholder="Eg: Nepal" value="<?php echo $row3['country'];  ?>" class="border border-gray-300 placeholder:text-gray-400 placeholder:text-sm rounded-md p-2" required>
                        </div>
                        <div class="state ">
                            <label for="state" class="text-gray-600 text-base font-semibold text-center">State</label>
                            <input type="text" id="state" name="state" placeholder="Eg: Gandaki" required value="<?php echo $row3['state'];  ?>" class="border border-gray-300 placeholder:text-gray-400 placeholder:text-sm rounded-md p-2">
                        </div>
                        <div class="city ">
                            <label for="city" class="text-gray-600 text-base font-semibold text-center">City</label>
                            <input type="text" id="city" name="city" placeholder="Eg: Pokhara" required value="<?php echo $row3['city'];  ?>" class="border border-gray-300 placeholder:text-gray-400 placeholder:text-sm rounded-md p-2">
                        </div>
                        <div class="street ">
                            <label for="street" class="text-gray-600 text-base font-semibold text-center">Street</label>
                            <input type="text" id="street" name="street" placeholder="Eg: Simalchaur" required value="<?php echo $row3['street'];  ?>" class="border border-gray-300 placeholder:text-gray-400 placeholder:text-sm rounded-md p-2">
                        </div>
                    </div>

<?php
 $setting = "SELECT * FROM user_setting WHERE user_id='$id' ";
 $setting_result = mysqli_query($conn, $setting);
 if (mysqli_num_rows($setting_result)>0) {
   # code...
 while ($row4 = mysqli_fetch_assoc($setting_result)) {
    if($row4['link_key'] === "website")
    {
?>
                    <div class="website w-full space-x-16 pb-10 py-5 border-b border-b-gray-100">

                        <label for="website" class="text-gray-600 text-base font-semibold text-center">Website</label>
                        <input type="text" id="website" name="website" placeholder="Eg: http://www.example.com" value="<?php echo $row4['link_value'];  ?>" class="border w-2/4 placeholder:text-gray-400 placeholder:text-sm border-gray-300 rounded-md p-3">
                        <input type="text" name="website-key" class="hidden" id="website-key" value="<?php echo $row4['link_key'];  ?>">


                    </div>
                    <?php
    }
                    if($row4['link_key'] === "github")
                    {

                    
                    ?>
                    <div class="github w-full  space-x-10 pb-10 py-5 border-b border-b-gray-100">
                        <label for="github" class="text-gray-600 text-base font-semibold text-center">Github Link</label>
                        <input type="text" id="github" name="github" value="<?php echo $row4['link_value'];  ?>" placeholder="Eg: http://www.github.com" class="border w-2/4 placeholder:text-gray-400 placeholder:text-sm border-gray-300 rounded-md p-3">
                        <input type="text" name="github-key"class="hidden" id="github-key" value="<?php echo $row4['link_key'];  ?>">

                    </div>
                    <?php
                    }
                    if($row4['link_key'] === "linkedin")
                    {
                    ?>
                    <div class="linkedin w-full  space-x-16 pb-10 py-5 border-b border-b-gray-100">
                        <label for="linkedin" class="text-gray-600 text-base font-semibold text-center">Linkedin</label>
                        <input type="text" id="linkedin" value="<?php echo $row4['link_value'];  ?>" name="linkedin" placeholder="Eg: http://www.linkedin.com" class="border w-2/4 placeholder:text-gray-400 placeholder:text-sm border-gray-300 rounded-md p-3">
                        <input type="text" name="linkedin-key"class="hidden" id="linkedin-key" value="<?php echo $row4['link_key'];  ?>">

                    </div>
                    <?php
                    };
                };
            };
                    ?>
                    <div class="bio w-full  space-x-16 pb-10 py-5">
                        <label for="bio"  class="text-gray-600 text-base font-semibold text-center">You bio</label>
                        <textarea name="bio" id="bio" cols="20" rows="5" placeholder="Eg: Describe about yourself.."  class="w-2/4 placeholder:text-gray-400 placeholder:text-sm rounded-md border border-gray-200"><?php echo $row1['bio'];  ?></textarea>
<?php

?>
                    </div>
<?php

 };
};
 };
       };
     };
    };
    ?>
    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<script type="text/javascript" src="../../../dist/js/jQuery.js"></script>
<script type="text/javascript">
    document.getElementById("image").onchange = function() {
        document.getElementById('form').submit();
    }
    document.getElementById("profileImage").onchange = function() {
        document.getElementById('profile').submit();
    }
</script>
<?php

if (isset($_FILES["image"]["name"])) {
    # code...

    $imageName = $_FILES['image']['name'];
    $imageSize = $_FILES['image']['size'];
    $tempName = $_FILES['image']['tmp_name'];

    $validImageExtention = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $imageName);
    $imageExtension =   strtolower(end($imageExtension));
    if (!in_array($imageExtension, $validImageExtention)) {
        # code...

        echo "
        <script> alert('invalid');
        document.location.href = '../app/profile.php'; </script> 
        ";
    } else {
        $newImageName = $imageName . " - " . date("Y.m.d" . " - " . date("h.i.sa"));
        $newImageName .= "." . $imageExtension;
        $query = "UPDATE galleries SET name ='$newImageName', link='$newImageName' WHERE user_id = '$id' AND type = '$type' ";
        $result = mysqli_query($conn, $query);
        move_uploaded_file($tempName, '../uploads/' . $newImageName);
        echo
        "
        <script> ;
        document.location.href = '../app/profile.php'; </script> 
        ";
    }
}
if (isset($_FILES["profileImage"]["name"])) {
    # code...

    $imageName = $_FILES['profileImage']['name'];
    $profileImageSize = $_FILES['profileImage']['size'];
    $tempName = $_FILES['profileImage']['tmp_name'];

    $validImageExtention = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $imageName);
    $imageExtension =   strtolower(end($imageExtension));
    if (!in_array($imageExtension, $validImageExtention)) {
        # code...

        echo "
        <script> alert('invalid');
        document.location.href = '../app/profile.php'; </script> 
        ";
    } else {
        $newImageName = $imageName . " - " . date("Y.m.d" . " - " . date("h.i.sa"));
        $newImageName .= "." . $imageExtension;
        $type = "profile";
        $query = "UPDATE galleries SET name ='$newImageName', link='$newImageName' WHERE user_id = '$id' AND type = '$type' ";
        $result = mysqli_query($conn, $query);
        move_uploaded_file($tempName, '../uploads/' . $newImageName);
        echo
        "
        <script> ;
        document.location.href = '../app/profile.php'; </script> 
        ";
    }
}
?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#cancel").click(function () {
                location.reload(true);
            });
        var userID = $("#id").val();
        // $.ajax({
        //     methpd: "POST",
        //     url: "../process/getUserProfile.php",
        //     data: {
        //         type: 1,
        //         id: userID,
        //     },
        //     success: function(data) {

        //         console.log(data);

        //     }
        // })

        $("#update").click(function(){
            $("#profile_form").submit(function(e){
                // var firstname = $("#firstname").val();
                // var middlename = $("#middlename").val();
                // var lastname = $("#lastname").val();
                // var username = $("#username").val();
                // var email = $("#email").val();
                // var country = $("#country").val();
                // var state = $("#state").val();
                // var city = $("#city").val();
                // var street = $("#street").val();
                // var website = $("#website").val();
                // var github = $("#github").val();
                // var linkedin = $("#linkedin").val();
                // var bio = $("#bio").val();
                // var userID = $("#id").val()
                 var datafull = $("#profile_form").serialize();
                e.preventDefault();
                $.ajax({
            method: "POST",
            url: "../process/getUserProfile.php",
            data: datafull,
            // dataType: "json",
            // data: { firstname: firstname, id: userID, middlename: middlename, lastname: lastname, username: username, email: email, github: github, website: website, linkedin: linkedin, country: country, state: state, city: city, street: street, bio: bio},
            success: function(data) {

               $("#update-notice").html(data)

            }
        })

            })
        })

    });
</script>