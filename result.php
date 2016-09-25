<?php


	include('db.php');
	
	
	$LN=$_POST["amount"];
	$ID=$_POST["name"];
	$email=$_POST["id"];
	$cell=$_POST["intake"];
	$intake=$_POST["semester"];
	$dept=$_POST["program"];
	
	
	/*echo $FN."<br>";
	echo $LN."<br>";
	echo $ID."<br>";
	echo $email."<br>";
	echo $cell."<br>";*/
	$sql="INSERT INTO p_form(am,na,id,inn,se,pr) VALUES ('$LN','$ID','$email','$cell','$intake','$dept')"; 
	//echo $FN;
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>