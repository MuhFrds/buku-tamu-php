<?php
include "header.php";
?>


<!-- awal row -->
<div class="row">
    <!-- awal col md 12 -->
    <div class="col-md-12">
        <!-- awal card -->
        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Rekapitulasi pengunjung</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="" class="text-center">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">dari tanggal</label>
                                <input type="date" class="form-control" name="tanggal1" value="<?= isset($_POST['tanggal1']) ?
                                                                                                    $_POST['tanggal1'] : date('Y-m-d') ?>" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Sampai Tanggal</label>
                                <input class="form-control" type="date" name="tanggal2" value="<?= isset($_POST['tanggal2']) ?
                                                                                                    $_POST['tanggal2'] : date('Y-m-d') ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class=" row">
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            <button class="btn btn-primary form-control" name="btampilkan"> <i class="fa fa-search"></i> Tampilkan</button>
                        </div>
                        <div class="col-md-2">
                            <a href="admin.php" class="btn btn-danger form-control"> <i class="fa fa-backward"></i> Kembali</a>
                        </div>
                    </div>
                </form>

                <?php
                if (isset($_POST['btampilkan'])) :

                ?>
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

                                $tgl1 = $_POST['tanggal1'];
                                $tgl2 = $_POST['tanggal2'];



                                $tampil = mysqli_query($koneksi, "SELECT * FROM ttamu where tanggal BETWEEN '$tgl1' and '$tgl2' order by id desc");
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
                                                    <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</button>
                                                </form>
                                                <form action="hapus.php" method="GET" style="display: inline;">
                                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>


                        <center>
                            <form method="POST" action="exportexcel.php">
                                <div class="col-md-4">
                                    <input type="hidden" name="tanggala" value=" <?= @$_POST['tanggal1'] ?>">
                                    <input type="hidden" name="tanggalb" value=" <?= @$_POST['tanggal2'] ?>">

                                    <button class="btn btn-success form-control" name="bexport"><i class="fa fa-download"></i> Export Data Excel</button>
                                </div>
                            </form>
                        </center>


                    </div>

                <?php endif; ?>


            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- akhir col md 12 -->

</div>
<!-- akhir row -->

<?php include "footer.php";
?>