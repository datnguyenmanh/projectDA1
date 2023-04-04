<?php
function listproduct()
{
  $sql = "select * from product";
  $list = executeQuery($sql);
  admin_render("product/list-product.php", [
    'list' => $list,
  ]);
}

function addproduct()
{
  $sql = "select * from product";
  $list = executeQuery($sql);
  admin_render("product/list-product.php", [
    'list' => $list,
  ]);
}

function deleteproduct()
{
  $sql = "select * from product";
  $list = executeQuery($sql);
  admin_render("product/list-product.php", [
    'list' => $list,
  ]);
}

function editproduct()
{
  $sql = "select * from product";
  $list = executeQuery($sql);
  admin_render("product/list-product.php", [
    'list' => $list,
  ]);
}