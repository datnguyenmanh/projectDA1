<?php
function listuser()
{
  $sql = "select * from user";
  $list = executeQuery($sql);
  admin_render("user/list-user.php", [
    'list' => $list,
  ]);
}