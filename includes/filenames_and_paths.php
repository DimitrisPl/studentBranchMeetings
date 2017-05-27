<?php
	/* INFO:
		Filename = Name of file in filesystem structure (eg: 123.php)
		Path = Internal link for php (eg: "C:\\123.php" , "/root/hacked.php", etc)
		Url = External links for browsers (eg: www.OurSite.php)
	*/
	
	//==== PAGE NAMES ================================
	define('HOME_NAME', 'Home');
	define('PROPOSE_NAME', 'Propose');
	define('PROPOSED_NAME', 'Proposed');
	define('PROFILE_NAME', 'Profile');
	define('DATABASE_INSTALLATION_NAME', 'Install Database');
	//==== PAGE FILENAMES ============================
	define('HOME', 'home.php');
	define('PROPOSE', 'propose.php');
	define('PROPOSED', 'proposed.php');
	define('PROFILE', 'approved_profile.php');
	define('DATABASE_INSTALLATION', 'install_database.php');
	//==== INCLUDED FILENAMES  =======================
	define('LOGIN_AND_REGISTER_FORM', 'login_and_register_form_and_info.php');
	define('NAVBAR', "navbar.php");
	define('HEADER','header.php');
	define('FOOTER','footer.php');
	define('CREDENTIALS','credentials.php');
	define('DATABASE_FUNCTIONS','db_functions.php');
	define('FUNCTIONS', 'functions.php');
	
	//==== PATHS =====================================
	define('SITE_PATH', "B:\\XAMPP\\htdocs\\studentBranchMeetings\\");
	define('IMAGES_PATH', SITE_PATH."img\\");
	define('INCLUDES_PATH', SITE_PATH."includes\\");
	define('TEMPLATES_PATH', "templates\\");
	
	//==== FILE PATHS ================================
	define('HOME_FILE', 					HOME);
	define('PROPOSE_FILE', 					PROPOSE);
	define('PROPOSED_FILE', 				PROPOSED);
	define('PROFILE_FILE', 					PROFILE);
	define('DATABASE_INSTALLATION_FILE', 	DATABASE_INSTALLATION);
	
	define('LOGIN_AND_REGISTER_FORM_FILE',	INCLUDES_PATH.LOGIN_AND_REGISTER_FORM);
	define('NAVBAR_FILE', 					INCLUDES_PATH.NAVBAR);
	define('HEADER_FILE', 					INCLUDES_PATH.HEADER);
	define('FOOTER_FILE', 					INCLUDES_PATH.FOOTER);
	define('CREDENTIALS_FILE', 				INCLUDES_PATH.CREDENTIALS);
	define('DATABASE_FUNCTIONS_FILE', 		INCLUDES_PATH.DATABASE_FUNCTIONS);
	define('FUNCTIONS_FILE', 				INCLUDES_PATH.FUNCTIONS);
	
	//==== URLS ======================================
	define('IMAGES_LINK', "img/");
	define('STYLES_LINK', "style/");
	define('SCRIPTS_LINK', "scripts/");
	
	//==== FUNCTIONS =================================
	function template($pageFileName) //From |PAGE FILENAMES|
	{
		return TEMPLATES_PATH.str_replace("php", "tpl", $pageFileName);
	}
?>