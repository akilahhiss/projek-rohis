<?php
session_start();
include '../../koneksi.php';

/* ================= KETUA UMUM ================= */
$query_ketua = mysqli_query($konek,
"SELECT * FROM kandidat 
 WHERE jabatan='Ketua Umum' 
 ORDER BY no_urut ASC");

$ketua = [];
while($row = mysqli_fetch_assoc($query_ketua)){
    $ketua[] = $row;
}

$total_ketua = mysqli_fetch_assoc(mysqli_query($konek,
"SELECT SUM(suara) as total 
 FROM kandidat WHERE jabatan='Ketua Umum'"))['total'];

$total_ketua = $total_ketua ? $total_ketua : 0;

$persen1_ketua = ($total_ketua > 0 && isset($ketua[0])) 
? round(($ketua[0]['suara']/$total_ketua)*100) : 0;

$persen2_ketua = ($total_ketua > 0 && isset($ketua[1])) 
? round(($ketua[1]['suara']/$total_ketua)*100) : 0;


/* ================= KOORDINATOR AKHWAT ================= */
$query_akhwat = mysqli_query($konek,
"SELECT * FROM kandidat 
 WHERE jabatan='Koordinator Akhwat' 
 ORDER BY no_urut ASC");

$akhwat = [];
while($row = mysqli_fetch_assoc($query_akhwat)){
    $akhwat[] = $row;
}

$total_akhwat = mysqli_fetch_assoc(mysqli_query($konek,
"SELECT SUM(suara) as total 
 FROM kandidat WHERE jabatan='Koordinator Akhwat'"))['total'];

$total_akhwat = $total_akhwat ? $total_akhwat : 0;

$persen1_akhwat = ($total_akhwat > 0 && isset($akhwat[0])) 
? round(($akhwat[0]['suara']/$total_akhwat)*100) : 0;

$persen2_akhwat = ($total_akhwat > 0 && isset($akhwat[1])) 
? round(($akhwat[1]['suara']/$total_akhwat)*100) : 0;
?>

<!DOCTYPE html>
<html>
<head>
<title>Hasil Suara - Admin ROHIS</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Poppins,sans-serif;
}

body{
    display:flex;
    background:#f4fff8;
}

/* SIDEBAR */
.sidebar{
    width:250px;
    background:#0f3d2e;
    padding:25px 0;
    color:white;
    display:flex;
    flex-direction:column;
}

.sidebar h2{
    text-align:center;
    margin-bottom:30px;
}

.sidebar a{
    padding:15px 25px;
    text-decoration:none;
    color:white;
    display:block;
}

.sidebar a:hover{
    background:#154734;
}

/* MAIN */
.main{
    flex:1;
    padding:40px;
    text-align:center;
}

h1{
    color:#0f3d2e;
    margin-bottom:40px;
}

.card{
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 5px 18px rgba(0,0,0,0.1);
    width:350px;
    margin:30px auto;
}

.circle{
    width:250px;
    height:250px;
    border-radius:50%;
    margin:20px auto;
}

.legend{
    margin-top:20px;
    font-size:15px;
}

.legend div{
    margin:8px 0;
}

.color-box{
    display:inline-block;
    width:15px;
    height:15px;
    margin-right:8px;
}
</style>
</head>
<body>

<div class="sidebar">
    <h2>ADMIN ROHIS</h2>
    <a href="../dashboard.php">Dashboard</a>
    <a href="kelola_kandidat.php">Kelola Kandidat</a>
    <a href="hasil_suara.php" style="background:#154734;">Hasil Suara</a>
    <a href="../../login/logout.php" style="margin-top:auto;color:#ffb3b3;">Logout</a>
</div>

<div class="main">

<h1>Hasil Akhir Pemilihan</h1>

<!-- ================= KETUA UMUM ================= -->
<div class="card">
    <h2>Ketua Umum</h2>

    <div class="circle"
    style="background: conic-gradient(
    #0f3d2e 0% <?= $persen1_ketua ?>%,
    #4caf50 <?= $persen1_ketua ?>% 100%
    );">
    </div>

    <div class="legend">
        <div>
            <span class="color-box" style="background:#0f3d2e;"></span>
            <?= isset($ketua[0]) ? $ketua[0]['nama_kandidat'] : '-' ?>
            (<?= $persen1_ketua ?>%)
        </div>

        <div>
            <span class="color-box" style="background:#4caf50;"></span>
            <?= isset($ketua[1]) ? $ketua[1]['nama_kandidat'] : '-' ?>
            (<?= $persen2_ketua ?>%)
        </div>
    </div>

    <p><b>Total Suara:</b> <?= $total_ketua ?></p>
</div>


<!-- ================= KOORDINATOR AKHWAT ================= -->
<div class="card">
    <h2>Koordinator Akhwat</h2>

    <div class="circle"
    style="background: conic-gradient(
    #ff69b4 0% <?= $persen1_akhwat ?>%,
    #ffc0cb <?= $persen1_akhwat ?>% 100%
    );">
    </div>

    <div class="legend">
        <div>
            <span class="color-box" style="background:#ff69b4;"></span>
            <?= isset($akhwat[0]) ? $akhwat[0]['nama_kandidat'] : '-' ?>
            (<?= $persen1_akhwat ?>%)
        </div>

        <div>
            <span class="color-box" style="background:#ffc0cb;"></span>
            <?= isset($akhwat[1]) ? $akhwat[1]['nama_kandidat'] : '-' ?>
            (<?= $persen2_akhwat ?>%)
        </div>
    </div>

    <p><b>Total Suara:</b> <?= $total_akhwat ?></p>
</div>

</div>
</body>
</html>