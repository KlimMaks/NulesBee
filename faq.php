<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FAQ</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php
            require('header.php');
            ?>
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Frequently Asked Questions</h1>
                        <p class="lead fw-normal text-muted mb-0">Як ми можем вам допомогти?</p>
                    </div>
                    <div class="row gx-5">
                        <div class="col-xl-8">
                            <!-- FAQ Accordion 1-->
                            <h2 class="fw-bolder mb-3">Основне</h2>
                            <div class="accordion mb-5" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="OneAccordion"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#showfirst" aria-expanded="true" aria-controls="showfirst" style="color: white; background-color: #f5c840; box-shadow: inset 0 -1px 0 rgba(245, 200, 64, 0.125);">Вулики</button></h3>
                                    <div class="accordion-collapse collapse" id="showfirst" aria-labelledby="OneAccordion" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            У категорії <strong>"Вулики"</strong> ви можете переглядати всі доступні робочі вулики, які додані в базу даних. Користувачі даної веб-системи мають можливість додавати нові вулики, редагувати існуючі вулики, переглядати вміст кожного вулика, а також видаляти їх. 
                                            </br>Щоб додати новий вулик у систему, в центрі екрана є кнопка <strong>"Додати"</strong>, яка відкриє необхідну форму для заповнення. 
                                            </br>Також ви можете відразу відкрити форму додавання вулика через верхнє меню у списку. 
                                            </br>Щоб відкрити вміст кожного вулика, у колонці з номером вулика натисніть кнопку <strong>"Перегляд"</strong> і відкриється сторінка з вибраним вуликом. 
                                            </br>Так само ви можете відразу відкрити форму редагування я вулика через верхнє меню у списку. 
                                            </br>Щоб видалити вибраний вулик, необхідно або відкрити сторінку з вуликом або вибрати у верхньому меню кнопку <strong>"Видалення"</strong> і ввести id вулики та підтерти вибрану дію.        
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="TestG"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#showsecond" aria-expanded="false" aria-controls="showsecond" style="color: white; background-color: #f5c840; box-shadow: inset 0 -1px 0 rgba(245, 200, 64, 0.125);">Обліковий запис</button></h3>
                                    <div class="accordion-collapse collapse" id="showsecond" aria-labelledby="TestG" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            У категорії <strong>"Облікові записи"</strong> ви можете виконати авторизацію або реєстрацію до нашої веб-системи. Усі зареєстровані користувачі зберігатимуться в нашій базі. 
                                            </br>Щоб увійти в систему, ви можете перейти на кнопку <strong>"Вхід"</strong> на головній сторінці або натиснути на <strong>"Облікові записи"</strong> зверху в меню. Ви перейдете на форму заповнення логіну та паролю і після підтвердження ви станете авторизованим користувачем і зможете керувати цим ресурсом. 
                                            </br>Якщо ви ще не зареєстровані, ви повинні створити свій обліковий запис. Для цього ви можете перейти на кнопку <strong>"Зареєструватися"</strong> з головної сторінки або з верхнього меню. 
                                            </br>Для реєстрації Вам необхідно ввести ваші дані, такі як логін, пароль та ПІБ, після чого підтвердити їх натисканням кнопки <strong>"Зареєструватися"</strong>.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="fw-bolder mb-3">Управління</h2>
                            <div class="accordion mb-5" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="1Three"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="color: white; background-color: #f5c840; box-shadow: inset 0 -1px 0 rgba(245, 200, 64, 0.125);">Панель управління</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="1Three" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Адмін панель складається з інструментів для збирання інформації та детального аналізу кожного аспекту. 
                                        </br>Панель управління являє собою збір загальної інформації по пасіці, а саме кількість вуликів, кількість локацій, загальна кількість меду, що виробляється, і воску.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="1Four"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: white; background-color: #f5c840; box-shadow: inset 0 -1px 0 rgba(245, 200, 64, 0.125);">Аналіз вулика</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="1Four" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Вкладка <strong>"Аналіз вуликів"</strong> виконує виведення інформації за вказаним номером вулика. 
                                        </br>Щоб зробити аналіз, потрібно ввести в поле <strong>"Введіть айді вулики"</strong> потрібний номер. 
                                        </br>Після цієї дії буде виведена повна інформація вибраного вулика, яку можна буде переглянути
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="1Five"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="color: white; background-color: #f5c840; box-shadow: inset 0 -1px 0 rgba(245, 200, 64, 0.125);">Аналіз локації</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="1Five" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Вкладка <strong>"Аналіз локацій"</strong> виконує виведення інформації за вказаним номером локації. 
                                        </br>Щоб зробити аналіз, потрібно ввести в поле <strong>"Введіть айди локації"</strong> потрібний номер. 
                                        </br>Після цієї дії буде виведена повна інформація обраної локації, яку можна буде переглянути
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="1Six"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="color: white; background-color: #f5c840; box-shadow: inset 0 -1px 0 rgba(245, 200, 64, 0.125);">Дії</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseSix" aria-labelledby="1Six" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Вкладка <strong>"Дії"</strong> являє собою список з усіх основних дій з локаціями, а саме створення, редагування і видалення. 
                                        </br>Щоб переглянути список доступних локацій, натисніть у боковому меню <strong>"Дії"</strong> - <strong>"Перегляд"</strong> і відкриється список робочих локацій. 
                                        </br>Щоб додати локацію, натисніть у боковому меню <strong>"Дії"</strong> - <strong>"Додати"</strong> та введіть потрібну інформацію в поля, а саме айді та назву локації. Підтвердіть дію і локація буде успішно додана до бази даних. 
                                        </br>Щоб відредагувати локацію, натисніть у бічному меню <strong>"Дії"</strong> - <strong>"Редагувати"</strong>, введіть айді існуючої локації та внесіть потрібні зміни в поля, після чого підтвердіть дію та локація буде успішно змінена. 
                                        </br>Щоб видалити локацію, натисніть у боковому меню <strong>"Дії"</strong> - <strong>"Видалити"</strong> та введіть айді потрібної локації для видалення. Підтвердіть дію у спливаючому вікні, і локація буде успішно видалена.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="1Eight"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="color: white; background-color: #f5c840; box-shadow: inset 0 -1px 0 rgba(245, 200, 64, 0.125);">Таблиця</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseEight" aria-labelledby="1Eight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        На вкладці <strong>"Таблиця"</strong> знаходиться журнал пасічника, який представлений у вигляді таблиці. Ви можете записувати свої спостереження або змінювати наявні прямо у вибраних колонках.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card border-0 bg-light mt-xl-5">
                                <div class="card-body p-4 py-lg-5">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <div class="h6 fw-bolder">Маєте питання?</div>
                                            <p class="text-muted mb-4">
                                                Зв'яжіться з нами
                                                <br />
                                                <a href="#!">nulesbee@domain.com</a>
                                            </p>
                                            <div class="h6 fw-bolder">Слідкуйте за нами</div>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
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
</html>
