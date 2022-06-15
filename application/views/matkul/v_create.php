<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Mata Kuliah</title>

  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="px-5 pt-3">
  <h1 class="mb-3"><?php echo $judul; ?></h1>
  <form action="<?php echo base_url() ?>index.php/matkul/create" method="post">
    <div class="form-group mb-3">
      <label>Kode Mata Kuliah</label>
      <input type="text" class="form-control" name="kode_mk">
    </div>
    <div class="form-group mb-3">
      <label>Nama Mata Kuliah</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group mb-3">
      <label>SKS</label>
      <input type="text" class="form-control" name="sks">
    </div>
    <div class="form-group mb-3">
      <label>Semester</label>
      <input type="text" class="form-control" name="semester">
    </div>
    <div class="form-group mb-5">
      <label>Jenis</label>
      <input type="text" class="form-control" name="jenis">
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
  </form>

  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>