<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

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
    <th>Nama</th>
    <th>Aksi</th>

  </tr>
  <?php foreach ($mahasiswa as $m) : ?>
    <tr>
      <td>1</td>
      <td><img src="img/<?= $m['gambar']; ?>" width="80"></td>
      <td><?= $m['nama']; ?></td>
      <td>
        <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
      </td>
    <tr>
    <?php endforeach; ?>
</table>

</tr>


<body>

</body>

</html>