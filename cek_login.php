<?php

// aktifkan session
session_start();

// panggil koneksi databse
include "koneksi.php";

@$pass = md5($_POST['password']);
@$username = mysqli_escape_string($koneksi, $_POST['username']);
