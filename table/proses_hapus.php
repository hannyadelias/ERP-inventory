<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($host,"DELETE FROM tabel_barang WHERE id='$id'")or die(mysqli_error($host));
header("location:index.php");
?>
