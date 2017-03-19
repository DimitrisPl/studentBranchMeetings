<!Doctype html>
<html>
	<?php

		// include files with necessary functions.
		include './../includes/functions.php'; // basic functions header, footer and database connection.

		openPage('person'); // includes bootstrap, css files and prints navigation bar.
		connect(); // connects a test database.

		// connection test.
		if ($conn->connect_error) {
			echo "Development stage <br />";
			die("Connection to database failed: " . $conn->connect_error); // just for debug. Replace with onEmptyMainList() function.
		}
		
//		echo "Person id: " . htmlspecialchars($_GET['personId']  . "<br />";
		
		//  This shoould be replaced.
		$sql = "SELECT * from IEEEMeetingTool.proposals WHERE publicId = " . htmlspecialchars($_GET["personId"]); 
		$result = $conn->query($sql);
		
		if (!$result) {
			echo "Development stage <br />";
			echo "query: " . $sql . "<br />";
			die("404. The person does not exists");
		}
		
		$person = $result->fetch_assoc();
		
		
		
	?>
		
		
	
<!-- main page starts here. col size 10 columns. -->
		<!-- row1 as header. contains image and a list of basic labels. -->
		<div class="row">
			<div class="col-md-1"> </div> <!-- an one column sized empty space -->
			<div class="col-md-10">
				<div class="basic-info">
					<img class="speaker-img" src="<?php echo getImg($person['icon']);?>"  alt="person's image" />
					<ul class="list-group">
						<li class="list-group-item"> <?php echo $person['name']; ?> </li>
						<li class="list-group-item"> We have to  </li>
						<li class="list-group-item"> siscuss these </li>
						<li class="list-group-item"> 
							<img id="approveTRUE" class="approve" onmouseenter="approvalOn(this,1)" onmouseleave="approvalOff(this,1)" src="./../img/approveTRUE_not_selected.png"/>
							<img id="approveFALSE"class="approve" onmouseenter="approvalOn(this,2)" onmouseleave="approvalOff(this,2)" src="./../img/approveFALSE_not_selected.png"/>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-1"> </div>  <!-- an one column sized empty space -->
		</div>
		
		<!-- row2 as inforamtion. Contains the details of the person described abovr -->
		<div class="row">
			<div class="col-md-1"> </div> <!-- an one column sized empty space -->
			<div class="col-md-10">
				<fieldset class="panel descriptive-info" >
					<legend> information </legend>
					<div>This is a more detailed description. But if contains a lot of text it can be expanded.</div>
					<div id="expandedInformation" class="collapse">
						This is the expanded text text text text text text text text text text text text text text text text text text text
						 text text text text text text text text text text text text text text text text text text text text text text text
						  text text text text text text text text text text text text text text text text text text text text text text text
						   text text text text text text text text text text text text text text text text text text text text text text text
						    text text text text text text text text text text text text text text text text text text text text text text text
					</div>
					<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#expandedInformation">Show more</button>
				</fieldset>
			</div>
			<div class="col-md-1"> </div>  <!-- an one column sized empty space -->
		</div>
		
		<!-- row3 as extra links. Contains a list of extra links and contact info. -->
		<div class="row">
			<div class="col-md-1"> </div>  <!-- an one column sized empty space -->
			<div class="col-md-10">
				<div class="extra-links">
					<ul class="list-group">
						<li class="list-group-item"> Extra link1: <a href="<?php echo "#" ?>"> <?php echo $person['external_links']; ?></a> </li>
						<li class="list-group-item"> Extra link2: <a href="#"> A decode function is needed here </a> </li>
						<li class="list-group-item"> Extra link3: <a href="#"> the link 3</a> </li>
					</ul>
			</div>
			<div class="col-md-1"> </div>  <!-- an one column sized empty space -->
		</div>
	
		
		
		
		
		
		
	<?php	
		// disconect from the database.
		disconnect();
		
		// print footer.
		printFooter();	
	
	?>
</html>	