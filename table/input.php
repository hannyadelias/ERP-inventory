<!DOCTYPE html>
<html>
<head>
	<title>Input Barang</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body> 
	<div class="table">
	<a href="index.php">Lihat Barang</a>
	<br/>
	<h3>Input data baru</h3>
	<form action="proses_input.php" method="post">		
		<table>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang"></td>					
			</tr>	
			<tr>
				<td>Harga Barang</td>
				<td><input type="text" name="harga_barang"></td>					
			</tr>	
			<tr>
				<td>Jumlah Barang</td>
				<td><input type="text" name="jumlah"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>
		</table>
	</form>
	</div>
</body>
</html>