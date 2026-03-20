<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beranda - E-Rohis</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">

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
}

/* ================= SIDEBAR ================= */
#sidebar{
    position:fixed;
    left:-300px;
    top:0;
    width:300px;
    height:100%;
    background:white;
    padding:30px;
    box-shadow:5px 0 20px rgba(0,0,0,0.2);
    transition:0.4s;
    z-index:200;
}

#sidebar.active{
    left:0;
}

#overlay{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.5);
    display:none;
    z-index:150;
}

#overlay.show{
    display:block;
}

.logout-btn{
    display:block;
    margin-top:20px;
    padding:10px;
    text-align:center;
    background:#54736c;
    color:white;
    text-decoration:none;
    border-radius:20px;
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

.vote-section{
    text-align:center;
}

.vote-container{
    display:flex;
    justify-content:center;
    gap:40px;
    margin-top:30px;
    flex-wrap:wrap;
}

.kandidat-card{
    background:#ece7da;
    padding:25px;
    border-radius:20px;
    width:300px;
}

.kandidat-card img{
    width:120px;
    margin:15px 0;
}

.btn-vote{
    margin-top:30px;
    padding:12px 30px;
    background:#54736c;
    color:white;
    border:none;
    border-radius:25px;
    cursor:pointer;
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
</style>
</head>

<body>

<nav>
<ul>
<li style="display:flex; align-items:center; gap:10px;">
  <span id="menuBtn" style="font-size:22px; cursor:pointer; color:white;">&#9776;</span>
  <img src="../foto/logo.png" class="logoweb">
  <a>E-Rohis Daarul Mu'allimin</a>
</li>

<div class="center">
<li><a href="home.php" class="active">Beranda</a></li>
<li><a href="../profil.php">Profil</a></li>
<li><a href="../galeri.php">Galeri</a></li>
<li><a href="../konten.php">Konten</a></li>
</div>
</ul>
</nav>

<!-- SIDEBAR -->
<div id="sidebar">
<h2>Informasi Akun</h2>
<p><strong>Nama:</strong> Keiyla Adya Azzani</p>
<p><strong>Username:</strong> keiyla01</p>
<p><strong>Jabatan:</strong> Anggota</p>
<a href="login.php" class="logout-btn">Logout</a>
</div>

<div id="overlay"></div>

<header class="hero-section">
<div class="slider">
<div class="slides" id="slides">
<div class="slide" style="background-image:url('../foto/header1.png')"></div>
<div class="slide" style="background-image:url('../foto/header2.png')"></div>
<div class="slide" style="background-image:url('../foto/header3.png')"></div>
</div>
</div>

<div class="hero-content">
<img src="../foto/logo.png" class="logo">
<h4 class="sub-title">Assalamualaikum Sahabat</h4>
<h1 class="main-title">Daarul Mu'allimin</h1>
<p class="description">
Bersama menuju cahaya Islam dengan semangat ukhuwah dan dakwah.
</p>
</div>
</header>

<section class="content-box">
<div class="vote-section">
<h1>PEMILU RAYA</h1>

<div class="vote-container">
<div class="kandidat-card">
<h2>Kandidat 01</h2>
<img src="../foto/icon 1.png">
<p>Ketua: Keiyla</p>
<p>Wakil: Syahrul</p>
</div>

<div class="kandidat-card">
<h2>Kandidat 02</h2>
<img src="../foto/icon 2.png">
<p>Ketua: Nazil</p>
<p>Wakil: Akilah</p>
</div>
</div>

<button class="btn-vote">Voting Sekarang</button>
</div>
</section>

<footer>
<div class="footer-container">

<div class="footer-box">
<h3>E-Rohis Daarul Mu'allimin</h3>
<p>Organisasi Rohani Islam sekolah.</p>
</div>

<div class="footer-box">
<h3>Menu</h3>
<p><a href="home.php">Beranda</a></p>
<p><a href="profil.php">Profil</a></p>
</div>

<div class="footer-box">
<h3>Kontak</h3>
<p>SMK Daarul Mu'allimin</p>
<p>0888-8888-8888</p>
</div>

</div>

<div class="footer-bottom">
© 2026 E-Rohis Daarul Mu'allimin
</div>
</footer>

<script>
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
    setTimeout(()=>{
      slides.style.transition="none";
      slides.style.transform="translateX(0%)";
      index=0;
    },1000);
  }
}
setInterval(autoSlide,4000);

const menuBtn=document.getElementById("menuBtn");
const sidebar=document.getElementById("sidebar");
const overlay=document.getElementById("overlay");

menuBtn.addEventListener("click",()=>{
sidebar.classList.add("active");
overlay.classList.add("show");
});

overlay.addEventListener("click",()=>{
sidebar.classList.remove("active");
overlay.classList.remove("show");
});
</script>

</body>
</html>
