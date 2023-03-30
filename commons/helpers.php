<?php
    //viewpath là màn hình mình cần gọi vào
    //data[] là một mảng giá trị được gán bên hàm sử lý
    //businessview sẽ được gọi bên giao diện
    //bên layout sẽ include businessview vào

    function client_render($viewpath,$data = [])
    {
        extract($data);
        $businessView = "./view/homepage/". $viewpath;
        include_once './view/homepage/san-pham.php';
    }
    function admin_render($viewpath, $data = []){

        //viewpath là màn hình mình cần gọi vào
        //data[] là một mảng giá trị được gán bên hàm sử lý
        //businessview sẽ được gọi bên giao diện
        //bên layout sẽ include businessview vào
        extract($data);
        $businessView = "./view/admin/" . $viewpath;
        include_once './view/admin/layout/main.php';//sinh ra giao diện
    }

?>