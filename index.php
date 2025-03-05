<?php
$koneksi = new mysqli('localhost','root','','dbaset');
// session_start();
if(isset($_POST['submituser']))
{
    $namaadmin = $koneksi -> real_escape_string($_POST['nama']);
    $namauser = $koneksi -> real_escape_string($_POST['username']);
    $password = $koneksi -> real_escape_string($_POST['sandi']);
    $hash = password_hash($password, PASSWORD_BCRYPT);

    $koneksi -> query (query: "INSERT INTO login_user (nama, username, password) VALUES ('$namaadmin', '$namauser', '$hash')");
      echo '<script>alert("User berhasil dibuat");window.location="process.php";</script>';
    }
    else
    {
      echo '<script>alert("Gagal membuat user")</script>';
    }
  
    // $namaadmin = $_POST['nama'];
    // $namauser = $_POST['username'];
    // $password = $_POST['sandi'];
    // $enkrip = md5($password);

    // $query = mysqli_query($koneksi, "INSERT INTO login_user (nama, username, password) values ('$namaadmin', '$namauser', '$enkrip')");
    // //$query = mysqli_query($koneksi, "CALL loginuser('$nama', '$username')");

    // if($query){
    //     echo '<script>alert("User berhasil dibuat");window.location="process.php";</script>';
    // } else{
    //     echo '<script>alert("Gagal membuat user")</script>';
    // }
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

    <title>FORM REGISTRASI USER</title>

  </head>
  <body>
    <div class="container">
    <h4 class="text-center">REGISTRASI USER</h4>
      <hr>
      <form method="post" action="index.php">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" required>
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="sandi" class="form-control" placeholder="Masukkan Password Anda" required>
        </div>
        <button type="submit" name="submituser" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
          <p><center>Sudah punya akun?<a href="process.php"><b> Login</b></a></center></p>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>