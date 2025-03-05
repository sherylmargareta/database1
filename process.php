<?php
// session_start();
$koneksi = mysqli_connect('localhost','root','','dbaset');

if(isset($_POST['login']))
{
    $namauser = $koneksi -> real_escape_string($_POST['username']);
    $password = $koneksi -> real_escape_string($_POST['sandi']);

    $sql = $koneksi -> query (query: "SELECT id, password FROM login_user WHERE username = '$namauser'");
    if($sql -> num_rows > 0) {
      $data = $sql -> fetch_array();

      if(password_verify($password, $data['password'])) 
      {
      echo '<script>alert("Berhasil Login");window.location="utama.php";</script>';
      } 
      else 
      echo '<script>alert("Gagal, username atau password salah!")</script>';
        } 
        else 
        echo '<script>alert("Gagal, username atau password salah!")</script>';
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>HALAMAN LOGIN</title>
  </head>
  <body>
    <section class = "main-login">

    <div class="container">
      <h4 class="text-center">LOGIN USER</h4>
    <hr>

    <form action="process.php" method="POST">
      <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" required>
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="sandi" class="form-control" placeholder="Masukkan Password Anda" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
  </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>