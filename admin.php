<!-- panggil file header -->
<?php include "header.php"; ?>

<?php

// uji ketika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    $tgl = date('Y-m-d');

    // htmlspecialchars agar inputan lebih aman dari injection
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
    $tujuan = htmlspecialchars($_POST['tujuan'], ENT_QUOTES);
    $nope = htmlspecialchars($_POST['nope'], ENT_QUOTES);


    // persiapan query simpan data
    $simpan = mysqli_query($koneksi, "INSERT INTO ttamu VALUES ('','$tgl', '$nama', '$alamat', '$tujuan', '$nope')");


    // uji jika simpan data sukses
    if ($simpan) {
        echo "<script>alert('Simpan data sukses, Terima kasih!');
                 document.location='?'</script>";
    } else {
        echo "<script>alert('Simpan data Gagal!!!');
         document.location='?'</script>";
    }
}

?>


<!-- custom animated -->
<link href="assets/css/animated.css" rel="stylesheet" type="text/css">
<!-- Head -->
<div class="head text-center">
    <img src="assets/img/logo-sekolah.png" alt="" width="100">
    <h2 class="text-white">Sistem Informasi Buku Tamu <br>
        <b>SMK MUTUHARJO</b>
    </h2>
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
                    <h1 class="h4 text-gray-900 mb-4"> <b>IDENTITAS PENGUNJUNG</b></h1>
                </div>
                <form class="user" method="POST" action="">
                    <div class="form-grow">
                        <input type="text" class="form-control 
                                    form-control-user" name="nama" placeholder="Nama Pengunjung" required maxlength="30">
                    </div>
                    <br>
                    <div class="form-grow ">
                        <input type="text" class="form-control 
                                    form-control-user" name="alamat" placeholder="Alamat Pengunjung" required maxlength="15">
                    </div>
                    <br>
                    <div class="form-grow ">
                        <input type="text" class="form-control 
                                    form-control-user" name="tujuan" placeholder="Tujuan Pengunjung" required maxlength="30">
                    </div>
                    <br>
                    <div class="form-grow ">
                        <input type="text" class="form-control 
                                    form-control-user" name="nope" placeholder="No.Hp Pengunjung" required maxlength="15">
                    </div>
                    <br>

                    <!-- Button -->
                    <button type="submit" name="bsimpan" class="btn btn-primary btn-user btn-block">Simpan Data</button>

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
        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-center">STATISTIK PENGUNJUNG</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <?php
                    // deklarasi tanggal


                    // menampilkan tanggal now
                    $tgl_sekarang = date('Y-m-d');

                    // menampilkan tanggal kemarin
                    $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

                    // mendapatkan 6 hari sebekum tanggal sekarang
                    $seminggu = date('Y-m-d h:i:s', strtotime('-1 week +1 day', strtotime($tgl_sekarang)));


                    $sekarang = date('Y-m-d h:i:s');

                    // persiapan query tampilkan jumlah data pengunjung

                    $tgl_sekarang = mysqli_fetch_array(mysqli_query(
                        $koneksi,
                        "SELECT count(*) FROM ttamu where tanggal like '%$tgl_sekarang%'"
                    ));


                    $kemarin = mysqli_fetch_array(mysqli_query(
                        $koneksi,
                        "SELECT count(*) FROM ttamu where tanggal like '%$kemarin%'"
                    ));


                    $seminggu = mysqli_fetch_array(mysqli_query(
                        $koneksi,
                        "SELECT count(*) FROM ttamu where tanggal BETWEEN '$seminggu' and 
                    '$sekarang'"
                    ));

                    $bulan_ini = date('m');

                    $sebulan = mysqli_fetch_array(mysqli_query(
                        $koneksi,
                        "SELECT count(*) FROM ttamu where month(tanggal) = '$bulan_ini'"
                    ));

                    $keseluruhan = mysqli_fetch_array(mysqli_query(
                        $koneksi,
                        "SELECT count(*) FROM ttamu"
                    ));



                    ?>
                    <table class="table table-bordered">
                        <tr>
                            <td><i class="fas fa-user text-primary"></i> Hari ini</td>
                            <td>:
                                <?= $tgl_sekarang[0] ?>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-user-friends text-success"></i> Kemarin</td>
                            <td>:
                                <?= $kemarin[0] ?>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-users text-info"></i> Minggu ini</td>
                            <td>:
                                <?= $seminggu[0] ?>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-chart-pie text-warning"></i> Bulan ini</td>
                            <td>:
                                <?= $sebulan[0] ?>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-chart-line text-danger"></i> Keseluruhan</td>
                            <td>:
                                <?= $keseluruhan[0] ?>
                            </td>
                        </tr>
                    </table>
                </div>
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
        <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung Hari ini [<?= date('d-m-Y') ?>]</h6>
    </div>
    <div class="card-body">
        <a href="rekapitulasi.php" class="btn btn-success mb-3"><i class="fa
         fa-table"> Rekapitulasi Pengunjung</i></a>
        <a href="logout.php" class="btn btn-danger mb-3"><i class="fa
         fa-sign-out-alt"> Logout</i></a>



        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Tanggal</th>
                        <th>Nama Pengunjung</th>
                        <th>Alamat</th>
                        <th>Tujuan</th>
                        <th>No. Hp</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No. </th>
                        <th>Tanggal</th>
                        <th>Nama Pengunjung</th>
                        <th>Alamat</th>
                        <th>Tujuan</th>
                        <th>No. Hp</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $tgl = date('Y-m-d'); // 20223-05-21
                    $tampil = mysqli_query($koneksi, "SELECT * FROM ttamu where tanggal like '%$tgl%' order by id desc");
                    $no = 1;
                    while ($data = mysqli_fetch_array($tampil)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['tanggal'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['tujuan'] ?></td>
                            <td><?= $data['nope'] ?></td>
                            <td>
                                <div class="form-group">
                                    <form action="edit.php" method="GET" style="display: inline;">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <button type="submit" class="btn btn-warning btn-sm"><i class=""></i> Edit</button>
                                    </form>
                                    <form action="hapus.php" method="GET" style="display: inline;">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <i class=""></i> Delate
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- panggil file footer -->
<?php include "footer.php"; ?>