<?php
include '../koneksi.php';

 $nama_lengkap  = $_POST['nama_lengkap'];
 $kelas = $_POST['kelas'];
 $alasan_masuk = $_POST['alasan_masuk'];
 $no_wa= $_POST['no_wa'];
 
 $no_wa = $_POST['no_wa'];

$no_wa = $_POST['no_wa'];

if(!preg_match('/^[0-9]{11,13}$/', $no_wa)){
    echo "<script>
            alert('Nomor WA harus 11-13 digit dan hanya angka!');
            window.history.back();
          </script>";
    exit;
}


 $simpan=mysqli_query($konek, "INSERT INTO oprec (nama_lengkap, kelas, alasan_masuk, no_wa)
 VALUES ('$nama_lengkap', '$kelas', '$alasan_masuk', '$no_wa')");
 if($simpan){
    echo "<script>
            alert('Daftar Berhasil! Silahkan Tunggu Kabar Selanjutnya!');
            window.location='../home.php';
          </script>";
}

 
 ?>