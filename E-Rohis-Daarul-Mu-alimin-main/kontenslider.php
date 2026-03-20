<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Konten - E Rohis</title>

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
</style>
</head>

<body>

<!-- ================= NAVBAR ================= -->
<nav>
  <ul>
    <li><img src="logoRDM.png" class="logoweb"><a>E-Rohis Daarul Mu'allimin</a></li>
    <div class="center">
      <li><a href="home.php">Beranda</a></li>
      <li><a href="profil.php">Profil</a></li>
      <li><a href="galeri.php">Galeri</a></li>
      <li><a href="konten.php" class="active">Konten</a></li>
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
      <div class="slide" style="background-image:url('./foto/header1.png')"></div>
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

<!-- ================= ISI KONTEN ================= -->
<section class="content-box">
  <h2>Halaman Konten</h2>
  <p>Isi konten kamu di sini...</p>
</section>

<!-- ================= SLIDER SCRIPT ================= -->
<script>
let index = 0;
const slides = document.getElementById("slides");
const totalSlides = document.querySelectorAll(".slide").length;

function autoSlide(){
  index++;
  slides.style.transition = "transform 1s ease-in-out";
  slides.style.transform = `translateX(-${index * 100}%)`;

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

<!-- ================= FOOTER ================= -->
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

      <div class="social-icons">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-tiktok"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    © 2026 E-Rohis Daarul Mu'allimin | All Rights Reserved
  </div>
</footer>

</body>
</html>