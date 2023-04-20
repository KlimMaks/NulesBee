<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                        <a class="navbar-brand" href="index.php">
                          <img src="img/logo.png" alt="" width="50" height="50" class="img-fluid">
                          <b><span style="color: black;">NULES</span> <span style="color: #FFBB37;">BEE</span></b>
                        </a> 
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FFBB37;"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <?php
                            if($_COOKIE['user']== ''):
                            ?>
                            <li class="nav-item"><a class="nav-link" href="index.php" style="color:black; font-size: 18px;">Головна</a></li>
                            <li class="nav-item dropdown">
                            </li>
                            <li class="nav-item"><a class="nav-link" href="aboutus.php" style="color:black;font-size: 18px;">Про нас</a></li>
                            <li class="nav-item"><a class="nav-link" href="faq.php" style="color:black;font-size: 18px;">FAQ</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;font-size: 18px;">Обліковий запис</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="login.php" style="color:black;">Вхід</a></li>
                                    <li><a class="dropdown-item" href="regist.php" style="color:black;">Реєстрація</a></li>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li class="nav-item"><a class="nav-link" href="index2.php" style="color:black; font-size: 18px;">Головна</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false " style="color:black; font-size: 18px;">Вулики</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="view.php" style="color:black;">Перегляд</a></li>
                                    <li><a class="dropdown-item" href="add.php" style="color:black;">Додавання</a></li>
                                    <li><a class="dropdown-item" href="edit_main.php" style="color:black;">Редагування</a></li>
                                    <li><a class="dropdown-item" href="remove.php" style="color:black;">Видалення</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="admin.php" style="color:black;font-size: 18px;">Керування</a></li>
                            <li class="nav-item"><a class="nav-link" href="aboutus.php" style="color:black;font-size: 18px;">Про нас</a></li>
                            <li class="nav-item"><a class="nav-link" href="faq.php" style="color:black;font-size: 18px;">FAQ</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;font-size: 18px;"><?=$_COOKIE['user']?></a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="login.php" style="color:black;">Вхід</a></li>
                                    <li><a class="dropdown-item" href="regist.php" style="color:black;">Реєстрація</a></li>
                                </ul>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>





<!-- 
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Вибрав "Вийти" ви готови закінчити цю сесію</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
-->