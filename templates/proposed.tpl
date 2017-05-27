<!Doctype html>
<html>
	<!-- This is a test front end file. Will be have a php extension. -->
	<!-- approval image from https://pixabay.com/p-148087/?no_redirect labeled as free for commersial use -->
	<head>
		<?php require "includes/header.php"; ?>
	</head>
	<body>
		
		<!-- Navigation bar -->
		<div class="row">
			<div class="col-md-12">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="./../index.html">IEEE meeting program tool</a>
				</div>
				<ul class="nav navbar-nav">
				  <li><a href="./../index.html">Home</a></li>
				  <li><a href="./non_ieee_propose.html">Propose</a></li>
				  <li class="active"><a href="./proposed.html">Proposed</a></li>
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
		
		<!-- main body starts here. Every row is a proposal. -->
		
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
								<h3> Person's name </h3>
								<p> This is a shrt description on what this person is about. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"> </div>
		</div>
		
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
								<h3> Person's name </h3>
								<p class="description"> This is a shrt description on what this person is about about about about about about
								 about about about about about about about about about about about about about about about about about about about
								  about about about about about about about about about about about about about about about about about about about
								   about about about about about about about about about about about about about about about about about. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"> </div>
		</div>
		
		
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
								<h3> Person's name </h3>
								<p> This is a shrt description on what this person is about. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3"> </div>
		</div>
		
		<?php require 'includes/footer.php'; ?>
		<!-- footer 
		<div class="row">
			<div class="col-md-12">
				<div class="navbar-default-bottom navbar-default footer">
					<br/><br/>
					<p> All rights reserved. </p>
				</div>
			</div>
		</div>
		-->
		
	</body>
</html>