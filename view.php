<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Перегляд</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100" >
        <?php
            require('header.php');
        ?>
        <header class="bg-dark">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center">
                    <h1 class="display-4 fw-bolder">Вулики</h1>
                    <p class="lead fw-normal mb-0">Список ваших вуликів</p>
                    </br>
                    <a class="btn btn-outline-light btn-lg px-4" href="add.php">Додати</a>
                </div>
            </div>
        </header>
        <section>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                        $id = $_GET['id'];
                        require('db.php');
                        $sql = $mysql->query("SELECT * FROM `hive` ORDER BY `id`");
                        while ($result = mysqli_fetch_array($sql))
                        {
                           echo "<div class='col mb-5'>
                                    <div class='card h-100'>
                                        <img class='card-img-top' width='300px' height='250px' src='$result[pict]' />
                                        <div class='card-body p-4'>
                                            <div class='text-center'>
                                                <h5 class='fw-bolder'>Код вулика: $result[id]</h5>
                                                <p>Дата запуску: $result[date_of_start]</p>
                                                <p>Точка: $result[locName]</p>
                                                <p>Дата термічної обробки: $result[thermal]</p>
                                            </div>
                                        </div>
                                        <div class='d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start card-footer border-top-0 bg-transparent'>
                                    <a class='btn btn-primary  px-4 me-sm-1' href='/hive.php?id=$result[id]'>Перегляд</a>
                                    <a class='btn btn-primary  px-4 me-sm-1' href='/history.php?id=$result[id]'>Історія</a>
                                </div>
                                    </div>
                                </div>";
                        }
                    ?>
                </div>
            </div>
        </section>
        <?php
            require('footer.php');
        ?>