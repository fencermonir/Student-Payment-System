<?php
	include('db.php');
	include('img.php');
?>
<html>
<head>
	<title>pay your fee online</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="student">
		<form action="login.php" method="POST">
			<input type="text"name="ui" placeholder="User ID"/>
			<input type="Password"name="pass" placeholder="Password"/>
			
			<input id="login" type="submit" value="login"/>
		</form>
	
	<h2>If have no user name and password! please click <a href="fai.php">Here</a> to create account</h2>
</div>
	</body>
</html>