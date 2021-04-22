<?php
include "function.php";
if ( isset($_POST["submit"]) ){
  if (tambah($_POST) > 0){
    echo "
    <script>
    alert('Data berhasil ditambahkan!');
    document.location.href = 'index.php';
    </script>
    ";
  }
  else{
    echo "
    <script>
    alert('Data gagal ditambahkan!');
    document.location.href = 'index.php';
    </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Form Siswa</h1>
    <form class="" action="tambah.php" method="post">
      <ul>
        <li>
          <label for="nama">Nama : </label>
          <input type="text" name="nama" id="nama" autocomplete = "off">
        </li>
        <li>
          <label for="nrp">Alamat : </label>
          <input type="text" id = "nrp" name="alamat" autocomplete = "off">
        </li>
        <li>
          <label for="email">Jenis kelamin :</label>
          <input type = "radio" name="jenis_kelamin" value = "Pria"> Pria
          <input type = "radio" name="jenis_kelamin" value = "Wanita"> Wanita
        </li>
        <li>
          <label for="jurusan">Agama :</label>
          <select class="" name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Buddha">Buddha</option>
            <option value="Hindu">Hindu</option>
            <option value="Konghucu">Konghucu</option>
          </select>
        </li>
        <li>
          <label for="gambar">Sekolah Asal :</label>
          <input type="text" name="sekolah_asal" id="sekolah_asal" autocomplete = "off">
        </li>
        <li>
          <button type="submit" name="submit">Tambah Data!</button>
        </li>
      </ul>
    </form>
    <br>
    <a href="index.php">Balik ke asal</a>
  </body>
</html>
