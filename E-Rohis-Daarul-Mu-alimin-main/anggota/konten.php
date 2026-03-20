<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/konten.css">
    <link rel="stylesheet" href="./css/profil.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<style>
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
</style>
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
    <section class="youtube-section">
  <h2 class="youtube-title">
    <a href="https://youtube.com/@rohisdmcbn?si=Ayy9OYwnTLVqCdLt" target="_blank" class="youtube-link">
      <!-- Logo YouTube -->
      <svg class="youtube-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="#FF0000">
        <path d="M23.498 6.186a2.985 2.985 0 0 0-2.11-2.114C19.616 3.5 12 3.5 12 3.5s-7.615 0-9.388.572a2.985 2.985 0 0 0-2.11 2.114A31.18 31.18 0 0 0 0 12a31.18 31.18 0 0 0 .502 5.814 2.985 2.985 0 0 0 2.11 2.114C4.384 20.5 12 20.5 12 20.5s7.616 0 9.388-.572a2.985 2.985 0 0 0 2.11-2.114A31.18 31.18 0 0 0 24 12a31.18 31.18 0 0 0-.502-5.814zM9.75 15.5v-7l6 3.5-6 3.5z"/>
      </svg>
      <span class="channel-name">Rohis SMKN 1 Cibinong</span>
    </a>
  </h2>
  <div class="youtube-slider">
    <div class="slider-wrapper">
      <div class="slider">
        <a href="https://youtu.be/QXfwAP0xfM8" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/QXfwAP0xfM8/hqdefault.jpg" alt="Video 1">
          <p>MUHADARAH 4 - BERTEMA "ISRA MI'RAJ" Rohis SMKN 1 CIBINONG</p>
        </a>
        <a href="https://youtu.be/iExw3O7u1q0" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/iExw3O7u1q0/hqdefault.jpg" alt="Video 2">
          <p>MUHADARAH 3 - BERTEMA "BENCANA ALAM" Rohis SMKN 1 CIBINONG</p>
        </a>
        <a href="https://youtu.be/BXP1TKtnjOc" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/BXP1TKtnjOc/hqdefault.jpg" alt="Video 3">
          <p>Sorotan 17.20 - 22.20 dari MUHADHARAH 1 - BERTEMA "MAULID NABI" Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/2cIaP-fbFuI" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/2cIaP-fbFuI/hqdefault.jpg" alt="Video 4">
          <p>Open House x Mentoring Gabungan RDM | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/goxd_s3HW7E" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/goxd_s3HW7E/hqdefault.jpg" alt="Video 5">
          <p>[Short Video] Dokumentasi Ifthar x Mentoring Gabungan RDM 21 | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/Qn3TQL4zCtg" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/Qn3TQL4zCtg/hqdefault.jpg" alt="Video 6">
          <p>PHBI Isra Mi'raj 1442 H SMKN 1 Cibinong | Ust. Ramdhan Juniarsyah, M.Ag (Kang Radju Daway)</p>
        </a>
        <a href="https://youtu.be/_J-SGeJB_Co" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/_J-SGeJB_Co/hqdefault.jpg" alt="Video 7">
          <p>Rihlah: Ceria with Rohis (Ceriwis) 2013 | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/KB5dPATOOPc" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/KB5dPATOOPc/hqdefault.jpg" alt="Video 8">
          <p>MABIT (Malam Bina Iman & Takwa) 2014 | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/ewbkL4Mi3t4" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/ewbkL4Mi3t4/hqdefault.jpg" alt="Video 9">
          <p>Dokumenter RDM17 #sahabatbermanfaat | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/Qr2qA0sg_Zk" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/Qr2qA0sg_Zk/hqdefault.jpg" alt="Video 10">
          <p>Rihlah: Ceria with Rohis (Ceriwis) 2015 | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/xvJGMLiKiN8" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/xvJGMLiKiN8/hqdefault.jpg" alt="Video 11">
          <p>FILM PENDEK: Catatan Mikail (Ayo Mentoring) | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/swcshBH6F4s" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/swcshBH6F4s/hqdefault.jpg" alt="Video 12">
          <p>Story of Rohis Daarul Mu'allimin 2013 | Rohis SMKN 1 Cibinong</p>
        </a>
      </div>
    </div>
  </div>
</section>
  <section class="konten-section">
  <div class="konten-container">
    <div class="konten-image">
      <img src="./foto/thn islam.webp" alt="Poster Tahun Baru Islam">
    </div>
    <div class="konten-text">
      <h2>Tahun Baru Islam 1447 H</h2>
      <p>
        Assalamu'alaikum warahmatullahi wabarakatuh 🙌🏻 <br><br>

🌙 Selamat Tahun Baru Islam 1 Muharram 1447 H <br>
Tahun baru hijriah bukan sekadar pergantian waktu, tapi momen muhasabah dan hijrah menuju kebaikan. <br>
Mari kita mulai lembaran baru dengan hati yang lebih bersih, niat yang lebih tulus, dan semangat memperbaiki diri. <br><br>

Semoga segala doa dan harapan kita di tahun ini diridhoi oleh-Nya, dan hidup kita selalu dipenuhi keberkahan. 🤲✨
      </p>
    </div>
  </div>
  </section>

  <hr class="konten-divider">

  <section class="konten-section">
  <div class="konten-container reverse">
    <div class="konten-image">
      <img src="./foto/adha.webp" alt="Poster Idul Adha">
    </div>
    <div class="konten-text">
      <h2>Idul Adha 1446 H</h2>
      <p>
       🌙🕋Selamat Hari Raya Idul Adha 1446 H!🌙 <br><br>

"Maka laksanakanlah salat karena Tuhanmu dan berkurbanlah!" <br>

(QS. Al-Kautsar: 2) <br><br>

Idul Adha bukan hanya tentang kurban, tapi juga tentang keikhlasan, pengorbanan, dan kepatuhan kepada Allah SWT.
      </p>
    </div>
  </div>
</section>

<hr class="konten-divider">

<section class="profil-section">
  <div class="profil-content">
    <h2>Apa itu Qurban?</h2>
    <p>
      Qurban berasal dari bahasa Arab قَرُبَ - يَقْرُبُ (qaruba - yaqrobu) yang berarti mendekat. Kata ini berkembang 
      menjadi قُربان (qurban), yang secara harfiah berarti sesuatu yang dipersembahkan untuk mendekatkan diri 
      kepada Allah. Secara istilah, qurban adalah ibadah menyembelih hewan (seperti sapi, kambing, domba, atau 
      unta) pada hari Idul Adha dan hari-hari tasyrik (11-13 Dzulhijjah) sebagai bentuk ketaatan, pengorbanan, 
      dan rasa syukur kepada Allah SWT.
    </p>

    <h2>Adapun dalil Qurban yaitu:</h2>
    <p>
      إِنَّا أَعْطَيْنَاكَ الْكَوْثَرَ فَصَلِّ لِرَبِّكَ وَانْحَرْ <br>
Sesungguhnya Kami telah memberikan kepadamu nikmat yang banyak. Maka dirikanlah salat karena Tuhanmu dan berqurbanlah.
    </p>

    <h2>Makna dan hikmah Qurban</h2>
    <ul>
      <li>Mendekatkan diri kepada Allah - Qurban adalah wujud ketaatan dan sarana mempererat hubungan spiritual dengan Allah. </li>
      <li>Meneladani Nabi Ibrahim - Mengikuti kisah kepatuhan dan keimanan Nabi Ibrahim yang bersedia mengorbankan putranya. </li>
      <li>Ungkapan rasa syukur - Qurban menjadi bentuk syukur atas nikmat dan rezeki dari Allah. </li>
      <li>Berbagi rezeki - Daging kurban dibagikan kepada diri sendiri, kerabat, dan orang yang membutuhkan, sebagai bentuk kepedulian sosial. </li>
      <li>Meningkatkan kepedulian - Momentum qurban mendorong empati terhadap kondisi masyarakat sekitar. </li>
      <li>Menumbuhkan keikhlasan dan pengorbanan - Qurban melatih ikhlas dan kesiapan berkorban demi ketaatan kepada Allah. </li>
    </ul>

    <h2>Syarat Qurban</h2>
    <ul>
      <li>Muslim, baligh, dan berakal - Pelaku qurban harus beragama Islam, sudah dewasa, dan sadar. </li>
      <li>Memiliki kelebihan harta - Qurban dilakukan jika memiliki harta lebih, tanpa mengorbankan kebutuhan pokok. </li>
      <li>Hewan sesuai syariat - Hanya domba, kambing, sapi, atau unta yang sehat, cukup umur, dan tidak cacat. </li>
      <li>Dilaksanakan pada waktunya -Qurban dilakukan pada 10-13 Dzulhijjah. </li>
      <li>Dengan niat yang ikhlas - Niat qurban harus murni karena Allah. </li>
      <li>Penyembelihan sesuai syariat -Dilakukan oleh orang yang ahli dan sesuai tata cara Islam. </li>
    </ul>

    <h2>Hewan yang dapat dijadikan sebagai hewan Qurban</h2>
    <ul>
      <li>Domba - Umum digunakan, minimal 1 tahun, sehat, dan tidak cacat. </li>
      <li>Kambing - Mirip domba, satu kambing untuk satu orang. </li>
      <li>Sapi - Bisa untuk 7 orang, usia minimal 2 tahun, sehat dan layak. </li>
      <li>Kerbau - Alternatif dari sapi di daerah tertentu, syaratnya sama. </li>
      <li>Unta - Jarang digunakan di Indonesia, bisa untuk 7 orang, usia minimal 5 tahun. </li>
    </ul>
  </div>
  </section>
  <script>

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