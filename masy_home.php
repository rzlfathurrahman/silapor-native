<?php 

  session_start();
  require_once 'koneksi.php';
  $page = 'home';

  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }else{
    $username = $_SESSION['username'];
  }

  $result = mysqli_query($conn,"SELECT * FROM masyarakat WHERE username='$username'");

  while($data = mysqli_fetch_object($result)){
    $nik  = $data->nik;
    $nama = $data->nama;
    $username = $data->username;
    $telp = $data->telp; 
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silapor - Dashboard</title>
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
        <h3>Identitas Diri:</h3>
        <table>
          <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?= $nik ?></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama ?></td>
          </tr>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td><?= $username ?>@silapor.com</td>
          </tr>
          <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><?= $telp ?></td>
          </tr>
        </table>
      </center>
    </div>
  </div>
</body>
</html>