<?php
    session_start(); //bắt đầu session
        // /*
        //     session là một phiên làm việc giữa client và server 
        //     Một session bắt đầu khi client gửi request đến server, 
        //     nó tồn tại xuyên suốt từ trang này đến trang khác trong 
        //     ứng dụng web và chỉ kết thúc khi hết thời gian timeout 
        //     hoặc khi bạn đóng ứng dụng. 
        //     Giá trị của session sẽ được lưu trong biến $_SESSION
        // */
        // include "../model/connect.php"; //import file connect.php
        // $query = "select * from users"; //câu lệnh lấy toàn bộ dữ liệu từ bảng users trong DB
        // $users = getAll($query); //thực hiện lấy dữ liệu và gán cho biến $users
        // foreach($users as $value){ //lặp để kiểm tra dữ liệu nhập vào form và dữ liệu trong DB
        //     if(isset($_POST["btn-login"])){ //kiểm tra xem button login đã được ấn hay chưa
        //         if(!$_POST["username"] == "" && !$_POST["password"] == ""){//kiểm tra xem username và password có trống hay không
        //             if($_POST["username"] == $value["username"] && $_POST["password"] == $value["password"]){ // kiểm tra xem username và password nhập vào có trùng với username và password trong DB hay không
        //                 $_SESSION["username"] = $_POST["username"]; //nếu khớp dữ liệu trong DB thì gán dữ liệu username vào session thông qua key là username
        //                 header("location:../admin.php"); //điều hướng về trang admin
        //             }
        //         }else{
        //             echo "Invalid Data"; //nếu dữ liệu nhập vào không đúng thì thông báo lỗi và giữ nguyên trang login
        //         }
        //     }
        // }
    foreach ($users as $value) {
        if(isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userPassword = $_POST['userPassword'];
            if($userName == $value['userName'] && $userPassword == $value['userPassword'])
            {
                $_SESSION['userName'] = $userName;
                header('Location: index.php?act=home');
            }
            else
            {
                $login_alert = "Incorrect username or password";
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