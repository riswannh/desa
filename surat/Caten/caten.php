<?php
session_start();
if ($_SESSION['login'] == "") {
	header("location:../../index.php");
}
if (isset($_POST['submit'])) {
	include ('../../Assets/php/docxtemplate.class.php');
	$tgl_r = $_POST['tgl_r'];
	$nosurat = $_POST['nosurat'];
	$nama = $_POST['nama'];
	$tempat = $_POST['tempat'];
	$tgl_l = $_POST['tgl_l'];
	$wn = $_POST['wn'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];
	$nort = $_POST['rt'];


	//dengan seorang laki-laki
	$nama2 = $_POST['nama2'];
	$tempat2 = $_POST['tempat2'];
	$tgl_l2 = $_POST['tgl_l2'];
	$wn2 = $_POST['wn2'];
	$agama2 = $_POST['agama2'];
	$pekerjaan2 = $_POST['pekerjaan2'];
	$alamat2 = $_POST['pekerjaan2'];
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
	$tglnew = date("d-m-Y", strtotime($tgl_l));
	$tglnew2 = date("d-m-Y", strtotime($tgl_l2));

	$docx = new DOCXTemplate('caten_blank.docx');
	
	$docx->set('tanggalrilis', $tgl_r);
	$docx->set('nosurat', $nosurat);
	$docx->set('nama', $nama);
	$docx->set('tempat', $tempat);
	$docx->set('tanggallahir', $tglnew);
	$docx->set('wn', $wn);
	$docx->set('agama', $agama);
	$docx->set('job', $pekerjaan);
	$docx->set('nort', $nort);
	$docx->set('nama2', $nama2);
	$docx->set('tempat2', $tempat2);
	$docx->set('tanggallahir2', $tglnew2);
	$docx->set('wn2', $wn2);
	$docx->set('agama2', $agama2);
	$docx->set('job2', $pekerjaan2);
	$docx->set('alamat2', $alamat2);
	$docx->set('ttd1',$ttd1);
	$docx->set('ttd2',$ttd2);
	$docx->set('ttd3',$ttd3);
	$docx->set('ttd4',$ttd4);

	$docx->saveAs($nosurat.'_Imunisasi_caten.docx');
	shell_exec($nosurat.'_Imunisasi_caten.docx');

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
				
				  <button type="button" id="sidebarCollapse" class="btn btn-info">Menu</button>
				  <h2>Surat Ket. Imunisasi Caten </h2>
				</div>
			</nav>
			<form class="form-horizontal" method="POST">
			<div class="form-group" class="col-md-2 control-label">
				<label>Tanggal Pembuatan</label>
				<input type="text" name="tgl_r">
			</div>
			<div class="form-group">
				<label  class="col-md-2 control-label">No. Surat</label>
				<input type="text" name="nosurat">
			</div>
			<br>
			<h5>Dengan ini kami mohon kepada Bapak/Ibu agar bisa diberikan imunisasi (Caten) kepada yang bersangkutan sebagai berikut:</h5>
			<div class="form-group">
				<label  class="col-md-2 control-label">Nama</label>
				<input type="text" name="nama">
			</div>
			<div class="form-group">
				<label  class="col-md-2 control-label">Tempat Lahir</label>
				<input type="text" name="tempat">
			</div>
			<div class="form-group">
				<label  class="col-md-2 control-label">Tanggal Lahir</label>
				<input type="date" name="tgl_l">
			</div>
			<div class="form-group" class="col-md-2 control-label">
				<label>Warganegara</label>
				<input type="text" name="wn">
			</div>
			<div class="form-group">
				<label  class="col-md-2 control-label">Agama</label>
				<input type="text" name="agama">
			</div>
			<div class="form-group">
				<label  class="col-md-2 control-label">Pekerjaan</label>
				<input type="text" name="pekerjaan">
			</div>
			<div class="form-group">
				<p>
				Desa Sungai Gampa 
				<select name="rt">
					<optgroup>
						<option value="RT" disable selected>RT</option>
						<option value="RT. 1">RT. 1</option>
						<option value="RT. 2">RT. 2</option>
						<option value="RT. 3">RT. 3</option>
						<option value="RT. 4">RT. 4</option>
						<option value="RT. 5">RT. 5</option>
						<option value="RT. 6">RT. 6</option>
						<option value="RT. 7">RT. 7</option>
						<option value="RT. 8">RT. 8</option>
						<option value="RT. 9">RT. 9</option>
					</optgroup>
				</select>
				Kec.Rantau Badauh Kab.Barito Kuala
				</p>
			</div>
			
			<br>
			
			<h5>Dengan seorang Laki-laki</h5>
			<div class="form-group">
				<label  class="col-md-2 control-label">Nama</label>
				<input type="text" name="nama2">
			</div>
			<div class="ttl2">
				<label  class="col-md-2 control-label">Tempat Lahir</label>
				<input type="text" name="tempat2">
			</div>
			<div class="form-group">
				<label  class="col-md-2 control-label">Tanggal Lahir</label>
				<input type="date" name="tgl_l2">
			</div>
			<div class="form-group" class="col-md-2 control-label">
				<label>Warganegara</label>
				<input type="text" name="wn2">
			</div>
			<div class="form-group">
				<label  class="col-md-2 control-label">Agama</label>
				<input type="text" name="agama2">
			</div>
			<div class="form-group">
				<label  class="col-md-2 control-label">Pekerjaan</label>
				<input type="text" name="pekerjaan2">
			</div>
			<div class="form-group">
				<label  class="col-md-2 control-label">Alamat</label>
				<textarea name="alamat2"></textarea>
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
			<button type="submit" class="btn btn-info" name="submit">Print</button>	
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