<?php
		// include files with necessary functions.
		include './../includes/functions.php'; // basic functions header, footer and database connection.
		include './../includes/prints_for_proposed.php'; 

		openPage('proposed'); // includes bootstrap, css files and prints navigation bar.
		connect(); // connects a test database.

		// connection test.
		if ($conn->connect_error) {
			echo "Development stage <br />";
			die("Connection to database failed: " . $conn->connect_error); // just for debug. Replace with onEmptyMainList() function.
		}
		
		// get data. An array of persons.
		$sql = "SELECT * from IEEEMeetingTool.proposed"; 
		$result = $conn->query($sql);
		
		printMainPanel($result);
		
		// disconect from the database.
		disconnect();	
?>