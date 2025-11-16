<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $kode_booking = $_POST['kode_booking'];
    $jumlah = $_POST['jumlah_penumpang'];
    $kota_asal = $_POST['kota_keberangkatan'];
    $kota_tujuan = $_POST['kota_tujuan'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    $query = "INSERT INTO data_flight (nama, kode_booking, jumlah_penumpang, kota_berangkat, kota_tujuan, tanggal, jam)
              VALUES ('$nama', '$kode_booking', '$jumlah', '$kota_asal', '$kota_tujuan', '$tanggal', '$jam')";

    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Data berhasil disimpan!'); window.location='show_data.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data');</script>";
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
            margin: 0;
            font-family: Arial;
            background-image: url('Gedung-Garuda.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(1px);
            z-index: -1;
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
            margin: 50px auto;
            background: white;
            padding: 40px;
            padding-right: 50px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.2);
        }

        .form-container h2 {
            text-align: center;
            color: #003366;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #003366;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #b7c4d6;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #003366;
            color: white;
            font-weight: bold;
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
        <h2>Form Input Data Penerbangan</h2>

        <form method="POST" action="index.php">
            
            <label>Nama Penumpang</label>
            <input type="text" name="nama" required>

            <label>Kode Booking</label>
            <input type="text" name="kode_booking" required>

            <label>Jumlah Penumpang</label>
            <input type="number" name="jumlah_penumpang" required>

            <label>Kota Keberangkatan</label>
            <input type="text" name="kota_keberangkatan" required>

            <label>Kota Tujuan</label>
            <input type="text" name="kota_tujuan" required>

            <label>Tanggal Keberangkatan</label>
            <input type="date" name="tanggal" required>

            <label>Jam Keberangkatan</label>
            <input type="time" name="jam" required>

            <button type="submit" name="submit">Simpan Data</button>

        </form>
    </div>

    <footer>
            <p>&copy; 2025 Garuda Indonesia. All rights reserved.</p>
    </footer>

</body>
</html>


