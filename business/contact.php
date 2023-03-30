<?php
    function index()
    {
        $sql = "select * from category";
        $category = executeQuery($sql);
        $sql = "select * from product";
        $product = executeQuery($sql);

        client_render('trang-chu.php',[
            'category' => $category,
            'product'=> $product,
        ]);
    }

?>  