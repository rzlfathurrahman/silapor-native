<?php 

  session_start();
  require_once 'koneksi.php';
  $page = 'pengaduan';

  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }else{
    $username = $_SESSION['username'];
  }

  $result = mysqli_query($conn,"SELECT * FROM masyarakat WHERE username='$username'");
  while($data = mysqli_fetch_assoc($result)){
    $nik  = $data['nik'];
    $nama = $data['nama'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silapor - Pengaduan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="content">
    <p>Selamat datang, <strong><?= $nama; ?></strong>
      <a style="float:right;" href="masy_proses_logout.php">Logout</a>
    </p>
    <?php require_once 'menu_masyarakat.php' ?>
    <div class="badan">
      <center>
        <form action="simpan_pengaduan.php" method="post">
          <table>
            <tr>
              <td>NIK</td>
              <td>:</td>
              <td><input type="text" name="nik" value="<?= $nik ?>" readonly></td>
            </tr>
            <tr>
              <td>Isi Laporan</td>
              <td>:</td>
              <td><textarea name="isi_laporan" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td><button type="submit">Kirim</button></td>
            </tr>
          </table>
        </form>
      </center>
    </div>
  </div>
</body>
</html>
