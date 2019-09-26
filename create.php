<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "avision";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$data = $_POST;
	
	$sql = "INSERT INTO `product` (`id`, `type_id`, `title`, `model`, `picture`, `flag`, `description`, `status`, `characteristic`) VALUES (NULL, '".$_POST['type_id']."', '".$_POST['title']."', '".$_POST['model']."', '".$_POST['picture']."', '".$_POST['flag']."', '".$_POST['description']."', '".$_POST['status']."', '".$_POST['characteristic']."');";
	$result = $conn->query($sql);
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
