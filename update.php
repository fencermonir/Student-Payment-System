
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sample</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
        <div class="student">
			<form action="cash_form.php" method="POST">
			<input type="text" name="Id" placeholder="Id" value="<?php echo $_GET['id'];?>"/>
			<input type="text" name="Amount" placeholder="Amount" value="<?php echo $_GET['amount'];?>" readonly/>
			
			<input id="click" type="submit" value="Click"/>
		</form>
	
  </body>
</html>

	
	
</div>
