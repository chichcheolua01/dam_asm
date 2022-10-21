
<div class="">
    <a href="./index.php?act=add-category">   
    <button>Add category</button>
    </a>
    <table>
        <thead>
            <tr>
                <th class="p-[20px]" >STT</th>
                <th class="p-[20px]" >Tên danh mục</th>
                <th class="p-[20px]" >Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $key => $value):?>
            <tr class="text-center justify-center">
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value["categoryName"]; ?></td>
                <td><div class="flex justify-center items-center space-x-[10px]" > 
                    <a href="./index.php?act=edit-category&id=<?php echo $value['categoryId'] ?>"><div>Sửa</div> </a>
                    <a href="./controller/delete-category.php?id=<?php echo $value['categoryId'] ?>"> <div>Xóa</div> </a>
                    </div>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>