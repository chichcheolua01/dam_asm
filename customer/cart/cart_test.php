<?php
    session_start();
    include "../../model/connect.php";
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM receipts
    WHERE user_id = (SELECT user_id FROM users WHERE user_name='$username')
    ORDER BY receipt_id DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $receipt_id = $user['receipt_id'];
    $sql2 = "SELECT a.product_id, b.product_name, b.product_price, a.quantity, b.product_intro FROM receipts_info a INNER JOIN products b ON a.product_id = b.product_id WHERE a.receipt_id = $receipt_id";
    $stmt = $conn->prepare($sql2);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $tongtien=0;
    foreach ($result as $pd) {
        $tongtien+=$pd['product_price']*$pd['quantity'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Dathang.css">
    <style>
        table tr:nth-last-child(1) {
    background-color: lightslategray;
}
    </style>
</head>
<body>
    <div class="container">
        <h1 style="font-size: 30px;" >Giỏ hàng của bạn</h1> <br>
    <table>  
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th><a href="Sanpham.php"><button>Thêm sản phẩm</button></a></th>
        </tr>
    <?php foreach ($result as $pd) :  ?>
        <tr>
            <td><?= $pd['product_name'] ?></td> 
            <td><?= $pd['product_price'] ?> VNĐ </td>
            <td><?= $pd['quantity']?></td>
            <td><?= $pd['product_price']*$pd['quantity']?></td>
            <td><a onclick="return confirm('Bạn có chắc xóa không?');" href="xoasphd.php?id=<?= $pd['product_id'] ?>"><button>Xóa</button></a></td>
        </tr>
    <?php endforeach ?>
        <tr>
            <td></td>
            <td></td>
            <td>Tổng tiền:</td>
            <td>
            <?php if(isset($tongtien)) : ?>
                <?=$tongtien?> VNĐ
            <?php endif ?>
            </td>
            <td><a href="Thanhtoan.php"><button>Thanh toán</button></a></td>
        </tr>
    </table>
    </div>
    
</body>
</html>