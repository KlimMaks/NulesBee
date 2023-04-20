<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <title>Аналiз локацiй</title>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
                        <div class="text-left mb-5">
                            <h1 class="fw-bolder">Аналiз локацiй</h1>
                        </div>
                        <div class="row gx-5 justify-content-left">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="get">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="id" name="id" type="text" placeholder="Введіть код"/>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary" id="submitButton" type="submit">Пiдтвердити</button>
                                    </div>
                                </form>
                                </br></br>
                                <table>
                                <td>
                                <div class="card" style="width: 20rem;">
                                  <img src="img/icons/locations.png" width="25px" height="175" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h5 style="text-align: center;"><strong>Назва</strong></h5>
                                    <p class="card-text" style="text-align: center;">
                                    <?php
                                        $id = $_GET['id'];
                                        $sql = $mysql->query("SELECT * FROM `location` WHERE `id` = '$id'");
                                        while ($result = mysqli_fetch_array($sql))
                                        {
                                            echo "$result[locName]";
                                        }
                                    ?> 
                                    </p>
                                  </div>
                                </div>
                                </td>
                                <td>
                                <div class="card" style="width: 20rem;">
                                  <img src="img/icons/hive.png" width="25px" height="175" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h5 style="text-align: center;"><strong>Кiлькiсть вуликiв</strong></h5>
                                    <p class="card-text" style="text-align: center;">
                                    <?php
                                        $id = $_GET['id'];
                                        $sql = $mysql->query("SELECT COUNT(`loc_id`) FROM `hive` WHERE `loc_id` = '$id'");
                                        while ($result = mysqli_fetch_array($sql))
                                        {
                                            echo "$result[0]";
                                        }
                                    ?> 
                                    </p>
                                  </div>
                                </div>
                                </td>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                require('footer_paneluser.php');
            ?>
        </div>
</body>
</html>