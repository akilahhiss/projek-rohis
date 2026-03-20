<?php
session_start();
include "../koneksi.php"; // sesuaikan path

if(!isset($_SESSION['id'])){
    header("Location: ../login.php");
    exit;
}

$id_user = $_SESSION['id'];


// ================= PROSES VOTE =================
if(isset($_POST['konfirmasi_vote'])){

    $id_kandidat = $_POST['id_kandidat'];

    // ambil jabatan kandidat
    $ambil = mysqli_fetch_assoc(mysqli_query($konek,
        "SELECT jabatan FROM kandidat WHERE id_kandidat='$id_kandidat'"
    ));

    $jabatan = $ambil['jabatan'];

    // cek apakah sudah vote di jabatan itu
    $cek = mysqli_query($konek,
        "SELECT suara.id_suara FROM suara
         JOIN kandidat ON suara.id_kandidat = kandidat.id_kandidat
         WHERE suara.id='$id_user'
         AND kandidat.jabatan='$jabatan'"
    );

    if(mysqli_num_rows($cek) == 0){

        // simpan ke tabel suara
        mysqli_query($konek,
            "INSERT INTO suara (id_kandidat, id)
             VALUES ('$id_kandidat','$id_user')"
        );

        // tambah suara kandidat
        mysqli_query($konek,
            "UPDATE kandidat
             SET suara = suara + 1
             WHERE id_kandidat='$id_kandidat'"
        );

        $pesan = "Vote berhasil!";
    } else {
        $pesan = "Anda sudah memilih untuk jabatan ini!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pemilihan Rohis</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>
/* ===== CSS KAMU TETAP SAMA ===== */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background: #f4f8f6;
    color: #0f3d2e;
}

.vote-section {
    padding: 80px 20px;
    text-align: center;
}

.vote-title {
    font-size: 38px;
    font-weight: 700;
    color: #0a3022;
}

.line {
    width: 120px;
    height: 4px;
    background: #699f84;
    margin: 12px auto 20px;
    border-radius: 10px;
}

.sub-info {
    font-size: 16px;
    color: #355e4e;
    margin-bottom: 50px;
}

.home-btn {
    position: absolute;
    top: 30px;
    left: 30px;
    background: #54736c;
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 14px;
}

.vote-container {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
    margin-bottom: 60px;
}

.kandidat-card {
    background: #ffffff;
    width: 320px;
    padding: 25px;
    border-radius: 18px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    border-left: 5px solid #699f84;
    text-align: left;
    transition: 0.3s;
}

.kandidat-card:hover {
    transform: translateY(-5px);
}

.btn-vote {
    margin-top: 20px;
    width: 100%;
    padding: 12px;
    font-size: 16px;
    background-color: #699f84;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

.btn-vote:hover {
    background-color: #54736c;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
}

.modal-content {
    background: white;
    width: 350px;
    padding: 30px;
    border-radius: 16px;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.btn-yes {
    background: #699f84;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
}

.btn-no {
    background: #ccc;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
}
</style>
</head>

<body>

<a href="home.php" class="home-btn">← Kembali ke Home</a>

<section class="vote-section">

<h1 class="vote-title">Pemilihan Rohis</h1>
<div class="line"></div>
<p class="sub-info">Silakan pilih Ketua Umum dan Koordinator Akhwat.</p>

<?php if(isset($pesan)) echo "<p style='color:green;'>$pesan</p>"; ?>


<!-- ================= KETUA UMUM ================= -->
<h2>Ketua Umum</h2>
<div class="vote-container">

<?php
$data = mysqli_query($konek, "SELECT * FROM kandidat");

while($row = mysqli_fetch_assoc($data)){
?>

<div class="kandidat-card">
<h3><?= $row['nama_kandidat']; ?></h3>

<button class="btn-vote"
onclick="bukaModal(<?= $row['id_kandidat']; ?>)">
Pilih
</button>

</div>

<?php } ?>

</div>



<!-- ================= KOORDINATOR AKHWAT ================= -->
<h2>Koordinator Akhwat</h2>
<div class="vote-container">

<?php
$data_akhwat = mysqli_query($konek,"SELECT * FROM kandidat WHERE jabatan='Koordinator Akhwat'");
while($row = mysqli_fetch_assoc($data_akhwat)){
?>

<div class="kandidat-card">
<h3><?= $row['nama_kandidat']; ?></h3>

<button class="btn-vote"
onclick="bukaModal(<?= $row['id_kandidat']; ?>)">
Pilih
</button>

</div>

<?php } ?>

</div>

</section>


<!-- MODAL -->
<div id="modalKonfirmasi" class="modal">
<div class="modal-content">

<form method="POST">
<input type="hidden" name="id_kandidat" id="idKandidatDipilih">

<p>Apakah Anda yakin memilih kandidat ini?</p>

<button type="submit" name="konfirmasi_vote" class="btn-yes">
Ya, Saya Yakin
</button>

<button type="button" class="btn-no" onclick="tutupModal()">
Batal
</button>

</form>

</div>
</div>


<script>
function bukaModal(id){
document.getElementById("idKandidatDipilih").value = id;
document.getElementById("modalKonfirmasi").style.display = "block";
}

function tutupModal(){
document.getElementById("modalKonfirmasi").style.display = "none";
}
</script>

</body>
</html>