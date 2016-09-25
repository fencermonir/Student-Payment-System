<?php
	include('db.php');
	include('img.php');
	include('show2.php');
	
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="wrapper">
	
	<center>
	<div class="student">
		<form action="result.php" method="POST">
		<input type="text" name="amount" placeholder="Amount"/>
		<input type="text" name="name" placeholder="Name"/>
		<input type="text" name="id" placeholder="ID"/>
		<input type="text" name="intake" placeholder="Intake"/>
		<input type="text" name="semester" placeholder="semester"/>
		<input type="text" name="program" placeholder="Program"/>
		
		<input type="submit" value="Accept"/>
		
		</form>
		
		
	
	<h2>Return To the Home page ! please click <a href="index.php">Here</a></h2>
</div>
</center>
<br>
		<br>
		<br>
		<div class="signature-left">
--------------------------------------------
	<h2 >Student Signature</h2>
	</div>
	<div class="signature-right">
-------------------------------------
<h2>office singnature</h2>
	</div>
	</div>
	</body>
</html>