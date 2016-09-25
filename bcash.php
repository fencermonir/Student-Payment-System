<?php
include('db.php');
include('img.php');
include('show1.php');


 ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="student">
			<form action="cash_form.php" method="POST">
			<input type="text"name="id" placeholder="Id"/>
			<input type="text" name="amount"placeholder="Amount"/>
			
			<input id="click" type="submit" value="Click"/>
		</form>
	
	
</div>
	</body>
</html>
