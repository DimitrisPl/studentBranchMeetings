<?php
	require "includes/filenames.php";
	require "includes/db_functions.php";
	include 'includes/functions.php';
	
	connect(); // connects a test database.
	
	$sql = "SELECT * from proposals"; //WHERE active > 0
	$result = $conn->query($sql);		
	
	require "home.tpl";
	
	disconnect();
?>