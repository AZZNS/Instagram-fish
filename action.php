<?php 
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$serverName = "localhost";
	$dBUsername = "root";
	$dBPassword = "";
	$dBName = "loginQuery";
	$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
	if ($conn) {
		echo "Connection Established<br>";
	} else {
		die("didnt work :/");
	}

	$sql = ("INSERT INTO users(usersName, usersPassword)
			VALUES('$username', '$password')");
	if(mysqli_query($conn, $sql)) {
		echo "registered";
		header("Location: concours.html");
	} else {
		die("registration failed...");
	}
?>