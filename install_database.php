<?php
	require_once "includes/db_functions.php"; //DEBUG - Probably remove
	
	define('DATABASE_EXISTS_ERROR', 1007);
	define('TABLE_EXISTS_ERROR', 1050);
	
	function createDatabase($installClean=false)
	{
		global $conn;
		
		if($installClean)
			$conn->query("DROP DATABASE ieee_meeting_tool");
		
		$statuses['Database'] = $conn->query(
			"CREATE DATABASE ieee_meeting_tool DEFAULT CHARACTER SET utf8 COLLATE utf8_bin"
		);
		
		if($statuses['Database'] === true || $conn->errno === DATABASE_EXISTS_ERROR)
			return true;
		return false;
	}
	
	function createTableStructures($installClean=false)
	{
		global $conn;
		
		$tableNames = array(
			'approved_speaker',
			'category',
			'category_to_speaker',
			'contact_info',
			'human',
			'proposed_speaker',
			'setting',
			'url',
			'user',
			'vote'
		);
		
		if($installClean)
			foreach($tableNames as $tableName)
				$conn->query("DROP TABLE $tableName");
		
		$statuses['TabelApprovedSpeaker'] = $conn->query(
			"CREATE TABLE approved_speaker (
				id int(10) unsigned NOT NULL AUTO_INCREMENT,
				human_id int(10) unsigned NOT NULL,
				talk_subject varchar(80) COLLATE utf8_bin NOT NULL,
				short_description varchar(600) COLLATE utf8_bin NOT NULL,
				extra_info text COLLATE utf8_bin,
				upvotes int(10) unsigned NOT NULL DEFAULT '0',
				downvotes int(10) unsigned NOT NULL DEFAULT '0',
				PRIMARY KEY (id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin"
		) || $conn->errno." ".$conn->error;
		
		$statuses['TabelCategory'] = $conn->query(
			"CREATE TABLE category (
				id int(10) unsigned NOT NULL AUTO_INCREMENT,
				name varchar(50) COLLATE utf8_bin NOT NULL,
				photo varchar(300) COLLATE utf8_bin DEFAULT NULL,
				PRIMARY KEY (id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT"
		) || $conn->errno." ".$conn->error;
		
		$statuses['TabelCategoryToSpeaker'] = $conn->query(
			"CREATE TABLE category_to_speaker (
				approved_speaker_id int(10) unsigned NOT NULL,
				category_id int(10) unsigned NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin"
		) || $conn->errno." ".$conn->error;
		
		$statuses['TabelContactInfo'] = $conn->query(
			"CREATE TABLE contact_info (
				id int(10) unsigned NOT NULL AUTO_INCREMENT,
				human_id int(10) unsigned NOT NULL,
				type varchar(80) COLLATE utf8_bin NOT NULL COMMENT 'eg.: Skype, Facebook, etc',
				value varchar(200) COLLATE utf8_bin NOT NULL,
				is_public tinyint(1) NOT NULL DEFAULT '1',
				PRIMARY KEY (id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin"
		) || $conn->errno." ".$conn->error;
		
		$statuses['TabelHuman'] = $conn->query(
			"CREATE TABLE human (
				id int(10) unsigned NOT NULL AUTO_INCREMENT,
				full_name varchar(100) COLLATE utf8_bin NOT NULL,
				proffession varchar(100) COLLATE utf8_bin DEFAULT NULL,
				photo varchar(300) COLLATE utf8_bin DEFAULT NULL,
				PRIMARY KEY (id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin"
		) || $conn->errno." ".$conn->error;
		
		$statuses['TabelUser'] = $conn->query(
			"CREATE TABLE proposed_speaker (
				id int(10) unsigned NOT NULL AUTO_INCREMENT,
				human_id int(10) unsigned NOT NULL,
				by_user_id int(10) unsigned NOT NULL,
				talk_subject varchar(100) COLLATE utf8_bin DEFAULT NULL,
				description text COLLATE utf8_bin NOT NULL,
				about_speakers_work text COLLATE utf8_bin,
				PRIMARY KEY (id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin"
		) || $conn->errno." ".$conn->error;
		
		$statuses['TabelSetting'] = $conn->query(
			"CREATE TABLE setting (
				id int(10) unsigned NOT NULL AUTO_INCREMENT,
				title varchar(50) COLLATE utf8_bin NOT NULL,
				value varchar(80) COLLATE utf8_bin NOT NULL,
				PRIMARY KEY (id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin"
		) || $conn->errno." ".$conn->error;
		
		$statuses['TableUrl'] = $conn->query(
			"CREATE TABLE url (
				id int(10) unsigned NOT NULL AUTO_INCREMENT,
				approved_speaker_id int(10) unsigned NOT NULL,
				link varchar(300) COLLATE utf8_bin NOT NULL,
				PRIMARY KEY (id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin"
		) || $conn->errno." ".$conn->error;
		
		$statuses['TableUser'] = $conn->query(
			"CREATE TABLE user (
				id int(10) unsigned NOT NULL AUTO_INCREMENT,
				human_id int(10) unsigned NOT NULL,
				is_member tinyint(1) NOT NULL DEFAULT '0',
				PRIMARY KEY (id),
				UNIQUE KEY user_unique_human_id (human_id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin"
		) || $conn->errno." ".$conn->error;
		
		$statuses['TableVote'] = $conn->query(
			"CREATE TABLE vote (
				user_id int(10) unsigned NOT NULL,
				approved_speaker_id int(10) unsigned NOT NULL,
				is_upvote tinyint(1) NOT NULL DEFAULT '1'
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin"
		) || $conn->errno." ".$conn->error;
		
		foreach($statuses as $key => $status)
			if($status!=1 && $status!= TABLE_EXISTS_ERROR)
				echo "Error: $status<br>";
	}
	
	connect(false, true);
	echo "createDatabase: ".(createDatabase()?"OK √":"FAIL ╫")."<br>";
	if(!$conn->select_db(DATABASE))
		die("ERROR: Couldn't select database ".DATABASE." installation terminated!");
	createTableStructures(true);
?>