<?php
session_start();
include "../koneksi.php";

// Ambil kandidat berdasarkan jabatan
$query_ketua = mysqli_query($konek, "SELECT * FROM kandidat WHERE jabatan='Ketua Umum'");
$query_wakil = mysqli_query($konek, "SELECT * FROM kandidat WHERE jabatan='Koordinator Akhwat'");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Voting - E-Rohis</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background: linear-gradient(180deg, #d3efda 0%, #f2d8b5 100%);
    min-height: 100vh;
    padding: 120px 20px 60px;
}

/* TITLE */
.section-title {
    text-align: center;
    color: #54736c;
    margin-bottom: 40px;
}

.section-title h2 {
    font-size: 28px;
}

.section-title p {
    font-size: 14px;
    color: #666;
}

/* CONTAINER */
.vote-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
    margin-bottom: 80px;
}

/* CARD */
.kandidat-card {
    background: #ffffff;
    padding: 30px 25px;
    border-radius: 20px;
    width: 300px;
    text-align: center;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: 0.3s;
    border: 1px solid #eee;
}

.kandidat-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.12);
}

.kandidat-card img {
    width: 130px;
    height: 130px;
    object-fit: cover;
    border-radius: 50%;
    margin: 15px 0;
    border: 4px solid #d4f5d0;
}

.kandidat-card h3 {
    color: #54736c;
    margin-bottom: 5px;
}

.kandidat-card p {
    font-size: 14px;
    color: #555;
    margin: 4px 0;
}

.btn-vote {
    margin-top: 15px;
    padding: 10px 30px;
    background: #54736c;
    color: white;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.3s;
}

.btn-vote:hover {
    background: #3e5650;
    transform: scale(1.05);
}
</style>
</head>

<body>

<!-- SESI 1 -->
<div class="section-title">
    <h2>Sesi 1</h2>
    <p>Pilih Ketua Umum Rohis</p>
</div>

<div class="vote-container">
<?php while($data = mysqli_fetch_assoc($query_ketua)) { ?>
    <div class="kandidat-card">
        <img src="../uploads/<?php echo $data['foto']; ?>" alt="Foto Kandidat">
        <h3><?php echo $data['nama_kandidat']; ?></h3>
        <p><strong>Kelas:</strong> <?php echo $data['kelas']; ?></p>
        

        <form method="POST" action="../admin/proses_vote.php">
            <input type="hidden" name="id_kandidat" value="<?php echo $data['id_kandidat']; ?>">
            <button type="submit" class="btn-vote">Vote</button>
        </form>
    </div>
<?php } ?>
</div><?php

include "../koneksi.php";

$query_ketua = mysqli_query($konek, 
    "SELECT * FROM kandidat WHERE jabatan='Ketua Umum'");
?>

<h2>Pilih Ketua Umum</h2>

<?php while($data = mysqli_fetch_assoc($query_ketua)) { ?>
    <div>
        <h3><?= $data['nama_kandidat']; ?></h3>
        <form method="POST" action="proses_vote_ketua.php">
            <input type="hidden" 
                   name="id_kandidat" 
                   value="<?= $data['id_kandidat']; ?>">
            <button type="submit">Vote</button>
        </form>
    </div>
<?php } ?>
