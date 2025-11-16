<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include "koneksi.php";


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil user berdasarkan username
    $query = "SELECT * FROM register WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    // Jika user ditemukan & password benar
    if ($user && password_verify($password, $user['password'])) {

        // Simpan session
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama'] = $user['nama'];

        // ALERT + REDIRECT
        echo "<script>
                alert('Login berhasil! Selamat datang, ".$user['nama']."');
                window.location.href='index.php';
              </script>";
        exit;

    } else {
        echo "<script>
                alert('Username atau password salah!');
                window.location.href='sign_in.php';
              </script>";
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garuda Indonesia - Maskapai Penerbangan Nasional</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial;
            margin: 0;
            background-image: url('bandara.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* NAVBAR */
        nav {
            background-color: #003366;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .logo {
            font-size: 24px;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 3px;
           
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        /* FORM BOX */
        .form-container {
            width: 380px;
            margin: 90px auto;
            background: white;
            padding: 50px;
            padding-right: 70px;
            border-radius: 12px;
            border: 1px solid #d0d7e2;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #003366;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #b8c4d2;
            font-size: 15px;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #0b5ea5;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 5px;
            font-size: 16px;
        }
        button:hover {
            background: #084c85;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">Garuda Indonesia</div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="sign_in.php">Sign In</a></li>
        </ul>
    </nav>
    
    <div class="form-container">
        <h2>Login Akun</h2>
        <form action="sign_in.php" method="POST">
            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Masuk</button>
        </form>
        <div class="link">
            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Garuda Indonesia. All rights reserved.</p>
    </footer>
</body>
</html> 

