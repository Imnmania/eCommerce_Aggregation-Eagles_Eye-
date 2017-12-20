<?php 
	session_start(); 
	
	$db = mysqli_connect('localhost', 'root', '', 'eagleseye');
	
		
	
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="header">
		<h2>Welcome To EaglesEye</h2>
	</div>
	<div class="content">

		
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

	
		<?php  if (isset($_SESSION['username'])) : ?>
			<div class="bylin">	
			<p align="right"> Welcome <strong><?php echo $_SESSION['username']; ?></strong>
			<sub> <a href="index.php?logout='1'">
			<img src="./Power.ico" alt="LogOut" style="width:42px;height:42px;border:0;">
			</a> </sub>
			</p> 
			</div>
		<?php endif ?>
		
		<center>
		
		<div class="from">
		<link async href="http://fonts.googleapis.com/css?family=Chau%20Philomene%20One" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
		<link async href="http://fonts.googleapis.com/css?family=Monoton" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
		<form action ="search.php" method "GET" class="form-wrapper cf">
		<input type="text" name="q" placeholder="Search here..." required/>
		<button>search</button>
		</form>
		</div>
		
		<div class="byline"><p>Search for your desired products </p></div>
		<br /><br />
		
		</center>
		
		
		
		
	</div>
		
			
		
</body>
</html>