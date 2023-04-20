<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Iсторiя</title>
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

<section class="py-5">
            <div class="container px-4 px-lg-5 mt-2">
                <div class='row gx-4 gx-lg-5 align-items'>
                            <div class="col mb-5">
                                <h2 class="fw-bolder mb-4">Історія вулика</h2>
                                <div class="card">
                                    <div style="height:150px; overflow-y: scroll;">    
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Статус</th>
                                                        <th>Дата редагування</th>
                                                        <th>Рiк народження матки</th>
                                                        <th>Походження матки</th>
                                                        <th>Сила сім'ї</th>
                                                        <th>Мед(кг)</th>
                                                        <th>Вiск(кг)</th>
                                                        <th>Кiлькiсть суш</th>
                                                        <th>Вощина</th>
                                                        <th>Кiлькiсть рамок з розплодом</th>
                                                        <th>Локацiя</th>
                                                        <th>Дата термічної обробки</th>
                                                        <th>Замiтка</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php
                                                    $id = $_GET['id'];
                                                   /*$sql = $mysql->query("SELECT his.status, his.date_time, h.locName, h.honey, h.wax, h.hiveQuantity, h.quennBday, h.quennBdayPlace, h.date_of_start FROM `hive` AS `h` INNER JOIN `history` AS `his` ON h.id = '$id' = his.hive_id");*/
                                                    $sql = $mysql->query("SELECT * FROM `history` WHERE `hive_id`='$id'");
                                                    while ($result = mysqli_fetch_array($sql)) {
                                                        echo "
                                                        <tr>
                                                            <td>$result[status]</td>
                                                            <td>$result[date_time]</td>
                                                            <td>$result[birthYear]</td>
                                                            <td>$result[birth]</td>
                                                            <td>$result[power]</td>
                                                            <td>$result[honey]</td>
                                                            <td>$result[wax]</td>
                                                            <td>$result[comb]</td>
                                                            <td>$result[vosh]</td>
                                                            <td>$result[frame]</td>
                                                            <td>$result[locName]</td>
                                                            <td>$result[thermal]</td>
                                                            <td>$result[description]</td>
                                                        </tr>";
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            require('footer.php');
        ?>
    </body>
</html>