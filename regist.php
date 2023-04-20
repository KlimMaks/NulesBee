<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Реєстрація</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
</head>

<body style="background-color: #fbfbfb">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                                            <?php
                                            if($_COOKIE['user']== ''):
                                            ?>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Створення облікового запису</h1>
                            </div>
                            <form class="user" action="check.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="login" placeholder="Логiн">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" placeholder="Iм'я">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="pass" placeholder="Пароль">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="pass2" placeholder="Повторіть пароль">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit">Реєстрація</button>
                            </form>
                                            <?php else: ?>
                                                <p>Привiт, <?=$_COOKIE['user']?></p>
                                                <p>Щоб зареєструвати новий акаунт, будь ласка, вийдiть з системи</p>
                                                <a href="logout.php">Вихiд</a>
                                            <?php endif; ?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php" style="color: #000"><u>Вже є обліковий запис</u></a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="index.php" style="color: #000"><u>Повернутися назад</u></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>