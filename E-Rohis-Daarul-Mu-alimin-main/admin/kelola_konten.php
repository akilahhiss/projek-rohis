<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Konten - Admin</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        * {margin:0; padding:0; box-sizing:border-box; font-family: 'Poppins', sans-serif;}
        body {background:#f5f7f5; display:flex;}
        .admin-container {display:flex; width:100%;}
        .sidebar {width:230px; background:#0f3d2e; color:white; min-height:100vh; padding:25px 20px; box-shadow:3px 0 12px rgba(0,0,0,0.15);}        
        .logo {font-size:22px; font-weight:600; margin-bottom:25px; text-align:center;}
        .sidebar ul {list-style:none;}
        .sidebar ul li {margin:15px 0;}
        .sidebar ul li a {color:white; text-decoration:none; font-size:15px; padding:10px 15px; display:block; border-radius:8px; transition:0.3s;}        
        .sidebar ul li a:hover, .sidebar ul li.active a {background:#4caf50;}
        .content {flex:1; padding:30px;}
        .page-title {font-size:26px; font-weight:600; color:#0f3d2e; margin-bottom:20px;}
        .add-btn {background:#4caf50; color:white; padding:10px 18px; font-size:15px; border:none; border-radius:8px; cursor:pointer; transition:0.3s;}        
        .add-btn:hover {background:#3d8b40; transform:scale(1.05);}        
        .konten-grid {margin-top:25px; display:grid; grid-template-columns:repeat(auto-fill, minmax(260px,1fr)); gap:20px;}        
        .konten-card {background:white; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1); overflow:hidden; transition:0.3s;}        
        .konten-card:hover {transform:translateY(-6px); box-shadow:0 6px 18px rgba(0,0,0,0.15);}        
        .konten-card img {width:100%; height:170px; object-fit:cover;}        
        .text {padding:15px;}        
        .text h3 {font-size:18px; font-weight:600; color:#0f3d2e; margin-bottom:5px;}        
        .text p {font-size:14px; color:#345e4e;}        
        .actions {display:flex; justify-content:space-between; padding:12px 15px; border-top:1px solid #eee;}        
        .actions button {padding:8px 14px; border:none; border-radius:6px; font-size:14px; cursor:pointer; transition:0.3s;}        
        .edit {background:#ffc107; color:white;}        
        .edit:hover {background:#e0a800;}        
        .delete {background:#e63946; color:white;}        
        .delete:hover {background:#cc2f3b;}        
    </style>
</head>
<body>
    <div class="admin-container">
        <aside class="sidebar">
            <h2 class="logo">ROHIS Admin</h2>
            <ul>
                <li><a href="dashboard_admin.php">Dashboard</a>
    <a href="kelola_user.php" style="background:#154734;">Kelola User</a>
    <a href="kelola_event.php">Kelola Event</a>
    <a href="kelola_konten.php">Kelola Konten</a>
    <a href="kelola_geleri.php">Kelola Galeri</a>
    <a href="logout.php" style="margin-top: auto; color: #ffb3b3;">Logout</a>
            </ul>
        </aside>

        <main class="content">
            <h1 class="page-title">Kelola Konten</h1>

            <button class="add-btn">+ Tambah Konten</button>

            <div class="konten-grid">
                <div class="konten-card">
                    <img src="../foto/thn islam.webp" alt="Konten 1">
                    <div class="text">
                        <h3>Tahun Baru Islam 1447 H</h3>
                        <p>Konten perayaan Tahun Baru Islam.</p>
                    </div>
                    <div class="actions">
                        <button class="edit">Edit</button>
                        <button class="delete">Hapus</button>
                    </div>
                </div>

                <div class="konten-card">
                    <img src="../foto/adha.webp" alt="Konten 2">
                    <div class="text">
                        <h3>Idul Adha 1446 H</h3>
                        <p>Konten seputar Idul Adha.</p>
                    </div>
                    <div class="actions">
                        <button class="edit">Edit</button>
                        <button class="delete">Hapus</button>
                    </div>
                </div>
<div class="konten-card">
                    <img src="../foto/adha.webp" alt="Konten 2">
                    <div class="text">
                        <h3>Idul Adha 1446 H</h3>
                        <p>Konten seputar Idul Adha.</p>
                    </div>
                    <div class="actions">
                        <button class="edit">Edit</button>
                        <button class="delete">Hapus</button>
                    </div>
            </div>
        </main>
    </div>
</body>
</html>
