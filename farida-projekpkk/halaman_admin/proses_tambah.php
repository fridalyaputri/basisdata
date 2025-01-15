<?php
include("../koneksi.php");
$Nama = $_POST["nama"];
$Deskripsi = $_POST["deskripsi"];
$Harga = $_POST["harga"];

$namafoto = $_FILES["foto"]["name"];
$lokasi_tmp = $_FILES["foto"]["tmp_name"];
$Nama_baru = time(). $namafoto;


$query = mysqli_query($koneksi, "insert into produk values ( null, '$Nama', '$Harga', '$Deskripsi', '$Nama_baru')");

move_uploaded_file($lokasi_tmp, "foto/$Nama_baru");


?>