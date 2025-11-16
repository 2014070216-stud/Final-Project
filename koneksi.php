<?php

$koneksi = mysqli_connect("localhost","root","mysql","airline");
// echo "koneksi berhasil";
if(!$koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>

