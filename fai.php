<?php
	include('db.php');
	include('img.php');
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="student">
		<form action="s_form.php" method="POST">
			<input type="text" name="FN" placeholder="First Name"/>
			<input type="text" name="LN" placeholder="Last Name"/>
			<input type="text" name="ID" placeholder="ID No"/>
			<input type="emai" name="email" placeholder="Email"/>
			<input type="text" name="cell" placeholder="Phone"/>
			<input type="text" name="intake" placeholder="Intake"/>
			<input type="text" name="dept" placeholder="Dept"/>
			<input type="password" name="pas" placeholder="Password"/>
			<input id="submit" type="submit" value="Submit"/>
		</form>
	
	<h2>Return To the Home page ! please click <a href="index.php">Here</a></h2>
</div>
	</body>
</html>