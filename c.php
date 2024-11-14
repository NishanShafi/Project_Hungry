<?php
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = $_POST['dob'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','hungry');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login(fname, email, password,dob) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $fname, $email, $password, $dob);
		$execval = $stmt->execute();


		$stmt->close();
		$conn->close();
	}
?>