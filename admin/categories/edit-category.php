<?php   
        $id = $_GET['id'];
        $one_product = "SELECT * FROM categories WHERE categoryId = $id";
        $item = getOne($one_product);
    ?>
<form action="./controller/edit-category.php?id=<?php echo $item['categoryId']?>" method="POST"> 
    <div class="p-[10px] flex flex-col space-y-[10px] justify-center items-start">
        <input type="text" name="categoryId" value="<?php echo $item['categoryId'] ?>" >
        <p>Tên danh mục</p>
        <input class="border border-gray-500 p-[10px] w-[500px] rounded-lg" type="text" name="categoryName" placeholder="Nhập tên sản phẩm" value="<?php echo $item['categoryName']?>">
    </div>
    <button type="submit"> Edit </button>
</form>