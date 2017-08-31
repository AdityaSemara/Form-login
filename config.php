<?php 

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_daftar";

$db = mysqli_connect($server,$user,$password,$nama_database);

if(!$db){
	die('gagal terhubung dengan database');
}
?>
