<?php
	global $speakers;
	
	define('SPEAKERS_PER_ROW', 3);
	function printRow($contents)
	{ ?>
		<div class="row">
			<div class="col-md-2"> </div> <!--Two empty columns-->
			<div class="panel-group">
				<div class="col-md-8"> <?php
					echo $contents; ?>
				</div>
			</div>
			<div class="col-md-2"> </div> <!--Two empty columns-->
		</div> <?php
	}
	
	function printSpeaker($speaker)
	{ 
		if($speaker == null)
			$speaker = array(
				'full_name' => '',
				'short_description' => '',
				'photo' => '',
			);
		//$person["positive_votes"]
		//$person["negative_votes"]
		?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<a href="<?php "$speaker?personId=$speaker[id]";?>">
					<?php echo $speaker["full_name"];?>
				</a>
			</div>
			<div class="panel-body">
				<a href="<?php "$speaker?personId=$speaker[id]";?>">
					<img style="width:200px; height:200px;" src="<?php echo $speaker["photo"];?>" class="img-rounded lala" />
				</a>
				<p><?php echo $speaker['short_description'];?></p>
			</div>
		</div> <?php	
	}
	
	function printNoSpeakers()
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
?>

<!Doctype html>
<html>
	<head>
		<?php require HEADER_FILE;?>
	</head>
	<body> <?php
		
		require NAVBAR_FILE; ?>
		
		<a href="?ruin=true"><button title="Ruins style">Try 1 speaker</button></a> <?php
		
		$speakersLength = count($speakers);
		$rowCounter = -1;
		if($speakersLength > 0)
			foreach($speakers as $speaker)
			{
				if(++$rowCounter % SPEAKERS_PER_ROW == 0)
					ob_start(); //Output buffering
				
				printSpeaker($speaker);
				
				if($rowCounter+1 % SPEAKERS_PER_ROW == 0 || $rowCounter+1 == $speakersLength || (isset($_GET['ruin']) && $rowCounter==0))
				{
					$columnsToFill = SPEAKERS_PER_ROW-1 - ($rowCounter % SPEAKERS_PER_ROW);
					for($i=0; $i<$columnsToFill; $i++)
						printSpeaker(null);
					printRow(ob_get_clean());
				}
				
				if(isset($_GET['ruin']) && $rowCounter==0)
					break;
			}
		else
			printNoSpeakers(); 
		
		require FOOTER_FILE; ?>
	</body>
</html>