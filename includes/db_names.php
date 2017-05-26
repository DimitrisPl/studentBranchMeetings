<?php
	define('TABLE_USER','user');
	define('TABLE_CATEGORY','talk_category');
	define('TABLE_CATEGORY_TO_SPEAKER','talk_category_to_speaker');
	define('TABLE_APROVED_SPEAKER','aproved_speaker');
	define('TABLE_HUMAN','human');
	define('TABLE_PROPOSED_SPEAKER','proposed_speaker');
	define('TABLE_VOTE','vote');
	define('TABLE_LINK','link');
	define('TABLE_OPTION','option');
	
	global $ALL_TABLES_NAMES;
	$ALL_TABLES_NAMES = array(
		TABLE_USER,
		TABLE_CATEGORY,
		TABLE_CATEGORY_TO_SPEAKER,
		TABLE_APROVED_SPEAKER,
		TABLE_HUMAN,
		TABLE_PROPOSED_SPEAKER,
		TABLE_VOTE,
		TABLE_LINK,
		TABLE_OPTION
	);
	
	$DATABASE_STRUCTURE = array(
		TABLE_HUMAN => array(
			'creationOrder' => 0,
		),
		
		TABLE_USER => array(
			'creationOrder' => 1,
			'columns' => array(
				'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT',
				'human_id' => 'INT UNSIGNED NOT NULL',
				'is_member' => 'BOOLEAN NULL DEFAULT FALSE'
			),
			'extras' => array(
				'PRIMARY KEY (id)',
				'UNIQUE user_unique_human_id (human_id)',
				'FOREIGN KEY (human_id) REFERENCES human(id)'
			)
			
			ALTER TABLE `user` ADD CONSTRAINT `user_human_id_to_human_id` FOREIGN KEY (`human_id`) REFERENCES `human`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE
		),
		
		TABLE_CATEGORY => array(
			'columns' => array(
				
			),
			'extras' => array(
				
			)
		),
	);
	
	
	/*
		Table-category
		(
			*id,
			*category: varchar(60),
			categoryPhoto: varchar(300) | url
		)
		Table-category_to_speaker //Ξεχωριστός πίνακας για να γίνεται συσχέτιση πολλά με πολλά
		(
			*aprovedSpeakerId: foreign key,
			*talkCategoryId: foreign key,
		)
		Table-aproved_speaker
		(
			*id,
		*HumanId: foreign key,
		*talkSubject: varchar(50) ,
		*shortDescription: varchar(600) | keep this short as quick info for lazy people,
		*ExtraInfo: text | full-blown text για όσους θέλουν πραγματικά να μάθουν,
		Φωτογραφία: url,
		Upvotes:int,
		Downvotes: int | είπαμε ότι τα μέλη του branch μποούν να κάνουν downvote για 
		διασφάλιση ποιότητας,
		)
		Table-human
		(
		*Id,
		*Fullname : text,
		Mobile: varchar(30) | text μορφή γιατί μπορεί να βάλει +30 ή ότι άλλο χαζό - 30 
		χαρακτήρες, γιατί μπορεί να βάλει και κινητό και τηλέφωνο… ,
		mobilePublic: boolean | αν θέλει να φαίνεται δημόσια(σε όλους) το κινητό,
		E-mail: varchar(50),
		emailPublic: boolean | αν θέλει να φαίνεται δημόσια(σε όλους) το email,
		Facebook: varchar(250) | το link για το facebook του,
		facebookPublic: boolean | αν θέλει να φαίνεται δημόσια(σε όλους) το email,
			Skype: varchar(50)
			skypePublic: boolean | αν θέλει να φαίνεται δημόσια(σε όλους) το skype,
		)

		Table-proposed_speaker
		(
		*id,
		*HumanId: foreign key,
		*generalInfo: text | basic description about the speaker and/or the subject/hours etc,
		proffession: varchar(50) | a title for the proffession/current_title
		aboutHisHerWork: text | Some words about the work/job he/she is doing
		talkSubject: varchar(100),
		*byUserId: το id αυτού που έκανε την πρόταση,
		)
		Table-vote
		(
		*UserId : foreign key,
		*speakerId : foreign key,
		*upOrDown : boolean | is upvote: true, else: false.
		)
		Table-links //A storage for external links
		(
			*id,
			*approvedSpeakerId: foreign key,
			*link: varchar(300)
		)
		Table-options
		(
			*id,
			*optionTitle: varchar(50) | Describes/identifies the option,
			*optionValue: varchar(50) | The value for an option
		)
*/

?>