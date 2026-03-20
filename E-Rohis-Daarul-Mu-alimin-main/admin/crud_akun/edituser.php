<?php
include "../../koneksi.php";

/* =======================
   AMBIL DATA USER
======================= */
if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($konek, $_GET['id']);
    $query = mysqli_query($konek, "SELECT * FROM login WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);

}else{
    header("Location: kelola_user.php");
    exit;
}


/* =======================
   PROSES UPDATE
======================= */
if (isset($_POST['update'])) {

    $id       = mysqli_real_escape_string($konek, $_POST['id']);
    $password = mysqli_real_escape_string($konek, $_POST['password']);
    $nama     = mysqli_real_escape_string($konek, $_POST['nama_lengkap']);
    $kelas    = mysqli_real_escape_string($konek, $_POST['kelas']);
    $role     = mysqli_real_escape_string($konek, $_POST['role']);
    $status   = mysqli_real_escape_string($konek, $_POST['status']);

    $query = mysqli_query($konek, "
        UPDATE login SET
            password='$password',
            nama_lengkap='$nama',
            kelas='$kelas',
            role='$role',
            status='$status'
        WHERE id='$id'
    ");

    if ($query) {
        echo "<script>
            alert('Data berhasil diupdate');
            window.location='kelola_user.php';
        </script>";
        exit;
    } else {
        echo "Gagal update data";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit User - Admin ROHIS</title>
<style>
*{box-sizing:border-box;font-family:"Poppins",sans-serif;}
body{margin:0;background:#f1fbf5;padding:30px;}
.form-container{
    max-width:480px;margin:30px auto;background:#fff;
    padding:28px 32px;border-radius:14px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}
.form-container h2{margin-bottom:22px;color:#0f3d2e;}
.form-group{margin-bottom:16px;}
.form-group label{display:block;margin-bottom:6px;font-weight:500;color:#0f3d2e;}
.form-group input,.form-group select{
    width:100%;padding:10px 12px;border-radius:10px;
    border:1px solid #cfe7db;font-size:14px;
}
.form-actions{display:flex;justify-content:space-between;margin-top:22px;}
.btn-submit{
    background:#2ea44f;color:#fff;border:none;
    padding:10px 22px;border-radius:10px;cursor:pointer;
}
.btn-cancel{
    background:#e74c3c;color:#fff;border:none;
    padding:10px 22px;border-radius:10px;cursor:pointer;
}
</style>
</head>

<body>

<div class="form-container">
<h2>Edit User</h2>

<form method="POST">

    <!-- Hidden ID -->
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <div class="form-group">
        <label>Username</label>
        <input type="text" value="<?= $data['username']; ?>" readonly>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password"
            value="<?= $data['password']; ?>" required>
    </div>

    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap"
            value="<?= $data['nama_lengkap']; ?>" required>
    </div>

    <div class="form-group">
        <label>Kelas</label>
        <input type="text" name="kelas"
            value="<?= $data['kelas']; ?>" required>
    </div>

    <div class="form-group">
        <label>Role</label>
        <select name="role" required>
            <option value="admin" <?= ($data['role']=="admin")?"selected":""; ?>>
                Admin
            </option>
            <option value="anggota" <?= ($data['role']=="anggota")?"selected":""; ?>>
                Anggota
            </option>
        </select>
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" required>
            <option value="aktif" <?= ($data['status']=="aktif")?"selected":""; ?>>
                Aktif
            </option>
            <option value="nonaktif" <?= ($data['status']=="nonaktif")?"selected":""; ?>>
                Nonaktif
            </option>
        </select>
    </div>

    <div class="form-actions">
        <button type="submit" name="update" class="btn-submit">
            Update
        </button>
        <button type="button" class="btn-cancel"
            onclick="window.location.href='kelola_user.php'">
            Batal
        </button>
    </div>

</form>
</div>

</body>
</html>
