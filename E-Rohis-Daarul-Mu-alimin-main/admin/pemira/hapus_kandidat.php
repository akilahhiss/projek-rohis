<?php
include '../koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    mysqli_query($konek, "DELETE FROM kandidat WHERE id_kandidat='$id'");
}

header("Location: kelola_kandidat.php");
exit;
?>
