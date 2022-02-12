<?php
	$conn = mysqli_connect('localhost', 'root', '', 'pdf_upload');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>