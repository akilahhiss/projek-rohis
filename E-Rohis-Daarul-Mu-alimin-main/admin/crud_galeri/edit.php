<?php
include "../../koneksi.php";

/* =======================
   AMBIL DATA GALERI
======================= */
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($konek, $_GET['id']);
    $query = mysqli_query($konek, "SELECT * FROM galeri WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);
} else {
    header("Location: kelola_geleri.php");
    exit;
}

/* =======================
   PROSES UPDATE
======================= */
if(isset($_POST['update'])){
    $id        = mysqli_real_escape_string($konek, $_POST['id']);
    $judul     = mysqli_real_escape_string($konek, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($konek, $_POST['deskripsi']);
    $tanggal   = mysqli_real_escape_string($konek, $_POST['tanggal']);

    // Cek apakah ada foto baru
    if(!empty($_FILES['foto']['name'])){
        $foto = $_FILES['foto']['name'];
        $tmp  = $_FILES['foto']['tmp_name'];
        $folder = "uploads/".$foto;

        if(move_uploaded_file($tmp, $folder)){
            $query = mysqli_query($konek, "
                UPDATE galeri SET
                    judul='$judul',
                    deskripsi='$deskripsi',
                    tanggal='$tanggal',
                    foto='$foto'
                WHERE id='$id'
            ");
        } else {
            echo "<script>alert('Gagal upload foto baru');</script>";
        }
    } else {
        $query = mysqli_query($konek, "
            UPDATE galeri SET
                judul='$judul',
                deskripsi='$deskripsi',
                tanggal='$tanggal'
            WHERE id='$id'
        ");
    }

    if($query){
        echo "<script>
            alert('Data galeri berhasil diupdate');
            window.location='kelola_geleri.php';
        </script>";
        exit;
    } else {
        echo "<script>alert('Gagal update data galeri');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Foto Galeri</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">
  <style>
* { box-sizing: border-box; }
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(180deg, #d3efda 0%, #f2d8b5 100%);
  min-height: 100vh;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Container utama */
.form-container {
  background-color: rgba(255, 255, 255, 0.85);
  padding: 45px 50px;
  border-radius: 22px;
  width: 480px;
  box-shadow: 0 0 25px rgba(97, 122, 104, 0.25);
  backdrop-filter: blur(6px);
}

/* Logo */
.logo-form {
  display: block;
  margin: 0 auto 15px;
  width: 110px;
  height: auto;
  filter: drop-shadow(0 0 8px rgba(75,128,101,0.35));
  transition: transform 0.3s;
}
.logo-form:hover { transform: scale(1.06); }

/* Judul */
.form-container h1 {
  font-family: 'Irish Grover', cursive;
  color: #2e5e48;
  text-align: center;
  font-size: 32px;
  margin-bottom: 30px;
  letter-spacing: 1px;
}

/* Label */
.form-container label {
  display: block;
  font-size: 14px;
  color: #2e5e48;
  margin-bottom: 6px;
  font-weight: 500;
}

/* Input & Textarea & Date & File */
.form-container input[type="text"],
.form-container input[type="date"],
.form-container input[type="file"],
.form-container textarea {
  width: 100%;
  padding: 11px 13px;
  border: 2px solid #cdbb97;
  border-radius: 9px;
  font-size: 14px;
  margin-bottom: 20px;
  transition: border-color 0.3s, box-shadow 0.3s;
  background-color: #fff;
  resize: vertical;
}

.form-container input:focus,
.form-container textarea:focus,
.form-container input[type="date"]:focus,
.form-container input[type="file"]:focus {
  outline: none;
  border-color: #4b8065;
  box-shadow: 0 0 8px rgba(75, 128, 101, 0.3);
}

/* Tombol */
.button-group {
  display: flex;
  gap: 12px;
  margin-top: 10px;
}

.form-container input[type="submit"],
.form-container input[type="reset"] {
  flex: 1;
  padding: 11px;
  border: none;
  border-radius: 9px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s, transform 0.2s;
}

/* Submit */
.form-container input[type="submit"] {
  background-color: #4b8065;
  color: #fff;
}
.form-container input[type="submit"]:hover {
  background-color: #5f967b;
  transform: scale(1.03);
}

/* Reset */
.form-container input[type="reset"] {
  background-color: #cdbb97;
  color: #2e5e48;
}
.form-container input[type="reset"]:hover {
  background-color: #d9c9a5;
  transform: scale(1.03);
}

/* Foto lama */
.current-photo img {
  width: 100%;
  max-height: 180px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 20px;
}

/* Link Kembali */
.back-home {
  display: block;
  margin-top: 15px;
  text-decoration: none;
  color: #4b8065;
  font-weight: 600;
  transition: color 0.3s;
  text-align: center;
}
.back-home:hover { color:#2e5e48; }
  </style>
</head>
<body>

  <div class="form-container">
    <img src="../../foto/logo.png" alt="Logo Rohis" class="logo-form">
    <h1>Edit Foto Galeri</h1>

    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $data['id']; ?>">

      <label>Judul Kegiatan:</label>
      <input type="text" name="judul" value="<?= $data['judul']; ?>" required>

      <label>Deskripsi Kegiatan:</label>
      <textarea name="deskripsi" rows="4" required><?= $data['deskripsi']; ?></textarea>

      <label>Tanggal Kegiatan:</label>
      <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>" required>

      <div class="current-photo">
        <label>Foto Saat Ini:</label>
        <img src="uploads/<?= $data['foto']; ?>" alt="Foto Galeri">
      </div>

      <label>Ganti Foto (opsional):</label>
      <input type="file" name="foto" accept="image/*">

      <div class="button-group">
        <input type="submit" name="update" value="Update">
        <input type="reset" value="Batal" onclick="window.location.href='kelola_geleri.php'">
      </div>
    </form>

    <a href="kelola_geleri.php" class="back-home">← Kembali ke Kelola Galeri</a>
  </div>

</body>
</html>
