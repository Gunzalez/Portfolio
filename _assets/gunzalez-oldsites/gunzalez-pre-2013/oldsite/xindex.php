<?
session_start();
if (isset($_SESSION['page'])) {
	switch ($_SESSION['page'])
	{
	case "memyselfandi":
	$thisfile = "memyselfandi.php";
	$thisimage = "memyselfandi.gif";
		break;  
	case "folio":
	$thisfile = "folio.php";
	$thisimage = "folio.gif";
		break;
	case "random":
	$thisfile = "random.php";
	$thisimage = "random.gif";
		break;
	case "skills":
	$thisfile = "skills.php";
	$thisimage = "skills.gif";
		break;			 
	};
} else {
	$_SESSION['page'] = "memyselfandi";
	$thisfile = "memyselfandi.php";
	$thisimage = "memyselfandi.gif";
}

function izClass($atitle,$pagetitle){
	if ($atitle == $pagetitle){ echo 'class="current"'; }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Gunzalez</title>
	<link rel="stylesheet" type="text/css" href="css/dgunz.css">
</head>
<body>
<div id="wrap">	
	<div id="mContent"><iframe name="mRamble" src="<? echo $thisfile ?>" marginheight="0" marginwidth="0" width="208" height="300" scrolling="no" frameborder="0" title="Content"><!-- Alternate content for non-supporting browsers -->Oops, your browser does not support iframes, sorry</iframe></div><!-- end of mContent/-->
	<div id="sMenu2"><a href="mailto:gunzalez@hotmail.com"><img src="images/velope.gif" alt="Send me email" width="14" height="10" /></a></div><!-- end of sMenu2 /-->
	<div id="divPageTitle"><img name="pageTitle" src="images/<? echo $thisimage ?>" alt="" width="116" height="24" /></div><!-- end of divPageTitle/-->
	<div id="mainNav">
	<ul>
		<li><a href="go.php?page=memyselfandi" <? izClass($_SESSION['page'],"memyselfandi") ?>>Me, myself and I</a></li>
		<li><a href="go.php?page=folio" <? izClass($_SESSION['page'],"folio") ?>>Portfolio</a></li>
		<li><a href="go.php?page=skills" <? izClass($_SESSION['page'],"skills") ?>>Skills</a></li>
		<li><a href="go.php?page=random" <? izClass($_SESSION['page'],"random") ?>>Random</a></li>
	</ul>
	</div><!-- end of mainMenu /-->
	<div id="topNav">
	<ul>
		<li><a href="http://www.gunzalez.co.uk">Old website</a></li>
	</ul>	
	</div><!-- end of sMenu /-->	
</div><!-- end of wrap /-->
</body>
</html>
