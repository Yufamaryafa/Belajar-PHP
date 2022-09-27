<?php

require_once('helper.php');
require_once('koneksi.php');

// Menangkap request
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE username = '$username' AND password = '$password'");

// Mengecek pengguna
if (mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_assoc($query);

    // var_dump($row);
    // die();
    // Membuat session
    session_start();
    $_SESSION['id'] = $row['id'];
    header("location: " . BASE_URL . 'dashboard.php?page=home');
} else {
    header("location: " . BASE_URL);
}