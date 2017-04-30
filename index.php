<!Doctype html>
<html>
	<?php
	
		// include files with necessary functions.
		include './includes/functions.php'; // basic functions header, footer and database connection.
		include './includes/prints_for_index.php'; // prints for this page only.
			
		openPage("home"); // includes bootstrap, css files and prints navigation bar.
		connect(); // connects a test database.
		
		// connection test.
		if ($conn->connect_error) {
			echo "Development stage <br />";
			die("Connection to database failed: " . $conn->connect_error); // just for debug. Replace with onEmptyMainList() function.
		}

		// get data. An array of persons.
		$sql = "SELECT * from IEEEMeetingTool.proposals"; //WHERE active > 0
		$result = $conn->query($sql);		

		// print formated data.
		printMainPanel($result);		
		
		// disconect from the database.
		disconnect();
		
		// print footer.
		printFooter();
			
	?>
</html>		