<?php 

  session_start();
  require_once 'koneksi.php';

  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }else{
    $username = $_SESSION['username'];
  }

  $id = $_POST['id'];
  $isi_laporan = $_POST['isi_laporan'];

  // Cek apakah data yang diupdate milik 'user' saat ini atau bukan
  $query = mysqli_query($conn,"SELECT * FROM masyarakat WHERE username='$username'");
  while($data=mysqli_fetch_object($query)){
    $nik = $data->nik;
  }

  if(!$query){
    echo "
      <script>
        alert('Harap untuk tidak mengubah data aduan milik orang lain!');
        window.location='masy_riwayat_aduan.php';
      </script>
    ";
  }

  $query_update = mysqli_query($conn,"UPDATE pengaduan SET isi_laporan='$isi_laporan' WHERE id='$id' AND nik='$nik'");

  if($query_update){
    echo "
      <script>
        alert('Pengaduan berhasil diubah!');
        window.location='masy_riwayat_aduan.php';
      </script>
    ";
  }else{
    echo "
      <script>
        alert('Pengaduan gagal diubah! Silahkan coba lagi');
        window.location='masy_riwayat_aduan.php';
      </script>
    ";
  }

?>