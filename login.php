<?php


	include('db.php');
	
	
	
	$UI=$_POST["ui"];
	$pass=$_POST["pass"];
	
	
	
	
$sql = "SELECT id, pass FROM s_form where id='$UI' and pass='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Welcome Your are in loged In";
    }
 else {
    echo "Wrong User Id Or Password";
}

mysqli_close($conn);


?>