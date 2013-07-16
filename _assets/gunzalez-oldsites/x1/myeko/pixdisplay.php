<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>MyEKO |</title>
	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Designer/Developer" content="Shegun Konibire aka - Gunzalez of www.gunzalez.com" />
<meta name="Developer" content="Mike Southwood" />
<meta name="Date" content="November 6th, 2002" />
<meta name="Keywords" content="MyEko" />
<meta name="Description" content="The official MyEko.com web site" />

<!-- external .js files //-->
<script language="JavaScript" src="js/browser_check.js" type="text/javascript"></script>
<script language="JavaScript" src="js/window_status.js" type="text/javascript"></script>
<script language="JavaScript" src="js/image_swapper.js" type="text/javascript"></script>
<script language="JavaScript" src="js/randomswaper.js" type="text/javascript"></script>

<!-- external .css files for fonts displayed on this page, //-->
<!-- these are .js controled, client machine dependent.  //-->
<script language="JavaScript" type="text/javascript">
<!--
// Detection of browser/platform to reference relevant external stylesheet
IE4mac = (document.all && navigator.appVersion.indexOf("4.5") != -1 && navigator.platform.indexOf("Mac") != -1);
NSmac = (document.layers && navigator.platform.indexOf("Mac") != -1);
NSwin = (document.layers && navigator.platform.indexOf("Win") != -1)
if (IE4mac || NSmac){
	document.write('<link rel="stylesheet" type="text/css" href="css/style_mac.css" />');
} else if (NSwin){
	document.write('<link rel="stylesheet" type="text/css" href="css/style_NS4.css" />');
} else {
	document.write('<link rel="stylesheet" type="text/css" href="css/style_IE.css" />');
}
// -->
</script>

<?php 
$thelast = 13; // to be updated when images are increased
$nw = $thepix;
if ($nw == 1) {
	$nx = $nw + 1;
	$bk = $thelast;
} else if ($nw == $thelast){
	$nx = 1;
	$bk = $nw - 1;
} else {
	$nx = $nw + 1;
	$bk = $nw - 1;
};
?>

<style type="text/css">
<!--
#arleft{position:absolute; left:79px; top:8px; width:18; height:28;}
#arright{position:absolute; left:120px; top:8px; width:18; height:28;}
//-->
</style>

</head>

<body background="media/background.gif" bgcolor="#dcd8ac" text="#cccccc" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="arleft"><a href="pixdisplay.php?thepix=<?php echo $bk ?>"><img src="media/arleft.gif" width="18" height="28" alt="" border="0"></a></div>
<div id="arright"><a href="pixdisplay.php?thepix=<?php echo $nx ?>"><img src="media/arright.gif" width="18" height="28" alt="" border="0"></a></div>
<!-- home button and other things table -->
<table border="0" cellpadding="0" cellspacing="0" width="422">
<tr>
	<td><img src="media/line_h_m.gif" width="421" height="2" alt="" border="0"></td>
</tr>
<tr>
	<td>
	
			<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td><img src="media/line_v_s.gif" width="2" height="40" alt="" border="0"></td>
				<td width="110" bgcolor="Gray">&nbsp;</td>
				<td><img src="media/line_v_s.gif" width="2" height="40" alt="" border="0"></td>
				<td width="307" bgcolor="WhiteSmoke" align="right" class="footnote">&nbsp;&nbsp;</td>
				<td><img src="media/line_v_s.gif" width="2" height="40" alt="" border="0"></td>
			</tr>
			</table>	
	</td>
</tr>
<tr>
	<td><img src="media/line_h_m.gif" width="421" height="2" alt="" border="0"></td>
</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="422" height="265">
<tr>
	<td align="center" valign="middle"><img src="media/gallery_pix/pix<?php print $thepix ?>.jpg" width="321" height="220" alt="" border="0"></td>
</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="422">
<tr>
	<td><img src="media/line_h_m.gif" width="421" height="2" alt="" border="0"></td>
</tr>
</table>
</body>
</html>
