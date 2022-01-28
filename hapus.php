<?php 

  session_start();
  require_once 'koneksi.php';
  $id = $_GET['id'];
  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }else{
    $username = $_SESSION['username'];
  }

  $query = mysqli_query($conn,"SELECT * FROM masyarakat WHERE username='$username'");
  while($data=mysqli_fetch_object($query)){
    $nik = $data->nik;
  }

  if(!$query){
    echo "
      <script>
        alert('Harap untuk tidak menghapus data aduan milik orang lain!');
        window.location='masy_riwayat_aduan.php';
      </script>
    ";
  }

  $query_hapus = mysqli_query($conn,"DELETE FROM pengaduan WHERE id='$id' AND nik='$nik'");

  if($query_hapus){
    echo "
      <script>
        alert('Pengaduan berhasil dihapus!');
        window.location='masy_riwayat_aduan.php';
      </script>
    ";
  }else{
    echo "
      <script>
        alert('Pengaduan gagal dihapus! Silahkan coba lagi');
        window.location='masy_riwayat_aduan.php';
      </script>
    ";
  }

?>