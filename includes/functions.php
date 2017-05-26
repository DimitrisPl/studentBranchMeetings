<?php
	/* INFO:
	* This might come in handy... For example for scarying hackers? :P ... won't work though xD
	*/
	function clientIp()
	{
		return $_SERVER['REMOTE_ADDR'];
	}
	
	/* INFO:
	* That will be insteresting. Maybe we'll find pc's differ in port from bots crawlers etc.
	*/
	function clientPort()
	{
		return $_SERVER['REMOTE_PORT'];
	}
	
	//========= URL functions =========
	function requestedPagename() //Eg.: home.php
	{
		$page = requestedPage();
		$foundAt = strrpos($page,"/");
		if($foundAt === false || $foundAt == strlen($page)-1)
			return $page;
		return substr($page,$foundAt+1);
	}
	
	//---- EXTERNAL links for HTTP ----
	function requestedPage() //Eg.: /any/folder/home.php
	{
		return str_replace('?'.$_SERVER['QUERY_STRING'], '', $_SERVER['REQUEST_URI']);
	}
	function fullRequestedPage() //Eg.: http://localhost/any/folder/home.php
	{
		return $_SERVER['SERVER_NAME'].requestedPage();
	}
	function linkQuery() //Eg.: 123=wtf&22=die
	{
		return $_SERVER['QUERY_STRING'];
	}
	
	//---- INTERNAL paths for PHP ----
	function currentRequestedFilePath() //The script the user request landed to. In required files you get the "landed to" file.
	{
		return $_SERVER['SCRIPT_FILENAME'];
	}
	function currentFilePath() //Eg.: the script calling the method
	{
		return __FILE__;
	}
	function siteBaseFolder() //Eg.: C:\\XAMP\\htdocs
	{
		return $_SERVER['DOCUMENT_ROOT'];
	}
	
?>