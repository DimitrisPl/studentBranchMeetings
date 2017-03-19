<?php

	include 'paths.php';
	
	function cssAndScripts($page) {
		if ($page == 'home') {
			return '<link rel="stylesheet" type="text/css"  href="/style/home.css" />';
		} else if ($page == 'propose') {
			return '<link rel="stylesheet" type="text/css"  href="/style/propose.css" />';
		} else if ($page == 'person') {
			return '
				<link rel="stylesheet" type="text/css"  href="/style/person.css" />
				<script src="/scripts/personStyle.js"> </script>
			';
		} else if ($page == 'proposed') {
			return '<link rel="stylesheet" type="text/css"  href="/style/proposed.css" />';
		} else {
			return '';
		}
	}
	
	function printHeader($page) {
	echo '	
		<!-- This is a test front end file. Will be have a php extension. -->
		<head>
			<meta charset="utf-8">
			<title> ATEITH IEE student branch - programTool</title>
			<!-- bootstrap inputs -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			
			<!-- native inputs -->
			<link rel="icon" type="image/png" href="./img/favicon.png">
			<link rel="stylesheet" type="text/css"  href="/style/main.css" />
			' . 
				cssAndScripts($page) 
			. '

		</head>
		<body>
			
			
	';
	}
	
	function printNavBar($page) {
		
		global $home;
		global $propose;
		global $proposed;
		
		echo '
			<!-- Navigation bar -->
			<div class="row">
				<div class="col-md-12">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="/index.php">IEEE meeting program tool</a>
					</div>
					<ul class="nav navbar-nav">
					  <li class="' . ($page == "home" ? 'active' : 'inactive') . '"><a href="' . $home . '">Home</a></li>
					  <li class="' . ($page == "propose" ? 'active' : 'inactive'). '"><a href="' . $propose . '">Propose</a></li>
					  <li class="' . ($page == "proposed" ? 'active' : 'inactive') . '"><a href="' . $proposed  . '">Proposed</a></li>
					</form>
					</ul>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
						  </button>
						</div>
					</div>
				  </div>
			</nav>
			</div>
		</div>
		';
	}

	function printFooter() {
		echo '
				<!-- footer -->
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-default-bottom navbar-default footer">
							<br/><br/>
							<p> All rights reserved. </p>
						</div>
					</div>
				</div>
			</body>
		';
	}
	
	function openPage($page) {
		printHeader($page);
		printNavBar($page);
	}
		
	function connect()  {
		$servername = "localhost";
		$username = "IEEEMember";
		$password = "notSimple";
		
		global $conn;
		$conn = new mysqli($servername, $username, $password);
	}
	
	function disconnect() {
		global $conn; 
		if ($conn) $conn->close();
	}

	function onEmptyMainList() {
		echo ' 
		<div class="row">
			<div class="col-md-2"> </div> <!-- this is a two columns empty space -->
				<div class="panel panel-warning">
					<div class="panel-heading"> Sorry, no speakers are available...</div>
					<div class="panel-body">
						It seems that there are no speakers at the voting right now.
						Please come back later.
					</div>
				</div>
			<div class="col-md-2"> </div> <!-- this is a two columns empty space -->
		</div>
		';
	}
	
	function getPersonalPage($id) {
		return $person . '/' . $id;
	}
	
	function getImg($name) {
		global $personal_img_path;
		return $personal_img_path . $name;
	}
	
	?>