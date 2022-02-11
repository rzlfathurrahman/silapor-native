<?php 

  session_start();
  require_once "koneksi.php";
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $sql = "SELECT * FROM masyarakat WHERE username = '$username'";
  $query = $conn->query($sql);
  $hasil = $query->fetch_assoc();
  if($query->num_rows === 0){
    echo "
    <script>
      alert('Maaf anda belum terdaftar di dalam sistem!');
      window.location='index.php';
    </script>";
  }else{
    if(password_verify($pass ,$hasil['password'])){
      $_SESSION['username'] = $hasil['username'];
      header('location:masy_home.php');
    }else{
      echo "
        <script>
          alert('Password Salah!');
          window.location='login';
        </script>
      ";
    }
  }
?>