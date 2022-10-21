<div class="">
    <a href="./index.php?act=signup"><button class="p-[10px] border border-1-gray-500 rounded-xl bg-gray-500 text-white">Thêm tài khoản</button></a>
    <table>
        <thead>
            <tr>
                <th class="p-[20px]" >STT</th>
                <th class="p-[20px]" >Tên tài khoản</th>
                <th class="p-[20px]" >Mật khẩu</th>
                <th class="p-[20px]" >Hình ảnh</th>
                <th class="p-[20px]" >Tên người dùng</th>
                <th class="p-[20px]" >Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $key => $value):?>
            <tr class="text-center justify-center">
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value["userName"]; ?></td>
                <td><?php echo $value["userPassword"]?></td>
                <td class="flex justify-center items-center" ><img class="w-10 h-10" src="./image/<?php echo $value["userImage"]?>" alt=""> </td>
                <td><?php echo $value["userFullname"]?></td>
                <td><div class="flex justify-center items-center space-x-[10px]" > 
                    <a href="./index.php?act=edit-user&id=<?php echo $value['userId'] ?>"><div>Sửa</div> </a>
                    <a href="./controller/delete-user.php?id=<?php echo $value['userId'] ?>"> <div>Xóa</div> </a>
                    </div>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>