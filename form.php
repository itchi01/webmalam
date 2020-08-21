<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>
	img{
		width:100%;
	}
</style>
<body>
	<div class="mx-5 my-5">
	<div class="px-4 pt-4 pb-4 wrapper container border border-warning">
	<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-4">
		<label for="">Nama Lengkap </label>
		<input class="form-control" placeholder="Masukkan Nama Lengkap" type="text" name="namaLengkap">
	</div>
		<br>
	<div class="form-group col-md-4">
		<label for="">Tanggal Lahir</label>
		<input class="form-control" type="date" name="tanggal">
	</div>
		<br>
	<div class="form-group col-md-4">
		<label for="">Tempat Lahir</label>
		<input class="form-control" placeholder="Masukkan Tempat Lahir" type="text" name="tempat">
	</div>
		<br>
	<div class="form-group col-md-6">
		<div class="row">
			<div class="col-sm-2">
				<label for="">Jenis Kelamin</label>
			</div>
			<div class="col-sm-10">
				<input type="radio" name="jenisKelamin" value="Laki-laki">Laki-laki
				<input type="radio" name="jenisKelamin" value="Perempuan">Perempuan
			</div>
		</div>
	</div>
		<br>
	<div class="form-group col-md-6">
		<div class="row">
			<div class="col-sm-2">
				<label for="">Hobby :</label>
			</div>
			<div class="form-check col-sm-6">
				<input class="" type="checkbox" name="membaca" value="membaca">Membaca
				<input class="" type="checkbox" name="nonton" value="nonton">Nonton
				<input class="" type="checkbox" name="ngoding" value="ngoding">Ngoding
			</div>
		</div>
	</div>
		<br>
	<div class="form-group col-md-12">
		<label for="">Alamat </label>
		<textarea class="form-control" name="alamat" cols="15" rows="5"></textarea>
	</div>
		<br>
	<div class="form-group col-md-6">
		<label for="">Kabupaten </label>
		<select class="form-control" name="kabupaten">
			<option>Pilih Kabupaten</option>
			<option value="Banda Aceh">Banda Aceh</option>
			<option value="Aceh Besar">Aceh Besar</option>
			<option value="sigli">Sigli</option>
		</select>
	</div>
		<br>
	<div class="form-group col-md-6">
		<label for="">Pendidikan </label>
		<select class="form-control" name="pendidikan">
			<option>Pilih Pendidikan</option>
			<option value="sd">SD</option>
			<option value="smp">SMP</option>
			<option value="sma">SMA</option>
			<option value="smk">SMK</option>
			<option value="sarjana">S1</option>
		</select>
	</div>
		<br>
	<div class="form-group col-md-6">
		<label for="">Agama </label>
		<select class="form-control" name="agama">
			<option>Pilih Agama</option>
			<option value="islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="hindu">Hindu</option>
			<option value="budha">Budha</option>
		</select>
	</div>
		<br>
	<div class="form-group col-md-6">
		<label for="">Pekerjaan</label>
		<input class="form-control" placeholder="Masukkan Pekerjaan" type="text" name="pekerjaan">
	</div>
		<br>
		<div class="form group col-md-12">
		<label for="">Foto</label>
		<input class="form-control-md" type="file" name="foto">
	</div>
		<br>
	<div class="form-group col-md-6">
		<label for="">Username/mail </label>
		<input class="form-control" placeholder="email@email.com" required type="email" name="email">
	</div>
		<br>
	<div class="form-group col-md-6">
		<label for="">Password </label>
		<input class="form-control" required placeholder="password" type="password" name="pass">
	</div>
	<br>
	<div class="d-flex justify-content-center">
		<input class="btn btn-lg btn-primary" type="submit" name="input" value="tampilkan">
		</div>
		<br>
	</div>
	</form>
	<!-- PHP syntax -->
	<?php
		if(isset($_POST["input"])){
			$nama = $_POST["namaLengkap"];
			$tanggal_l = $_POST["tanggal"];
			$tempat_l = $_POST["tempat"];
			$jk = !empty($_POST["jenisKelamin"])?$_POST["jenisKelamin"]: 'anda belum memilih jenis kelamin';
			$hobby1 = !empty($_POST["membaca"])?$_POST["membaca"]:'';
			$hobby2 = !empty($_POST["nonton"])?$_POST["nonton"]:'';
			$hobby3 = !empty($_POST["ngoding"])?$_POST["ngoding"]:'';
			$alamat = $_POST["alamat"];
			$kabupaten = $_POST["kabupaten"];
			$pendidikan = $_POST["pendidikan"];
			$pekerjaan = $_POST["pekerjaan"];
			$agama = $_POST["agama"];

			$foto=$_FILES["foto"]["name"];
			if(move_uploaded_file($_FILES['foto']['tmp_name'],"img/".$_FILES['foto']['name'])){
				echo"Gambar berhasil diupload";
			}else{
				echo"Gambar gagal diupload";
			};

			$password = $_POST["pass"];
			$username = $_POST["email"];
		?>
		
	</div>
	</div>
		<hr>
<div class="container alert alert-success" role="alert">
<h4 class="alert-heading">Hasilnya</h4>
<?php
			echo"
			$nama <br>
			$tanggal_l <br>
			$tempat_l <br>
			$jk <br>
			$hobby1 <br>
			$hobby2 <br>
			$hobby3 <br><br>
			<div class='alert alert-primary' role='alert'>$alamat</div> <br>
			$kabupaten <br>
			$pendidikan <br>
			$pekerjaan <br>
			$agama <br>
			<img src='img/$foto'> <br>
			$username <br>
			$password <br>";
		}
	?>
</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>