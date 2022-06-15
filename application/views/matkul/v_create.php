<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Mata Kuliah</title>
</head>
<body>
  <h1><?php echo $judul; ?></h1>
  <form action="<?php echo base_url() ?>index.php/matkul/create" method="post">
    <p>Kode Mata Kuliah</p>
    <input type="text" name="kode_mk">
    <br>
    <p>Nama Mata Kuliah</p>
    <input type="text" name="nama">
    <br>
    <p>SKS</p>
    <input type="text" name="sks">
    <br>
    <p>Semester</p>
    <input type="text" name="semester">
    <br>
    <p>Jenis</p>
    <input type="text" name="jenis">
    <br>
    <br>
    <input type="submit" value="SIMPAN">
  </form>
</body>
</html>