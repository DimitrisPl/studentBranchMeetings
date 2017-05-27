<?php
	require_once 'credentials.php';
	
	function connect($forceReconnect = false, $selectNoDb = false)
	{
		global $conn;
		if ($conn)
			if(!$forceReconnect)
				return;
			else
				disconnect();
		
		if($selectNoDb)
			$conn = new mysqli(HOST, USER, PASSWORD);
		else
			$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
		
		if($conn->connect_error)
		{
			echo "Development stage <br />";
			die("Connection to database failed: " . $conn->connect_error);
		}
	}
	function disconnect()
	{
		global $conn;
		if ($conn)
			$conn->close();
	}
	function requireConnection()
	{
		global $conn;
		if(!$conn)
			die("requireConnection: No connection found!");
	}
?>