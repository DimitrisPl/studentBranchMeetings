<?php

	function printPerson($name, $description) {
		echo '
			<div class="row">
			<div class="col-md-3"> </div>
			<div class="col-md-6">
				<div class="panel-group">
					<div class="panel">
						<div class="row">
							<div class="col-md-4 panel-controls"> 
								<img class="img-default icon" src="./../img/img1.png" /> 
								<button class="btn-success">Approve</button>
								<button class="btn-danger">Decline </button>							
							</div>
							<div class="col-md-8"> 
								<h3> ' . $name . '</h3>
								<p> ' . $description . ' </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"> </div>
		</div>
		';
	}
	
	function printMainPanel($persons) {
		$number_of_rows = $persons->num_rows;
		
		if (!$persons) {
			onEmptyMainList();
			return;
		}

		while($person = $persons->fetch_assoc()) {
			printPerson($person["name"],  "This is a short description description description description description ");
		}

	}


?>