<?php 
	session_start(); 
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: signin.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: signin.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Counter Strike</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' type='text/javascript'></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
					background-image: url(csgo.jpeg);
					background-repeat: no-repeat;
					background-size: 100%;
				}
		  		#footer{
		  			position: fixed;
    				bottom: 0;
    				width: 100%;
		  		}
				.navbar {
				  	margin-bottom: 0;
				  	border-radius: 0;
				}
				.row.content {height: 450px}
				.sidenav {
				  	padding-top: 20px;
				  	background-color: cadetblue;
				  	height: 100%;
				}
				footer {
				  	background-color: #555;
				  	color: white;
				  	padding: 15px;
				}
				@media screen and (max-width: 767px) {
				  	.sidenav {
						height: auto;
						padding: 15px;
				  	}
				  	.row.content {height:auto;} 
				}
            
                #list {
  width: 200px;
}
 
#ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
 
.li {
  font: 200 20px/1.5 Helvetica, Verdana, sans-serif;
  border-bottom: 1px solid #ccc;
}
 
.li:last-child {
  border: none;
}
 
.li a {
  text-decoration: none;
  color: #000;
  display: block;
  width: 200px;
 
  -webkit-transition: font-size 0.3s ease, background-color 0.3s ease;
  -moz-transition: font-size 0.3s ease, background-color 0.3s ease;
  -o-transition: font-size 0.3s ease, background-color 0.3s ease;
  -ms-transition: font-size 0.3s ease, background-color 0.3s ease;
  transition: font-size 0.3s ease, background-color 0.3s ease;
}
 
.li a:hover {
  text-decoration: none;
  font-size: 25px;
}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					 </button>
					 <a class="navbar-brand" href="#">CSGO</a>
				</div>
				
				<div class="collapse navbar-collapse" id="myNavbar">
				  	<ul class="nav navbar-nav">
						<li><a href="home.html">Home</a></li>
						<li class="active"><a href="#">Player Info</a></li>
						<li><a href="Stats.php">Stats</a></li>
						<li><a href="teams.php">Teams</a></li>
				  	</ul>
				  	<ul class="nav navbar-nav navbar-right">
						<li><a href="Player.php?logout='1'" style="color: white;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
					</ul>
				</div>
				
		  	</div>
		</nav>
<!--
		<div class="info-form">
		<h2 class="text-center" style="color: white">Player Information</h2>
        </div>
-->
        <div class="header">
			<h2>Player Information</h2>
		</div> 
        <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
				<div class="error success" >
					<h3>
				    <?php 
				    	echo $_SESSION['success']; 
				    	unset($_SESSION['success']);
				    ?>
					</h3>
				
		  	<?php endif ?>

			 <!-- logged in user information -->
			 <?php  if (isset($_SESSION['username'])) : ?>
				<?php
					$username = $_SESSION['username'];
					$con=mysqli_connect("localhost","root","","user");
					if (mysqli_connect_errno()) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					$query = "SELECT * FROM player where name='$username'";
					$result=mysqli_query($con,$query);
					$row = mysqli_fetch_assoc($result);
				?>
                <div id = "list" style = "width: 100%">
                    <ul id = "ul">
				<li class = "li"><a href = "#"><p>Player Name:<strong><?php echo $username; ?></strong></p></a></li>
			 	<li class = "li"><a href = "#"><p>Team:<strong><?php echo $row['team']; ?></p></a></li>
				<li class = "li"><a href = "#"><p>Number of wins:<strong><?php echo $row['win']; ?></p></a></li>
				<li class = "li"><a href = "#"><p>Number of kills:<strong><?php echo $row['kills']; ?></p></a></li>
                <li class = "li"><a href = "#"><p>Number of deaths:<strong><?php echo $row['deaths']; ?></p></a></li>
				<!--<p>k/d ratio:<strong><?php echo ($row['kils']/$row['deaths']); ?></p> -->
                        </ul>
                    </div>
			 <?php mysqli_close($con); endif ?>
		</div>
		</div>  
	</body>
</html>
