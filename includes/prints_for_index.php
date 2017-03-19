<?php

	include 'paths.php';

	function printPerson($id, $name, $positiveVotes, $negativeVotes, $icon) {
		global $person;
		global $personal_img_path;
		echo '
			<div class="panel panel-default">
			<div class="panel-heading"><a href="'. $person . '?personId=' . $id .'"> '. $name . '</a> </div>
			<div class="panel-body">
				<a href="'. $person . '?personId=' . $id .'">
					<img src="' . $personal_img_path . $icon . '" class="img-rounded lala" />
				</a>
				<p>' .
					// this will be replaced.
					 "This is a short description. text text text text text text text text text text text text text text text text text text"
				. 
				'</p>
			</div>
			</div>
		';
	}
	
	function printNewRowStart() {
		echo '
			<div class="row">
				<div class="col-md-2"> </div> <!-- this is a two columns empty space -->
				<div class="panel-group">
					<div class="col-md-8">
						<!-- here is the place for the panels -->
		';
	}
	
	function printNewRowEnd() {
		echo '
					</div>
				</div>
			<div class="col-md-2"> </div> <!-- this is a two columns empty space -->
		</div>
		';
	}
	
	function printMainPanel($persons) {
		$number_of_rows = $persons->num_rows;
		
		if (!$persons) {
			onEmptyMainList();
			return;
		}
		
		echo '
			<!-- main body -->
			<!-- every row has 3 panels -->
		';
		
		printNewRowStart();
		
		while($person = $persons->fetch_assoc()) {
//			if ($person['active'] > 0)
			printPerson($person["publicId"], $person["name"], $person["positive_votes"], $person["negative_votes"], $person["icon"]);
		}
		printNewRowEnd();	
	}
	
?>