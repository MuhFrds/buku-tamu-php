<?php include "header.php"; ?>

<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-lg-block bg-info shadow-lg p-5 text-center">
                        <img src="assets/img/logo-sekolah.png" alt="" width="200">
                        <br>
                        <br>
                        <br>
                        <h3 class="text-white">Sistem Informasi Buku Tamu</h3>
                        <h4><small class="text-white">Sukoharjo, Jawa Tengah</small></h4>
                    </div>
                    <?php
                    // Memeriksa apakah parameter "id" ada dalam URL
                    if (isset($_GET['id'])) {
                        // Mendapatkan ID dari parameter URL
                        $id = $_GET['id'];

                        // Mendapatkan data berdasarkan ID
                        $sql = "SELECT * FROM ttamu WHERE id = '$id'";
                        $result = mysqli_query($koneksi, $sql);

                        if (!$result) {
                            echo "Terjadi kesalahan: " . mysqli_error($koneksi);
                        } elseif (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            // Menampilkan data dalam form untuk diedit

                            // Memeriksa apakah form telah disubmit untuk menyimpan perubahan
                            if (isset($_POST['submit'])) {
                                // Mendapatkan data yang diinput dari form
                                $nama = $_POST['nama'];
                                $alamat = $_POST['alamat'];
                                $tujuan = $_POST['tujuan'];
                                $nope = $_POST['nope'];

                                // Update data di database
                                $updateSql = "UPDATE ttamu SET nama = '$nama', alamat = '$alamat', tujuan = '$tujuan', nope = '$nope' WHERE id = '$id'";
                                $updateResult = mysqli_query($koneksi, $updateSql);

                                if ($updateResult) {
                                    // Jika berhasil disimpan, tampilkan pesan sukses dengan menggunakan fungsi echo "<script></script>"
                                    echo "<script>alert('Data Berhasil Diubah!'); window.location.href = 'admin.php';</script>";
                                } else {
                                    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
                                }
                            }
                    ?>

                            <div class="col-lg-6">
                                <div class="shadow bg-gradient-light p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>Edit Data Pengunjung</b></h1>
                                    </div>
                                    <form class="user" action="#" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama" value="<?= $row['nama']; ?>" required maxlength="30">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="alamat" class="form-control form-control-user" placeholder="Alamat" value="<?= $row['alamat']; ?>" required maxlength="15">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="tujuan" class="form-control form-control-user" placeholder="Tujuan" value="<?= $row['tujuan']; ?>" required maxlength="30">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nope" class="form-control form-control-user" placeholder="No. HP" value="<?= $row['nope']; ?>" required maxlength="15">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Simpan
                                            Data</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#"> By. sayasendiri | 2023 -
                                            <?= date('Y') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        } else {
                            echo "Data tidak ditemukan.";
                        }
                    } else {
                        echo "ID tidak ditemukan.";
                    }

                    // Menutup koneksi ke database
                    mysqli_close($koneksi);
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>