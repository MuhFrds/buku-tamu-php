<?php
include "koneksi.php";

// perisapan excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Export Excel Data Pengunjung.xls");
header("Pragma: no-cache");
header("Expires:0");
?>

<table border="1">
    <thead>
        <tr>
            <th colspan="6">Rekapitulasi Data Pengunjung</th>
        </tr>
        <tr>
            <th>No. </th>
            <th>Tanggal</th>
            <th>Nama Pengunjung</th>
            <th>Alamat</th>
            <th>Tujuan</th>
            <th>No. Hp</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $tgl1 = $_POST['tanggala'];
        $tgl2 = $_POST['tanggalb'];



        $tampil = mysqli_query($koneksi, "SELECT * FROM ttamu where tanggal BETWEEN '$tgl1' and '$tgl2' order by tanggal asc");
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