<?php   
        $id = $_GET['id'];
        $one_product = "SELECT * FROM products WHERE productId = $id";
        $item = getOne($one_product);
    ?>
<form action="./controller/edit-product.php?id=<?php echo $item['productId']?>" method="POST" enctype="multipart/form-data">
    
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <input type="text" name="productId" value="<?php echo $item['productId'] ?>" >
        <p>Tên sản phẩm</p>
        <input class="border border-gray-500 p-[10px] w-[500px] rounded-lg" type="text" name="productName" placeholder="Nhập tên sản phẩm" value="<?php echo $item['productName']?>">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Giá sản phẩm</p>
        <input class="border border-gray-500 p-[10px] w-[500px] rounded-lg" type="text" name="productPrice" placeholder="Nhập giá sản phẩm" value="<?php echo $item['productPrice']?>">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Ảnh sản phẩm</p>
        <img src="./image/<?php echo $item['productImage']?>" alt="" id="image" class="w-[200px] h-auto">
        <input id="imageFile" class="" type="file" name="productImage" onchange="chooseFile(this)">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Chi tiết sản phẩm</p>
        <input class="border border-gray-500 p-[10px] w-[500px] rounded-lg" type="text" name="productDesc" placeholder="Nhập tên sản phẩm" value="<?php echo $item['productDesc']?>">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Danh mục</p>
        <select name="categoryId" id="">
            <?php foreach($categories as $key => $value): ?>
                <option value="<?php echo $value["categoryId"]?>"><?php echo $value["categoryName"]?></option>
            <?php endforeach ?>
        </select>
    </div>
    <button type="submit"> Edit </button>
</form>