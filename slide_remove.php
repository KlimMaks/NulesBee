<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <title>Локації - Видалення</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php
                    require('panel.php');
                ?>
                <?php
                    require('db.php');
                ?>
            </div>
            <section>
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <h1 class="fw-bolder">Видалити локацію</h1>
                            <p class="lead fw-normal text-muted mb-0">Заповніть поля</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="remove_location.php" method="post">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="id" name="id" type="text" placeholder="Введіть код"/>
                                        <label for="name">Код локації</label>
                                    </div>
                                    </br>
                                    <div class="d-grid"><button class="btn btn-primary" id="submitButton" type="submit">Збергіти</button></div>
                                </form>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer -->
            <?php
            require('footer_paneluser.php');
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


</body>

</html>