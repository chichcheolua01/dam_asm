<?php   
        $id = $_GET['id'];
        $one_user = "SELECT * FROM users WHERE userId = $id";
        $item = getOne($one_user);
    ?>
<form action="./controller/edit-user.php?id=<?php echo $item['userId']?>" method="POST" enctype="multipart/form-data">
    
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <input type="text" name="userId" value="<?php echo $item['userId'] ?>" >
        <p>Tên tài khoản mới</p>
        <input class="border border-gray-500 p-[10px] w-[500px] rounded-lg" type="text" name="userName" placeholder="Nhập username" value="<?php echo $item['userName']?>">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Mật khẩu mới</p>
        <input class="border border-gray-500 p-[10px] w-[500px] rounded-lg" type="text" name="userPassword" placeholder="Nhập giá sản phẩm" value="<?php echo $item['userPassword']?>">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Ảnh sản phẩm</p>
        <img src="./image/<?php echo $item['userImage']?>" alt="" id="image" class="w-[200px] h-auto">
        <input id="imageFile" class="" type="file" name="userImage" onchange="chooseFile(this)">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Tên người dùng</p>
        <input class="border border-gray-500 p-[10px] w-[500px] rounded-lg" type="text" name="userFullname" placeholder="Nhập tên sản phẩm" value="<?php echo $item['userFullname']?>">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Quyển người dùng</p>
        <select name="userAccess" id="">
            <option value="0"> Quyền người dùng </option>
            <option value="1"> Quyền quản lý </option>
        </select>
    </div>
    <button type="submit"> Edit </button>
</form>