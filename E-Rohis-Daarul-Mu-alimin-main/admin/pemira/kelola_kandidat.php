<?php
session_start();
include '../koneksi.php';

$query = mysqli_query($konek, "SELECT * FROM kandidat ORDER BY jabatan, no_urut ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kelola Kandidat - Admin ROHIS</title>

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
    vertical-align: middle;
}

img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

/* BUTTON */
.btn{
    padding: 6px 10px;
    border-radius: 6px;
    text-decoration: none;
    color: white;
    font-size: 13px;
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
    <a href="kelola_user.php">Kelola User</a>
    <a href="kelola_kandidat.php" style="background:#154734;">Kelola Kandidat</a>
    <a href="../kelola_event.php">Kelola Event</a>
    <a href="../kelola_konten.php">Kelola Konten</a>
    <a href="../kelola_galeri.php">Kelola Galeri</a>
    <a href="../../login/logout.php" style="margin-top:auto;color:#ffb3b3;">Logout</a>
</div>

<div class="main">
<h1>Kelola Kandidat</h1>

<button class="add-btn" onclick="window.location.href='admin_kandidat.php'">
+ Tambah Kandidat
</button>

<table>
<thead>
<tr>
    <th>ID</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>No Urut</th>
    <th>Kelas</th>
    <th>Visi Misi</th>
    <th>Suara</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>
<?php while($data = mysqli_fetch_assoc($query)){ ?>
<tr>
    <td><?= $data['id_kandidat']; ?></td>
    <td>
        <img src="../uploads/<?= $data['foto']; ?>">
    </td>
    <td><?= $data['nama_kandidat']; ?></td>
    <td><?= $data['jabatan']; ?></td>
    <td><?= $data['no_urut']; ?></td>
    <td><?= $data['kelas']; ?></td>
    <td><?= substr($data['visi_misi'],0,50); ?>...</td>
    <td><?= $data['suara']; ?></td>

    <td>
        <a href="edit_kandidat.php?id=<?= $data['id_kandidat']; ?>" class="btn btn-edit">Edit</a>
        <a href="hapus_kandidat.php?id=<?= $data['id_kandidat']; ?>" 
           class="btn btn-hapus"
           onclick="return confirm('Yakin hapus kandidat ini?');">
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
