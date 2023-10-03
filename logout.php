<?php 
session_start();
session_destroy();
session_start();
echo "Session berhasil dihapus.";
$_SESSION['info'] = "Anda telah logout";
header("Location: login.php");
?>