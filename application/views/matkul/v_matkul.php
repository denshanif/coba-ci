<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mata Kuliah</title>
</head>
<body>
  <h1><?php echo $judul; ?></h1>
  <a href="<?php echo base_url() ?>index.php/matkul/create">Tambah Mata Kuliah</a>
  <br>
  <br>
  <table border="1">
    <thead>
      <tr>
        <th>#</th>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Jenis</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach($matkul as $matakuliah) : ?>
      <tr>
        <td><?php echo $no; $no++; ?></td>
        <td><?php echo $matakuliah->kode_mk; ?></td>
        <td><?php echo $matakuliah->nama; ?></td>
        <td><?php echo $matakuliah->sks; ?></td>
        <td><?php echo $matakuliah->semester; ?></td>
        <td><?php echo $matakuliah->jenis; ?></td>
        <td>
          <a href="<?php echo base_url() ?>index.php/matkul/update/<?php echo $matakuliah->kode_mk; ?>">
            Ubah
          </a>
          <a href="<?php echo base_url() ?>index.php/matkul/delete/<?php echo $matakuliah->kode_mk; ?>">
            Hapus
          </a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>