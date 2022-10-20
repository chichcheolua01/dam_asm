
                <div class="grid grid-cols-4">
                    <?php foreach($products as $key => $item):?>
                        <div class="flex flex-col">
                            <img src="./image/<?php echo $item['productImage']?>" alt="">
                            <p class="text-2xl" ><?php echo $item['productName']?></p>
                            <p class="text-lg text-gray-500" ><?php echo $item['productPrice']?></p>
                        </div>
                    <?php endforeach?>
                </div>