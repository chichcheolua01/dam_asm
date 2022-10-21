<?php 

    $id = $_GET['id'];
    $one_query = "SELECT * FROM products WHERE productId = $id";
    $item = getOne($one_query);
    $view_query = "UPDATE products SET productView = productView + 1";
    $categoryId = $item['categoryId'];
    $one_category = "SELECT * FROM categories WHERE categoryId = $categoryId";
    $item_category = getOne($one_category);
    $all_item_in_category_query = "SELECT * FROM products WHERE categoryId = $categoryId";
    $all_item_in_category = getAll($all_item_in_category_query);
    
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == 1){
            $error_alert = "Phải đăng nhập trước!";
        }
    }
?>
<div class="grid grid-cols-2" >
    <div>
        <img src="../admin/image/<?php echo $item['productImage'] ?>" alt="">
    </div>
    <div class="p-[100px]">
        <div class="flex flex-col space-y-[50px]">
            <div class="flex flex-col space-y-[20px]">
                <p class="text-3xl"><?php echo $item['productName'] ?></p>
                <p class="text-xl"><?php echo $item_category['categoryName']?> </p>
                <div class="flex space-x-[20px] text-3xl"><p> Price:</p> <p><?php echo substr($item['productPrice'], 0, -3)  ?>.000VNĐ</p></div>
            </div>
            <form action="./controller/add-to-cart.php?id=<?php echo $item['productId'] ?>" method="post">
                <input type="hidden" name="productId" id="" value="<?php echo $item['productId'] ?>">
                <input type="hidden" name="productName" id="" value="<?php echo $item['productName'] ?>">
                <input type="hidden" name="productImage" id="" value="<?php echo $item['productImage'] ?>">
                <input type="hidden" name="productPrice" id="" value="<?php echo $item['productPrice'] ?>">
                <div class="flex flex-col items-center space-y-[20px]">
                    <p> <?php
                    if(isset($error)){
                        echo $error_alert;
                    }
                     ?> </p>
                    <button type="submit" name="add_product_btn" class="w-2/3 bg-gray-800 text-white h-[70px] rounded-full"> Add to cart </button>
                </div>
                
            </form>

            <p class="text-lg"><?php echo $item['productDesc'] ?></p>
        </div>
    </div>
</div>
<div class="grid grid-cols-4" >
    <?php foreach ($all_item_in_category as $key => $item): ?>
    <a href="./index.php?act=product_info&id=<?php echo $item['productId'] ?>">
    <div>
        <img src="../admin/image/<?php echo $item['productImage'] ?>" alt="">
    </div>
    <?php endforeach?>
    </a>
</div>