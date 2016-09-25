<?php


	include('db.php');
	
	
	$LN=$_POST["id"];
	$ID=$_POST["amount"];
	
	
	
	/*echo $FN."<br>";
	echo $LN."<br>";
	echo $ID."<br>";
	echo $email."<br>";
	echo $cell."<br>";*/
	$sql="INSERT INTO cash VALUES ('$LN','$ID')"; 
	//echo $FN;
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>