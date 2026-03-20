<?php
include '../koneksi.php';
// Ambil data dari database
$ketua = $pdo->query("SELECT * FROM kandidat WHERE jabatan = 'Ketua' ORDER BY no_urut ASC")->fetchAll();
$wakil = $pdo->query("SELECT * FROM kandidat WHERE jabatan = 'Wakil' ORDER BY no_urut ASC")->fetchAll();
?>

<form action="simpan_suara.php" method="POST">
    <h3>Pilih Ketua</h3>
    <div class="candidates-grid">
        <?php foreach ($ketua as $k): ?>
        <label class="candidate-card">
            <input type="radio" name="id_ketua" value="<?= $k['id_kandidat'] ?>" required>
            <div class="number"><?= $k['no_urut'] ?></div>
            <img src="uploads/<?= $k['foto'] ?>" width="100">
            <h4><?= $k['nama_kandidat'] ?></h4>
            <small><?= $k['identitas'] ?></small>
        </label>
        <?php endforeach; ?>
    </div>

    <h3>Pilih Wakil</h3>
    <div class="candidates-grid">
        <?php foreach ($wakil as $w): ?>
        <label class="candidate-card">
            <input type="radio" name="id_wakil" value="<?= $w['id_kandidat'] ?>" required>
            <img src="uploads/<?= $w['foto'] ?>" width="100">
            <h4><?= $w['nama_kandidat'] ?></h4>
        </label>
        <?php endforeach; ?>
    </div>

    <button type="submit">Kirim Suara Saya</button>
</form>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Pemilu Raya - E-Rohis</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
            padding-top: 80px; /* Space for fixed nav */
        }

        /* ================= NAVBAR & SIDEBAR (Sesuai Template Sebelumnya) ================= */
        nav {
            position: fixed; top: 0; width: 100%; background: #54736c; z-index: 100; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        nav ul {
            list-style: none; display: flex; justify-content: space-between; align-items: center; padding: 10px 50px;
        }
        nav ul .center { display: flex; gap: 30px; }
        nav ul li a { text-decoration: none; color: white; font-weight: 500; transition: 0.3s; }
        nav ul li a:hover { color: #d4f5d0; }
        .logoweb { width: 40px; }

        /* ================= VOTING CONTENT ================= */
        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px;
        }

        .voting-header {
            text-align: center;
            margin-bottom: 40px;
            color: #3e5650;
        }

        .voting-header h1 {
            font-family: 'Irish Grover', cursive;
            font-size: 45px;
            letter-spacing: 2px;
        }

        .category-title {
            background: #54736c;
            color: white;
            display: inline-block;
            padding: 8px 25px;
            border-radius: 30px;
            margin-bottom: 25px;
            font-size: 18px;
            font-weight: 600;
        }

        .candidates-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Candidate Card */
        .candidate-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            position: relative;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            cursor: pointer;
            border: 3px solid transparent;
        }

        .candidate-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(84, 115, 108, 0.2);
        }

        /* State Selected */
        .candidate-card.selected {
            border-color: #54736c;
            background: #f0f7f1;
        }

        .candidate-card .number {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: #54736c;
            color: white;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50%;
            font-weight: bold;
            font-size: 20px;
            border: 3px solid white;
        }

        .candidate-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 5px solid #eee;
        }

        .candidate-info h2 {
            color: #333;
            margin-bottom: 5px;
        }

        .candidate-info p {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .btn-visi-misi {
            background: #eee;
            color: #555;
            border: none;
            padding: 8px 15px;
            border-radius: 10px;
            font-size: 12px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-visi-misi:hover {
            background: #ddd;
        }

        /* Custom Radio Button Hidden */
        .candidate-card input[type="radio"] {
            display: none;
        }

        .check-icon {
            margin-top: 15px;
            font-size: 24px;
            color: #ccc;
            transition: 0.3s;
        }

        .candidate-card.selected .check-icon {
            color: #54736c;
        }

        /* Submit Section */
        .submit-container {
            text-align: center;
            padding: 40px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .btn-submit-vote {
            background: #54736c;
            color: white;
            border: none;
            padding: 15px 60px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(84, 115, 108, 0.4);
        }

        .btn-submit-vote:hover {
            background: #3e5650;
            transform: scale(1.05);
        }

        /* FOOTER (Same as Template) */
        footer { background: #3e5650; color: white; padding: 50px 20px 20px; margin-top: 50px; }
        .footer-container { max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; gap: 40px; justify-content: space-between; }
        .footer-box h3 { color: #d4f5d0; margin-bottom: 15px; }
        .footer-bottom { text-align: center; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); font-size: 13px; margin-top: 30px;}

        @media (max-width: 768px) {
            nav ul { padding: 10px 20px; }
            .center { display: none !important; }
            .voting-header h1 { font-size: 32px; }
        }
    </style>
</head>
<body>

    <nav>
        <ul>
            <li style="display:flex; align-items:center; gap:15px;">
                <img src="../foto/logo.png" class="logoweb" alt="Logo">
                <a style="font-weight: 600;">E-Rohis</a>
            </li>
            <div class="center">
                <li><a href="home.php">Beranda</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="#" class="active">Voting</a></li>
            </div>
            <li><a href="#"><i class="fas fa-user-circle"></i> Profil</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="voting-header">
            <h1>PEMILU RAYA</h1>
            <p>Masa Bakti 2026/2027</p>
        </div>

        <form id="votingForm">
            <div style="text-align: center;">
                <span class="category-title">Kandidat Ketua Umum</span>
            </div>
            
            <div class="candidates-grid">
                <label class="candidate-card" onclick="selectCard(this, 'ketua')">
                    <input type="radio" name="ketua" value="01" required>
                    <div class="number">01</div>
                    <img src="https://via.placeholder.com/150" class="candidate-img" alt="Ketua 01">
                    <div class="candidate-info">
                        <h2>Keiyla Adya</h2>
                        <p>Kelas XI - Aktif & Berintegritas</p>
                        <button type="button" class="btn-visi-misi">Lihat Visi Misi</button>
                    </div>
                    <div class="check-icon"><i class="fas fa-check-circle"></i></div>
                </label>

                <label class="candidate-card" onclick="selectCard(this, 'ketua')">
                    <input type="radio" name="ketua" value="02">
                    <div class="number">02</div>
                    <img src="https://via.placeholder.com/150" class="candidate-img" alt="Ketua 02">
                    <div class="candidate-info">
                        <h2>Nazil Amri</h2>
                        <p>Kelas XI - Amanah & Disiplin</p>
                        <button type="button" class="btn-visi-misi">Lihat Visi Misi</button>
                    </div>
                    <div class="check-icon"><i class="fas fa-check-circle"></i></div>
                </label>
            </div>

            <div style="text-align: center;">
                <span class="category-title">Kandidat Wakil Ketua</span>
            </div>

            <div class="candidates-grid">
                <label class="candidate-card" onclick="selectCard(this, 'wakil')">
                    <input type="radio" name="wakil" value="01" required>
                    <div class="number">01</div>
                    <img src="https://via.placeholder.com/150" class="candidate-img" alt="Wakil 01">
                    <div class="candidate-info">
                        <h2>Syahrul Ramadhan</h2>
                        <p>Kelas X - Inovatif</p>
                        <button type="button" class="btn-visi-misi">Lihat Visi Misi</button>
                    </div>
                    <div class="check-icon"><i class="fas fa-check-circle"></i></div>
                </label>

                <label class="candidate-card" onclick="selectCard(this, 'wakil')">
                    <input type="radio" name="wakil" value="02">
                    <div class="number">02</div>
                    <img src="https://via.placeholder.com/150" class="candidate-img" alt="Wakil 02">
                    <div class="candidate-info">
                        <h2>Akilah Zahra</h2>
                        <p>Kelas X - Kreatif</p>
                        <button type="button" class="btn-visi-misi">Lihat Visi Misi</button>
                    </div>
                    <div class="check-icon"><i class="fas fa-check-circle"></i></div>
                </label>
            </div>

            <div class="submit-container">
                <p style="margin-bottom: 20px; font-size: 14px; color: #666;">
                    *Pastikan pilihanmu sudah benar sebelum menekan tombol kirim.
                </p>
                <button type="submit" class="btn-submit-vote">Kirim Suara Saya</button>
            </div>
        </form>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-box">
                <h3>E-Rohis DM</h3>
                <p>Wadah kreativitas dan ukhuwah siswa SMK Daarul Mu'allimin.</p>
            </div>
            <div class="footer-box">
                <h3>Tautan</h3>
                <p><a href="#">Beranda</a></p>
                <p><a href="#">Informasi Pemilu</a></p>
            </div>
            <div class="footer-box">
                <h3>Kontak</h3>
                <p>📍 SMK Daarul Mu'allimin</p>
                <p>📧 rohis@school.id</p>
            </div>
        </div>
        <div class="footer-bottom">
            © 2026 E-Rohis Daarul Mu'allimin | Sistem E-Voting Aman
        </div>
    </footer>

    <script>
        // Fungsi untuk memberikan efek visual saat kartu dipilih
        function selectCard(element, category) {
            // Hapus class selected dari semua kartu di kategori yang sama
            const cards = document.getElementsByName(category);
            cards.forEach(radio => {
                radio.parentElement.classList.remove('selected');
            });
            
            // Tambahkan class selected ke kartu yang diklik
            element.classList.add('selected');
        }

        // Handle Submit
        document.getElementById('votingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const ketua = document.querySelector('input[name="ketua"]:checked');
            const wakil = document.querySelector('input[name="wakil"]:checked');

            if(ketua && wakil) {
                alert('Jazakallah! Suara kamu berhasil dikirim.\nKetua: No.' + ketua.value + '\nWakil: No.' + wakil.value);
                // Di sini kamu bisa arahkan ke file PHP: window.location.href = "proses_vote.php?ketua=" + ketua.value...
            } else {
                alert('Mohon pilih satu Ketua dan satu Wakil terlebih dahulu!');
            }
        });
    </script>
</body>
</html>