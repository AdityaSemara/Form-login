<?php 
include('config.php');

session_start();
?>
<html>
<head>
<title>LOGIN</title>
</head>
<body>
<form method="post">
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>
				<button type="submit" name="btnlogin">Login</button>
				<a href="form-daftar.php"><button>Register</button></a>
			</td>
		</tr>
	</table>
</form>
<?php 
	
	if(isset($_POST['btnlogin'])){
		$username =mysql_real_escape_string($_POST['username']);
		$password =mysql_real_escape_string($_POST['password']);
		
		$ceklogin = mysqli_query($db,"SELECT * FROM form_daftar WHERE username='$username' AND password='$password'");
		
		if(mysqli_num_rows($ceklogin) == 1 ){
			$_SESSION['username'] = $username;
			echo "Login sukses";
			echo "<meta http-equiv='refresh' content='1.5;url=index.php'>";
		}else{
			echo "Login Gagal";
			echo "<meta http-equiv='refresh' content='1;url=login.php'>";
		}
	}
?>
</body>
</html>