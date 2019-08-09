<?php
session_start();
if ($_SESSION['login'] == "") {
	header("location:index.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="Assets/css/bootstrap.min.css" rel="stylesheet">
<link href="Assets/css/dash.css" rel="stylesheet">
<title>Aplikasi</title>
</head>
<body>
		
<!--	tukang bungkus-->
	<div class="wrapper">
<!--		sidebar-->
		<nav id="sidebar">
			<div id="sidebar-header">
			 <h3>Aplikasi</h3>
			</div>
		  <a id="home" href="#">Website</a>
			<ul class="list-unstyled components">
				
				<li>
					<a href="#suratsubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Surat</a>
					<ul class="collapse list-unstyled" id="suratsubmenu">
						<li>
							<a href="dash.php">Buat Surat</a>
						</li>
						
						<li>
							<a href="#">Edit Surat</a>
						</li>
						<li>
							<a href-="#">Keluar & Masuk Surat</a>
						</li>
					</ul>
				</li>
				<li>
			  <li>
						<a href="#datasubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data Desa</a>
						<ul class="collapse list-unstyled" id="datasubmenu">
							<li>
								<a href="#">Data Pekerjaan</a>
							</li>
							<li>
								<a href="#">Data Wilayah Administratif</a>
							</li>
							<li>
								<a href="#">Data Pendidikan dalam KK</a>
							</li>
							<li>
								<a href="#">Data Jenis Kelamin</a>
							</li>
							<li>
								<a href="#">Data Warga Negara</a>
							</li>
							<li>
								<a href="#">Data Pendidikan </a>
							</li>
						</ul>
			  </li>
				</li>
				<li>
					<a href="../../index.php" name="log_out">Keluar</a>
				</li>
			</ul>
		</nav>
<!--		disebelah-->
		<div id="content">
			<nav class="navbar navbar-expand navbar-light bg-light">
				<div class="container-fluid">
				
					<button type="button" id="sidebarCollapse" class="btn btn-info">
						<em class="fas fa-align-left"></em> <span>Menu</span></button>
					<h2>Membuat Surat</h2>
				</div>
			</nav>
			<form>
				<input class="search" type="text" placeholder="Cari Surat..." required>
				<input class="button" id ="cari" type="button" value="cari">  
			</form>
			<div id="kolom1">
				<ol>
					<li>
						<a href="surat/sktm/sktm.php">Surat Keterangan Tidak Mampu</a>
					</li>
					<li>
						<a href="surat/samsul/samsul.php">Surat Keterangan Asal Usul Barang</a>
					</li>
					<li>
						<a href="surat/izinusaha/izinusaha.php">Surat Keterangan Izin Usaha</a>
					</li>
					<li>
						<a href="#">Surat Keterangan Nikah</a>
					</li>
					<li>
						<a href="surat/skck/skck.php">Surat Keterangan Catatan Kepolisian</a>
					</li>
					<li>
						<a href="surat/skkb/dead.php">Surat Keterangan Meninggal Dunia</a>
					</li>
					<li>
						<a href="#">Surat Keterangan Pindahan</a>
					</li>
					<li>
						<a href="surat/domisili/domisili.php">Surat Domisili</a>
					</li>
					<li>
						<a href="surat/Caten/caten.php"> Surat Calon Pengantin Nikah</a>
					</li>
					<li>
						<a href="surat/PelimpahanNikah/nikah.php">Surat Pelimpahan Nikah</a>
					</li>
					</ol>
					</div>
					<!--<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
				</ol>
				</div>
				<div id="kolom1">
					<ol start="21">
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					</ol>
				</div>
			<div id="kolom1">
				<ol start="41">
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
				</ol>
			</div>
			<div id="kolom1">
				<ol start="61">
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
				</ol>
			</div>
			<div id="kolom1">
				<ol start="81">
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
				</ol>
			</div>
			<div id="kolom1">
				<ol start="101">
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
				</ol>
			</div>
			<div id="kolom1">
				<ol start="121">
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
				</ol>
			</div>
			<div id="kolom1">
				<ol start="141">
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>
					<li>
						<a href="#">Akta</a>
					</li>-->
				</ol>
			</div>
		</div>
		
	</div>
	
	<script src="Assets/js/jquery.slim.min.js"></script>
	<script src="Assets/js/bootstrap.min.js"></script>
	<script src="Assets/js/popper.min.js"></script>
	
	<script>
	$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
	</script>
</body>
</html>