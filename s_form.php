<?php


	include('db.php');
	
	
	$FN=$_POST["FN"];
    $LN=$_POST["LN"];
    $ID=$_POST["ID"];
	$email=$_POST["email"];
	$cell=$_POST["cell"];
	$intake=$_POST["intake"];
	$dept=$_POST["dept"];
	$Password=$_POST["pas"];

	
	/*echo $FN."<br>";
	echo $LN."<br>";
	echo $ID."<br>";
	echo $email."<br>";
	echo $cell."<br>";*/
	$sql="INSERT INTO s_form VALUES ('$FN','$LN','$ID','$email','$cell','$intake','$dept','$Password')"; 
	//echo $sql;
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>