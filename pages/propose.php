<?php
	require '../includes/filenames_and_paths.php';
	require FUNCTIONS_FILE; // basic functions header, footer and database connection.
?>

<!Doctype html>
<html>
	<head>
		<?php require HEADER_FILE;?>
	</head>
	<body>
		<div class="row">
			<div class="col-md-3"> </div> <!-- an one column sized empty space -->
			<div class="col-md-3">
<!--				<div class="panel-group"> -->
					
					<div class="img-propose">
						<img src="./../img/favicon.png" />
						<input type="file" id="proposeImg" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<h2> Propose a person </h2>
						<form id="proposeForm">
							<div class="row form-row">
								<div class="col-md-4"> <label for="name" /> Name: </label> </div>
								<div class="col-md-8"> <input type="text" id="name" /> </div>
							</div>
							<div class="row form-row">
								<div class="col-md-4"> <label for="contact"> Contanct info: </label> </div>
								<div class="col-md-8"> <textarea id="contact"> </textarea> </div>
							</div>
							<div class="row form-row">
								<div class="col-md-4"> <label for="description"> Description: </label> </div>
								<div class="col-md-8"> <textarea id="description"> </textarea> </div>
							</div>
							<div class="row form-row">
								<div class="col-md-4"> <label for="links"> External links </label> </div>
								<div class="col-md-8"> <textarea id="links"> </textarea> </div>
							</div>
							<div class="row form-row">
								<br/>
								<div class="col-md-8"> <input class="btn-primary" type="submit" id="submit" value="Propose!" /> </div>								
							</div>
							
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-2"> </div> <!-- an one column sized empty space -->
		
		
		
	<? require FOOTER_FILE; ?>
	</body>
</html>	