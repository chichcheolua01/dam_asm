        <div class="flex justify-center">
            <img src="./image/banner.jpg" class="h-[600px] w-auto"  alt="">
        </div>
        <div class="mt-[166px] flex justify-center text-center">
            <div class="w-full">
                <h1 class="text-3xl font-bold mb-10">New Arrivals</h1>
                <div class="grid grid-cols-4">
                    <?php foreach($products as $key => $item):?>
                        <div class="flex flex-col">
                            <img src="./image/<?php echo $item['productImage']?>" alt="">
                            <p class="text-2xl" ><?php echo $item['productName']?></p>
                            <p class="text-lg text-gray-500" ><?php echo $item['productPrice']?></p>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>

    </div>