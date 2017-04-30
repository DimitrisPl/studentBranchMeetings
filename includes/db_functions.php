<?php
	require_once 'credentials.php';
	
	function connect()
	{
		global $conn, $servername, $username, $password, $dbName;
		$conn = new mysqli($servername, $username, $password, $dbName);
	}
	
	function disconnect() {
		global $conn; 
		if ($conn) $conn->close();
	}

?>