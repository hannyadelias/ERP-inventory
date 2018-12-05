<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body> 
	<a href="input.php">+ Tambah Data Baru</a>
	<h3>Data Barang</h3>
	<div class="table"> <!-- Login -->
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama Barang</th>
			<th>Harga Barang</th>
			<th>Jumlah Barang</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($host,"SELECT * FROM tabel_barang")or die(mysqli_error($host));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td><?php echo $data['harga_barang']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="proses_hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
		</div>
	</table>
</body>
</html>
