<?php
	require_once 'credentials.php';
	
	//Connection object: <<$conn>>
	
	function connect($forceReconnect = false)
	{
		global $conn;
		if ($conn)
			if(!$forceReconnect)
				return;
			else
				disconnect();
		
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
		if ($conn) $conn->close();
	}
	function requireConnection()
	{
		global $conn;
		if(!$conn)
			die("requireConnection: No connection found!");
	}
	
	
	/* INFO:
	* Creates the table and returns "true" if everything went fine.
	* Returns "error string" if creation failed.
	*/
	function createTable($tableName, $columns, $extras = null, $engine = "InnoDB")
	{
		requireConnection();
		$extrasString = $extras != null? ', '.implode(",",$extras) : "";
		$sql = 'CREATE TABLE $tableName ( '.implode(",",$columns).' $extrasString ) ENGINE = $engine;';
		
		return $conn->query($sql)? true: $conn->error;
	}
	
	/* INFO:
	* Drops the table and returns "true" if everything went fine.
	* Returns "error string" if creation failed.
	*/
	function dropTable($tableName)
	{
		requireConnection();
		return $conn->query('DROP $tableName')? true: $conn->error;
	}
	
?>