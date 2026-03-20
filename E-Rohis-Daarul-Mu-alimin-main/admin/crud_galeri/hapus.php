<?php
session_start();
include "../../koneksi.php";

if(isset($_GET['id'])){ // hapus spasi

    $id = mysqli_real_escape_string($konek, $_GET['id']); // hapus spasi juga

    $hapus = mysqli_query($konek, 
        "DELETE FROM galeri WHERE id='$id'"
    );

    if($hapus){
        $_SESSION['notif'] = "Data berhasil dihapus!";
    } else {
        $_SESSION['notif'] = "Data gagal dihapus!";
    }
}

header("Location: kelola_geleri.php"); // pastikan nama file benar
exit();
?>
