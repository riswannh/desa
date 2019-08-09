<?php
session_start();
if ($_SESSION['login'] == "") {
	header("location:../../index.php");
}
	set_time_limit(0);
	if (isset($_POST['submit'])) {
		include ('../../Assets/php/docxtemplate.class.php');
		$tgl_p = $_POST['tgl_p'];
		$nosurat = $_POST['nosurat'];
		$nama = $_POST['nama'];
		$nik = $_POST['nik'];
		$tl = $_POST['tl'];
		$tgl = $_POST['tgl_l'];
		$pekerjaan = $_POST['pekerjaan'];
		$nort = $_POST['rt'];
		$usaha = $_POST['usaha'];
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
			$ttd2 = "Bendahara Desa";
			$ttd3 = "Zakiyatus Shalehah";
			$ttd4 = " ";
		}else if($ttd == 4){
			$ttd1 = "a n Kepala Desa Sungai Gampa";
			$ttd2 = "Bendahara Desa";
			$ttd3 = "Zakiyatus Shalehah";
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
		
		$tglnew = date("d-m-Y", strtotime($tgl));

		$docx = new DOCXTemplate('izinusaha_blank.docx');
		$docx->set('nosurat', $nosurat);
		$docx->set('nama', $nama);
		$docx->set('tempat', $tl);
		$docx->set('tgl', $tglnew);
		$docx->set('job', $pekerjaan);
		$docx->set('nort', $nort);
		$docx->set('perihal', $usaha);
		$docx->set('tanggalrilis', $tgl_p);
		$docx->set('ttd1',$ttd1);
		$docx->set('ttd2',$ttd2);
		$docx->set('ttd3',$ttd3);
		$docx->set('ttd4',$ttd4);

		$docx->saveAs($nosurat.' IzinUsaha.docx');

		shell_exec($nosurat.' IzinUsaha.docx');
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
				  <h2>Surat Ket. Izin Usaha </h2>
				</div>
			</nav>
			<form class="form-horizontal" method="POST">
			<div class="form-group" class="col-md-2 control-label">
			  <label>Tanggal Pembuatan</label>
			  <input type="text" name="tgl_p">
			</div>	
			<div class="form-group">
				<label class="col-md-2 control-label">No. Surat</label>
				<input type="text" name="nosurat">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Nama</label>
				<input type="text" name="nama">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">NIK</label>
				<input type="text" name="nik">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Tempat Lahir</label>
				<input type="text" name="tl">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Tanggal Lahir</label>
				<input type="date" name="tgl_l">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Pekerjaan</label>
				<input type="text" name="pekerjaan">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Alamat</label>
			  <p>Desa Sungai Gampa <select name="rt">
				  					<optgroup>
										<option disabled selected>RT</option>
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
				  					</select> Kecamatan Rantau Badauh</p>
			</div>
			<div class="form-group">	
				<label class="col-md-2 control-label">Usaha</label>
				<input type="text" name="usaha">	
			</div>
			<div>
				<label class="col-md-2 control-label">Penanda Tangan</label>
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