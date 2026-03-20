<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {

    $nama    = $_POST['nama'] ?? '';
    $jabatan = $_POST['jabatan'] ?? '';
    $no_urut = $_POST['no_urut'] ?? 0;
    $visi    = $_POST['visi_misi'] ?? '';
    $kelas   = $_POST['kelas'] ?? '';

    $foto      = $_FILES['foto']['name'];
    $tmp_name  = $_FILES['foto']['tmp_name'];
    $size      = $_FILES['foto']['size'];
    $error     = $_FILES['foto']['error'];

    $target_dir = "../uploads/";

    if ($error === 0) {

        $ext = strtolower(pathinfo($foto, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png'];

        if (in_array($ext, $allowed)) {

            if ($size < 2000000) {

                $new_name = uniqid('kandidat_', true) . '.' . $ext;
                $target_file = $target_dir . $new_name;

                if (move_uploaded_file($tmp_name, $target_file)) {

                    $sql = "INSERT INTO kandidat 
                            (nama_kandidat, jabatan, no_urut, foto, visi_misi, kelas) 
                            VALUES (?, ?, ?, ?, ?, ?)";

                    $stmt = mysqli_prepare($konek, $sql);
                    mysqli_stmt_bind_param($stmt, "ssisss",
                        $nama,
                        $jabatan,
                        $no_urut,
                        $new_name,
                        $visi,
                        $kelas
                    );

                    if (mysqli_stmt_execute($stmt)) {
                        echo "<script>
                                alert('Kandidat berhasil ditambahkan!');
                                window.location.href='admin_kandidat.php';
                              </script>";
                    } else {
                        echo "<script>alert('Gagal menyimpan ke database!');</script>";
                    }

                } else {
                    echo "<script>alert('Gagal upload file!');</script>";
                }

            } else {
                echo "<script>alert('Ukuran file terlalu besar! Maks 2MB');</script>";
            }

        } else {
            echo "<script>alert('Format file harus JPG, JPEG, atau PNG');</script>";
        }

    } else {
        echo "<script>alert('Terjadi error saat upload!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Kandidat</title>

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

/* Container */
.form-container {
  background-color: rgba(255, 255, 255, 0.85);
  padding: 45px 50px;
  border-radius: 22px;
  width: 480px;
  box-shadow: 0 0 25px rgba(97, 122, 104, 0.25);
  backdrop-filter: blur(6px);
}

/* Judul */
.form-container h1 {
  font-family: 'Irish Grover', cursive;
  color: #2e5e48;
  text-align: center;
  font-size: 30px;
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

/* Input */
.form-container input[type="text"],
.form-container input[type="number"],
.form-container select,
.form-container textarea,
.form-container input[type="file"] {
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
.form-container select:focus,
.form-container textarea:focus {
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

.form-container button {
  flex: 1;
  padding: 11px;
  border: none;
  border-radius: 9px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

.btn-submit {
  background-color: #4b8065;
  color: #fff;
}

.btn-submit:hover {
  background-color: #5f967b;
  transform: scale(1.03);
}

.btn-reset {
  background-color: #cdbb97;
  color: #2e5e48;
}

.btn-reset:hover {
  background-color: #d9c9a5;
  transform: scale(1.03);
}
</style>
</head>

<body>

<div class="form-container">
  <h1>Upload Kandidat Rohis</h1>

  <form method="POST" enctype="multipart/form-data">

    <label>Nama Lengkap</label>
    <input type="text" name="nama" required>

    <label>Jabatan</label>
    <select name="jabatan" required>
        <option value="Ketua Umum">Ketua Umum</option>
        <option value="Koordinator Akhwat">Koordinator Akhwat</option>
    </select>

    <label>Nomor Urut</label>
    <input type="number" name="no_urut" required>

    <label>Kelas / Identitas</label>
    <input type="text" name="kelas">

    <label>Visi & Misi</label>
    <textarea name="visi_misi" rows="4"></textarea>

    <label>Upload Foto</label>
    <input type="file" name="foto" accept="image/*" required>

    <div class="button-group">
        <button type="submit" name="simpan" class="btn-submit">Upload</button>
        <button type="reset" class="btn-reset">Batal</button>
    </div>

  </form>
</div>

</body>
</html>
