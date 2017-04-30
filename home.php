<?php
	include './includes/functions.php'; // basic functions header, footer and database connection.
	
	connect(); // connects a test database.
	
	if ($conn->connect_error)
	{
		echo "Development stage <br />";
		die("Connection to database failed: " . $conn->connect_error); // just for debug. Replace with onEmptyMainList() function.
	}

	// get data. An array of persons.
	$sql = "SELECT * from proposals"; //WHERE active > 0
	$result = $conn->query($sql);		
	
	require "home.tpl";
	
	// disconect from the database.
	disconnect();	
?>