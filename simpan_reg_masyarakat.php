<?php 
  require_once 'koneksi.php';

  $nik = htmlspecialchars($_POST['nik']);
  $nama = htmlspecialchars($_POST['nama']);
  $username = htmlspecialchars($_POST['username']);
  $password = password_hash(htmlspecialchars($_POST['password']),PASSWORD_DEFAULT);
  $telp = htmlspecialchars($_POST['telp']);

  if(
    !empty($nik) &&
    !empty($nama) &&
    !empty($username) &&
    !empty($password) &&
    !empty($telp) 
  ){
    $mysqli = "INSERT INTO masyarakat (nik,nama,username,password,telp) VALUES ('$nik','$nama','$username','$password','$telp')";
    $result = mysqli_query($conn,$mysqli);

    if($result){
      echo "
        <script>
          alert('Pendaftaran berhasil! Silahkan login dengan akun yang telah terdaftar');
          window.location='index.php';
        </script>
      ";
    }else{
      echo "
        <script>
          alert('Maaf Pendaftaran gagal! Silahkan coba lagi');
          window.location='masy_registrasi.php';
        </script>
      ";
    }
  }else{
    echo "
      <script>
        alert('Silahkan isi semua data dengan benar!');
        window.location='masy_registrasi.php';
      </script>
    ";
  }

  mysqli_close($conn);

?>
