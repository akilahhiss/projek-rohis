<?php
include "../../koneksi.php";

if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $folder = "uploads/".$foto;

    if(move_uploaded_file($tmp, $folder)){
        mysqli_query($konek, "INSERT INTO galeri (judul, deskripsi, tanggal, foto) VALUES ('$judul','$deskripsi','$tanggal','$foto')");
        // Notifikasi berhasil
        echo "<script>
                alert('Upload berhasil!');
                window.location.href = 'kelola_geleri.php';
              </script>";
    } else {
        // Notifikasi gagal
        echo "<script>
                alert('Gagal upload file!');
                window.location.href = 'kelola_geleri.php';
              </script>";
    }
}
?>
