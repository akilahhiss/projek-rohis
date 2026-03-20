<?php
session_start();
include '../../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kelola User - Admin ROHIS</title>

<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body{
    background: #f4fff8;
    display: flex;
    height: 100vh;
}

/* SIDEBAR */
.sidebar{
    width: 250px;
    background: #0f3d2e;
    padding: 25px 0;
    color: white;
    display: flex;
    flex-direction: column;
}
.sidebar h2{
    text-align: center;
    margin-bottom: 30px;
}
.sidebar a{
    padding: 15px 25px;
    text-decoration: none;
    color: white;
    display: block;
}
.sidebar a:hover{
    background: #154734;
}

/* MAIN */
.main{
    padding: 30px;
    flex: 1;
    overflow-y: auto;
}

h1{
    color: #0f3d2e;
    margin-bottom: 25px;
}

.add-btn{
    background: #4caf50;
    color: white;
    padding: 12px 22px;
    border-radius: 10px;
    border: none;
    cursor: pointer;
    margin-bottom: 18px;
}

/* TABLE */
table{
    width: 100%;
    background: white;
    border-radius: 15px;
    border-collapse: collapse;
    box-shadow: 0 5px 18px rgba(0,0,0,0.1);
}

th{
    background: #0f3d2e;
    color: white;
    padding: 15px;
    text-align: left;
}

td{
    padding: 14px;
    border-bottom: 1px solid #e0e0e0;
}

.status-aktif{
    color: green;
    font-weight: bold;
}

.status-nonaktif{
    color: red;
    font-weight: bold;
}

.btn{
    padding: 6px 10px;
    border-radius: 6px;
    text-decoration: none;
    color: white;
    font-size: 13px;
}

.btn-aktif{
    background: #5cb85c;
}

.btn-nonaktif{
    background: #f0ad4e;
}

.btn-edit{
    background: #2e5e48;
}

.btn-hapus{
    background: #d9534f;
}
</style>
</head>
<body>

<div class="sidebar">
    <h2>ADMIN ROHIS</h2>
    <a href="../dashboard.php">Dashboard</a>
    <a href="kelola_user.php" style="background:#154734;">Kelola User</a>
    <a href="../kelola_event.php">Kelola Event</a>
    <a href="../kelola_konten.php">Kelola Konten</a>
    <a href="../kelola_galeri.php">Kelola Galeri</a>
    <a href="../../login/logout.php" style="margin-top:auto;color:#ffb3b3;">Logout</a>
</div>

<div class="main">
<h1>Kelola User</h1>

<button class="add-btn" onclick="window.location.href='akun.php'">
+ Tambah User
</button>

<table>
<thead>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Username</th>
    <th>Password</th>
    <th>Role</th>
    <th>Status</th>
    <th>Dibuat</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>
<?php
$query = mysqli_query($konek, "SELECT * FROM login ORDER BY created_at DESC");

while($data = mysqli_fetch_assoc($query)){
?>
<tr>
    <td><?= $data['id']; ?></td>
    <td><?= $data['nama_lengkap']; ?></td>
    <td><?= $data['kelas']; ?></td>
    <td><?= $data['username']; ?></td>
    <td><?= $data['password']; ?></td>
    <td><?= $data['role']; ?></td>

    <td>
        <?php if($data['status'] == 'aktif'){ ?>
            <span class="status-aktif">Aktif</span>
        <?php } else { ?>
            <span class="status-nonaktif">Nonaktif</span>
        <?php } ?>
    </td>

    <td><?= $data['created_at']; ?></td>

    <td>
        <?php if($data['status'] == 'aktif'){ ?>
            <a href="../../login/ubahstatus.php?id=<?= $data['id']; ?>&status=nonaktif"
               class="btn btn-nonaktif"
               onclick="return confirm('Yakin nonaktifkan user?');">
               Nonaktifkan
            </a>
        <?php } else { ?>
            <a href="../../login/ubahstatus.php?id=<?= $data['id']; ?>&status=aktif"
               class="btn btn-aktif"
               onclick="return confirm('Aktifkan user ini?');">
               Aktifkan
            </a>
        <?php } ?>

        <br><br>

        <a href="edituser.php?id=<?= $data['id']; ?>" class="btn btn-edit">Edit</a>
        <a href="hapususer.php?id=<?= $data['id']; ?>" 
           class="btn btn-hapus"
           onclick="return confirm('Yakin hapus user ini?');">
           Hapus
        </a>
    </td>
</tr>
<?php } ?>
</tbody>

</table>
</div>

</body>
</html>
