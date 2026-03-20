<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(180deg, #d3efda 0%, #f2d8b5 100%);
  min-height: 100vh;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Container utama */
.form-container {
  background-color: rgba(255, 255, 255, 0.85);
  padding: 45px 50px;
  border-radius: 22px;
  width: 480px; /* dilebarkan tapi masih aman */
  box-shadow: 0 0 25px rgba(97, 122, 104, 0.25);
  backdrop-filter: blur(6px);
}

/* Logo */
.logo-form {
  display: block;
  margin: 0 auto 15px;
  width: 110px;
  height: auto;
  filter: drop-shadow(0 0 8px rgba(75,128,101,0.35));
  transition: transform 0.3s;
}

.logo-form:hover {
  transform: scale(1.06);
}

/* Judul */
.form-container h1 {
  font-family: 'Irish Grover', cursive;
  color: #2e5e48;
  text-align: center;
  font-size: 32px;
  margin-bottom: 30px;
  letter-spacing: 1px;
}

/* Label */
.form-container label {
  display: block;
  font-size: 14px;
  color: #2e5e48;
  margin-bottom: 6px;
  font-weight: 500;
}

/* Input & Select */
.form-container input[type="text"],
.form-container select {
  width: 100%;
  padding: 11px 13px;
  border: 2px solid #cdbb97;
  border-radius: 9px;
  font-size: 14px;
  margin-bottom: 20px;
  transition: border-color 0.3s, box-shadow 0.3s;
  background-color: #fff;
}

.form-container input:focus,
.form-container select:focus {
  outline: none;
  border-color: #4b8065;
  box-shadow: 0 0 8px rgba(75, 128, 101, 0.3);
}

/* Tombol */
.button-group {
  display: flex;
  gap: 12px;
  margin-top: 10px;
}

.form-container input[type="submit"],
.form-container input[type="reset"] {
  flex: 1;
  padding: 11px;
  border: none;
  border-radius: 9px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s, transform 0.2s;
}

/* Submit */
.form-container input[type="submit"] {
  background-color: #4b8065;
  color: #fff;
}

.form-container input[type="submit"]:hover {
  background-color: #5f967b;
  transform: scale(1.03);
}

/* Reset */
.form-container input[type="reset"] {
  background-color: #cdbb97;
  color: #2e5e48;
}

.form-container input[type="reset"]:hover {
  background-color: #d9c9a5;
  transform: scale(1.03);
}
.back-home {
      display: block;
      margin-top: 15px;
      text-decoration: none;
      color: #4b8065;
      font-weight: 600;
      transition: color 0.3s;
      text-align: center;
    }
    </style>
</head>
<body>
  <form action="simpan.php" method="post" name="Oprec">
  <div class="form-container">
    <img src="../foto/logo.png" alt="Logo Rohis" class="logo-form">
    <h1>Pendaftaran Peserta Baru</h1>

    

      <label>Nama Lengkap : </label>
      <input type="text" name="nama_lengkap" required>

      <label>Kelas : </label>
      <select name="kelas" required>
        <option value="">Pilih Kelas</option>
        <option value="X RPL 1">X RPL 1</option>
        <option value="X RPL 2">X RPL 2</option>
        <option value="X DKV 1">X DKV 1</option>
        <option value="X DKV 2">X DKV 2</option>
        <option value="X DKV 3">X DKV 3</option>
        <option value="X DKV 4">X DKV 4</option>
        <option value="X SIJA 1">X SIJA 1</option>
        <option value="X SIJA 2">X SIJA 2</option>
        <option value="X TKJ 1">X TKJ 1</option>
        <option value="X TKJ 2">X TKJ 2</option>
        <option value="X DPIB 1">X DPIB 1</option>
        <option value="X DPIB 2">X DPIB 2</option>
        <option value="X TKP 1">X TKP 1</option>
        <option value="X TKP 2">X TKP 2</option>
        <option value="X TOI 1">X TOI 1</option>
        <option value="X TOI 2">X TOI 2</option>
        <option value="X TFLM 1">X TFLM 1</option>
        <option value="X TFLM 2">X TFLM 2</option>
        <option value="X TKR 1">X TKR 1</option>
        <option value="X TKR 2">X TKR 2</option>
        <option value="X TKR 3">X TKR 3</option>
        <option value="X TP 1">X TP 1</option>
        <option value="X TP 2">X TP 2</option>
      </select>

      <label>Alasan Ingin Masuk Rohis : </label>
      <input type="text" name="alasan_masuk" required>

      <label>No. WhatsApp: </label>
     <input type="text" 
       name="no_wa" 
       pattern="[0-9]{11,13}" 
       minlength="11"
       maxlength="13"
       inputmode="numeric"
       required
       placeholder="Contoh: 081234567890">



      <div class="button-group">
        <input type="submit" value="Daftar">
        <input type="reset" value="Batal">

        
      </div>
<a href="../home.php" class="back-home">← Kembali ke Beranda</a>
      

    </form>
  </div>
  
</body>
</html>