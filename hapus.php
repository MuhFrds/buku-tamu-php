<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Menghapus data berdasarkan ID
    $query = "DELETE FROM ttamu WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    
    if ($result) {
        // Jika berhasil menghapus data, redirect ke halaman rekapitulasi.php
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'admin.php';
              </script>";
    } else {
        // Jika terjadi kesalahan saat menghapus data
        echo "<script>
                alert('Gagal menghapus data.');
                window.location.href = 'admin.php';
              </script>";
    }
} else {
    // Jika parameter ID tidak ditemukan
    echo "<script>
            alert('ID tidak ditemukan.');
            window.location.href = 'rekapitulasi.php';
          </script>";
}

mysqli_close($koneksi);
