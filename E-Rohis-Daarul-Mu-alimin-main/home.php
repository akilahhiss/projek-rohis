<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Rohis</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:"Poppins", sans-serif;
}

body{
    background: linear-gradient(180deg, #d3efda 100%, #f2d8b5 0%);
}

/* ================= NAVBAR ================= */
nav{
  position:fixed;
  top:0;
  width:100%;
  background:#54736c;
  z-index:2;
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

nav ul li a{
  text-decoration:none;
  color:white;
  font-weight:500;
  font-size:15px;
  transition:0.3s;
}

nav ul li a:hover{
  color:#d4f5d0;
}

/* ================= HERO SLIDER ================= */

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

/* overlay gelap */
.hero-section::after{
  content:"";
  position:absolute;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.45);
  top:0;
  left:0;
  z-index:1;
}

/* hero text */
.hero-content{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  text-align:center;
  z-index:2;
  color:white;
  padding:20px;
}

.logo{
  width:130px;
  margin-bottom:10px;
}

.sub-title{
  font-size:18px;
  margin-bottom:5px;
  color:#D8FCEB;
}

.main-title{
  font-family:'Irish Grover', cursive;
  font-size:52px;
  color:#E8FFF4;
  margin-bottom:10px;
}

.description{
  font-size:16px;
  max-width:500px;
  margin:auto;
  color:#F5FFF9;
}

/* ================= CONTENT ================= */

.content-box{
  max-width:1200px;
  background:white;
  margin:30px auto;
  padding:30px;
  border-radius:15px;
  box-shadow:0 6px 18px rgba(0,0,0,0.15);
}
.logoweb{
  width:40px;      /* atur sesuai selera */
  height:auto;
  margin-right:8px;
}
nav ul li{
  display:flex;
  align-items:center;
}
.content-box button {
    background-color: #54736c; /* Warna hijau khas navbar kamu */
    color: white;
    padding: 12px 30px;
    font-size: 16px;
    font-weight: 600;
    font-family: 'Quicksand', sans-serif;
    border: none;
    border-radius: 50px; /* Membuat tombol lonjong/rounded */
    cursor: pointer;
    transition: all 0.3s ease; /* Transisi halus untuk semua efek */
    box-shadow: 0 4px 15px rgba(84, 115, 108, 0.3);
    display: inline-block;
    text-decoration: none;
    margin-top: 20px;
}

/* Efek saat kursor menyentuh tombol */
.content-box button:hover {
    background-color: #3e5650; /* Warna hijau lebih gelap */
    transform: translateY(-3px); /* Tombol sedikit naik */
    box-shadow: 0 6px 20px rgba(84, 115, 108, 0.4);
}

/* Efek saat tombol diklik */
.content-box button:active {
    transform: translateY(-1px);
    box-shadow: 0 3px 10px rgba(84, 115, 108, 0.2);
}

/* Container Utama Oprec */
.open-rec-container {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    align-items: flex-start;
    padding: 20px 0;
}

/* BAGIAN KIRI (Ajakan) */
.open-left {
    flex: 1;
    min-width: 300px;
    text-align: left;
}

.open-title {
    font-family: 'Irish Grover', cursive; /* Menggunakan font hero agar senada */
    color: #54736c;
    font-size: 42px;
    line-height: 1.2;
    margin-bottom: 20px;
}

.open-invite {
    font-size: 18px;
    color: #555;
    line-height: 1.6;
    margin-bottom: 30px;
}

/* Tombol Daftar Sekarang */
.btn-daftar {
    display: inline-block;
    background-color: #54736c;
    color: white;
    padding: 15px 35px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-family: 'Quicksand', sans-serif;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(84, 115, 108, 0.3);
}

.btn-daftar:hover {
    background-color: #3e5650;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(84, 115, 108, 0.4);
}

/* BAGIAN KANAN (Informasi/Cards) */
.open-right {
    flex: 1;
    min-width: 300px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.open-card {
    background: #fdfcf8; /* Warna putih krem lembut */
    padding: 25px;
    border-radius: 15px;
    border-left: 5px solid #54736c; /* Garis aksen di samping */
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.section-heading {
    font-family: 'Quicksand', sans-serif;
    font-size: 18px;
    color: #54736c;
    margin-bottom: 10px;
}

.info {
    font-size: 15px;
    color: #444;
    font-weight: 500;
}

/* List Manfaat */
.benefit-list {
    list-style: none;
    padding: 0;
}

.benefit-list li {
    position: relative;
    padding-left: 25px;
    margin-bottom: 8px;
    font-size: 14px;
    color: #666;
}

.benefit-list li::before {
    content: "•";
    position: absolute;
    left: 0;
    color: #54736c;
    font-size: 20px;
    line-height: 1;
}

/* Responsif untuk HP */
@media (max-width: 768px) {
    .open-left {
        text-align: center;
    }
    .open-title {
        font-size: 32px;
    }
}
/* ================= FOOTER ================= */

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
.surprise-box{
    width:200px;
    margin:40px auto;
    padding:20px;
    text-align:center;
    background:#54736c;
    color:white;
    border-radius:15px;
    cursor:pointer;
    font-weight:600;
    transition:0.3s;
    position:relative;
    overflow:hidden;
}

.surprise-box:hover{
    background:#3e5650;
    transform:scale(1.05);
}

.emoji{
    position:absolute;
    font-size:22px;
    animation: fall 2s ease-out forwards;
}

@keyframes fall{
    0%{
        transform: translateY(0) rotate(0deg);
        opacity:1;
    }
    100%{
        transform: translateY(-200px) rotate(360deg);
        opacity:0;
    }
}
nav ul li a:hover,
nav ul li a.active{
    color:#d4f5d0;
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
    <li><img src="logoRDM.png" class="logoweb"><a>E-Rohis Daarul Mu'allimin</a></li>
    <div class="center">
      <li><a href="home.php" class="active">Beranda</a></li>
      <li><a href="profil.php">Profil</a></li>
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

      <div class="slide" style="background-image:url('./foto/header1.png')"></div>

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
    <section class="open-rec-container">

  <!-- KIRI -->
  <div class="open-left">
    <h1 class="open-title">OPEN RECRUITMENT ROHIS !!</h1>

    <p class="open-invite">
      Yuk gabung bersama keluarga besar Rohis <br>  
      Ciptakan lingkungan positif, menambah pengalaman, dan memperkuat karakter Islami di sekolah! <br>
      Periode 2026-2027
    </p>
    <a href="./oprec/oprec.php" 
   class="btn-daftar">
   Daftar Sekarang
</a>
  </div>

  <!-- KANAN -->
  <div class="open-right">

    <div class="open-card">
      <h2 class="section-heading">Jadwal Eskul</h2>
      <p class="info">Rabu & Jumat — Sepulang Sekolah</p>
    </div>

    <div class="open-card">
      <h2 class="section-heading">Manfaat Bergabung</h2>
      <ul class="benefit-list">
        <li>Meningkatkan keimanan & akhlak</li>
        <li>Lingkungan pertemanan positif</li>
        <li>Belajar public speaking & organisasi</li>
        <li>Pengalaman kegiatan sosial & dakwah</li>
      </ul>
    </div>

    <!-- Waktu + Kontak disatukan -->
    <div class="open-card">
      <h2 class="section-heading">Waktu Pendaftaran</h2>
      <p class="info">10 – 25 Januari 2026</p>

      <h2 class="section-heading" style="margin-top:18px;">Kontak Koordinator</h2>
      <p class="info">📞 0888-8888-8888 (Akilah)</p>
    </div>

  </div>

</section>
  </section>

<script>
  window.addEventListener('load', () => {
  document.querySelectorAll('.reveal').forEach(el => {
    el.classList.add('active');
  });
});

let index = 0;
const slides = document.getElementById("slides");
const totalSlides = document.querySelectorAll(".slide").length;

function autoSlide(){
  index++;
  slides.style.transition = "transform 1s ease-in-out";
  slides.style.transform = `translateX(-${index * 100}%)`;

  // kalau sampai clone
  if(index === totalSlides - 1){
    setTimeout(() => {
      slides.style.transition = "none";
      slides.style.transform = "translateX(0%)";
      index = 0;
    }, 1000);
  }
}

setInterval(autoSlide, 4000);
</script>

<div class="surprise-box" onclick="showConfetti()">
    🎁 Klik Aku!
</div>


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


<script>
function showConfetti(){
    const box = document.querySelector('.surprise-box');
    const emojis = ["🎉","✨","🎊","💚"];

    for(let i=0; i<25; i++){
        let emoji = document.createElement("span");
        emoji.classList.add("emoji");
        emoji.innerText = emojis[Math.floor(Math.random() * emojis.length)];

        emoji.style.left = Math.random() * 100 + "%";
        emoji.style.top = "50%";

        box.appendChild(emoji);

        setTimeout(() => {
            emoji.remove();
        }, 2000);
    }
}
</script>



</body>
</html>
