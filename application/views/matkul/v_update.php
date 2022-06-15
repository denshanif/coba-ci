<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Mata Kuliah</title>

	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="px-5 pt-3">
	<h1 class="mb-3"><?php echo $judul; ?></h1>
	<form action="<?php echo base_url() ?>index.php/matkul/update/" method="post">
		<?php foreach ($matkul as $matakuliah) : ?>
		<div class="form-group mb-3">
			<label>Kode Mata Kuliah</label>
			<input type="text" class="form-control" name="kode_mk" value="<?php echo $matakuliah->kode_mk ?>" readonly>
		</div>
		<div class="form-group mb-3">
			<label>Nama Mata Kuliah</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $matakuliah->nama ?>">
		</div>
		<div class="form-group mb-3">
			<label>SKS</label>
			<input type="text" class="form-control" name="sks" value="<?php echo $matakuliah->sks ?>">
		</div>
		<div class="form-group mb-3">
			<label>Semester</label>
			<input type="text" class="form-control" name="semester" value="<?php echo $matakuliah->semester ?>">
		</div>
		<div class="form-group mb-5">
			<label>Jenis</label>
			<input type="text" class="form-control" name="jenis" value="<?php echo $matakuliah->jenis ?>">
		</div>
		<button class="btn btn-primary" type="submit">Update</button>
		<?php endforeach ?>
	</form>

	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>
