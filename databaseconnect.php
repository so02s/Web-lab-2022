<?php

	$connect = mysqli_connect('localhost','root','','tovars_table');

	if (!$connect) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully!";
	mysqli_close($connect);
	?>