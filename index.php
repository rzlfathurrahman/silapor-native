<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SILAPOR - Login</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

  <!-- Your Custom CSS -->
  <link rel="stylesheet" href="./assets/css/login.css">

</head>
<body>
  <main class="form-signin">
    <form action="masy_proses_login.php" method="post">
      <!-- <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="Website Logo" width="72" height="57"> -->
      <h1 class="h2 mb-4 fw-normal text-center">SILAPOR - Login</h1>

      <div class="form-group mb-2">
        <!-- <label for="floatingInput">Email address</label> -->
        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
      </div>
      
      <div class="form-group mb-2">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <!-- <label for="floatingPassword">Password</label> -->
      </div>

      
      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> -->
      <button class="w-100 btn btn-primary" type="submit">Sign in</button>

      <hr style="width: 50%;" class="mx-auto">
      
      <p class="text-center">Belum punya akun? <a href="masy_registrasi.php">Daftar disini</a> </p>

      <p class="mt-5 mb-3 text-center text-muted">&copy; <?= date('Y') ?></p>
    </form>
  </main>

  <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>