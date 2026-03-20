<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelola Event</title>
    <link rel="stylesheet" href="admin.css" />
</head>
<style>
    /* ==========================
   ADMIN PANEL GLOBAL STYLE
   Matching style Kelola User + Smooth + Modern
   ========================== */

/* Layout Container */
.admin-container {
  display: flex;
  min-height: 100vh;
  background: #f5f8f6;
  font-family: "Poppins", sans-serif;
  transition: 0.3s ease;
}

/* Sidebar */
.sidebar {
  width: 250px;
  background: #0f3d2e;
  color: white;
  padding: 25px 20px;
  box-shadow: 3px 0 15px rgba(0,0,0,0.15);
  position: sticky;
  top: 0;
  height: 100vh;
  border-radius: 0 15px 15px 0;
  animation: slideLeft 0.6s ease;
}

@keyframes slideLeft {
  from { transform: translateX(-50px); opacity: 0; }
  to { transform: translateX(0); opacity: 1; }
}

.logo {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 30px;
  letter-spacing: 1px;
}

.menu-item {
  display: block;
  padding: 12px 15px;
  margin: 10px 0;
  color: #dfffee;
  text-decoration: none;
  border-radius: 10px;
  transition: 0.3s ease;
  font-weight: 500;
}

.menu-item:hover {
  background: #174f3d;
  padding-left: 20px;
}

.menu-item.active {
  background: #4caf50;
  color: white;
  box-shadow: 0 4px 12px rgba(0, 128, 0, 0.3);
}

.logout {
  margin-top: 50px;
  background: #d9534f;
}

.logout:hover {
  background: #b84441;
}

/* Main Content */
.content {
  flex: 1;
  padding: 40px 50px;
  animation: fadeIn 0.7s ease;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.page-title {
  font-size: 28px;
  font-weight: 700;
  color: #104232;
}

.page-desc {
  margin-top: -5px;
  margin-bottom: 25px;
  color: #4b6b5a;
}

/* Buttons */
.btn-primary {
  background: #4caf50;
  color: white;
  border: none;
  padding: 10px 22px;
  border-radius: 10px;
  cursor: pointer;
  font-weight: 600;
  transition: 0.3s ease;
  box-shadow: 0 3px 12px rgba(76,175,80,0.3);
}

.btn-primary:hover {
  background: #3d8b40;
  transform: scale(1.05);
}

.btn-edit {
  background: #2e7dff;
  color: white;
  padding: 6px 14px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  transition: 0.3s;
}

.btn-edit:hover {
  background: #1a5ed1;
}

.btn-delete {
  background: #d9534f;
  color: white;
  padding: 6px 14px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  transition: 0.3s;
}

.btn-delete:hover {
  background: #b84441;
}

.btn-edit.small,
.btn-delete.small {
  padding: 6px 10px;
  font-size: 13px;
}

/* Table */
.data-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  background: white;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.data-table thead {
  background: #0f3d2e;
  color: white;
}

.data-table th,
.data-table td {
  padding: 14px 18px;
  font-size: 15px;
}

.data-table tbody tr:nth-child(even) {
  background: #f1f7f3;
}

.data-table tbody tr:hover {
  background: #e2f3e8;
}

/* GRID EVENT */
.event-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
  gap: 20px;
  margin-top: 25px;
}

.event-card {
  background: white;
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 4px 14px rgba(0,0,0,0.1);
  transition: 0.3s ease;
  border-left: 6px solid #4caf50;
}

.event-card:hover {
  transform: scale(1.03);
  box-shadow: 0 6px 20px rgba(0,0,0,0.16);
}

.event-title {
  font-size: 20px;
  font-weight: 600;
  color: #0e3e2f;
}

.event-date {
  margin: 5px 0;
  color: #357a5a;
  font-weight: 600;
}

.event-desc {
  font-size: 14px;
  color: #4b6b5a;
  margin-bottom: 15px;
}

.event-actions {
  display: flex;
  gap: 10px;
}
</style>
<body>
    <div class="admin-container smooth">
        <aside class="sidebar">
            <h2 class="logo">ROHIS ADMIN</h2>
            <a href="dashboard.php" class="menu-item">Dashboard</a>
            <a href="kelola_user.php" class="menu-item">Kelola User</a>
            <a href="kelola_event.php" class="menu-item active">Kelola Event</a>
            <a href="kelola_konten.php" class="menu-item">Kelola Konten</a>
            <a href="logout.php" class="menu-item logout">Logout</a>
        </aside>

        <main class="content fade-in">
            <h1 class="page-title">Kelola Event</h1>
            <p class="page-desc">Atur jadwal event, pemira, dan kegiatan besar ROHIS.</p>

            <div class="top-actions">
                <button class="btn-primary" id="btnTambahEvent">+ Tambah Event</button>
            </div>

            <div class="event-grid">
                <div class="event-card">
                    <h3 class="event-title">Pemilihan Ketua ROHIS</h3>
                    <p class="event-date">📅 12 Maret 2025</p>
                    <p class="event-desc">Pemira untuk memilih ketua ROHIS periode baru.</p>
                    <div class="event-actions">
                        <button class="btn-edit small">Edit</button>
                        <button class="btn-delete small">Hapus</button>
                    </div>
                </div>

                <div class="event-card">
                    <h3 class="event-title">Kajian Akbar Ramadhan</h3>
                    <p class="event-date">📅 5 April 2025</p>
                    <p class="event-desc">Kajian rutin dalam rangka menyambut Ramadhan.</p>
                    <div class="event-actions">
                        <button class="btn-edit small">Edit</button>
                        <button class="btn-delete small">Hapus</button>
                    </div>

                    
                </div>
                <div class="event-card">
                    <h3 class="event-title">Kajian Akbar Ramadhan</h3>
                    <p class="event-date">📅 5 April 2025</p>
                    <p class="event-desc">Kajian rutin dalam rangka menyambut Ramadhan.</p>
                    <div class="event-actions">
                        <button class="btn-edit small">Edit</button>
                        <button class="btn-delete small">Hapus</button>
                    </div>
            </div>
        </main>
    </div>

</body>
</html>