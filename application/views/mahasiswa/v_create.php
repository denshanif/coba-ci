<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Mahasiswa</title>
</head>
<body>
  <h1><?php echo $judul; ?></h1>
  <form action="<?php echo base_url() ?>index.php/mahasiswa/create" method="post">
    <p>NPM</p>
    <input type="text" name="npm">
    <br>
    <p>Nama</p>
    <input type="text" name="nama">
    <br>
    <p>Prodi</p>
    <input type="text" name="prodi">
    <br>
    <p>Angkatan</p>
    <input type="text" name="angkatan">
    <br>
    <br>
    <input type="submit" value="SIMPAN">
  </form>
</body>
</html>