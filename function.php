<?php $koneksi =  mysqli_connect("localhost", "root", "", "secika"); ?>
<?php
function tambah($sambung){
  global $koneksi;

  $nama = htmlspecialchars($sambung["nama"]);
  $alamat  = htmlspecialchars($sambung["alamat"]);
  $jenis_kelamin = htmlspecialchars($sambung["jenis_kelamin"]);
  $agama = htmlspecialchars($sambung["agama"]);
  $sekolah_asal = htmlspecialchars($sambung["sekolah_asal"]);

  $query = "INSERT INTO siswa VALUES('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal', '')";
  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}
?>

<?php
function query($query){
  global $koneksi;
  $hasil = mysqli_query($koneksi, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($hasil)){
    $rows[] = $row;
  }

  return $rows;
}

function hapus($id){
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM siswa where id = $id");

  return mysqli_affected_rows($koneksi);
}

function ubah($data){
  global $koneksi;

  $id = $data['id'];
  $nama = htmlspecialchars($data["nama"]);
  $alamat  = htmlspecialchars($data["alamat"]);
  $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
  $agama = htmlspecialchars($data["agama"]);
  $sekolah_asal = htmlspecialchars($data["sekolah_asal"]);

  $query = "UPDATE siswa SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', agama = '$agama', sekolah_asal = '$sekolah_asal' WHERE id = $id";

  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}

?>
