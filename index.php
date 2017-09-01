<?php 
include('config.php'); 
session_start(); 
echo "halo ", $_SESSION['username'],"<br>";
include('ceksession.php');
?>
<a href="logout.php" onClick="return confirm('Yakin Ingin keluar?')">Logout</a>