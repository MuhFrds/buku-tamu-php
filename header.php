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
    alert('Maaf, untuk mengakses halaman ini harap login dahulu ');
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
        <?php include "koneksi.php"; ?>