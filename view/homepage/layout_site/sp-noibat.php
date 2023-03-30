<div id="wp-products">
    <h2>Món ngon phải thử </h2>
    <ul id="list-products">
        <?php
            $i=0;
            
            foreach ($product as $product) {
                
                echo '
                <div class="item">
                    <img class="product" src="./public/client/img/'.$product['img'].'" alt="">
                    <div class="name">'.$product['product_name'].'</div>
                    <div class="desc">'.$product['detail'].'</div>
                    <div class="price">'.$product['price'].' VNĐ</div>
                </div>
                
                ';
            }


        ?>
        


    </ul>
</div>