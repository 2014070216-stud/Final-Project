<?php
include "koneksi.php";

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan di URL!");
}

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM data_flight WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan di database!");
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
            background: #e6f0ff;
            margin: 0; 
        }

        nav {
            background: #003366;
            color: white;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .form-container {
            width: 450px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.2);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 7px 0;
            border-radius: 6px;
            border: 1px solid #b7c4d6;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #003366;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #0059b3;
        }
    </style>
</head>

<body>

<nav>
    <div class="logo">Garuda Indonesia</div>
    <ul>
        <li><a href="index.php">Input Data</a></li>
        <li><a href="show_data.php">Show Data</a></li>
        <li><a href="home.php">Log Out</a></li>
    </ul>
</nav>

<div class="form-container">
    <h2>Update Data Penerbangan</h2>

    <form action="ubah.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label>Nama Penumpang</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>

        <label>Kode Booking</label>
        <input type="text" name="kode_booking" value="<?php echo $data['kode_booking']; ?>" required>

        <label>Jumlah Penumpang</label>
        <input type="number" name="jumlah_penumpang" value="<?php echo $data['jumlah_penumpang']; ?>" required>

        <label>Kota Keberangkatan</label>
        <input type="text" name="kota_berangkat" value="<?php echo $data['kota_berangkat']; ?>" required>

        <label>Kota Tujuan</label>
        <input type="text" name="kota_tujuan" value="<?php echo $data['kota_tujuan']; ?>" required>

        <label>Tanggal</label>
        <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" required>

        <label>Jam</label>
        <input type="time" name="jam" value="<?php echo $data['jam']; ?>" required>

        <button type="submit">Update Data</button>

    </form>
</div>

<footer>
            <p>&copy; 2025 Garuda Indonesia. All rights reserved.</p>
    </footer>

</body>
</html>

