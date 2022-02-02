<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SILAPOR - Login</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>
  <!-- <div style="display: block; position:absolute; z-index:9999; top:0;bottom:0;left:0;right:0;background-color:black;"></div> -->
  <div class="container">
    <header>
      <h1 class="judul">SILAPOR</h1>
      <h3 class="deskripsi">(SISTEM INFORMASI LAPORAN PENGADUAN MASYARAKAT)</h3>
    </header>
      <div class="badan">
        <form action="masy_proses_login.php" method="post">
          <table>
            <tr>
              <td>Username</td>
              <td>:</td>
              <td><input type="text" name="username" placeholder="username"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>:</td>
              <td><input type="password" name="password" type="password" placeholder="password"></td>
            </tr>
            <tr>
              <td >
                <button class="btn btn-primary btn-sm" type="submit" name="login">Login</button>
              </td>
            </tr>
          </table>
          <br>
          Belum punya akun? <a href="masy_registrasi.php">Daftar disini</a>
        </form>
      </div>
  </div>

  <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>