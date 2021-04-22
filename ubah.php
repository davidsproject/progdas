<?php
include 'function.php';
// ambil data di url
$id = $_GET['id'];
$data = query("SELECT * FROM siswa WHERE id = $id")[0];

if ( isset($_POST["submit"]) ){
  // cek apakah data berhasil di ubah atau tidak
  if (ubah($_POST) > 0){
    echo "
    <script>
    alert('Data berhasil diubah!');
    document.location.href = 'index.php';
    </script>
    ";
  }
  else{
    echo "
    <script>
    alert('Data gagal diubah!');
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
    <title>Ubah data siswa</title>
  </head>
  <body>
    <h1>Ubah Data Siswa</h1>
    <form class="" action="" method="post">
      <input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
      <ul>
        <li>
          <label for="nama">Nama : </label>
          <input type="text" name="nama" id="nama" value = "<?php echo $data['nama']; ?>" autocomplete = "off" >
        </li>
        <li>
          <label for="alamat">Alamat: </label>
          <input type="text" id = "alamat" name="alamat" value = "<?php echo $data['alamat']; ?>" autocomplete = "off">
        </li>
        <li>
          <label for="jenis_kelamin">Jenis kelamin : </label>
          <input type = "radio" name="jenis_kelamin" id="jenis_kelamin" value = "Pria" <?php if ($data["jenis_kelamin"] == 'Pria') echo 'checked="checked"'; ?>> Pria
          <input type = "radio" name="jenis_kelamin" id="jenis_kelamin" value = "Wanita" <?php if ($data["jenis_kelamin"] == 'Wanita') echo 'checked="checked"'; ?>> Wanita
        </li>
        <li>
          <label for="jurusan">Agama : </label>
            <select class="" name="agama" required>
              <option value="Islam" <?php if ($data["agama"] == 'Islam') echo 'selected'; ?>>Islam</option>
              <option value="Kristen" <?php if ($data["agama"] == 'Kristen') echo 'selected'; ?>>Kristen</option>
              <option value="Buddha" <?php if ($data["agama"] == 'Buddha') echo 'selected'; ?>>Buddha</option>
              <option value="Hindu" <?php if ($data["agama"] == 'Hindu') echo 'selected'; ?>>Hindu</option>
              <option value="Konghucu" <?php if ($data["agama"] == 'Konghucu') echo 'selected'; ?>>Konghucu</option>
            </select>
        </li>
        <li>
          <label for="sekolah_asal">Sekolah asal : </label>
          <input type="text" name="sekolah_asal" id="sekolah_asal" value = "<?php echo $data['sekolah_asal']; ?>" autocomplete = "off">
        </li>
        <li>
          <button type="submit" name="submit">Ubah Data!</button>
        </li>
      </ul>
    </form>
    <br>
    <a href="index.php">Balik ke asal</a>
  </body>
</html>
