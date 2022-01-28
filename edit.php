<?php 

  session_start();
  require_once 'koneksi.php';
  $page = 'riwayat';

  $id = $_GET['id'];
  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }else{
    $username = $_SESSION['username'];
  }

  $query = mysqli_query($conn,"SELECT * FROM masyarakat WHERE username='$username'");
  while($data=mysqli_fetch_object($query)){
    $nik = $data->nik;
    $nama = $data->nama;
  }

  // Cek apakah data yang diedit milik 'user' saat ini atau bukan
  $query = mysqli_query($conn,"SELECT * FROM pengaduan WHERE id='$id' AND nik='$nik'");
  if(!$query){
    echo "
      <script>
        alert('Harap untuk tidak mengubah data aduan milik orang lain!');
        window.location='masy_riwayat_aduan.php';
      </script>
    ";
  }
  $aduan = mysqli_fetch_assoc($query); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silapor - Edit Pengaduan</title>
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
        <form action="update.php" method="post">
          <table>
            <tr>
              <td>Tanggal Pengaduan</td>
              <td>:</td>
              <td>
                <input type="text" name="tanggal_pengaduan" value="<?= $aduan['tanggal_pengaduan'] ?>" readonly>
                <input type="hidden" name="id" value="<?= $id ?>">
              </td>
            </tr>
            <tr>
              <td>Isi Laporan</td>
              <td>:</td>
              <td><textarea name="isi_laporan" cols="30" rows="10"><?= $aduan['isi_laporan'] ?></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td><button type="submit">Update</button></td>
            </tr>
          </table>
        </form>
      </center>
    </div>
  </div>
</body>
</html>