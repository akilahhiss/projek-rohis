<?php
include "../koneksi.php";

if(isset($_GET['id']) && isset($_GET['status'])){

    $id     = mysqli_real_escape_string($konek, $_GET['id']);
    $status = mysqli_real_escape_string($konek, $_GET['status']);

    // Validasi biar aman
    if($status == 'aktif' || $status == 'nonaktif'){

        mysqli_query($konek, 
            "UPDATE login SET status='$status' WHERE id='$id'"
        );

    }
}

// Balik ke halaman kelola user
header("Location: ../admin/crud_akun/kelola_user.php");
exit;
?>
