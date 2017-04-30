<?php
	$page = requestedPagename();
	$links = array(HOME, PROPOSE, PROPOSED);
	foreach($links as $link)
		$linkClasses[$link] = $page == $link? 'active' : 'inactive';
?>

<!-- Navbar -->
<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/index.php">IEEE meeting program tool</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="<?php echo $linkClasses[HOME];?>"><a href="<?php echo HOME;?>">Home</a></li>
					<li class="<?php echo $linkClasses[PROPOSE];?>"><a href="<?php echo PROPOSE;?>">Propose</a></li>
					<li class="<?php echo $linkClasses[PROPOSED]?>"><a href="<?php echo PROPOSED;?>">Proposed</a></li>
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
<!-- Navbar ends -->