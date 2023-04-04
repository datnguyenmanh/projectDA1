<?php
function category()
{
    $sql = "select * from category";
    $dscategory = executeQuery($sql);
    admin_render("category/manager-category.php", [
        'dscategory' => $dscategory,
    ]);
}

function edit_cate()
{
    $spl = "";
    admin_render('category/edit_category.php', [
        ''
    ]);
}

function add_cate()
{
    // $name = $_GET['name'];
    // $sql = "insert into category (name) value $name";
    // $data = executeQuery($sql);
    admin_render('category/add-category.php', [
        // 'data' => $data
        ''
    ]);
}


function delete()
{
    // $name = $_GET['name'];
    // $sql = "insert into category (name) value $name";
    // $data = executeQuery($sql);
    admin_render('', [
        // 'data' => $data
        ''
    ]);
}