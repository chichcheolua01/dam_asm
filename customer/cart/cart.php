<?php 
//     $username = $_SESSION['userName'];
//     $user_query = "SELECT * FROM users WHERE userName = '$username'";
//     $user = getOne($user_query);
//     $id = $user['userId'];
//     $receipt_query = "SELECT * FROM receipts WHERE userId = '$id'";
//     $receipt = getAll($receipt_query);
//     $receiptId = $receipt['receiptId'];
//     $sql2 = "SELECT a.productId, b.productName, b.productPrice, a.quantity, b.productDesc FROM receipts_info a 
//     INNER JOIN products b ON a.productId = b.productId 
//     WHERE a.receiptId = $receiptId";
//     $result = connect($sql2);
//     $money=0;
//     foreach ($result as $product) {
//         $tongtien+=$product['productPrice']*$product['quantity'];
//     }
// 
    $username = $_SESSION['userName'];
    $user_query = "SELECT * FROM users WHERE username = '$username'";
    $user = getOne($user_query);
    $id = $user['userId'];
    $receipt_query = "SELECT * FROM receipts WHERE userId = '$id'";
    $receipt = getOne($receipt_query);
    $receiptId =  $receipt['receiptId'];
    $sql2 = "SELECT a.productId, a.receiptInforId, a.receiptId, b.productName, b.productPrice, a.quantity, b.productDesc FROM receipts_info a 
            INNER JOIN products b ON a.productId = b.productId 
            WHERE a.receiptId = $receiptId";
    $result = getAll($sql2);
    $money=0;
    foreach ($result as $product) {
        $money+=$product['productPrice']*$product['quantity'];
    }
?>
<body>
    <div class="container">
        <h1 style="font-size: 30px;" >Giỏ hàng của bạn</h1> <br>
    <table class="text-center w-1/2">  
        <thead class="p-5">
            <tr class="p-5">
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($result as $product) :  ?>
        <tr>
            <td><?= $product['productName'] ?></td> 
            <td><?php echo substr($product['productPrice'],0,3)  ?>.000 VNĐ </td>
            <td><?= $product['quantity']?></td>
            <td><?php echo substr($product['productPrice'],0,3)  ?>.000 VNĐ</td>
            <td><a href="./controller/delete-product.php?id=<?php echo $product['receiptInforId']?>"> <div>Xóa</div> </a></td>
        </tr>
    <?php endforeach ?>
        <tr>
            <td></td>
            <td></td>
            <td>Tổng tiền:</td>
            <td>
            <?php if(isset($money)) : ?>
                <?=$money?> VNĐ
            <?php endif ?>
            </td>
        </tr>
        </tbody>
    </table>
    <div>
        <a href="./controller/pay-product.php?id=<?php echo $product['receiptId']?>"> <button>Thanh toán</button> </a>
    </div>
    </div>
    
</body>