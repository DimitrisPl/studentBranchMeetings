<?php
	require_once "credentials.php";
	//require_once "includes/db_functions.php"; //DEBUG - Probably remove
	//require_once "includes/db_names.php";  //DEBUG - Probably remove
	
	function connectToSQLServer()
	{
		$conn = new mysqli(HOST, USER, PASSWORD);
		if($conn->connect_error)
			die("Connection to database failed: " . $conn->connect_error);
		
		return $conn;
	}
	
	function connectToDatabaseInServer($conn)
	{
		$databasesDb = $conn->query("SHOW DATABASES");
		$databaseExists = false;
		while($database = ($databasesDb->fetch_assoc())['Database'])
			if($database == DATABASE)
			{
				$databaseExists = true;
				break;
			}
		
		if(!$databaseExists)
			if(!$conn->query('CREATE DATABASE '.DATABASE))
				die("Error while creating the database ".DATABASE.": $conn->error<br>\n");
		
		if(!$conn->select_db(DATABASE))
			die('Error, failed to use the newly created database. Message: $conn->error<br>\n');
		
		return $conn;
	}
	
	function createTableStructures($conn)
	{
		'CREATE TABLE user '
		
		CREATE TABLE `ieee_meeting_tool`.`user` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `human_id` INT UNSIGNED NOT NULL , `is_member` BOOLEAN NULL DEFAULT FALSE , PRIMARY KEY (`id`), UNIQUE `user_unique_human_id` (`human_id`)) ENGINE = InnoDB;
		
		$errorMessages = array();
	
		if(!$conn->query('CREATE TABLE '))
		{
			$errorMessage = $conn->error;
			break;
		}
		
		if($errorMessage != null)
		{
			
			die();
		}
	}
	
	$conn = connectToSQLServer();
	$conn = connectToDatabaseInServer($conn);
	createTableStructures($conn);
	
?>