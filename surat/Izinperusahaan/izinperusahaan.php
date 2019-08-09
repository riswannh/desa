<?php
session_start();
if ($_SESSION['login'] == "") {
	header("location:../../index.php");
}
	if (isset($_POST['submit'])) {
		include ('../../Assets/php/docxtemplate.class.php');
		$tglhariini = $_POST['tgl_p'];
		$nosurat = $_POST['nosurat'];
		$nama = $_POST['nama'];
		$nik = $_POST['nik'];
		$tl = $_POST['tempatlahir'];
		$tgl = $_POST['tgl_lahir'];
		$jk = $_POST['jk'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['job'];
		$bagian = $_POST['bagian'];
		$status_p = $_POST['status_p'];
		$rt = $_POST['rt'];
		$namaperusahaan = $_POST['namaperusahaan'];
		$rt = $_POST['rt'];
		$hari = $_POST['hari'];
		$perihal = $_POST['perihal'];
		$ttd = $_POST['ttd'];

		
		// gsn ttd
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

		$docx = new DOCXTemplate('izinperusahaan_blank.docx');
		$docx->set('nosurat', $nosurat);
		$docx->set('nama', $nama);
		$docx->set('nik', $nik);
		$docx->set('tl', $tl);
		$docx->set('tgl', $tglnew);
		$docx->set('jk', $jk);
		$docx->set('agama', $agama);
		$docx->set('job', $pekerjaan);
		$docx->set('bagian', $bagian);
		$docx->set('status', $status_p);
		$docx->set('rt', $rt);
		$docx->set('namaperusahaan', $namaperusahaan);
		$docx->set('hari', $hari);
		$docx->set('perihal', $perihal);
		$docx->set('tanggalrilis', $tglhariini);
		$docx->set('ttd1',$ttd1);
		$docx->set('ttd2',$ttd2);
		$docx->set('ttd3',$ttd3);
		$docx->set('ttd4',$ttd4);

		$docx->saveAs($nosurat.' IzinPerusahaan.docx');

		
		shell_exec($nosurat.' IzinPerusahaan.docx');
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
				  <h2>Surat Ket. Izin &nbsp;Perusahaan </h2>
				</div>
			</nav>
			<form class="form-horizontal" method="POST">
			<div  class="form-group" class="col-md-2 control-label">
			<label>Tanggal Pembuatan</label>
			  <input type="text" name="tgl_p">
			</div>	
			<div  class="form-group">
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
				<input type="text" name="tempatlahir">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Tanggal Lahir</label>
				<input type="date" name="tgl_lahir">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Jenis Kelamin</label>
				<select name="jk">
					<optgroup>
						<option disabled selected>Pilih...</option>	 
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</optgroup>
				</select>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Agama</label>
				<input type="text" name="agama">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Pekerjaan</label>
				<input type="text" name="job">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Bagian</label>
				<input type="text" name="bagian">
			</div>
			<div class="form-group" class="col-md-2 control-label">
				<label>Status Perkawinan</label>
				<select name="status_p">
					<optgroup>
						<option disabled selected>Pilih...</option>	 
						<option value="Menikah">Menikah</option>
						<option value="Belum Menikah">Belum menikah</option>
					</optgroup>
				</select>
			</div>
			<div class="form-group" class="col-md-2 control-label">
				<label>Nama Perusahaan</label>
				<input type="text" name="namaperusahaan" placeholder="Bekerja di...">
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
				<label class="col-md-2 control-label">Hari</label>
				<select name="hari">
				  					<optgroup>
										<option disabled selected>Hari...</option>
				  						<option value="Senin">Senin</option>
										<option value="Selasa">Selasa</option>
										<option value="Rabu">Rabu</option>
										<option value="Kamis">Kamis</option>
										<option value="Jum'at">Jum'at</option>
										<option value="Sabtu">Sabtu</option>
										<option value="Minggu">Minggu</option>
										
				  					</optgroup>
				  					</select>
			</div>
            <div class="form-group">
				<label class="col-md-2 control-label">Tanggal</label>
				<input type="text" name="tanggal">
			</div>
            <div class="form-group">
				<label class="col-md-2 control-label">Perihal</label>
				<br>
				<textarea name="perihal" placeholder="Contoh : Saya sakit"></textarea>
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
			<input type="submit" class="btn btn-info" name="submit" value="Print">
			</form>			
</div>
	</div>
	<script src="file://///192.168.88.202/desa/Assets/js/jquery.slim.min.js"></script>
	<script src="file://///192.168.88.202/desa/Assets/js/bootstrap.min.js"></script>
	<script src="file://///192.168.88.202/desa/Assets/js/popper.min.js"></script>
	<script>
	$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
	</script>
</body>
</html>