<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
	  <title>CSGO Register</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
		<style>
			.header {
				width: 30%;
				margin: 50px auto 0px;
				color: white;
				background-color: black;
				text-align: center;
				border: 1px solid #B0C4DE;
				border-bottom: none;
				border-radius: 10px 10px 0px 0px;
				padding: 20px;
			}
			.btn {
				padding: 10px;
				font-size: 15px;
				color: white;
				margin-top:10px;
				margin-left: 30px;
				margin-right: 30px;
				background-color: black;
				border: none;
				border-radius: 5px;
			}
			body {
				background-image: url(wallpaper.jpg);
				background-repeat: no-repeat;
				background-size: 100%;
			}
		</style>
	</head>
	<body>
		<div class="header">
			<h2>Login</h2>
		</div> 
		<form method="post" action="signin.php">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" >
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_user">Login</button>
				<button class="btn btn-secondary" type="submit"  style="float: right;"><a href="home.html" style="color: white;text-decoration:none">Home</a></button> 
			</div>
			<p>Not yet a member? <a href="register.php">Sign up</a></p>
		</form>
	</body>
</html>                               		
