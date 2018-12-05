<?php 
include 'koneksi.php';
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$jumlah = $_POST['jumlah'];

mysqli_query($host,"INSERT INTO `tabel_barang`(`nama_barang`, `harga_barang`, `jumlah`) VALUES ('$nama_barang','$harga_barang','$jumlah')");

header("location:index.php");
?>
