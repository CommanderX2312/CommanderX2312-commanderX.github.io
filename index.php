<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images.png">
	<title>Nyan cage</title>
</head>
<body>
	<a href="https://www.exploit-db.com/exploits/51024">
		<img src="02.jpg" alt="23434324" 
		width: 40px height: 40px>
	</a>
		<style>
			.mydiv {
				position: absolute;
				top: 5px;
				left: 1470px;

			}
		</style>
	
	<div class="mydiv">
	<a href="logout.php">Logout</a></div>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>