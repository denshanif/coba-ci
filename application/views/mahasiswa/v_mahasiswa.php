<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>
<body>
  <h1><?php echo $judul; ?></h1>
  <a href="<?php echo base_url() ?>index.php/mahasiswa/create">Tambah Mahasiswa</a>
  <br>
  <br>
  <table border="1">
    <thead>
      <tr>
        <th>NPM</th>
        <th>NAMA</th>
        <th>PRODI</th>
        <th>ANGKATAN</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($mhs as $mahasiswa) : ?>
      <tr>
        <td><?php echo $mahasiswa->npm; ?></td>
        <td><?php echo $mahasiswa->nama; ?></td>
        <td><?php echo $mahasiswa->prodi; ?></td>
        <td><?php echo $mahasiswa->angkatan; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>