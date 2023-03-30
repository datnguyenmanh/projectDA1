<?php
function product_index()
{
    if(isset($_POST['id'])){
        $id = $_GET['id'];
        if (!isset($_GET['page'])) {
            $page = 1;
        }else{
            $page = $_GET['page'];
        }
        $data = 12;
        $sql = "select * from product where status=0 and category='$id'";
        $result = executeQuery($sql);
        $number= count($result);
        $pagea = ceil($number / $data);
        $pages = ($page -1) * $data;
        $sql = "select * from product where status=0 and category='$id' order by product_id desc limit $pages,$data";
        $product = executeQuery($sql);

        client_render('trang-chu.php',[
            'product' => $product,
            'pagea' => $pagea,
        ]);

    }
}


?>