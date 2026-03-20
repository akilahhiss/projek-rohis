<?php
session_start();
include "../../koneksi.php";

if(isset($_POST['update'])){

    $id       = mysqli_real_escape_string($konek, $_POST['id']);
    $password = mysqli_real_escape_string($konek, $_POST['password']);
    $nama     = mysqli_real_escape_string($konek, $_POST['nama_lengkap']);
    $kelas    = mysqli_real_escape_string($konek, $_POST['kelas']);
    $role     = mysqli_real_escape_string($konek, $_POST['role']);
    $status   = mysqli_real_escape_string($konek, $_POST['status']);

    $update = mysqli_query($konek, "
        UPDATE login SET
            password='$password',
            nama_lengkap='$nama',
            kelas='$kelas',
            role='$role',
            status='$status'
        WHERE id='$id'
    ");

    if($update){
        $_SESSION['notif'] = "Data berhasil diupdate!";
        header("Location: kelola_user.php");
        exit();
    } else {
        echo "Update gagal!";
    }
}
?>
