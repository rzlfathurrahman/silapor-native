<?php 

  require_once 'layouts/header.php';

?>
<main class="form-signin">

  <form action="simpan_reg_masyarakat.php" method="post">
    <h1 class="h2 mb-4 fw-normal text-center">SILAPOR - Registrasi</h1>

    <div class="form-group mb-2">
      <label for="nik">NIK</label>
      <input id="nik" type="text" class="form-control form-control-sm" name="nik" placeholder="Masukan NIK (16 Digit)" >
    </div>

    <div class="form-group mb-2">
      <label for="nama">Nama</label>
      <input id="nama" type="text" class="form-control form-control-sm" name="nama" placeholder="Masukan nama lengkap" >
    </div>
    
    <div class="form-group mb-2">
      <label for="username">Username</label>
      <input id="username" type="text" class="form-control form-control-sm" name="username" placeholder="Masukan username (untuk login)" >
    </div>

    <div class="form-group mb-2">
      <label for="password">Password</label>
      <input id="password" type="password" class="form-control form-control-sm" name="password" placeholder="Masukan password (untuk login)" >
    </div>

    <div class="form-group mb-3">
      <label for="telp">No Telepon</label>
      <input id="telp" type="text" class="form-control form-control-sm" name="telp" placeholder="Masukan nomor telepon (08xxx)" >
    </div>

    <button type="submit" class="btn btn-sm w-100 btn-primary">Daftar</button>

    <hr style="width: 50%;" class="mx-auto">

    Atau sudah memiliki akun? <a href="login">Login disini</a>  

    <p class="mt-5 mb-3 text-center text-muted">&copy; <?= date('Y') ?></p>
  </form>
</main>

</body>
</html>