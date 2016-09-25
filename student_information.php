<?php
include('db.php');
include('img.php');
include('show.php');
 ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="student">
			<form action="c_form.php" method="POST">
			<input type="text"name="Fn" placeholder="Full Name"/>
			<input type="text" name="Ph"placeholder="Phone Number"/>
			<input type="text"name="Ad" placeholder="Address"/>
			<input type="text"name="Em"placeholder="E-mail"/>
			<input type="textarea"name="Me" placeholder="message"/>
			<input id="click" type="submit" value="Click"/>
		</form>
	
	<!--h2>Return To the Home page ! please click <a href="index.html">Here</a></h2!-->
</div>
	</body>
</html>
