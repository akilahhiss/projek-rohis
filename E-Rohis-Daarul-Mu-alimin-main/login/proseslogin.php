<?php
session_start();
include "../koneksi.php";

$username = trim($_POST['username']);
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    echo "<script>alert('Username dan Password wajib diisi!'); window.location='login.php';</script>";
    exit;
}

$query = mysqli_query($konek, 
    "SELECT * FROM login WHERE username='$username'"
);

$data = mysqli_fetch_assoc($query);

if ($data) {

    // 🔴 CEK STATUS DULU
    if ($data['status'] != 'aktif') {
        echo "<script>
                alert('Akun Anda tidak aktif! Hubungi admin.');
                window.location='login.php';
              </script>";
        exit;
    }

    // 🔐 CEK PASSWORD
    if ($password == $data['password']) {

        $_SESSION['id']       = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role']     = $data['role'];

        if ($data['role'] == "admin") {
            header("Location: ../admin/dashboard.php");
        } else {
            header("Location: ../anggota/home.php");
        }

        exit;

    } else {
        echo "<script>alert('Password salah!'); window.location='login.php';</script>";
    }

} else {
    echo "<script>alert('Username tidak ditemukan!'); window.location='login.php';</script>";
}
?>
