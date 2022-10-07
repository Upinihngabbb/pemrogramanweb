<?php
session_start();
// cek apakah ada username
if(isset($_SESSION['username'])){
    header('Location:admin.php');
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    pastikan action menuju ke auth.php dan method POST/post
    <form action="index.php" method="POST">
    <label for="username">Username</label>
    <input name="username" type="text" />
    <br />
    <label for="password">Pasword</label>
    <input name="password" type="password" />
    <br />
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title>Membuat Desain Form Login Dengan CSS - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="index.php" method="POST">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<input name=submit type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>