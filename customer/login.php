<?php
    // foreach ($users as $value) {
    //     if(isset($_POST['submit'])) {
    //         $userName = $_POST['userName'];
    //         $userPassword = $_POST['userPassword'];
    //         if($userName == $value['userName'] && $userPassword == $value['userPassword'])
    //         {
    //             foreach($users as $value)
    //             {
    //                 if ($userName == $value['userName'])
    //                 {
    //                     if($value['userAccess'] == 1)
    //                     {
    //                         $_SESSION['userName'] = 1;
    //                         header("Location: ../admin/index.php?act=home");
    //                     }
    //                     else
    //                     {
    //                         $_SESSION['userName'] = 0;
    //                         header("Location: index.php?act=home");   
    //                     }
    //                 }
    //             }
    //             //header("Location: index.php?act=home");    
    //         }
    //         else
    //         {
    //             $login_alert = "Incorrect username or password";
    //         }
    //     }
    // } 

    if(isset($_POST['submit']))
    {
        $userName = $_POST['userName'];
        $userPassword = $_POST['userPassword'];
        $one_login = "SELECT * FROM users WHERE userName = '$userName'";
        $login_user = getOne($one_login);
        if($userPassword == $login_user['userPassword']){
            $_SESSION['userName'] = $login_user['userName'];    
            $_SESSION['userAccess'] = $login_user['userAccess'];
            if($login_user['userAccess'] == 1){
                header("Location: ../admin/index.php?act=home");
            }
            else{
                header("Location: index.php?act=home");
            }
        }
    }


?>
<div class="flex justify-center">
    <div class="flex flex-col items-center space-y-10">
        <div>
            <img class="h-10 w-auto" src="./image/nike-logo.png" alt="">
        </div>
        <div class="flex flex-col items-center">
            <h3 class="text-2xl font-extrabold">YOUR ACCOUNT FOR </h3>
            <h3 class="text-2xl font-extrabold">EVERYTHING NIKE</h3>
        </div>
        <form action="" method="POST">
            <div class="flex flex-col space-y-10">
                <div class="flex flex-col space-y-2">
                    <input require class="border border-gray-300 p-2 text-sm w-[300px] outline-none" type="text" name="userName" placeholder="Username">
                    <input require class="border border-gray-300 p-2 text-sm w-[300px] outline-none" type="password" name="userPassword" placeholder="Password">
                </div>
                <button class="p-2 bg-black w-[300px]" type="submit" name="submit">
                    <p class="text-nm text-white font-extrabold">SIGN IN</p>
                </button>
                <p class="text-sm text-gray-500">Not a member? <a href="./index.php?act=signup" class="text-black underline">Join us</a> </p>
            </div>

        </form>
    </div>
</div>