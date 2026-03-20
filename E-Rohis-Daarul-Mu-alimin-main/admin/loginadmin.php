<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // ====== LOGIN FIX ======
    if ($username === "Akilah Isnaini" && $password === "aku123") {
        $_SESSION["admin"] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Admin ROHIS</title>

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
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-box{
        background: white;
        width: 380px;
        padding: 30px;
        border-radius: 18px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.12);
        animation: fadeIn .7s ease;
        text-align: center;
    }

    @keyframes fadeIn{
        from{ opacity: 0; transform: translateY(25px); }
        to{ opacity: 1; transform: translateY(0); }
    }

    .logo{
        width: 90px;
        margin-bottom: 10px;
    }

    h2{
        color: #0f3d2e;
        margin-bottom: 20px;
        font-weight: 600;
        font-size: 24px;
    }

    .input-group{
        text-align: left;
        margin-bottom: 18px;
    }

    label{
        font-size: 14px;
        color: #0f3d2e;
        font-weight: 500;
    }

    input{
        width: 100%;
        padding: 12px;
        margin-top: 6px;
        border-radius: 10px;
        border: 2px solid #cdbb97;
        outline: none;
        transition: .2s;
        font-size: 15px;
    }

    input:focus{
        border-color: #4caf50;
        box-shadow: 0 0 8px rgba(76,175,80,0.25);
    }

    .login-btn{
        width: 100%;
        padding: 12px;
        background: #4caf50;
        color: white;
        border: none;
        border-radius: 12px;
        margin-top: 10px;
        font-size: 17px;
        cursor: pointer;
        transition: .2s;
        font-weight: 600;
        box-shadow: 0 3px 10px rgba(0,128,0,0.25);
    }

    .login-btn:hover{
        background: #3d8b40;
        transform: scale(1.03);
    }

    .error{
        margin-top: 10px;
        padding: 10px;
        color: #a80000;
        background: #ffdada;
        border-radius: 10px;
        font-size: 14px;
    }

</style>
</head>
<body>

<div class="login-box">

    <img src="logo.png" class="logo">

    <h2>Login Admin RDM</h2>

    <form action="" method="POST">

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username..." required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password..." required>
        </div>

        <button class="login-btn">Masuk</button>

        <?php if (!empty($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

    </form>
</div>

</body>
</html>
