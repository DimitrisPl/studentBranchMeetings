<?php
	require_once 'includes/filenames_and_paths.php';
	require_once FUNCTIONS_FILE;
	
	$page = requestedPagename();
	$links = array(
		HOME_NAME => HOME_FILE,
		PROFILE_NAME => PROFILE_FILE,
		PROPOSE_NAME => PROPOSE_FILE,
		PROPOSED_NAME => PROPOSED_FILE
	);
	foreach($links as $pageName => $link)
		$linkClasses[$pageName] = ($page == $link? 'active' : 'inactive');
?>

<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/index.php">IEEE meeting program tool</a>
				</div>
				<ul class="nav navbar-nav"> <?php
					foreach($links as $pageName => $link)
						echo "<li class='{$linkClasses[$pageName]}'><a href='{$link}'>{$pageName}</a></li>"; ?>
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