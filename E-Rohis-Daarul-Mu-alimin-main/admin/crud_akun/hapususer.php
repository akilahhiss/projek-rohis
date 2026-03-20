<?php
session_start();
include "../../koneksi.php";

if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($konek, $_GET['id']);

    $hapus = mysqli_query($konek, 
        "DELETE FROM login WHERE id='$id'"
    );

    if($hapus){
        $_SESSION['notif'] = "Data berhasil dihapus!";
    } else {
        $_SESSION['notif'] = "Data gagal dihapus!";
    }
}

header("Location: kelola_user.php");
exit();
?>
