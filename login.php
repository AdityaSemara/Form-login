<?php 
include('config.php');

session_start();
?>
<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="bungkus">
	<div class="bungkus-form">
		<h1>Welcome</h1>
		<div class="form-login">
			<form method="post">
				<p class="text-form">User Name</p>
				<input type="text" name="username">
				<p class="text-form">Password</p>
				<input type="password" name="password"><br>
				<button type="submit" name="btnlogin">Login</button>
			</form>
		</div>
		<p class="text"><a href="form-daftar.php">Forgot Password ?</a></p>
	</div>
</div>
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
			echo "<p>Login Gagal</p>";
			echo "<meta http-equiv='refresh' content='1;url=login.php'>";
		}
	}
?>
</body>
</html>