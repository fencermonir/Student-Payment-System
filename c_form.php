<?php


	include('db.php');

	
	
	$LN=$_POST["Fn"];
	$ID=$_POST["Ph"];
	$email=$_POST["Ad"];
	$cell=$_POST["Em"];
	$intake=$_POST["Me"];
	
	
	
	/*echo $FN."<br>";
	echo $LN."<br>";
	echo $ID."<br>";
	echo $email."<br>";
	echo $cell."<br>";*/
	$sql="INSERT INTO c_form VALUES ('$LN','$ID','$email','$cell','$intake')"; 
	//echo $FN;
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>