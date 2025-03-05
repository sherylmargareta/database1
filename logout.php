<?php 
session_start();

$_SESSION['message']="Berhasil Logout";
session_unset();
session_destroy();

header('location:index.php?action=login');
exit(0);
 ?>
