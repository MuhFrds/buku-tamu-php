<?php

// buat session start
session_start();


// uji jika session telah di set atau tidak
if (
    empty($_SESSION['username'])
    or empty($_SESSION['password'])
    or empty($_SESSION['nama_pengguna'])
) {
    echo "<script>
    alert('Maaf, Untuk Mengakses Halaman Ini Harap Login Dahulu ');
    document.location='index.php';
    </script>";
}




?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Buku Tamu | SMK Mutuharjo</title>

    <!-- Buat Favicon -->
    <link rel="icon" href="assets/img/logo-sekolah.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Tambahkan referensi ke Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body class="bg-gradient-info">
    <!-- container -->
    <div class="container">
        <?php include "koneksi.php"; ?>