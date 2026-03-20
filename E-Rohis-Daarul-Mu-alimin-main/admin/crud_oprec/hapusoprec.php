<?php
session_start();
include '../../koneksi.php';

if(isset($_GET['id_oprec'])){

    $id = $_GET['id_oprec'];

    $hapus = mysqli_query($konek, "DELETE FROM oprec WHERE id_oprec='$id'");

    if($hapus){
        $_SESSION['notif'] = "Data berhasil dihapus!";
    } else {
        $_SESSION['notif'] = "Data gagal dihapus!";
    }
}

header("Location: kelola_oprec.php");
exit();
?>
