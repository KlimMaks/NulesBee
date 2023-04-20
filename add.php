<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Додати</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <?php
                require('header.php');
            ?>
            <?php
                require('db.php');
            ?>
            <section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="feature bg-primary bg-gradient text-white rounded-3 mb-3" viewBox="-4.5 -4.5 25 25">
                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            <h1 class="fw-bolder">Додавання вулика</h1>
                            <p class="lead fw-normal text-muted mb-0">Заповніть поля</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="add_hive.php" method="post">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="date_of_start" name="date_of_start" type="text" placeholder="Дата запуску"/>
                                        <label for="name">Дата запуску(дд.мм.рр)</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="quennBday" name="birthYear" type="text" placeholder="Рiк народження матки"/>
                                        <label for="name">Рiк народження матки</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="quennBdayPlace" name="birth" type="text" placeholder="Мiсце народження матки"/>
                                        <label for="name">Походження матки</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="pict" name="power" type="text" placeholder="Сила сім'ї"/>
                                        <label for="name">Сила сім'ї</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="honey" name="honey" type="text" placeholder="Кiлькiсть меду(г.)"/>
                                        <label for="name">Мед (кг)</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                         <input class="form-control" id="wax" name="wax" type="text" placeholder="Кiлькiсть воску(г.)"/>
                                        <label for="name">Вiск (кг)</label>
                                     </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="hiveQuantity" name="comb" type="text" placeholder="Введiть кiлькiсть суш"/>
                                        <label for="name">Кiлькiсть суш</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="pict" name="vosh" type="text" placeholder="Вощина"/>
                                        <label for="name">Вощина</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="pict" name="frame" type="text" placeholder="Кількість рамок з розплодом"/>
                                        <label for="name">Кількість рамок з розплодом</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="pict" name="thermal" type="text" placeholder="Термічна обробка"/>
                                        <label for="name">Термічна обробка</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="pict" name="pict" type="text" placeholder="Вставте URL зображення(по бажанню)"/>
                                        <label for="name">Вставте URL зображення</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Замітки"></textarea>
                                        <label for="name">Замітки</label>
                                    </div>
                                    <select name="locName" class="custom-select d-block w-100 form-control">
                                        <option value="0">Оберіть точку</option>
                                        <?php
                                            $sql = $mysql->query("SELECT * FROM `location`");
                                            while ($result = mysqli_fetch_array($sql)) {
                                        ?>
                                        <option value="<?=$result['locName']?>"><?=$result['locName']?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </br>
                                    <div class="form-floating mb-3">
                                        <input style="margin-left:210px;" value = "Надіслати" class="btn btn-primary" type="submit" placeholder="Надiслати"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php
            require('footer.php');
        ?>
    </body>