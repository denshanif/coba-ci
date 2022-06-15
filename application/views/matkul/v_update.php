<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Mata Kuliah</title>
</head>
<body>
  <h1><?php echo $judul; ?></h1>
  <form action="<?php echo base_url() ?>index.php/matkul/update/" method="post">
    <?php foreach ($matkul as $matakuliah) : ?>
    <p>Kode Mata Kuliah</p>
    <input type="text" name="kode_mk" value="<?php echo $matakuliah->kode_mk ?>" readonly>
    <br>
    <p>Nama Mata Kuliah</p>
    <input type="text" name="nama" value="<?php echo $matakuliah->nama ?>">
    <br>
    <p>SKS</p>
    <input type="text" name="sks" value="<?php echo $matakuliah->sks ?>">
    <br>
    <p>Semester</p>
    <input type="text" name="semester" value="<?php echo $matakuliah->semester ?>">
    <br>
    <p>Jenis</p>
    <input type="text" name="jenis" value="<?php echo $matakuliah->jenis ?>">
    <br>
    <br>
    <input type="submit" value="UPDATE">
    <?php endforeach ?>
  </form>
</body>
</html>