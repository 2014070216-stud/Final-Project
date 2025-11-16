<?php
include 'koneksi.php'; // pakai koneksi yang sudah kamu buat

// Aktifkan error reporting agar error tampil di layar
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Jika tombol register ditekan
if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_plain = $_POST['password'];
    $alamat = $_POST['alamat'];

    // Validasi input
    if (empty($nama) || empty($username) || empty($email) || empty($password_plain) || empty($alamat)) {
        echo "<script>alert('Semua field harus diisi!'); window.history.back();</script>";
        exit;
    }

    // Enkripsi password
    $password = password_hash($password_plain, PASSWORD_DEFAULT);

    // Simpan data ke database
    $query = "INSERT INTO register (nama, username, email, password, alamat) 
              VALUES ('$nama', '$username', '$email', '$password', '$alamat')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='sign_in.php';</script>";
    } else {
        echo "<script>alert('Gagal mendaftar: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garuda Indonesia - Maskapai Penerbangan Nasional</title>
    <link rel="stylesheet" href="style.css?">
    <style>
        body {
            font-family: Arial, sans-serif;
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
            gap: 0px;
            margin: 0;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        /* FORM STYLE */
        .form-container {
            width: 380px;
            margin: 80px auto;
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
            border: 1px solid #b8c4d2;
            border-radius: 8px;
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
        <h2>Daftar Akun</h2>
        <form action="" method="POST">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <label>Alamat:</label>
            <input type="text" name="alamat" required>

            <button type="submit" name="register">Daftar</button>
        </form>
        <div class="link">
            <p>Sudah punya akun? <a href="sign_in.php">Login di sini</a></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Garuda Indonesia. All rights reserved.</p>
    </footer>
</body>
</html>
