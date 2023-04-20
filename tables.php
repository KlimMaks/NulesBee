<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <title>Таблицi</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

            <?php
                require('panel.php');
            ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading
                    <h1 class="h3 mb-2 text-gray-800">Таблицi</h1>
                    <p class="mb-4">test<a target="_blank"></p>
                     -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Iнформацiя по вуликам</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Вулик</th>
                                            <th>Дата запуску</th>
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
                                    <tfoot>
                                        <tr>
                                            <th>Вулик</th>
                                            <th>Дата запуску</th>
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
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $id = $_GET['id'];
                                        require('db.php');
                                        $sql = $mysql->query("SELECT * FROM `hive` ORDER BY `id`");
                                        while ($result = mysqli_fetch_array($sql))
                                            {
                                            echo "
                                            <tr>
                                                <td>$result[id]</td>
                                                <td>$result[date_of_start]</td>
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>All right reserved &copy; NULES BEE 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
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
                <div class="modal-body">Вибираючи "Вихід" ви готові вийти з сесеї</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Відмінити</button>
                    <a class="btn btn-primary" href="login.html">Вийти</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>