<?php

    $signup_alert = "";
    if(isset($_GET['error']))
    {
        if($_GET['error'] == 1)
            {
                $signup_alert = "Username đã tồn tại";
            }
            elseif($_GET['error'] == 2)
            {
                $signup_alert = "Xác thực mật khẩu chưa chính xác";
            }
    }
    
?>
        <div class="flex justify-center">
            <div class="flex flex-col items-center space-y-10">
                <div>
                    <img class="h-10 w-auto" src="./image/nike-logo.png" alt="">
                </div>
                <div class="flex flex-col items-center">
                    <h3 class="text-2xl font-extrabold">BECOME A NIKE MEMBER</h3>
                </div>
                <form action="./controller/save-add-user.php" method="POST" name="signup-form" id="signup-form" enctype="multipart/form-data">
                    <div class="flex flex-col space-y-10">
                        <div class="flex flex-col space-y-2">
                            <input class = "border border-gray-300 p-2 text-sm w-[300px]" require type="text" name="userName" placeholder="Username">
                            <p class="text-sm text-rose-900" id="signup_alert" name=""> <?php echo $signup_alert;?> </p>   
                            <input class = "border border-gray-300 p-2 text-sm w-[300px]" require type="password" name="userPassword" placeholder="Password">
                            <input class = "border border-gray-300 p-2 text-sm w-[300px]" require type="password" name="userRePassword" placeholder="Re-Password">
                            <input class = "border border-gray-300 p-2 text-sm w-[300px]" require type="text" name="userFullname" placeholder="Full Name">
                            <p class="py-2">Chọn ảnh đại diện</p>
                            <div class="flex flex-col items-center space-y-10">
                                <input id="imageFile" class="hidden" type="file" name="userImage" onchange="chooseFile(this)">
                                <label class=" w-[200px] h-[50px] text-slate-900 border border-slate-900 rounded-lg top-0 bottom-0 left-0 right-0 flex justify-center items-center" for="imageFile">
                                <i class="material-icons"></i>  
                                Choose a photo</label>
                                <img src="" alt="" id="image" class="w-[200px] h-auto rounded-lg">
                            </div>
                        </div>                   
                        <button id="signup_btn" class="p-2 bg-black w-[300px]" type="submit" name="submit"><p class="text-nm text-white font-extrabold">SIGN UP</p></button>
                    </div>
                </form>
            </div>
        </div>