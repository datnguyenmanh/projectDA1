<?php
function category()
{
    $sql="select * from category";
    $dscategory=executeQuery($sql);
    admin_render("category/manager-category.php",[
        'dscategory'=> $dscategory,
    ]);
}



?>