<?php
// Menampilkan semua error
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Memulai sesi
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("location: auth-login.php");
    exit;
}

// Kode lainnya...
?>
