<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Admin ROHIS</title>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body{
    background: #f4fff8;
    display: flex;
    height: 100vh;
}

/* ================= SIDEBAR ================= */

.sidebar{
    width: 290px;
    background: #699f84;
    padding: 25px 0;
    color: white;
    display: flex;
    flex-direction: column;
}

.sidebar-header{
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 0 20px;
    margin-bottom: 30px;
}

.sidebar-header img{
    width: 42px;
    height: 42px;
    object-fit: contain;
}

.sidebar-header h2{
    font-size: 16px;
    font-weight: 600;
    margin: 0;
    white-space: nowrap;
}

.sidebar a{
    padding: 15px 25px;
    text-decoration: none;
    color: white;
    display: block;
    font-size: 16px;
    transition: .2s;
}

.sidebar a:hover{
    background: #154734;
}

/* ================= MAIN AREA ================= */

.main{
    flex: 1;
    padding: 30px;
    overflow-y: auto;
}

h1{
    color: #0f3d2e;
    margin-bottom: 20px;
}

/* ================= STATS BOX ================= */

.stats{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.box{
    background: white;
    padding: 25px;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
    transition: .3s;
    animation: fadeUp .7s ease;
}

.box:hover{
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.box h3{
    font-size: 28px;
    color: #2e5e48;
    margin-bottom: 5px;
}

.box p{
    font-size: 15px;
    color: #0f3d2e;
    font-weight: 500;
}

/* ================= ANIMATION ================= */

@keyframes fadeUp{
    from{
        opacity: 0;
        transform: translateY(20px);
    }
    to{
        opacity: 1;
        transform: translateY(0);
    }
}



</style>
</head>
<body>


<div class="sidebar">
    <div class="sidebar-header">
    <img src="../logoRDM.png" alt="Logo Rohis">
    <h2>E-Rohis Daarul Mu'allimin</h2>
</div>
    <a href="dashboard_admin.php">📊 Dashboard</a>
    <a href="crud_akun/kelola_user.php"> 👥 Kelola User</a>
    <a href="crud_oprec/kelola_oprec.php">🗓️ Kelola Open Recruitment</a>
    <a href="kelola_konten.php"> 🎞️ Kelola Konten</a>
    <a href="kelola_galeri.php"> 🗂️ Kelola Galeri</a>
    <a href="kelola_oprec.php"> 🗣️ Kelola Open Recruitment</a>
    <a href="loginadmin.php" style="margin-top: auto; color: #ffb3b3;">Logout</a>
</div>


<div class="main">
    <h1>Dashboard </h1>

    <div class="stats">
        <div class="box">
            <h3>12</h3>
            <p>Total User</p>
        </div>

        <div class="box">
            <h3>3</h3>
            <p>Event Aktif</p>
        </div>

        <div class="box">
            <h3>8</h3>
            <p>Total Konten</p>
        </div>

        <div class="box">
            <h3>24</h3>
            <p>Foto Galeri</p>
        </div>
    </div>
</div>

</body>
</html>