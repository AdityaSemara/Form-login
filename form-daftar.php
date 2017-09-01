<?php include('config.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulir pendftaran siswa</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="bungkus">
		<div class="bungkus-form">
			<h1>Silahkan Register</h1>
			<div class="form-login">
				<form method="POST">
					<p class="text-form">Nama</p>
					<input type="text" name="nama" placeholder="Nama lengkap">
					<p class="text-form">User Name</p>
					<input type="text" name="username" placeholder="User Name">
					<p class="text-form">Password</p>
					<input type="password" name="password">
					<p class="text-form">Cornfirm Password</p>
					<input type="password" name="password1">
					<button type="submit" value="Daftar" name="daftar">	Daftar</button>
				</form>
				<a href="login.php"><input type="button" value="Login"></a>
			</div>
		</div>
	</div>
	<?php 
		
	if(isset($_POST['daftar'])){
		
		$nama = mysql_real_escape_string($_POST['nama']) ;
		$username = mysql_real_escape_string($_POST['username']) ;
		$password = mysql_real_escape_string($_POST['password']) ;
		$password1 = mysql_real_escape_string($_POST['password1']) ;
		
		if ($password == $password1){
			$sql = "INSERT INTO form_daftar(nama, username, password) VALUE ('$nama', '$username', '$password')";
			$query = mysqli_query($db, $sql);
			echo "Register Sukses, silahkan login";
			echo "<meta http-equiv='refresh' content='1; url=login.php'>";
		}elseif( $password !== $password1){
			echo "Password tidak cocok";
			echo "<meta http-equiv='refresh' content='1; url=form-daftar.php'>";
		}
	}
	?>
</body>
</html>