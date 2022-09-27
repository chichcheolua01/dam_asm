<form action="./controller/save-add-product.php" method="POST" enctype="multipart/form-data">
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Tên sản phẩm</p>
        <input class="border border-gray-500 p-[10px] w-[500px] rounded-lg" type="text" name="productName" placeholder="Nhập tên sản phẩm" value="">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Giá sản phẩm</p>
        <input class="border border-gray-500 p-[10px] w-[500px] rounded-lg" type="text" name="productPrice" placeholder="Nhập giá sản phẩm" value="">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Ảnh sản phẩm</p>
        <img src="" alt="" id="image" class="w-[200px] h-auto">
        <input id="imageFile" class="" type="file" name="productImage" onchange="chooseFile(this)">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Chi tiết sản phẩm</p>
        <input class="border border-gray-500 p-[10px] w-[500px] rounded-lg" type="text" name="productDesc" placeholder="Nhập tên sản phẩm" value="">
    </div>
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <p>Danh mục</p>
        <select name="categoryId" id="">
            <?php foreach($categories as $key => $value): ?>
                <option value="<?php echo $value["categoryId"]?>"><?php echo $value["categoryName"]?></option>
            <?php endforeach ?>
        </select>
    </div>
    <button type="submit"> Thêm sản phẩm </button>
</form>