<head>
    <title>Inventory Barang</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

</head>
<body>
<div id="art-page-background-middle-texture">
	<div id="art-main">
		<div class="cleared reset-box"></div>
		<div class="art-header">
			<div class="art-header-position">
				<div class="art-header-wrapper">
					<div class="cleared reset-box"></div>
					<div class="art-header-inner">
					 <div class="art-headerobject"></div>
					
					<div class="art-logo">
									 <h1 class="art-logo-name">INVENTORY BARANG PT. AHA SHOP</h1>
													 <h2 class="art-logo-text">Belanja Cerdas Bersama AHA</h2>
									</div>
									
					</div>
				</div>
			</div>
		  
		</div>
	   <div class="cleared reset-box"></div>
		<div class="art-bar art-nav">
		<div class="art-nav-outer">
		<div class="art-nav-wrapper">
		<div class="art-nav-inner">
		<div class="art-nav-center">
			<ul class="art-hmenu">
				<li>
					<a href="index.php?index=home">Home</a>
				</li>	
				<li>
					<a href="#">Pembelian</a>
					<ul>
						<li><a href="barangpembelian.php?barangpembelian=databarangpembelian">Data Barang Pembelian</a></li>
						<li><a href="datapembelian.php?datapembelian=datapembelian">Data Pembelian</a><li>
						<li><a href="tambahdatapembelian.php?tambahdata=datapembelian">Tambah Data</a><li>
					
						
					</ul>
				</li>

				<li>
					<a href="#">Penjualan</a>
					<ul>
						<li><a href="barangpenjualan.php?barangpenjualan=datapenjualan">Data Penjualan</a></li>
						<li><a href="+datapenjualan.php?datapenjualan=tambahdata">Tambah Data</a></li>
					</ul>
				</li>
				
				<li><a href="admin.php?admin=stokbarang">Stok Barang</a></li>
				
				<li>
					<a href="#">Laporan</a>
					<ul>
						<li><a href="laporanpenjualan.php?laporandatapenjualan=laporanpenjualan">Laporan Data Penjualan</a></li>
						<li><a href="laporanpembelian.php?laporandatapembelian=laporanpembelian">Laporan Data Pembelian</a></li>
						<li><a href="laporanprofit.php?laporandataprofit=laporanpkeuntungan">Laporan Data Profit</a></li>
					</ul>
				</li>
				
				<li>
					
					
					<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {

	header('location:./../login.php');
	exit();
}
?>

<a href="./../logout.php">Logout</a>
				</li>	
			</ul>



			</div>
		</div>
		</div>
		</div>
		</div>
	
			<div class="cleared reset-box"></div>
			<div class="art-box art-sheet">
					<div class="art-box-body art-sheet-body">
					<div class="main_content">				


<!DOCTYPE html>
<html>
<head>
	<title>Input Barang</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body> 
	<div class="table">
	<a href="index-table.php">Lihat Barang</a>
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

</div>			
				<div class="cleared"></div>
						<div class="art-footer">
							<div class="art-footer-body">
							

										<div class="art-footer-text">
											<p>Copyright &copy;  2018 Inventory Barang PT. AHA. All rights reserved.</p>
																		</div>
								<div class="cleared"></div>
								
								
							</div>
						</div>
						<div class="cleared"></div>
					</div>
			</div>
			<div class="cleared"></div>
			<p class="art-page-footer">&nbsp;</p>
			<div class="cleared"></div>
	</div>
</div>
</body>
</html>
