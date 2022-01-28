<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SILAPOR - Registrasi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="content">
    <header>
      <h1 class="judul">SILAPOR</h1>
      <h3 class="deskripsi">(SISTEM INFORMASI LAPORAN PENGADUAN MASYARAKAT)</h3>
    </header>
    <center>
      <div class="badan">
        <form action="simpan_reg_masyarakat.php" method="post">
          <table>
            <tr>
              <td>NIK</td>
              <td>:</td>
              <td><input type="text" name="nik"></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><input type="text" name="nama"></td>
            </tr>
            <tr>
              <td>Username</td>
              <td>:</td>
              <td><input type="text" name="username"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>:</td>
              <td><input type="password" name="password"></td>
            </tr>
            <tr>
              <td>No Telepon</td>
              <td>:</td>
              <td><input type="text" name="telp"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <button type="submit" name="daftar">Daftar</button>
              </td>
            </tr>
          </table>
          <br>
          <a href="index.php">Login disini</a>
        </form>
      </div>
    </center>
  </div>
</body>
</html>