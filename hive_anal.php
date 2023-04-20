<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <title>Аналiз вуликiв</title>
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
            <div class="container px-5">
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-left mb-5">
                        <h1 class="fw-bolder">Аналiз вулика</h1>
                    </div>
                    <div class="row gx-5 justify-content-left">
                        <div class="col-lg-8 col-xl-12">
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="get">
                                <div class="" style="margin-bottom: 1%;">
                                    <input class="form-control" id="id" name="id" type="text" placeholder="Введіть код"/>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary" id="submitButton" type="submit">Пiдтвердити</button>
                                </div>
                            </form>
                            </br></br>
                            <div class ="row" style="font-size: 20px;">
                                <div class="col-6">
                                    <table >
                                        <td>
                                        <div class="card mb-12">
                                            <div class="card-header py-3">
                                                <h5 class="m-0 font-weight-bold text-warning">Обраний вулик</h5>
                                            </div>
                                            <div class="card-body">
                                            <div class='col-md-12'>
                                                <div class='mb-1'>Сила сім'ї: 
                                                    <strong>
                                                        <?php 
                                                            $id = $_GET['id']; 
                                                            $sql = $mysql->query("SELECT * FROM hive WHERE id = '$id'"); 
                                                            while ($result = mysqli_fetch_array($sql)) 
                                                            { 
                                                                echo "$result[power]"; 
                                                            } 
                                                        ?>
                                                    </strong>
                                                </div>
                                                <div class='mb-1'>Мед: 
                                                    <strong>
                                                        <?php 
                                                            $id = $_GET['id']; 
                                                            $sql = $mysql->query("SELECT * FROM hive WHERE id = '$id'"); 
                                                            while ($result = mysqli_fetch_array($sql)) 
                                                            { 
                                                                echo "$result[honey]"; 
                                                            } 
                                                        ?>
                                                    </strong>
                                                </div>
                                                <div class='mb-1'>Кількість суш: 
                                                <strong>
                                                        <?php 
                                                            $id = $_GET['id']; 
                                                            $sql = $mysql->query("SELECT * FROM hive WHERE id = '$id'"); 
                                                            while ($result = mysqli_fetch_array($sql)) 
                                                            { 
                                                                echo "$result[comb]"; 
                                                            } 
                                                        ?>
                                                    </strong>
                                                </div>
                                                <div class='mb-1'>Кількість рамок з розплодом:  <strong>
                                                        <?php 
                                                            $id = $_GET['id']; 
                                                            $sql = $mysql->query("SELECT * FROM hive WHERE id = '$id'"); 
                                                            while ($result = mysqli_fetch_array($sql)) 
                                                            { 
                                                                echo "$result[frame]"; 
                                                            } 
                                                        ?>
                                                    </strong></div>
                                                <div class='mb-1'>Вощина:  <strong>
                                                        <?php 
                                                            $id = $_GET['id']; 
                                                            $sql = $mysql->query("SELECT * FROM hive WHERE id = '$id'"); 
                                                            while ($result = mysqli_fetch_array($sql)) 
                                                            { 
                                                                echo "$result[vosh]"; 
                                                            } 
                                                        ?>
                                                    </strong></div>
                                                <hr>
                                                <div class='mb-1'><strong>Додатково</strong></div>
                                                <div class='mb-1'>Рiк народження матки:  <strong>
                                                        <?php 
                                                            $id = $_GET['id']; 
                                                            $sql = $mysql->query("SELECT * FROM hive WHERE id = '$id'"); 
                                                            while ($result = mysqli_fetch_array($sql)) 
                                                            { 
                                                                echo "$result[birthYear]"; 
                                                            } 
                                                        ?>
                                                    </strong> рiк</div>
                                                <div class='mb-1'>Походження матки:  <strong>
                                                        <?php 
                                                            $id = $_GET['id']; 
                                                            $sql = $mysql->query("SELECT * FROM hive WHERE id = '$id'"); 
                                                            while ($result = mysqli_fetch_array($sql)) 
                                                            { 
                                                                echo "$result[birth]"; 
                                                            } 
                                                        ?>
                                                    </strong></div>
                                                <div class='mb-1'>Віск:  <strong>
                                                        <?php 
                                                            $id = $_GET['id']; 
                                                            $sql = $mysql->query("SELECT * FROM hive WHERE id = '$id'"); 
                                                            while ($result = mysqli_fetch_array($sql)) 
                                                            { 
                                                                echo "$result[wax]"; 
                                                            } 
                                                        ?>
                                                    </strong>кг.</div>
                                                <div class='mb-1'>Дата термічної обробки:  <strong>
                                                        <?php 
                                                            $id = $_GET['id']; 
                                                            $sql = $mysql->query("SELECT * FROM hive WHERE id = '$id'"); 
                                                            while ($result = mysqli_fetch_array($sql)) 
                                                            { 
                                                                echo "$result[thermal]"; 
                                                            } 
                                                        ?>
                                                    </strong></div>
                                            </div>
                                            </div>
                                        </div>
                                        </td>             
                                    </table>
                                </div>
                                <div class="col-6">
                                    <table>          
                                        <td>
                                        <?php
                                            $sql = $mysql->query("SELECT ROUND(AVG(`power`),1), ROUND(AVG(`honey`),1), ROUND(AVG(`comb`),1), ROUND(AVG(`frame`),1), ROUND(AVG(`vosh`),1) FROM hive"); 
                                            while ($result = mysqli_fetch_array($sql)) 
                                            {
                                            echo "               
                                            <div class='card mb-12'>
                                                <div class='card-header py-3'>
                                                    <h5 class='m-0 font-weight-bold text-warning'>Середні значення</h5>
                                                </div>
                                                <div class='card-body'>
                                                <div class='col-md-12'>
                                                    <div class='mb-1'>Сила сімї: <strong>{$result[0]}</strong></div>
                                                    <div class='mb-1'>Мед: <strong>{$result[1]}</strong>кг.</div>
                                                    <div class='mb-1'>Кількість суш: <strong>{$result[2]}</strong></div>
                                                    <div class='mb-1'>Кількість рамок з розплодом: <strong>{$result[3]}</strong></div>
                                                    <div class='mb-1'>Вощина: <strong>{$result[4]}</strong></div>
                                                </div>
                                                </div>
                                            </div>";
                                            }
                                        ?>
                                        </td>     
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                require('footer_paneluser.php');
            ?>
        </div>
    </body>
</html>