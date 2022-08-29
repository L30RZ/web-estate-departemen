<?php

//koneksi ke DB dan pilih database

$conn = mysqli_connect('localhost', 'root', '', 'web_ed');

//query isi dengan tabel Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


//Ubah data kedalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

//tampung ke variable Mahasiswa
$mahasiswa = $rows;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<h3>Daftar Mahasiswa</h3>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    <th>Aksi</th>

  </tr>
  <?php foreach ($mahasiswa as $m) : ?>
    <tr>
      <td>1</td>
      <td><img src="img/<?= $m['gambar']; ?> width=" 70"></td>
      <td><?= $m['nrp']; ?></td>
      <td><?= $m['nama']; ?></td>
      <td><?= $m['email']; ?></td>
      <td><?= $m['jurusan']; ?></td>
      <td>
        <a href="">Ubah</a> | <a href="">Hapus</a>
      </td>
    <tr>
    <?php endforeach; ?>
</table>

</tr>


<body>

</body>

</html>