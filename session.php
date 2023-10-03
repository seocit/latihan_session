<?php
//mulai session
session_start();

//membuat session 
$_SESSION['npm'] = 2226250089;
$_SESSION['nama'] = 'Abd Rosyiid Se';
$_SESSION['login'] = true;

// cara penggil session
echo $_SESSION['npm'];
?>