
<div class="">
    <a href="./index.php?act=add-product"><button class="p-[10px] border border-1-gray-500 rounded-xl bg-gray-500 text-white"> Thêm sản phẩm</button></a>
    <table>
        <thead>
            <tr>
                <th class="p-[20px]" >STT</th>
                <th class="p-[20px]" >Tên sản phẩm</th>
                <th class="p-[20px]" >Giá sản phẩm</th>
                <th class="p-[20px]" >Hình ảnh</th>
                <th class="p-[20px]" >Chi tiết</th>
                <th class="p-[20px]" >Lượt xem</th>
                <th class="p-[20px]" >Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $key => $value):?>
            <tr class="text-center justify-center">
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value["productName"]; ?></td>
                <td><?php echo $value["productPrice"]?></td>
                <td class="flex justify-center items-center" ><img class="w-10 h-10" src="./image/<?php echo $value["productImage"]?>" alt=""> </td>
                <td><?php echo $value["productDesc"]?></td>
                <td><?php echo $value["productView"]?></td>
                <td><div class="flex justify-center items-center space-x-[10px]" > 
                    <a href="./index.php?act=edit-product&id=<?php echo $value['productId'] ?>"><div>Sửa</div> </a>
                    <a href="./controller/delete-product.php?id=<?php echo $value['productId'] ?>"> <div>Xóa</div> </a>
                    </div>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>