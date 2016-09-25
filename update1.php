
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sample</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
        <div class="student">
			<form action="p_form.php" method="POST">
			<input type="text"name="First Name" placeholder="First Name" value="<?php echo $_GET['fn'];?>"/>
			<input type="text" name="Last Name"placeholder="Last Name" value="<?php echo $_GET['ln'];?>"/>
			<input type="text" name="Id"placeholder="Id" value="<?php echo $_GET['id'];?>"/>
			<input type="text" name="Email"placeholder="Email" value="<?php echo $_GET['em'];?>"/>
			<input type="text" name="Phone"placeholder="Phone" value="<?php echo $_GET['ph'];?>"/>
			<input type="text" name="Intake"placeholder="Intake" value="<?php echo $_GET['inn'];?>"/>
			<input type="text" name="Dept"placeholder="Dept" value="<?php echo $_GET['de'];?>"/>
			<input type="text" name="Password"placeholder="Password" value="<?php echo $_GET['pass'];?>" readonly/>
			
			<input id="click" type="submit" value="Click"/>
		</form>
	
  </body>
</html>

	
	
</div>
