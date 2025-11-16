<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Garuda Indonesia - Maskapai Penerbangan Nasional</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<nav>
		<div class="logo">Garuda Indonesia</div>
		<ul>
			<li><a href="input.php">Input</a></li>
            <li><a href="index.php">Show Data</a></li>
		</ul>
	</nav>

	<div class="input-container" >
        <h2>Form Data Penumpang</h2>
        <form method="post" action="#">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama_lengkap" placeholder="Nama lengkap"></td>
                </tr>

                <tr>
                    <td>Kode Booking</td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>

                <tr>
                    <td>Jumlah Penumpang</td>
                    <td><input type="email" name="email" placeholder="Email"></td>
                </tr>

                <tr>
                    <td>Kota Keberangkatan</td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>

                <tr>
                    <td>Kota Tujuan</td>
                    <td><input type="text" name="alamat" placeholder="Alamat"></td>
                </tr>

                <tr>
                    <td>Tanggal</td>
                    <td><input type="text" name="alamat" placeholder="Alamat"></td>
                </tr>

                <tr>
                    <td>Jam</td>
                    <td><input type="text" name="alamat" placeholder="Alamat"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="register" value="simpan"></td>
                </tr>
            </table>
        </form>

    </div>

	<footer>
		<p>&copy; 2025 Garuda Indonesia. All rights reserved.</p>
	</footer>

</body>
</html>

