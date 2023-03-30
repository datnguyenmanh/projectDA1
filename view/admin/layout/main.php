<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
    <?php include_once "./view/admin/layout/style.php" ?>

</head>

<body>

    <div class="hold-transition sidebar-mini layout-fixed">
        <!-- Wrapper -->
        <?php include_once "./view/admin/layout/menu.php" ?>
        <div class="content-wrapper">
            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Dashboard
                            </h1>

                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <?php include_once $businessView; ?>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
        </div>



    </div>
    <!-- header -->


    <!-- banner -->

    <main>



    </main>
    <?php include_once "./view/admin/layout/script.php" ?>

</body>

</html>