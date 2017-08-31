<?php include('config.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulir pendftaran siswa</title>
</head>

<body>
	<header>
		<h3>Formulir pendftaran siswa</h3>
	</header>
	<form method="POST">
		<table border="0">
			<tr>
				<td><label for="nama">Nama</label></td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Nama lengkap"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" value="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>Confirmasi password</td>
				<td>:</td>
				<td>
					<input type="password" name="password1">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="daftar" name="daftar">
					<a href="login.php"><input type="button" value="Login"></a>
				</td>
			</tr>
		</table>
	</form>
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
			echo "<meta http-equiv='refresh' content='1.5; url=login.php'>";
		}elseif( $password !== $password1){
			echo "Password tidak cocok";
			echo "<meta http-equiv='refresh' content='1; url=form-daftar.php'>";
		}
	}
	?>
</body>
</html>