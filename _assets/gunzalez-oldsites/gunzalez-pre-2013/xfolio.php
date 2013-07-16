<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Gunzalez: Online portfolio | Portfolio</title>

	<meta name="Description" content="Shegun Konibire's official online portfolio." />
	<meta name="Keywords" content="Sheg, Shegun, Konibire, Gunzalez, Web, Developer, Designer, Internet, Programmer, Technologist" />	

	<link rel="stylesheet" type="text/css" media="print" href="css/print.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />
	
	<script type="text/javascript">
	<!--
	if (document.images){		
		nx_ov = new Image;	
		nx_ov.src = "images/uploaded/next.gif";
		nx = new Image;
		nx.src = "images/uploaded/butt.gif";			
	}
	//-->
	</script>	
	<script type="text/javascript" src="js/image_swapper.js"></script>	

</head>
<body id="folio">
<div id="wrap">
	<h1>Portfolio</h1>
	<p class="hidden"><a href="#mContent" title="Click to skip navigation" accesskey="s" tabindex="1">Skip navigation</a></p>
	<div id="mainNav">
		<ul title="Page navigation">
			<li><a href="index.php" title="Brief introduction about me" class="current">Me, myself and I</a></li>
			<li><a href="skills.php" title="Skill set and experience">Skills</a></li>
			<li><strong><a href="folio.php" title="Shows off past projects">Portfolio</a></strong></li>
			<li><a href="random.php" title="Contains random information">Random stuff</a></li>
		</ul>
	</div><!-- end of mainMenu /-->
	<div id="header"> </div><!-- /header -->
	<div id="mContent">
		<!-- dynamic content: start: //-->

		<?php include('includes/conn.php'); ?>
		<?
		$isStrongS = "";
		$isStrongE = "";
		if (isset($_GET['projID'])) {
			$projID = $_GET['projID'];
		} else {
			$projID = "1";
		};	

		$query = "SELECT * FROM projects LIMIT 0, 7";
		$result = mysql_query($query)
			or die( mysql_error() );
		?>		
		<ul>
		<?	
		while ( $row = mysql_fetch_array($result, MYSQL_ASSOC))	{	
		if ( $projID == $row["proj_id"] ) {
			$isStrongS = "<strong>";
			$isStrongE = "</strong>"; 
		} ?>			
			<li><? echo $isStrongS ?><a href="folio.php?projID=<? echo $row["proj_id"]; ?>"><img src="images/uploaded/<?php echo $row["thumb"]; ?>" alt="<?php echo $row["title"]; ?>" /></a><? echo $isStrongE ?></li>
		<?
 		$isStrongS = "";
		$isStrongE = "";
		}; ?>		
			<li><a href="folio2.php"><img src="images/uploaded/butt.gif" name="nexBut" id="nexBut" alt="Next page" /></a></li> 
		</ul>

		<?	$query = "SELECT * FROM projects WHERE proj_id = '$projID'";
		$result = mysql_query($query)
			or die( mysql_error() );		
		while ( $row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
		?>
			<a href="<?php echo $row["link"]; ?>" target="_Blank" title="Opens in a new window"><img src="images/uploaded/<?php echo $row["large"]; ?>" alt="<?php echo $row["title"]; ?>" id="mImage" /></a>
			<p class="maskPara"><a href="<?php echo $row["link"]; ?>" target="_Blank" title="Opens in a new window" class="foliolink"><?php echo $row["mask"]; ?></a></p>		
		<?	};	?>
		
		<!-- dynamic content: End: //-->
	</div><!-- end of mContent/-->
	<div id="sMenu">
		<?php include('includes/emailfooter.php'); ?>
	</div><!-- end of sMenu /-->	
</div><!-- end of wrap /-->

</body>
</html>
