<?php
session_start();
if ($_SESSION['login'] == "") {
	header("location:../../index.php");
}
if (isset($_POST['submit'])) {
	include ('../../Assets/php/docxtemplate.class.php');
	$nosurat = $_POST['nosurat'];
	$barang = $_POST['barang'];
	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	$sebanyak = $_POST['sebanyak'];
	$asalbarang = $_POST['asalbarang'];
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	$tujuan = $_POST['tujuan'];
	$alamattujuan = $_POST['alamattujuan'];
	$nopolisi = $_POST['nopolisi'];
	$namasupir = $_POST['namasupir'];
	$tanggalrilis = $_POST['tanggalrilis'];
	$ttd = $_POST['ttd'];

	if ($ttd == 1){
		$ttd1 = "Kepala Desa Sungai Gampa";
		$ttd2 = " ";
		$ttd3 = "       NAWAWI";
		$ttd4 = "NIKD.63.04.07.2004";
	}else if($ttd == 2){
		$ttd1 = "a n Kepala Desa Sungai Gampa";
		$ttd2 = "Sekretariat Desa";
		$ttd3 = "Zakiyatus Shalehah";
		$ttd4 = " ";
	}else if($ttd == 3){
		$ttd1 = "a n Kepala Desa Sungai Gampa";
		$ttd2 = "Bendahara";
		$ttd3 = "Faridah";
		$ttd4 = " ";
	}
	else if($ttd == 4){
		$ttd1 = "a n Kepala Desa Sungai Gampa";
		$ttd2 = "Bendahara";
		$ttd3 = "M. Julian Nafarien";
		$ttd4 = " ";
	}
	else if($ttd == 5){
		$ttd1 = "a n Kepala Desa Sungai Gampa";
		$ttd2 = "Kasi Kesejahteraan";
		$ttd3 = "Hartati, S.Pd.I";
		$ttd4 = " ";
	}
	else if($ttd == 6){
		$ttd1 = "a n Kepala Desa Sungai Gampa";
		$ttd2 = "Kasi Pelayanan";
		$ttd3 = "Siti Fatimah";
		$ttd4 = " ";
	}
	else if($ttd == 7){
		$ttd1 = "a n Kepala Desa Sungai Gampa";
		$ttd2 = "Kaur Tata Usaha & Umum";
		$ttd3 = "Jami'aturrasyidah, S.Pd";
		$ttd4 = " ";
	}
	else if($ttd == 8){
		$ttd1 = "a n Kepala Desa Sungai Gampa";
		$ttd2 = "Kaur Perencanaan";
		$ttd3 = "Riza Layrani, S.Pd";
		$ttd4 = " ";
	}
	else if($ttd == 9){
		$ttd1 = "a n Kepala Desa Sungai Gampa";
		$ttd2 = "Kaur Keuangan";
		$ttd3 = "Sri Rahayu, S.Kom";
		$ttd4 = " ";
	}

	$docx = new DOCXTemplate('samsul_blank.docx');
	$docx->set('nosurat', $nosurat);
	$docx->set('barang', $barang);
	$docx->set('lebar', $lebar);
	$docx->set('panjang', $panjang);
	$docx->set('sebanyak', $sebanyak);
	$docx->set('asalbarang', $asalbarang);
	$docx->set('nama', $nama);
	$docx->set('umur', $umur);
	$docx->set('alamat', $alamat);
	$docx->set('tujuan', $tujuan);
	$docx->set('alamattujuan', $alamattujuan);
	$docx->set('nopolisi', $nopolisi);
	$docx->set('namasupir', $namasupir);
	$docx->set('tanggalrilis', $tanggalrilis);
	$docx->set('ttd1',$ttd1);
	$docx->set('ttd2',$ttd2);
	$docx->set('ttd3',$ttd3);
	$docx->set('ttd4',$ttd4);

	
	$docx->saveAs($nosurat.'_Samsul.docx');
	shell_exec($nosurat.'_Samsul.docx');
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../../Assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../../Assets/css/styles.css" rel="stylesheet">
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
					<ul class="list-unstyled" id="suratsubmenu">
						<li>
							<a href="../../dash.php">Buat Surat</a>
						</li>
						
						<li>
							<a href="#">Edit Surat</a>
						</li>
						<li>
							<a href="#">Keluar & Masuk Surat</a>
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
				
					<button type="button" id="sidebarCollapse" class="btn btn-info">Menu</button>
					<h2>Surat Ket. Asal Usul Barang</h2>
				</div>
			</nav>
			<form class="form-horizontal" method="POST">
			<div class="form-group" class="col-md-2 control-label">
			<label>Tanggal Pembuatan</label>
				<input type="text" name="tanggalrilis">
			</div>
			<div class="form-group"\>
				<label class="col-md-2 control-label">No. Surat</label>
				<input type="text" name="nosurat">
			</div>
			<div class="form-group" >
				<label  class="col-md-2 control-label">Nama Barang</label>
				<input type="text" name="barang">
			</div>
			<div class="form-group" >
				<label  class="col-md-2 control-label">Ukuran Barang</label>
				<br>
				<label  class="col-md-2 control-label">Panjang</label>
				<input type="text" name="panjang">
				<br>
				<label  class="col-md-2 control-label">Lebar</label>
				<input type="text" name="lebar">
				<br>
				<label  class="col-md-2 control-label">Sebanyak</label>
				<input type="text" name="sebanyak">
			</div>
			<div class="form-group" >
				<label  class="col-md-2 control-label">Asal Barang</label>
				<input type="text" name="asalbarang">
			</div>
			<br>
			<h5>Surat Keterangan ini diberikan Kepada :</h5>
			<div class="form-group" >
				<label  class="col-md-2 control-label">Nama</label>
				<input type="text" name="nama">
			</div>
			<div class="form-group" >
				<label  class="col-md-2 control-label">Umur</label>
				<input type="text" name="umur">
			</div>
			<div class="form-group" >
				<label  class="col-md-2 control-label">Alamat</label>
				<input type="text" name="alamat">
			</div>
			<div class="form-group" >
				<label  class="col-md-2 control-label">Tujuan</label>
				<input type="text" name="tujuan">
			</div>
			<div class="form-group" >
				<label  class="col-md-2 control-label">Alamat Tujuan</label>
				<input type="text" name="alamattujuan">
			</div>
			<div class="form-group" >
				<label  class="col-md-2 control-label">No. Polisi</label>
				<input type="text" name="nopolisi">
			</div>
			<div class="form-group" >
				<label  class="col-md-2 control-label">Nama Supir</label>
				<input type="text" name="namasupir">
			</div>
			<div>
				<label  class="col-md-2 control-label">Penanda Tangan</label>
				<select name="ttd">
								<optgroup>
									<option disabled selected>Pilih</option>
									<option value="1">Pambakal</option>
									<option value="2">Zakiyatus Shalehah, SE</option>
									<option value="3">Faridah</option>
									<option value="4">M. Julian Nafarien, S.Pd</option>
									<option value="5">Hartati, S.P.d.I</option>
									<option value="6">Siti Fatimah</option>
									<option value="7">Jami'aturrasyidah, S.Pd</option>
									<option value="8">Riza Layrani, S.Pd</option>
									<option value="9">Sri Rahayu, S.Kom</option>
							</optgroup>
						</select>
			</div>
			<input type="submit" class="btn btn-info" id="sidebarCollapse" value="Print" name="submit">
			</form>
</div>
	</div>
	<script src="../../Assets/js/jquery.slim.min.js"></script>
	<script src="../../Assets/js/bootstrap.min.js"></script>
	<script src="../../Assets/js/popper.min.js"></script>
	<script>
	$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
	</script>
</body>
</html>