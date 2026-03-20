<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri - E-Rohis</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">

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

/* ================= NAVBAR (SAMA PROFIL) ================= */
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

/* ================= HERO SLIDER (SAMA PROFIL) ================= */
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

/* ================= CONTENT BOX ================= */
.content-box{
    max-width:1200px;
    background:white;
    margin:30px auto;
    padding:40px;
    border-radius:15px;
    box-shadow:0 6px 18px rgba(0,0,0,0.15);
}

/* ================= SEARCH ================= */
.search-section{
    text-align:center;
    margin-bottom:30px;
}

.search-section input{
    padding:10px 20px;
    width:300px;
    border-radius:20px;
    border:1px solid #ccc;
}

/* ================= GALLERY ================= */
.gallery-section{
    display:flex;
    flex-direction:column;
    gap:20px;
}

.activity-box{
    display:flex;
    gap:20px;
    background:#ece7da;
    padding:20px;
    border-radius:15px;
}

.activity-box img{
    width:250px;
    height:180px;
    object-fit:cover;
    border-radius:10px;
}

.activity-info h2{
    color:#54736c;
}

.photo-btn{
    margin-top:10px;
    padding:8px 15px;
    border:none;
    background:#54736c;
    color:white;
    border-radius:20px;
    cursor:pointer;
}

.photo-btn:hover{
    background:#3e5650;
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
</style>
</head>

<body>

<!-- ================= NAVBAR ================= -->
<nav>
<ul>
<li>
<img src="logoRDM.png" class="logoweb">
<a>E-Rohis Daarul Mu'allimin</a>
</li>
<div class="center">
<li><a href="home.php">Beranda</a></li>
<li><a href="profil.php">Profil</a></li>
<li><a href="galeri.php" class="active">Galeri</a></li>
<li><a href="konten.php">Konten</a></li>
<li><a href="./login/login.php">Login</a></li>
</div>
</ul>
</nav>

<!-- ================= HERO ================= -->
<header class="hero-section">
<div class="slider">
<div class="slides" id="slides">
<div class="slide" style="background-image:url('./foto/header1.png')"></div>
<div class="slide" style="background-image:url('./foto/header2.png')"></div>
<div class="slide" style="background-image:url('./foto/header3.png')"></div>
</div>
</div>

<div class="hero-content">
  <img src="./foto/logo.png" class="logo">
  <h4 class="sub-title">Ahlan Wasahlan Sahabat!</h4>
  <h1 class="main-title">Daarul Mu'allimin</h1>
  <p class="description">
    Bersama Menuju Cahaya Islam dengan Semangat Ukhuwah dan Dakwah.
  </p>
</div>
</header>

<!-- ================= ISI GALERI LO (AMAN) ================= -->
<div class="content-box">

<section class="search-section">
<input type="text" id="searchInput" placeholder="Cari kegiatan Rohis...">
</section>

<section class="gallery-section">
<?php
include "koneksi.php";
$result = mysqli_query($konek, "SELECT * FROM galeri ORDER BY tanggal DESC");
while($row = mysqli_fetch_assoc($result)){
?>
<div class="activity-box">
<img src="./admin/crud_galeri/uploads/<?= $row['foto'] ?>">
<div class="activity-info">
<h2><?= $row['judul'] ?></h2>
<p><?= $row['deskripsi'] ?></p>
<p>📅 <?= date('d F Y', strtotime($row['tanggal'])) ?></p>
<button class="photo-btn">Lihat Foto</button>
</div>
</div>
<?php } ?>
</section>

</div>

<!-- ================= SLIDER SCRIPT ================= -->
<script>


const searchInput = document.getElementById("searchInput");
    const activityBoxes = document.querySelectorAll(".activity-box");

    searchInput.addEventListener("keyup", function () {
      const searchTerm = this.value.toLowerCase();

      activityBoxes.forEach((box) => {
        const title = box.querySelector("h2").textContent.toLowerCase();
        box.style.display = title.includes(searchTerm) ? "flex" : "none";
      });
    });
    
const slides = document.getElementById("slides");
const slideItems = document.querySelectorAll(".slide");
const totalSlides = slideItems.length;

const firstClone = slideItems[0].cloneNode(true);
slides.appendChild(firstClone);

let index = 0;

function autoSlide(){
  index++;
  slides.style.transition = "transform 1s ease-in-out";
  slides.style.transform = `translateX(-${index * 100}%)`;

  if(index === totalSlides){
    setTimeout(() => {
      slides.style.transition = "none";
      slides.style.transform = `translateX(0%)`;
      index = 0;
    }, 1000);
  }
}

setInterval(autoSlide, 4000);
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