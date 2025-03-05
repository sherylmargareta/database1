<?php error_reporting(0); ?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'dbaset');
// session_start();
// if(!isset($_SESSION['username']))
// {
//   header("location:index.php?action=login");
// }
?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <title>Page Utama</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="?page=menu">Aset Masuk</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="?page=keluar">Aset Pindah</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="?page=rusak">Aset Rusak</a>
    </li>
  </ul>
    <!-- <form method="post" class="form-inline" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control mr-sm-2" placeholder="Cari jenis barang/lokasi..." name="keyword">
        <button type="submit" class="btn btn-light" name="cari">Cari</button>
      </div>
    </form> -->
  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item active">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</div>
</nav>
<br>

<?php
  $page = $_GET['page'];
  switch ($page) {
    case "menu";
          include"menu.php";
      break;
    case "keluar";
          include"keluar.php";
      break;
    case "rusak";
          include"rusak.php";
      break;
    case "logout";
          include "logout.php";
      break;
  }
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>