<?php
	$conn = new mysqli('localhost', 'root', '', 'web_bai3');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>