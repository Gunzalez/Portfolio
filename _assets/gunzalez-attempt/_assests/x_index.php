<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Gunzalez</title>
	<link rel="stylesheet" type="text/css" href="css/dGunz.css">
	<script language="JavaScript" src="js/dgunz.js" type="text/javascript"></script>
	<script language="javascript" type="text/javascript">
	<!--
	if (document.images)
	{	butme = new Image;	
		butme.src = "images/but_me.gif";
		butme_ov = new Image;
		butme_ov.src = "images/but_me_ov.gif";	
		
		butport = new Image;	
		butport.src = "images/but_port.gif";
		butport_ov = new Image;
		butport_ov.src = "images/but_port_ov.gif";	
		
		butran = new Image;	
		butran.src = "images/but_random.gif";
		butran_ov = new Image;
		butran_ov.src = "images/but_random_ov.gif";	
		
		butold = new Image;	
		butold.src = "images/but_oldsite.gif";
		butold_ov = new Image;
		butold_ov.src = "images/but_oldsite_ov.gif";	
		
		headerMe = new Image;
		headerMe.src = "images/header_me.gif";
		headerPort = new Image;
		headerPort.src = "images/header_port.gif";
		headerRan = new Image;
		headerRan.src = "images/header_ran.gif";		
	}
	
	function menusetall(){
		swapImage('bme','butme');
		swapImage('bport','butport');
		swapImage('bran','butran');
	}	
	function menuset1(){
		menusetall();
		swapImage('pageTitle','headerMe');
		swapImage('bme','butme_ov');
		mRamble.location.href = "memyselfandi.php";	
	}
	function menuset2(){
		menusetall();
		swapImage('pageTitle','headerPort');
		swapImage('bport','butport_ov');
		mRamble.location.href = "folio.php";	
	}
	function menuset3(){
		menusetall();
		swapImage('pageTitle','headerRan');
		swapImage('bran','butran_ov');
		mRamble.location.href = "random.php";	
	}	
	-->
	</script>
</head>
<body>

<div id="wrap">
	<div id="sMenu"><a href="http://www.gunzalez.com" onmouseover="swapImage('olddy','butold_ov')" onmouseout="swapImage('olddy','butold')"><img name="olddy" src="images/but_oldsite.gif" alt="Old web site"></a></div><!-- end of sMenu /-->
	<div id="sMenu2"><a href="mailto:gunzalez@hotmail.com"><img src="images/velope.gif" alt="Send me email" width="14" height="10" /></a></div><!-- end of sMenu2 /-->
	<div id="divPageTitle"><img name="pageTitle" src="images/header_me.gif" alt="" width="116" height="24" /></div><!-- end of divPageTitle/-->
	<div id="mContent"><iframe name="mRamble" src="memyselfandi.php" marginheight="0px" marginwidth="0px" width="208px" height="300px" scrolling="no" frameborder="0" title="Content"><!-- Alternate content for non-supporting browsers -->Oops, your browser does not support iframes, sorry</iframe></div><!-- end of mContent/-->
	<div id="mainMenu">
		<a href="memyselfandi.php" target="mRamble" onclick="menuset1();"><img name="bme" src="images/but_me_ov.gif" alt="Me, myself and I" width="87" height="9"></a>
		<a href="folio.php" target="mRamble" onclick="menuset2();"><img name="bport" src="images/but_port.gif" alt="Portfolio" width="87" height="9"></a>
		<a href="random.php" target="mRamble" onclick="menuset3();"><img name="bran" src="images/but_random.gif" alt="Random stuff" width="87" height="9"></a>
	</div><!-- end of mainMenu /-->	
</div><!-- end of wrap /-->

</body>
</html>
