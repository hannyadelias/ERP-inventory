<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$jumlah = $_POST['jumlah'];
mysqli_query($host,"UPDATE tabel_barang SET nama_barang='$nama_barang', harga_barang='$harga_barang', jumlah='$jumlah' WHERE id='$id'");

header("location:index.php");
?>
