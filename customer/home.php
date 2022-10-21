    <div class="flex justify-center">
            <img
              class="slider w-[1280px] h-auto duration-1000"
              src="../image/banner2.jpg"
              alt=""
            />
        </div>
    </div>
        <div class="mt-[166px] flex justify-center text-center">
            <div class="w-full">
                <h1 class="text-3xl font-bold mb-10">Store</h1>
                <div class="grid grid-cols-4">
                    <?php foreach($products as $key => $item):?>
                        <a href="./index.php?act=product_info&id=<?php echo $item['productId'] ?>">
                        <div class="flex flex-col items-center product">
                            <img src="../image/<?php echo $item['productImage']?>" alt="">
                            <div class="product_info">
                                <p class="text-2xl" ><?php echo $item['productName']?></p>
                                <div class="text-lg flex flex-row space-x-[10px]" > <p> Price:</p> <p><?php echo substr($item['productPrice'], 0, -3)  ?>.000VNĐ</p> </div>
                            </div>
                        </div>
                        </a>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    