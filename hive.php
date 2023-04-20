<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Вулик</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php
            require('header.php');
        ?>
        <?php
            require('db.php');
        ?>

    <section">
    <?php
    $id = $_GET['id'];
    $sql = $mysql->query("SELECT * FROM `hive` WHERE `id`='$id'");
    while ($result = mysqli_fetch_array($sql)) {
        echo "<div class='container px-4 px-lg-5 my-5'>
                <div class='row gx-4 gx-lg-5 align-items'>
                    <h1 class='display-5 fw-bolder'>Вулик №{$result['id']}</h1>
                    <div class='col-md-5'><img class='card-img-top mb-5 mb-md-0' src='{$result['pict']}' alt='...'' width='200px'  height='400'/></div>
                    <div class='col-md-6'>
                        <h1 class='fw-bolder' style='font-size: 24px'>Поточні показники</h1>
                        <div class='mb-1'>Рiк народження матки: <strong>{$result['birthYear']}</strong> рiк</div>
                        <div class='mb-1'>Походження матки: <strong>{$result['birth']}</strong></div>
                        <div class='mb-1'>Сила сім'ї: <strong>{$result['power']}</strong></div>
                        <div class='mb-1'>Мед: <strong>{$result['honey']}</strong>кг.</div>
                        <div class='mb-1'>Віск: <strong>{$result['wax']}</strong>кг.</div>
                        <div class='mb-1'>Кількість суш: <strong>{$result['comb']}</strong></div>
                        <div class='mb-1'>Кількість рамок з розплодом: <strong>{$result['frame']}</strong></div>
                        <div class='mb-1'>Вощина: <strong>{$result['vosh']}</strong></div>
                        <div class='mb-1'>Дата останньої термічної обробки: <strong>{$result['thermal']}</strong></div>
                        </br>
                        <a class='btn btn-outline-light px-4' href='edit.php'>Оновлення</a>
                    </div>
                </div>
            </div>        
            </section>
                <section class='py-5'>
                    <div class='container px-4 px-lg-5 mt-2'>
                        <div class='row gx-4 gx-lg-5 align-items'>
                                    <div class='col mb-5'>
                                        <h2 class='fw-bolder mb-4'>Замітки</h2>
                                        <div class='card'>
                                            <div style='height:150px; overflow-y: scroll;'>    
                                                {$result['description']}
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>";
            }
        ?>
        <?php
            require('footer.php');
        ?>
    </body>