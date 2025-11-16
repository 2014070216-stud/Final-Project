<?php
include "koneksi.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM data_flight WHERE id='$id'");

header("location: show_data.php");
?>
