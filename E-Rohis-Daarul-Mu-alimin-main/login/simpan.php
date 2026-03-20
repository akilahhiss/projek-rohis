<?php
include '../koneksi.php';
include 'koneksi.php';

$username = trim($_POST['username']);
$password = $_POST['pass'];
$role     = $_POST['rolee'];

if (empty($username) || empty($password)) {
    echo "Username dan password wajib diisi!";
    exit;
}

// cek username sudah ada atau belum
$cek = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username'");
if (mysqli_num_rows($cek) > 0) {
    echo "Username sudah digunakan!";
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

mysqli_query($koneksi, 
"INSERT INTO user (username,password,role) 
VALUES ('$username','$hash','$role')");

echo "User berhasil ditambahkan!";

 ?>