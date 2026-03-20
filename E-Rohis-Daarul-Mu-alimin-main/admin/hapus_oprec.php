<?php
include '../koneksi.php';

 $id = $_GET["id_pasien"];
 $hapus = mysqli_query($konek, "DELETE FROM pasien WHERE id_pasien=$id");
 if($hapus){
   echo "<script>alert('Data berhasil dihapus!').window.location(tampil.php)</script>";
 }
 
 ?>