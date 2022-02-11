<?php 

  session_start();
  require_once 'koneksi.php';
  $page = 'riwayat';

  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }else{
    $username = $_SESSION['username'];
  }

  $result = mysqli_query($conn,"SELECT * FROM masyarakat WHERE username='$username'");
  while($data=mysqli_fetch_assoc($result)){
    $nik = $data['nik'];
    $nama = $data['nama'];
  }

  // Ambil data pengaduan dari 'user' saat ini
  $query = mysqli_query($conn,"SELECT * FROM pengaduan WHERE nik='$nik'");
  while($result = mysqli_fetch_assoc($query)){
    $riwayat_pengaduan[] = $result;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silapor - Riwayat Pengaduan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="content">
    <p>Selamat Datang, <strong><?= $nama ?></strong>
      <a href="masy_proses_logout.php" style="float:right;">Logout</a>
    </p>

    <?php require_once 'menu_masyarakat.php' ?>

    <div class="badan">
      <center>
        <h3>RIWAYAT LAPORAN PENGADUAN</h3>
        <table border="1">
          <thead>
            <tr>
              <th>#</th>
              <th>Tanggal Pengaduan</th>
              <th>Isi Laporan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach($riwayat_pengaduan as $riwayat) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $riwayat['tanggal_pengaduan'] ?></td>
              <td><?= $riwayat['isi_laporan'] ?></td>
              <td>
                <a href="edit.php?id=<?= $riwayat['id'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $riwayat['id'] ?>" onclick="return confirm('Yakin ingin menghapus aduan ini?')">Hapus</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </center>
    </div>

  </div>
</body>
</html>