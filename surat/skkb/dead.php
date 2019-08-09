<?php
session_start();
if ($_SESSION['login'] == "") {
	header("location:../../index.php");
} 
	if (isset($_POST['submit'])) {
		include ('../../Assets/php/docxtemplate.class.php');
		$tgl_surat = $_POST['tglsurat'];
		$nosurat = $_POST['nosurat'];
		$rt = $_POST['rt'];
		$tanggal = $_POST['tanggal'];

		// dengan ini Kepala Desa Sungai Gampa Kecamatan Rantau Badauh Kabupaten Barito Kuala, menerangkan bahwa :
		$nama = $_POST['nama'];
		$nik = $_POST['nik'];
		$jk = $_POST['jk'];
		$tl = $_POST['tl'];
		$tgl = $_POST['tgl_l'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$tglnew = date("d-m-Y", strtotime($tgl));

		//Telah meninggal dunia pada :
		$tgl_m = $_POST['tgl_m'];
		$pukul = $_POST['pukul'];
		$bertempat = $_POST['bertempat'];
		$dimakamkan = $_POST['dimakamkan'];

		//Surat keterangan ini dibuat berdasarkan keterangan pelapor :
		$nama_p = $_POST['nama_p'];
		$nik_p = $_POST['nik_p'];
		$jk_p = $_POST['jk_p'];
		$tl_p = $_POST['tl_p'];
		$tgl_p = $_POST['tgl_p'];
		$agama_p = $_POST['agama_p'];
		$pekerjaan_p = $_POST['pekerjaan_p'];
		$alamat_p = $_POST['alamat_p'];
		$ttd = $_POST['ttd'];
		$tgl_rilis = $_POST['tglsurat']; 
		$tglnew_p = date("d-m-Y", strtotime($tgl_p));
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

		$docx = new DOCXTemplate('skkb_blank.docx');

		$docx->set('nosurat', $nosurat);
		$docx->set('rt', $rt);
		$docx->set('tanggal', $tanggal);
		$docx->set('nama', $nama);
		$docx->set('nik', $nik);
		$docx->set('jk', $jk);
		$docx->set('tl', $tl);
		$docx->set('tgl', $tglnew);
		$docx->set('agama', $agama);
		$docx->set('pekerjaan', $pekerjaan);
		$docx->set('alamat', $alamat);
		$docx->set('tgl_m', $tgl_m);
		$docx->set('pukul', $pukul);
		$docx->set('bertempat', $bertempat);
		$docx->set('dimakamkan', $dimakamkan);
		$docx->set('nama_p', $nama_p);
		$docx->set('nik_p', $nik_p);
		$docx->set('jk_p', $jk_p);
		$docx->set('tl_p', $tl_p);
		$docx->set('tgl_p', $tglnew_p);
		$docx->set('agama_p', $agama_p);
		$docx->set('pekerjaan_p', $pekerjaan_p);
		$docx->set('alamat_p', $alamat_p);
		$docx->set('tanggalrilis', $tgl_surat);
		$docx->set('ttd1',$ttd1);
		$docx->set('ttd2',$ttd2);
		$docx->set('ttd3',$ttd3);
		$docx->set('ttd4',$ttd4);

		$docx->saveAs($nama.$nosurat.'_SKKB.docx');
		shell_exec($nama.$nosurat.'_SKKB.docx');

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
					<ul class="collapse list-unstyled" id="suratsubmenu">
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
					<h2>Surat Ket. Meninggal Dunia</h2>
				</div>
			</nav>
			<form class="form-horizontal" method="POST">
			<div class="form-group" class="col-md-2 control-label">
				<label>Tanggal Pembuatan</label>
				<input type="text" name="tglsurat">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">No. Surat</label>
				<input type="text" name="nosurat">
			</div>
			<div class="form-group">
			<label class="col-md-2 control-label">Ketua RT No.</label>
			  <select name="rt">
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
				  					</select>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Tanggal</label>
				<input type="text" name="tanggal">
			</div>
			<br>
		  <h5>dengan ini Kepala Desa Sungai Gampa Kecamatan Rantau Badauh Kabupaten Barito Kuala, menerangkan bahwa :</h5>
		  <div class="form-group">
				<label class="col-md-2 control-label">Nama</label>
				<input type="text" name="nama">
			</div>
		<div class="form-group">
  			<label class="col-md-2 control-label">No. KTP</label>
				<input type="text" name="nik">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Jenis Kelamin</label>
                <select name="jk">
					<optgroup label="Pilih Jenis Kelamin">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</optgroup>
				</select>
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
				<label class="col-md-2 control-label">Agama</label>
				<input type="text" name="agama">
			</div>
			<div class="form-group" class="col-md-2 control-label">
				<label>Pekerjaan</label>
				<input type="text" name="pekerjaan">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Alamat</label>
				<input type="text" name="alamat">
			</div>
			<br>
			<h5>Telah meninggal dunia pada :</h5>
			<div class="form-group">
				<label class="col-md-2 control-label">Hari, Tanggal</label>
				<input type="text" name="tgl_m">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Pukul</label>
				<input type="text" name="pukul">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Bertempat Di</label>
				<input type="text" name="bertempat">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Dimakamkan Di</label>
				<input type="text" name="dimakamkan">
			</div>
			<br>
		  <h5>Surat keterangan ini dibuat berdasarkan keterangan pelapor :</h5>
		  <div class="form-group">
		    <label class="col-md-2 control-label">Nama</label>
				<input type="text" name="nama_p">
		  </div>
			<div class="form-group">
				<label class="col-md-2 control-label">No. KTP</label>
				<input type="text" name="nik_p">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Jenis Kelamin</label>
                <select name="jk_p">
					<optgroup label="Pilih Jenis Kelamin">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</optgroup>
				</select>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Tempat Lahir</label>
				<input type="text" name="tl_p">
			</div>
				<div class="form-group">
				<label class="col-md-2 control-label">Tanggal Lahir</label>
				<input type="date" name="tgl_p">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Agama</label>
				<input type="text" name="agama_p">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Pekerjaan</label>
				<input type="text" name="pekerjaan_p">
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Alamat</label>
				<input type="text" name="alamat_p">
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
			<input type="submit" value="Print" name="submit" class="btn btn-info">
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