<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <title>Локації - Перегляд</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php
                require('panel.php');
                ?>

            </div>
            <h1 class="text-center display-4 fw-bolder">Локації</h1>
            <section>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                        $id = $_GET['id'];
                        require('db.php');
                        $sql = $mysql->query("SELECT * FROM `location` ORDER BY `id`");
                        while ($result = mysqli_fetch_array($sql))
                        {
                           echo "<div class='col mb-5'>
                                    <div class='card h-100'>
                                        <img class='card-img-top' width='300px' height='175px' src='$result[pict]' alt='...'/>
                                        <div class='card-body p-4'>
                                            <div class='text-center'>
                                                <h5 class='fw-bolder'>Код локації: $result[id]</h5>
                                                <p>$result[locName]</p>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                </div>";
                        }
                    ?>               
                </div>
            </div>      
        </section>
        </br>
                            </br>
                            </br>
                            </br>
                            </br>
                            </br>
            <?php
            require('footer_paneluser.php');
            ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


</body>

</html>