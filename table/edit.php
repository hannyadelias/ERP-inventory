<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<a href="index.php">Lihat Barang</a>
	
	<br/>
	<h3>Edit data barang</h3>
	
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($host,"SELECT * FROM tabel_barang WHERE id='$id'")or die(mysqli_error($host));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
		?>
		<form action="proses_edit.php" method="post">		
			<table>
				<tr>
					<td>Nama Barang</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						<input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">
					</td>					
				</tr>	
				<tr>
					<td>Harga Barang</td>
					<td><input type="number_format" name="harga_barang" value="<?php echo $data['harga_barang'] ?>"></td>					
				</tr>
<tr>
					<td>Jumlah Barang</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						<input type="number_format" name="jumlah" value="<?php echo $data['jumlah'] ?>">
					</td>					
				</tr>					
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>					
				</tr>				
			</table>
		</form>
		<?php } ?>
	</body>
	</html>
