<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil - E-Rohis</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600;700&display=swap" rel="stylesheet">
<style>

/* ================= RESET ================= */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Poppins", sans-serif;
}

body{
    background: linear-gradient(180deg, #d3efda 100%, #f2d8b5 0%);
}
.profil-content{
  text-align: center;
}
/* Update Font untuk Judul Content */
.profil-content h2 {
    font-family: 'Quicksand', sans-serif;
    color: #54736c;
    font-size: 40px;
    margin-bottom: 15px;
    margin-top: 30px;
    text-align: left;
}

.profil-content p {
    line-height: 1.8;
    color: #444;
    text-align: left;
}
.profil-content li {
  text-align: justify;
}

/* --- ANIMASI MUNCUL DARI BAWAH --- */
.reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease-out;
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

/* Variasi delay agar muncul satu per satu */
.delay-1 { transition-delay: 0.2s; }
.delay-2 { transition-delay: 0.4s; }
.delay-3 { transition-delay: 0.6s; }

/* ================= NAVBAR ================= */
nav{
    position:fixed;
    top:0;
    width:100%;
    background:#54736c;
    z-index:100;
    box-shadow:0 2px 6px rgba(0,0,0,0.2);
}

nav ul{
    list-style:none;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:10px 50px;
}

nav ul .center{
    display:flex;
    gap:30px;
}

nav ul li{
    display:flex;
    align-items:center;
}

nav ul li a{
    text-decoration:none;
    color:white;
    font-weight:500;
    font-size:15px;
    transition:0.3s;
}

nav ul li a:hover,
nav ul li a.active{
    color:#d4f5d0;
}

.logoweb{
    width:40px;
    margin-right:8px;
}

/* ================= HERO ================= */
.hero-section{
    position:relative;
    height:70vh;
    overflow:hidden;
    margin-top:60px;
}

.slider{
    width:100%;
    height:100%;
    overflow:hidden;
}

.slides{
    display:flex;
    height:100%;
    transition: transform 1s ease-in-out;
}

.slide{
    min-width:100%;
    height:100%;
    background-size:cover;
    background-position:center;
}

.hero-section::after{
    content:"";
    position:absolute;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.45);
    top:0;
    left:0;
}

.hero-content{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align:center;
    color:white;
    z-index:2;
}

.logo{
    width:130px;
    margin-bottom:10px;
}

.sub-title{
    font-size:18px;
    color:#D8FCEB;
}

.main-title{
    font-family:'Irish Grover', cursive;
    font-size:52px;
    margin:10px 0;
}

.description{
    font-size:16px;
    max-width:500px;
    margin:auto;
}

/* ================= CONTENT ================= */
.content-box{
    max-width:1200px;
    background:white;
    margin:30px auto;
    padding:40px;
    border-radius:15px;
    box-shadow:0 6px 18px rgba(0,0,0,0.15);
}

/* ================= STRUKTUR ================= */
.struktur-title{
    text-align:center;
    font-size:22px;
    font-weight:600;
    margin:40px 0 20px;
    color:#54736c;
}

.row {
    display: flex;
    justify-content: flex-start; /* Ini yang bikin box rata kiri */
    flex-wrap: wrap;             /* Supaya kalau layar penuh, box turun ke bawah */
    gap: 20px;                   /* Jarak antar box */
    width: 100%;
}

.box {
    background:  #ece7da; /* Putih bersih agar kontras dengan bg gradient */
    padding: 30px 20px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05); /* Bayangan lebih halus */
    width: 260px;
    text-align: center;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* Efek membal saat hover */
    border: 1px solid rgba(84, 115, 108, 0.1); /* Border tipis warna hijau */
    margin-bottom: 50px;
    margin-bottom: 30px; /* Beri jarak bawah saja */
    display: block;
    
}
.box1 {
    background:  #ece7da; /* Putih bersih agar kontras dengan bg gradient */
    padding: 30px 20px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05); /* Bayangan lebih halus */
    width: 260px;
    text-align: center;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* Efek membal saat hover */
    border: 1px solid rgba(84, 115, 108, 0.1); /* Border tipis warna hijau */
    margin-bottom: 25px;
}

.box:hover {
    transform: translateY(-12px); /* Naik lebih tinggi saat di-hover */
    box-shadow: 0 15px 35px rgba(84, 115, 108, 0.2); /* Bayangan kehijauan saat hover */
   
}

.box h3 {
    font-family: 'Quicksand', sans-serif;
    color: #54736c;
    margin-top: 15px;
    font-size: 20px;
}

.box p {
    font-size: 14px;
    color: #777;
    margin-top: 5px;
}

.box img{
    width:90px;
    height:90px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:10px;
}

/* ================= DEPARTEMEN ================= */
.dept-box{
    background:#ece7da;
    padding:20px;
    border-radius:15px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
    width:300px;
    text-align:center;
    transition:0.3s;
    margin-bottom: 25px;
    margin-right: 20px;
    
}
.row1{
    justify-content: center;
    display: flex;
   /* Ini yang bikin box rata kiri */
    flex-wrap: wrap;             /* Supaya kalau layar penuh, box turun ke bawah */
    gap: 20px;                   /* Jarak antar box */
    width: 100%;
}
.row2{
    justify-content: center;
    display: flex;
   /* Ini yang bikin box rata kiri */
    flex-wrap: wrap;             /* Supaya kalau layar penuh, box turun ke bawah */
    gap: 20px;                   /* Jarak antar box */
    width: 100%;
}

.dept-box:hover{
    transform:translateY(-5px);
}

.dept-box img{
    width:80px;
    margin-bottom:10px;
}

.btn-detail{
    margin-top:10px;
    padding:8px 15px;
    border:none;
    background:#54736c;
    color:white;
    border-radius:20px;
    cursor:pointer;
    transition:0.3s;
}

.btn-detail:hover{
    background:#3e5650;
}

/* ================= MODAL ================= */
.dept-modal{
    display:none;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.5);
    z-index:200;
}

.dept-modal-content{
    background:white;
    width:90%;
    max-width:700px;
    margin:6% auto;
    padding:30px;
    border-radius:15px;
    position:relative;
}

.close{
    position:absolute;
    right:20px;
    top:15px;
    font-size:25px;
    cursor:pointer;
}

.dept-leaders{
    display:flex;
    justify-content:center;
    gap:20px;
    margin-top:20px;
}

.leader-card{
    text-align:center;
}

.leader-card img{
    width:80px;
    height:80px;
    border-radius:50%;
    object-fit:cover;
}
.struktur-title h2 {
  margin-top: 100px;
  font-family: 'Quicksand', sans-serif;
  margin-bottom: 40px;
  text-align: left;
}
footer{
  background:#3e5650;
  color:white;
  padding:50px 20px 20px;
  margin-top:50px;
}

.footer-container{
  max-width:1200px;
  margin:auto;
  display:flex;
  flex-wrap:wrap;
  gap:40px;
  justify-content:space-between;
}

.footer-box{
  flex:1;
  min-width:250px;
}

.footer-box h3{
  margin-bottom:15px;
  font-size:18px;
  color:#d4f5d0;
}

.footer-box p,
.footer-box a{
  font-size:14px;
  color:#f5f5f5;
  text-decoration:none;
  line-height:1.8;
}

.footer-box a:hover{
  color:#d4f5d0;
}

.footer-bottom{
  text-align:center;
  margin-top:30px;
  padding-top:20px;
  border-top:1px solid rgba(255,255,255,0.2);
  font-size:13px;
  color:#ddd;
}
.social-icons{
  margin-top:10px;
  display:flex;
  gap:15px;
}

.social-icons a{
  color:white;
  font-size:20px;
  transition:0.3s;
}

.social-icons a:hover{
  color:#d4f5d0;
  transform:translateY(-3px);
}
.dept-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.65); /* lebih gelap, fokus ke modal */
    z-index: 200;
    backdrop-filter: blur(5px); /* efek blur background */
    animation: fadeIn 0.4s ease;
}

.dept-modal-content {
    background: #fdfdf7;
    width: 90%;
    max-width: 700px;
    margin: 5% auto;
    padding: 30px;
    border-radius: 25px;
    position: relative;
    box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    transform: translateY(-20px);
    animation: slideUp 0.5s ease forwards;
}

.close {
    position: absolute;
    right: 20px;
    top: 15px;
    font-size: 28px;
    font-weight: bold;
    color: #54736c;
    cursor: pointer;
    transition: color 0.3s;
}

.close:hover {
    color: #d45c5c;
}

.leaders-row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
    margin-top: 20px;
}

.leader-card {
    text-align: center;
    width: 120px;
    background: #e6f0ea;
    padding: 10px;
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s;
}

.leader-card:hover {
    transform: translateY(-5px) scale(1.05);
}

.leader-card img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 10px;
}

/* Animasi */
@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes slideUp {
    from {opacity: 0; transform: translateY(20px);}
    to {opacity: 1; transform: translateY(0);}
}
.dept-modal-content img {
    width: 100%;         /* Mengisi lebar modal */
    max-width: 300px;    /* Tapi jangan terlalu besar */
    height: auto;        /* Tinggi mengikuti proporsi */
    display: block;
    margin: 0 auto 20px; /* Tengah horizontal + jarak bawah */
    border-radius: 15px; /* Biar nggak kotak banget */
    object-fit: cover;   /* Supaya proporsi foto tetap bagus */
}
/* Animasi muncul dari bawah */
.reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.8s ease-out;
}

.reveal.active {
  opacity: 1;
  transform: translateY(0);
}

/* Delay tiap elemen supaya bertahap */
.delay-1 { transition-delay: 0.2s; }
.delay-2 { transition-delay: 0.4s; }
.delay-3 { transition-delay: 0.6s; }
.delay-4 { transition-delay: 0.8s; }





</style>
</head>

<body>

<nav>
<ul>
<li>
<img src="logoRDM.png" class="logoweb">
<a>E-Rohis Daarul Mu'allimin</a>
</li>
<div class="center">
<li><a href="home.php">Beranda</a></li>
<li><a href="profil.php" class="active">Profil</a></li>
<li><a href="galeri.php">Galeri</a></li>
<li><a href="konten.php">Konten</a></li>
<li><a href="./login/login.php">Login</a></li>
</div>
</ul>
</nav>

<header class="hero-section">
<div class="slider">
<div class="slides" id="slides">
<div class="slide" style="background-image:url('./foto/header1.png')"></div>
<div class="slide" style="background-image:url('./foto/header2.png')"></div>
<div class="slide" style="background-image:url('./foto/header3.png')"></div>
</div>
</div>

<div class="hero-content">
  <img src="./foto/logo.png" class="logo reveal delay-1">
  <h4 class="sub-title reveal delay-2">Ahlan Wasahlan Sahabat!</h4>
  <h1 class="main-title reveal delay-3">Daarul Mu'allimin</h1>
  <p class="description reveal delay-4">
    Bersama Menuju Cahaya Islam dengan Semangat Ukhuwah dan Dakwah.
  </p>
</div>
</header>
<section class="content-box">
  <div class="profil-content">
    <div class="reveal">
      <h2>Apa itu Rohis Daarul Mu'allimin?</h2>
      <p>Rohis Daarul Mu’allimin merupakan organisasi keislaman yang berfungsi sebagai wadah pembinaan strategis bagi seluruh siswa untuk memperdalam khazanah ilmu agama. Lebih dari sekadar komunitas, organisasi ini berupaya menumbuhkan semangat dakwah yang berkelanjutan demi mencetak generasi muda yang tidak hanya cerdas secara intelektual, tetapi juga memiliki kedalaman spiritual yang kokoh.</p>
    </div>

    <div class="reveal delay-1">
      <h2>Visi</h2>
      <p>Terwujudnya generasi Muslim yang bertaqwa, berkarakter Qur'ani, dan unggul dalam intelektualitas demi terciptanya tatanan ukhuwah Islamiyah di lingkungan sekolah.</p>
    </div>

    <div class="reveal delay-2">
      <h2>Misi</h2>
      <ul style="list-style: none;">
        <li><p> • Meningkatkan keimanan dan ketakwaan kepada Allah SWT.</p></li>
        <li><p> • Menjadi organisasi dakwah yang kreatif.</p></li>
        <li><p> • Membentuk kepribadian muslim berakhlak syar’i.</p></li>
      </ul>
    </div>
  </div>

  <div class="struktur-title"><h2>Struktur Kepengurusan Rohis</h2></div>

<div class="box1">
<img src="./foto/profilpembina.png">
<h3>Pembina</h3>
<p>Darojatul Aliyah, S. Ag.</p>
</div>

<h2>Badan Pengurus Harian 📅</h2>

<div class="row">
<div class="box">
<img src="./foto/profilketua.png">
<h3>Ketua Rohis</h3>
<p>Muhammad Irfan</p>
<p>XII TOI 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Koordinator Akhwat</h3>
<p>Embun Noer Madina</p>
<p>XII DPIB 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Sekretaris Ikhwan</h3>
<p>Alfiansyah Senakin Ramadhan</p>
<p>XI TKP 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Sekretaris Akhwat</h3>
<p>Humaira Keysya </p>
<p>XI DKV 3</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Bendahara Ikhwan</h3>
<p>Evan Kurniawan</p>
<p>XII TOI 1</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Bendahara Akhwat</h3>
<p>Mutiara Noer Islam</p>
<p>XII SIJA 2</p>
</div>
</div>

<h2>Kaderisasi 📝</h2>

<div class="row">
<div class="box">
<img src="./foto/profilketua.png">
<h3>Koordinator</h3>
<p>Muhammad Adli Irawan</p>
<p>XI RPL 1</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Wakil Koordinator</h3>
<p>Finawati Zahra</p>
<p>XI DKV 4</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Abdurrahman</p>
<p>XII TOI 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Muhammad Rasya Prasetyo</p>
<p>XII TP 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Callysto Muhammad Aryasatyo</p>
<p>XI TKP 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Duwita Nuraini</p>
<p>XI DKV 3</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Inka Dayu Ningtyas</p>
<p>XI RPL 1</p>
</div>
</div>

<h2>Syiar 🎨</h2>

<div class="row">
<div class="box">
<img src="./foto/profilketua.png">
<h3>Koordinator</h3>
<p>Farhan Kayyis Gaza</p>
<p>XI RPL 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Wakil Koordinator</h3>
<p>Reyhana Almira Bilge</p>
<p>XI DPIB 1</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Irfan Maulana</p>
<p>XII TOI 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Andika Aldebaran Suryadisastra</p>
<p>XI TP 1</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Nadhis Rasendya Fayadh</p>
<p>XI DKV 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Aulia Fatiha Kusworo</p>
<p>XII DPIB 2</p>
</div>
</div>

<h2>Dewan Kemakmuran Masjid 🕌</h2>

<div class="row">
<div class="box">
<img src="./foto/profilketua.png">
<h3>Koordinator</h3>
<p>Muhamad Wildhan</p>
<p>XII TP 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Wakil Koordinator</h3>
<p>Tri Ayu Afrianti</p>
<p>XII RPL 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Muhammad Fahri Zaky</p>
<p>XII TP 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Muhammad Mulki Fadilah</p>
<p>XII TKJ 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Muhammad Kevin Hafidz Nabeel</p>
<p>XI TKJ 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Muhammad Hafiz Jalaludin</p>
<p>XI TOI 1</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Akilah Isnaini</p>
<p>XI RPL 1</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Ayu Putri Ramdani</p>
<p>XII RPL 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Wardah Nuril Kaunain</p>
<p>XII RPL 1</p>
</div>
</div>

<h2>Seni Islam Jasmani & Ekonomi 🚴</h2>

<div class="row">
<div class="box">
<img src="./foto/profilketua.png">
<h3>Koordinator</h3>
<p>Fahmi Sufyan Antono</p>
<p>XII RPL 1</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Wakil Koordinator</h3>
<p>Khansa Putri Alisa</p>
<p>XI DKV 4</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Muhammad Jaisyul'usrah Al Muqtadir</p>
<p>XI RPL 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Rhafa Rhodillah</p>
<p>XI TKR 2</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Rafi Khairul Azam</p>
<p>XI TKJ 1</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Faiz Zainal Muttaqin</p>
<p>XII RPL 1</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Adelia Safitri</p>
<p>XI DKV 4</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Desti Kusuma Wardani</p>
<p>XI DKV 3</p>
</div>

<div class="box">
<img src="./foto/profilkoorwat.png">
<h3>Anggota</h3>
<p>Indah Nurrahman</p>
<p>XI DKV 4</p>
</div>
</div>


<h1></h1>

<!-- DEPARTEMEN -->
<div class="struktur-title"><h1>Departemen</h1></div>

<div class="row1">

<div class="dept-box">
<img src="./foto/bph.png">
<h3>Departemen BPH</h3>
<button class="btn-detail" onclick="openDept('deptbph')">Detail</button>
</div>


<div class="dept-box">
<img src="./foto/kader.png">
<h3>Departemen Kaderisasi</h3>
<button class="btn-detail" onclick="openDept('deptkader')">Detail</button>
</div>

<div class="dept-box">
<img src="./foto/dkm.png">
<h3>Departemen DKM</h3>
<button class="btn-detail" onclick="openDept('deptdkm')">Detail</button>
</div>
</div>



</div>
</div>


<div class="row2">
<div class="dept-box">
<img src="./foto/syiar.png">
<h3>Departemen Syiar</h3>
<button class="btn-detail" onclick="openDept('deptsyiar')">Detail</button>
</div>

<div class="dept-box">
<img src="./foto/sje.png">
<h3>Departemen SJE</h3>
<button class="btn-detail" onclick="openDept('deptsje')">Detail</button>
</div>

</div>

</section>

<!-- MODALS (isi lengkap kayak versi awal lo) -->

<div id="deptsje" class="dept-modal">
<div class="dept-modal-content">
<span class="close" onclick="closeDept('deptsje')">&times;</span>
<img src="./foto/sje.png" alt="">
<h3>Departemen Seni Jasmani & Ekonomi</h3>
<p>Departemen Seni Jasmani dan Ekonomi (SJE) memiliki
    program seperti fokus pada pengembangan
    kegiatan fisik dan jasmani
    melalui aktivitas senam, dan olahraga pilihan.
    Ada juga membuat kesenian seperti kaligrafi
    dan terakhir mempelajari ekonomi dengan cara berwirausaha.
</p>
</div>
</div>

<div id="deptbph" class="dept-modal">
<div class="dept-modal-content">
<span class="close" onclick="closeDept('deptbph')">&times;</span>
<img src="./foto/bph.png">
<h3>Departemen BPH</h3>
<p>Badan Pengurus Harian (BPH) ialah struktur kepengurusan yang bertanggung jawab
    untuk menjalankan kegiatan sehari-hari organisasi, baik seputar program kerja
    , maupun event Rohis lainnya. BPH terdiri dari beberapa posisi, yaitu Ketua Umum, Koordinator
    Akhwat, Sekretaris, dan Bendahara.
</p>
</div>
</div>

<div id="deptdkm" class="dept-modal">
<div class="dept-modal-content">
<span class="close" onclick="closeDept('deptdkm')">&times;</span>
<img src="./foto/dkm.png" alt="">
<h3>Departemen DKM</h3>
<p>Departemen Dewan Kemakmuran Masjid (DKM) yaitu biasanya fokus pada pengelolaan
    dan pengembangan kegiatan di masjid sekolah. Seperti pemeliharaan masjid dan program keagamaan.
    DKM juga bertanggungjawab dalam menjaga kenyamanan dan kebersihan
    masjid agar siapapun dapat menikmati fasilitas masjid dengan nyaman.
</p>
</div>
</div>

<div id="deptkader" class="dept-modal">
<div class="dept-modal-content">
<span class="close" onclick="closeDept('deptkader')">&times;</span>
<img src="./foto/kader.png" alt="">
<h3>Departemen Kaderisasi</h3>
<p>Departemen Kaderisasi adalah departemen yang berfungsi untuk mengembangkan dan membina anggota agar memiliki pemahaman, pengetahuan, dan keterampilan yang baik dalam beragama
    yang dapat mengembangkan jiwa kepemimpinan dengan memantau perkembangan anggota.
</p>
</div>
</div>

<div id="deptsyiar" class="dept-modal">
<div class="dept-modal-content">
<span class="close" onclick="closeDept('deptsyiar')">&times;</span>
<img src="./foto/syiar.png" alt="">
<h3>Departemen Syiar</h3>
<p>Departemen Syiar Kreatif yaitu bagian yang bertanggung jawab untuk menyebarkan informasi berupa  pengetahuan atau nilai-nilai islam melalui media Offline dan Online. Apasih aktivitas yang ada di Syiar? Ada desain, fotografi, videografi, dan media sosial.</p>
</div>
</div>

</section>

<!-- STRUKTUR -->

<script>


const slides = document.getElementById("slides");
const slideItems = document.querySelectorAll(".slide");
const totalSlides = slideItems.length;

// clone first slide dan taruh di akhir
const firstClone = slideItems[0].cloneNode(true);
slides.appendChild(firstClone);

let index = 0;

function autoSlide(){
  index++;
  slides.style.transition = "transform 1s ease-in-out";
  slides.style.transform = `translateX(-${index * 100}%)`;

  // cek kalau sampai clone terakhir
  if(index === totalSlides){
    setTimeout(() => {
      slides.style.transition = "none"; // matikan transisi
      slides.style.transform = `translateX(0%)`; // balik ke slide pertama
      index = 0;
    }, 1000); // delay sama dengan durasi transition
  }
}

setInterval(autoSlide, 4000);


function openDept(id){
document.getElementById(id).style.display="block";
}

function closeDept(id){
document.getElementById(id).style.display="none";
}

window.onclick=function(event){
document.querySelectorAll('.dept-modal').forEach(modal=>{
if(event.target==modal){
modal.style.display="none";
}
});
}
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150; // Jarak elemen muncul dari bawah layar

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    }
  }
}

window.addEventListener("scroll", reveal);

// Jalankan fungsi sekali saat pertama kali load untuk mengecek posisi
reveal();
</script>
<footer>
  <div class="footer-container">

    <div class="footer-box">
      <h3>E-Rohis Daarul Mu'allimin</h3>
      <p>
        Organisasi Rohani Islam yang menjadi wadah pembinaan akhlak, 
        ukhuwah, dan dakwah di lingkungan sekolah.
      </p>
    </div>

    <div class="footer-box">
      <h3>Menu</h3>
      <p><a href="home.php">Beranda</a></p>
      <p><a href="profil.php">Profil</a></p>
      <p><a href="galeri.php">Galeri</a></p>
      <p><a href="konten.php">Konten</a></p>
    </div>

    <div class="footer-box">
      <h3>Kontak</h3>
      <p>📍 SMK Daarul Mu'allimin</p>
      <p>📞 0888-8888-8888</p>
      <p>✉ rohis@daaulmuallimin.sch.id</p>
    </div>

    <div class="footer-box">
  <h3>Kontak</h3>
  <p>📍 SMK Daarul Mu'allimin</p>
  <p>📞 0888-8888-8888</p>
  <p>✉ rohis@daaulmuallimin.sch.id</p>

  <div class="social-icons">
    <a href="https://www.instagram.com/rdm.millenium/" target="_blank">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="https://www.tiktok.com/@rdm.millenium" target="_blank">
      <i class="fab fa-tiktok"></i>
    </a>
    <a href="https://www.youtube.com/@rohisdmcbn/featured" target="_blank">
      <i class="fab fa-youtube"></i>
    </a>
  </div>
</div>

  </div>

  <div class="footer-bottom">
    © 2026 E-Rohis Daarul Mu'allimin | All Rights Reserved
  </div>
</footer>


</body>
</html>
