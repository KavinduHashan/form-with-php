<?php include 'conn.php'; ?>

<?php
	$firstname=$_REQUEST["firstname"];
	$lastname=$_REQUEST["lastname"];
	$email=$_REQUEST["email"];
	$telephone=$_REQUEST["telephone"];
	$message=$_REQUEST["message"];
	

	$sql="INSERT INTO cus_contactinfo(firstname, lastname, email, telephone, message) 
	VALUES('$firstname','$lastname','$email','$telephone','$message')";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
	  echo "<script>alert('Thanks for join with us..!');window.location.href='../index.html' ;</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
