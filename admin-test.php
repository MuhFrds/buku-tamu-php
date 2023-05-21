<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buku Tamu</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <!-- container -->
    <div class="container">

        <!-- Head -->
        <div class="head text-center">
            <img src="assets/img/youtube.png" alt="" width="100">
            <h2 class="text-white">Sistem informasi buku tamu <br> Smk mutuharjo</h2>
        </div>
        <!-- end head -->

        <!-- row -->
        <div class="row mt-2">
            <!-- col-lg-7 -->
            <div class="col-lg-7 mb-3">
                <div class="card shadow bg-gradient-light">
                    <!-- card body -->
                    <div class="card-body">

                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"> Identitas Pengunjung</h1>
                        </div>
                        <form class="user">
                            <div class="form-grow">
                                <input type="text" class="form-control 
                                    form-control-user" name="nama" placeholder="Nama Pengunjung">
                            </div>
                            <br>
                            <div class="form-grow ">
                                <input type="text" class="form-control 
                                    form-control-user" name="alamat" placeholder="Alamat Pengunjung">
                            </div>
                            <br>
                            <div class="form-grow ">
                                <input type="text" class="form-control 
                                    form-control-user" name="tujuan" placeholder="Tujuan Pengunjung">
                            </div>
                            <br>
                            <div class="form-grow ">
                                <input type="text" class="form-control 
                                    form-control-user" name="nope" placeholder="No.Hp Pengunjung">
                            </div>
                            <br>

                            <!-- Button -->
                            <a href="login.html" class="btn btn-primary btn-user btn-block">
                                Simpan Data
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="">By Muhammad Firdaus | 2023 - <?= date('Y') ?></a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
            </div>
            <!-- end col-lg-7 -->

            <!-- col-lg-5 -->
            <div class="col-lg-5 mb-3">
                <!-- card -->
                <div class="card shadow">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"> Statistik Pengunjung</h1>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <td> Hari ini</td>
                                <td> : 10</td>

                            </tr>
                            <tr>
                                <td> Kemarin</td>
                                <td> : 15</td>

                            </tr>
                            <tr>
                                <td> Bulan Ini</td>
                                <td> : 30</td>

                            </tr>
                            <tr>
                                <td> Total</td>
                                <td> : 50</td>

                            </tr>
                        </table>
                    </div>
                    <!-- card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-lg-5 -->



        </div>
        <!-- end row -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama Pengunjung</th>
                                <th>Alamat</th>
                                <th>Tujuan</th>
                                <th>No. Hp</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No. </th>
                                <th>Nama Pengunjung</th>
                                <th>Alamat</th>
                                <th>Tujuan</th>
                                <th>No. Hp</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Michael</td>
                                <td>Mars Barat</td>
                                <td>Rapat galaxy</td>
                                <td>1234456787</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- end container -->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

</body>

</html>