<?php
include "function.php";
$data = query("SELECT * FROM `siswa` ORDER BY `siswa`.`id` ASC");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Kumpulan Data Siswa</h1>
    <table border = 1 cellpadding = 20 cellspacing = 0>
      <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th colspan = 2>Tindakan</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach($data as $hasil) : ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $hasil['nama']; ?></td>
        <td><?php echo $hasil['alamat']; ?></td>
        <td><?php echo $hasil['jenis_kelamin']; ?></td>
        <td><?php echo $hasil['agama']; ?></td>
        <td><?php echo $hasil['sekolah_asal']; ?></td>
        <td> <a href="ubah.php?id=<?php echo $hasil['id']; ?>">Ubah</a> </td>
        <td> <a href="hapus.php?id=<?php echo $hasil['id'] ?>">Hapus</a> </td>
        <?php $i++; ?>
      </tr>
    <?php endforeach; ?>
    </table>
    <br>
    <a href="tambah.php">Tambah data</a>

    <p>Total : <?php echo $i - 1 ;?></p>
  </body>
</html>
