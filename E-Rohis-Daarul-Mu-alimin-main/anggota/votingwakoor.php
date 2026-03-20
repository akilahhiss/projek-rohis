<?php
session_start();
include "../koneksi.php";

$query_wakil = mysqli_query($konek, 
    "SELECT * FROM kandidat WHERE jabatan='Koordinator Akhwat'");
?>

<h2>Pilih Koordinator Akhwat</h2>

<?php while($data = mysqli_fetch_assoc($query_wakil)) { ?>
    <div>
        <h3><?= $data['nama_kandidat']; ?></h3>
        <form method="POST" action="proses_vote_wakoor.php">
            <input type="hidden" 
                   name="id_kandidat" 
                   value="<?= $data['id_kandidat']; ?>">
            <button type="submit">Vote</button>
        </form>
    </div>
<?php } ?>
