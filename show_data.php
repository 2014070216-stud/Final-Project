<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Flight - Garuda Indonesia</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial;
            margin: 0;
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
            backdrop-filter: blur(2px);
            z-index: -1;
        }


        /* NAVBAR */
        nav {
            background-color: #003366;
            padding: 5px 20px;
            color: white;
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
            gap: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        h2 {
            text-align: center;
            margin-top: 25px;
            color: #003366;
            background-color: rgba(255, 255, 255, 1);
            margin-left: 25%;
            margin-right: 25%;
            padding: 10px;
        }

        table {
            width: 90%;
            margin: 25px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        table th {
            background: #003366;
            color: white;
            padding: 12px;
        }

        table td {
            padding: 10px;
            border: 1px solid #cfd6e0;
            text-align: center;
        }

        a.btn {
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 13px;
            text-decoration: none;
            color: white;
        }
        .update {
            background: #0b5ea5;
        }
        .delete {
            background: #c82333;
        }

        .add-button {
            text-align: center;
            margin: 20px;
        }
        .add-button a {
            padding: 10px 18px;
            background: #0b5ea5;
            color: white;
            border-radius: 8px;
            text-decoration: none;
        }
        .add-button a:hover {
            background: #084c85;
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

    <h2>Data Penerbangan Customer</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kode Booking</th>
            <th>Jumlah Penumpang</th>
            <th>Kota Keberangkatan</th>
            <th>Kota Tujuan</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Opsi</th>
        </tr>

        <?php
        $no = 1;
        $flight = mysqli_query($koneksi, "SELECT * FROM data_flight");

        while ($d = mysqli_fetch_array($flight)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['kode_booking']; ?></td>
            <td><?= $d['jumlah_penumpang']; ?></td>
            <td><?= $d['kota_berangkat']; ?></td>
            <td><?= $d['kota_tujuan']; ?></td>
            <td><?= $d['tanggal']; ?></td>
            <td><?= $d['jam']; ?></td>

            <td>
                <a href="update.php?id=<?= $d['id']; ?>" class="btn update">UPDATE</a>
                <a href="delete.php?id=<?= $d['id']; ?>" class="btn delete" onclick="return confirm('Hapus data ini?');">DELETE</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <div class="add-button">
        <a href="index.php">+ Input Data Baru</a>
    </div>

    <footer>
            <p>&copy; 2025 Garuda Indonesia. All rights reserved.</p>
    </footer>

</body>
</html>
