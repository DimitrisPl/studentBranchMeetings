<?php
	require "includes/filenames_and_paths.php";
	require DATABASE_FUNCTIONS_FILE;
	include FUNCTIONS_FILE;
	
	connect();
	
	global $speakers;
	$speakers = array();
	$speakersDb = $conn->query(
		"SELECT * FROM approved_speaker aps ".
		"INNER JOIN human h ON h.id = aps.human_id "
	);
	
	while($speaker = $speakersDb->fetch_array())
		$speakers[] = $speaker;
	
	require template(HOME);
	
	disconnect();
?>