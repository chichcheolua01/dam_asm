
<div class="">
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Chi tiết</th>
                <th>Lượt xem</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $key => $value):?>
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value["productName"]; ?></td>
                <td><?php echo $value["productPrice"]?></td>
                <td><img class="w-10 h-10" src="./image/<?php echo $value["productImage"]?>" alt=""> </td>
                <td><?php echo $value["productDesc"]?></td>
                <td><?php echo $value["productView"]?></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>