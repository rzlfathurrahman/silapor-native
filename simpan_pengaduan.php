<?php 

  require_once 'koneksi.php';
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }else{
    $username = $_SESSION['username'];
  }
  
  // Cek apakah nik yang dikirim merupakan milik 'user' saat ini 
  $query = mysqli_query($conn,"SELECT * FROM masyarakat WHERE username='$username'");
  while($data=mysqli_fetch_object($query)){
    $nik_asli = $data->nik;
  }

  $nik = htmlspecialchars($_POST['nik']);
  if($nik !== $nik_asli){
    echo '
      <script>
        alert("Kesalahan! Dimohon untuk tidak mengubah NIK");
        window.location="masy_pengaduan.php";
      </script>
    ';
    exit;
  }
  $tanggal = date('Y-m-d');
  $isi_laporan = htmlspecialchars($_POST['isi_laporan']);

  if(
    !empty($nik) &&
    !empty($nik)
  ){
    $mysqli = "INSERT INTO pengaduan (id,tanggal_pengaduan,nik,isi_laporan) VALUES (null,'$tanggal','$nik','$isi_laporan')";
    $result = mysqli_query($conn,$mysqli);

    if($result){
      echo '
        <script>
          alert("Pengaduan berhasil dikirim!");
          window.location="masy_riwayat_aduan.php";
        </script>
      ';
    }else{
      echo '
        <script>
          alert("Pengaduan gagal dikirim! Silahkan coba lagi");
          window.location="masy_pengaduan.php";
        </script>
      ';
    }
  }else{
    echo '
      <script>
        alert("Harap isi semua data dengan benar!");
        window.location="masy_pengaduan.php";
      </script>
    ';
  }

  mysqli_close($conn);

?>