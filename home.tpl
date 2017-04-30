<!Doctype html>
<html>
	<head>
		<?php require "includes/header.php";?>
	</head>
	<body>
		<!-- Navigation bar -->
		<div class="row">
			<div class="col-md-12">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="./index.html">IEEE meeting program tool</a>
				</div>
				<ul class="nav navbar-nav">
				  <li class="active"><a href="./index.html">Home</a></li>
				  <li><a href="./pages/non_ieee_propose.html">Propose</a></li>
				  <li><a href="./pages/proposed.html">Proposed</a></li>
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
		
		<!-- main body --> <?php
		if($result->num_rows == 0)
		{ ?>
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
			</div> <?php
		} 
		else
		{
			$counter = 1;
			while(mysqli_fetch_array($result))
			{
				if($counter % 3)//every three make a new row..
				{}
				?>
				<!-- every row has 3 panels -->
				<div class="row">
					<div class="col-md-2"> </div> <!-- this is a two columns empty space -->
					<div class="panel-group">
						<div class="col-md-8">
							<!-- here is the place for the panels -->
							<!-- 1. -->
							<div class="panel panel-default">
							  <div class="panel-heading"><a href="./pages/person.html"> Person's 1 name </a> </div>
							  <div class="panel-body">
								<img src="./img/img1.png" class="img-rounded lala" />
								<p>
									This is a person's 1 short description.
								</p>
							  </div>
							</div>
							
							<!-- 2 -->
							<div class="panel panel-default">
							  <div class="panel-heading">Person's 2 name</div>
							  <div class="panel-body">
								<img src="./img/img2.png" class="img-rounded lala" />
								<p>
									This is a person's 2 short description.
								</p>
							  </div>
							</div>
							
							<!-- 3 -->
							<div class="panel panel-default">
							  <div class="panel-heading">Person's 3 name</div>
							  <div class="panel-body">
								<img src="./img/img3.jpg" class="img-rounded lala" />
								<p>
									This is a person's 3 short description.
								</p>
							  </div>
							</div>	
						</div>
					</div>
					<div class="col-md-2"> </div> <!-- this is a two columns empty space -->
				</div>
				
				<!-- next row goes here -->
				<div class="row">
					<div class="col-md-2"> </div> <!-- this is a two columns empty space -->
					<div class="panel-group">
						<div class="col-md-8">
							<!-- here is the place for the panels -->
							<!-- 1. -->
							<div class="panel panel-default">
							  <div class="panel-heading">Person's 1 name</div>
							  <div class="panel-body">
								<img src="./img/img1.png" class="img-rounded lala" />
								<p>
									This is a person's short description.
								</p>
							  </div>
							</div>
							
							<!-- 2 -->
							<div class="panel panel-default">
							  <div class="panel-heading">Person's 2 name</div>
							  <div class="panel-body">
								<img src="./img/img2.png" class="img-rounded lala" />
								<p>
									This is a person's short description.
								</p>
							  </div>
							</div>
							
							<!-- 3 -->
							<div class="panel panel-default">
							  <div class="panel-heading">Person's 3 name</div>
							  <div class="panel-body">
								<img src="./img/img3.jpg" class="img-rounded lala" />
								<p>
									This is a person's short description.
								</p>
							  </div>
							</div>	
						</div>
					</div>
					<div class="col-md-2"> </div> <!-- this is a two columns empty space -->
				</div> <?php
				
				$counter++;
			}
		}?>
		
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
</html>