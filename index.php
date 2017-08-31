<?php 
include('config.php'); 
session_start(); 
echo $_SESSION['username'];
include('ceksession.php');
?>
<a href="logout.php" onClick="return confirm('Yakin Ingin keluar?')">Logout</a>