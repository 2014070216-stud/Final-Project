<?php
include "koneksi.php";

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kode_booking = $_POST['kode_booking'];
    $jumlah = $_POST['jumlah_penumpang'];
    $kota_berangkat = $_POST['kota_berangkat'];
    $kota_tujuan = $_POST['kota_tujuan'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    $query = "
        UPDATE data_flight SET
            nama = '$nama',
            kode_booking = '$kode_booking',
            jumlah_penumpang = '$jumlah',
            kota_berangkat = '$kota_berangkat',
            kota_tujuan = '$kota_tujuan',
            tanggal = '$tanggal',
            jam = '$jam'
        WHERE id = '$id'
    ";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data berhasil diubah'); window.location='show_data.php';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data: " . mysqli_error($koneksi) . "');</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan'); window.location='show_data.php';</script>";
}
?>

