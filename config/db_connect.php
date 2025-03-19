<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'panucci', 'panucci1234', 'panucci_pizza');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>