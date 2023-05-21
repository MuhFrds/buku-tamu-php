 <!-- panggil file header -->
 <?php include "header.php"; ?>

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
                 <form class="user" method="POST" action="">
                     <div class="form-grow">
                         <input type="text" class="form-control 
                                    form-control-user" name="nama" placeholder="Nama Pengunjung" required>
                     </div>
                     <br>
                     <div class="form-grow ">
                         <input type="text" class="form-control 
                                    form-control-user" name="alamat" placeholder="Alamat Pengunjung" required>
                     </div>
                     <br>
                     <div class="form-grow ">
                         <input type="text" class="form-control 
                                    form-control-user" name="tujuan" placeholder="Tujuan Pengunjung" required>
                     </div>
                     <br>
                     <div class="form-grow ">
                         <input type="text" class="form-control 
                                    form-control-user" name="nope" placeholder="No.Hp Pengunjung" required>
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
         <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung Hari ini [<?= date('d-m-Y') ?>]</h6>
     </div>
     <div class="card-body">
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

                         </tr>
                     <?php } ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>

 <!-- panggil file footer -->
 <?php include "footer.php"; ?>