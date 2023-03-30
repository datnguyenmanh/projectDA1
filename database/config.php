<?php
    function pdo_get_connection(){
        $dburl = "mysql:host=103.97.126.23;dbname=yjsgpzgi_db;charset=utf8";
        $username = 'yjsgpzgi_admin';
        $password = 'Dat01122002';
    
        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

?>