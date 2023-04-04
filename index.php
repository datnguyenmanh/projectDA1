<?php
require_once "./commons/helpers.php";
require_once "./commons/app_config.php";
require_once "./database/config.php";
require_once "./database/pdo.php";

$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once './business/homepage.php';
        index();
        break;
    case 'san-pham':
        require_once './business/product.php';
        product_index();
        break;
    case 'contact':
        require_once 'view/homepage/contact.php';

        break;

        //////////////////// ADMIN////////////////////////
    case 'admin':
        require_once 'view/admin/trang-chu.php';
        break;
    case 'category':
        require_once './business/admin/category.php';
        category();
        break;
    case 'admin/edit-category':
        require_once './business/admin/category.php';
        edit_cate();
        break;

    case 'admin/add-category':
        require_once './business/admin/category.php';
        add_cate();
        break;
    case 'admin/delete-category':
        require_once './business/admin/category.php';
        delete();
        break;

    case 'product':
        require_once './business/admin/products.php';
        listproduct();
        break;
    case 'admin/add-product':
        require_once './business/admin/products.php';
        listproduct();
        break;
    case 'admin/delete-product':
        require_once './business/admin/products.php';
        listproduct();
        break;
    case 'admin/edit-product':
        require_once './business/admin/products.php';
        listproduct();
        break;
    case 'user':
        require_once './business/admin/users.php';
        listuser();
        break;
    default:
        # code...
        break;
}