<?
// responses for bar2.html and bar5.html
// send a variable eg bar2.php?dpage=error1

// $dpage = "error1";

switch ($dpage)
{	case "error1":
	$dheader = "Promotion services";
	$ddetails = "<font color=\"#cc3300\">error type</font>: <br />Unregistered user\n
				<br /><br /><font color=\"#cc3300\">error details</font>:
				<br />You need to be registered to use this facility.\n 
				<br /><a href=\"reg.html\" class=\"reglink\">click here</a> to register.\n
				<br /><br />If your registration is sucessfull, on returning to this page the Promotion services facility will be active for your use.";
	break;
	case "error2":
	$dheader = "Online guest list";
	$ddetails = "<font color=\"#cc3300\">error type</font>: <br />Unregistered user\n
				<br /><br /><font color=\"#cc3300\">error details</font>:
				<br />You need to be registered to use this facility.\n 
				<br /><a href=\"reg.html\" class=\"reglink\">click here</a> to register.\n
				<br /><br />If your registration is sucessfull, on returning to this page the Online guest list facility will be available for your use.";
	break;
	case "thanks1":
	$dheader = "Promotion services";
	$ddetails = "Thank you for your interest, myeko will get your requested information sent to your email account, very shortly, keep a look out.";	
	break;
	case "thanks2":
	$dheader = "Online guest list";
	$ddetails = "Thank you for signing up, your request will be prosessed as soon as possible and a reply sent direct to your email address very shortly.";	
	break;
};
?>


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

 

<!-- Preloading swapping images for this page //-->
<script language="JavaScript" type="text/javascript">
<!--
if (document.images)	/* preloading images for this page */
{
	/* --------------------------------------------	start */	
	/* Group images for navigation  --------------	start */
	/* -------------------------------------------	start */
	
	btabout = new Image;	
	btabout.src = "media/but_about.gif";
	btabout_ov = new Image;
	btabout_ov.src = "media/but_about_ov.gif";
	
	btcontact = new Image;	
	btcontact.src = "media/but_contact.gif";
	btcontact_ov = new Image;
	btcontact_ov.src = "media/but_contact_ov.gif";
	
	btreg = new Image;	
	btreg.src = "media/but_reg.gif";
	btreg_ov = new Image;
	btreg_ov.src = "media/but_reg_ov.gif";
	
	
	/*---images for this page start here-----*/
	
	btbar_news = new Image;	
	btbar_news.src = "media/but_bar_bar.gif";
	btbar_news_ov = new Image;
	btbar_news_ov.src = "media/but_bar_bar_ov.gif";
	
	btnews_news = new Image;	
	btnews_news.src = "media/but_news_bar.gif";
	btnews_news_ov = new Image;
	btnews_news_ov.src = "media/but_news_bar_ov.gif";
	
	btconnect_news = new Image;	
	btconnect_news.src = "media/but_connect_bar.gif";
	btconnect_news_ov = new Image;
	btconnect_news_ov.src = "media/but_connect_bar_ov.gif";
	
	btrecord_news = new Image;	
	btrecord_news.src = "media/but_record_bar.gif";
	btrecord_news_ov = new Image;
	btrecord_news_ov.src = "media/but_record_bar_ov.gif";
		
	/* -----------------------------------------  end */	
	/* Group images for navigation -------------  end */
	/* -----------------------------------------  end */	
};
//-->
</script>

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

<script language="JavaScript" type="text/javascript">
<!--
function doformstuff()
{
alert('what');
}
//-->
</script>

</head>

<body background="media/background.gif" bgcolor="#ffffff" text="#cccccc" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- logo table -->
<table border="0" cellpadding="0" cellspacing="0">
<tr>
	<td colspan="2"><img src="media/dot_trans.gif" width="2" height="17" alt="" border="0"></td>
</tr>
<tr>
	<td><img src="media/dot_trans.gif" width="17" height="2" alt="" border="0"></td>
	<td><a href="index.php"><img src="media/logo_bar.gif" width="200" height="87" alt="" border="0"></a></td>
</tr>
<tr>
	<td colspan="2"><img src="media/dot_trans.gif" width="2" height="6" alt="" border="0"></td>
</tr>
</table>

<!-- main big line table -->
<table border="0" cellpadding="0" cellspacing="0">
<tr>
	<td><img src="media/line_h.gif" width="712" height="2" alt="" border="0"></td>
</tr>
<tr>
	<td>
	
			<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>
				
						<!-- top bar table -->
						<table border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td height="28" bgcolor="#f5a428" align="right"><img src="media/dot_trans.gif" width="2" height="28" alt="" border="0"><img src="media/title_bar.gif" width="24" height="18" alt="" border="0" vspace="5"><img src="media/dot_trans.gif" width="10" height="2" alt="" border="0"></td>
						</tr>
						<tr>
							<td height="2"><img src="media/line_h_m.gif" width="420" height="2" alt="" border="0"></td>
						</tr>
						<tr>
							<td height="40" bgcolor="WhiteSmoke"><img src="media/dot_trans.gif" width="2" height="40" alt="" border="0"></td>
						</tr>
						<tr>
							<td height="2"><img src="media/line_h_m.gif" width="420" height="2" alt="" border="0"></td>
						</tr>
						<tr>
							<td height="209" bgcolor="#ffffff" valign="top">
							
								<table border="0" cellpadding="0" cellspacing="0" height="100%">
									<tr>
										<td valign="top">
										
											<!-- links table: start -->
											<table width="110">
											<tr>
												<td align="right">&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="bar1.html" class="llink">bar news</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="bar2.html" class="llink">promotions</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="bar3.html" class="llink">nightclub list</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="bar4.html" class="llink">photo gallery</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="bar5.html" class="llink">online guest list</a>&nbsp;&nbsp;</td>
											</tr>
											</table>								
											<br clear="all" />
											<img src="media/dot_trans.gif" width="110" height="2" alt="" border="0">
											<!-- links table: end -->
										
										</td>
										<td valign="top">
										
												<!-- content table //-->										
												<table border="0" cellpadding="2" cellspacing="2" width="300">
												<tr>
													<td><strong><?php echo ($dheader);?></strong></td>
												</tr>
												<tr>
													<td valign="top"><?php echo ($ddetails);?></td>
												</tr>												
												</table>
												<!-- content table //-->	
									
										</td>
									</tr>
									</table>	
							
							</td>
						</tr>
						</table>
			
				
				
				</td>
				<td><img src="media/line_v.gif" width="2" height="280" alt="" border="0"></td>
				<td>
				
						<!-- middle white vertical table -->
						<table border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td><img src="media/in_arrow.gif" width="95" height="28" alt="" border="0"></td>
						</tr>				
						<tr>
							<td><img src="media/dot_trans.gif" width="95" height="253" alt="" border="0"></td>
						</tr>
						</table>
				
				
				</td>
				<td><img src="media/line_v.gif" width="2" height="280" alt="" border="0"></td>
				<td>
				
				
						<!-- button table with random jpg -->
						<table border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td>
							<script language="JavaScript" type="text/javascript">
								<!--
									if (document.images){
										document.write(randImage2(5,'bpix',186,83))									 
									} else {
									null;
									}
								 //-->
								 </script></td>
						</tr>
						<tr>
							<td><img src="media/line_h_s.gif" width="187" height="2" alt="" border="0"></td>
						</tr>
						<tr>
							<td><a href="news.html" onMouseOver="swapImage('bnews','btnews_news_ov')" onMouseOut="swapImage('bnews','btnews_news')"><img name="bnews" src="media/but_news_bar.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="connect.html" onMouseOver="swapImage('bconnect','btconnect_news_ov')" onMouseOut="swapImage('bconnect','btconnect_news')"><img name="bconnect" src="media/but_connect_bar.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="bar.html" onMouseOver="swapImage('bbar','btbar_news_ov')" onMouseOut="swapImage('bbar','btbar_news')"><img name="bbar" src="media/but_bar_bar.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="record.html" onMouseOver="swapImage('brecord','btrecord_news_ov')" onMouseOut="swapImage('brecord','btrecord_news')"><img name="brecord" src="media/but_record_bar.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="reg.html" onMouseOver="swapImage('breg','btreg_ov')" onMouseOut="swapImage('breg','btreg')"><img name="breg" src="media/but_reg.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="about.php" onMouseOver="swapImage('babout','btabout_ov')" onMouseOut="swapImage('babout','btabout')"><img name="babout" src="media/but_about.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="contact.php" onMouseOver="swapImage('bcontact','btcontact_ov')" onMouseOut="swapImage('bcontact','btcontact')"><img name="bcontact" src="media/but_contact.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						</table>				
				
				
				</td>
				<td><img src="media/line_v.gif" width="2" height="280" alt="" border="0"></td>
			</tr>
			</table>	
	
	</td>
</tr>
<tr>
	<td><img src="media/line_h.gif" width="712" height="2" alt="" border="0"></td>
</tr>
</table>

<!-- home button and other things table -->
<table border="0" cellpadding="0" cellspacing="0" width="422">
<tr>
	<td>
	
			<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="110" bgcolor="Gray">&nbsp;</td>
				<td><img src="media/line_v_s.gif" width="2" height="40" alt="" border="0"></td>
				<td width="307" bgcolor="WhiteSmoke" align="right"><a href="index.php"><img src="media/home_button.gif" width="29" height="30" alt="" border="0"></a><img src="media/dot_trans.gif" width="10" height="2" alt="" border="0"></td>
				<td><img src="media/line_v_s.gif" width="2" height="40" alt="" border="0"></td>
			</tr>
			</table>	
	</td>
</tr>
<tr>
	<td><img src="media/line_h_m.gif" width="421" height="2" alt="" border="0"></td>
</tr>
</table>


</body>
</html>
