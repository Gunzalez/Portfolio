<?php 
mt_srand((double) microtime() * 1000000);
$todayslink = mt_rand(1,4);
// provides a random number btw 1 and 4,
// but no longer used this function, maybe later
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

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!--

if(window.event + "" == "undefined") event = null;
function HM_f_PopUp(){return false};
function HM_f_PopDown(){return false};
popUp = HM_f_PopUp;
popDown = HM_f_PopDown;

//-->
</SCRIPT>

<SCRIPT LANGUAGE="JavaScript1.2" TYPE="text/javascript">
<!--

HM_PG_MenuWidth = 150;
HM_PG_FontFamily = "verdana";
HM_PG_FontSize = 8;
HM_PG_FontBold = 0;
HM_PG_FontItalic = 0;
HM_PG_FontColor = "blue";
HM_PG_FontColorOver = "white";
HM_PG_BGColor = "#DDDDDD";
HM_PG_BGColorOver = "#FFCCCC";
HM_PG_ItemPadding = 7;

HM_PG_BorderWidth = 0;
HM_PG_BorderColor = "black";
HM_PG_BorderStyle = "solid";
HM_PG_SeparatorSize = 1;
HM_PG_SeparatorColor = "#d0ff00";

HM_PG_ImageSrc = "media/white_right.gif";
HM_PG_ImageSrcOver = "media/white_right.gif";


HM_PG_ImageSize = 5;
HM_PG_ImageHorizSpace = 0;
HM_PG_ImageVertSpace = 2;

HM_PG_KeepHilite = true; 
HM_PG_ClickStart = 0;
HM_PG_ClickKill = false;
HM_PG_ChildOverlap = 20;
HM_PG_ChildOffset = 10;
HM_PG_ChildPerCentOver = null;
HM_PG_TopSecondsVisible = .5;
HM_PG_StatusDisplayBuild =0;
HM_PG_StatusDisplayLink = 0;
HM_PG_UponDisplay = null;
HM_PG_UponHide = null;
HM_PG_RightToLeft = 0;

HM_PG_CreateTopOnly = 0;
HM_PG_ShowLinkCursor = 1;
HM_PG_NSFontOver = true;

//HM_a_TreesToBuild = []

//-->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript1.2" SRC="HM_Loader.js" TYPE='text/javascript'></SCRIPT>

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
	
	btbar_home = new Image;	
	btbar_home.src = "media/but_bar_bar.gif";
	btbar_home_ov = new Image;
	btbar_home_ov.src = "media/but_bar_bar_ov.gif";
	
	btnews_home = new Image;	
	btnews_home.src = "media/but_news_news.gif";
	btnews_home_ov = new Image;
	btnews_home_ov.src = "media/but_news_news_ov.gif";
	
	btconnect_home = new Image;	
	btconnect_home.src = "media/but_connect_connect.gif";
	btconnect_home_ov = new Image;
	btconnect_home_ov.src = "media/but_connect_connect_ov.gif";
	
	btrecord_home = new Image;	
	btrecord_home.src = "media/but_record_record.gif";
	btrecord_home_ov = new Image;
	btrecord_home_ov.src = "media/but_record_record_ov.gif";
		
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
var randomNum;
var pixofday;
randomNum = 0;
randomNum = Math.floor((Math.random() * 4))
if (randomNum == 0) {
	pixofday = "<a href=\"connect.html\"><img src=\"media/clr_connect.gif\" width=\"420\" height=\"28\" alt=\"\" border=\"0\"></a>";	
	} else if (randomNum == 1) {
	pixofday = "<a href=\"news.html\"><img src=\"media/clr_news.gif\" width=\"420\" height=\"28\" alt=\"\" border=\"0\"></a>";	
	} else if (randomNum == 2) {
	pixofday = "<a href=\"bar.html\"><img src=\"media/clr_bar.gif\" width=\"420\" height=\"28\" alt=\"\" border=\"0\"></a>";	
	} else if (randomNum == 3) {
	pixofday = "<a href=\"record.html\"><img src=\"media/clr_record.gif\" width=\"420\" height=\"28\" alt=\"\" border=\"0\"></a>";	
	} else {
	pixofday = "<a href=\"connect.html\"><img src=\"media/clr_connect.gif\" width=\"420\" height=\"28\" alt=\"\" border=\"0\"></a>";	
};
// -->
</script>

</head>

<body background="media/background.gif" text="#cccccc" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- logo table -->
<table border="0" cellpadding="0" cellspacing="0">
<tr>
	<td colspan="2"><img src="media/dot_trans.gif" width="2" height="17" alt="" border="0"></td>
</tr>
<tr>
	<td><img src="media/dot_trans.gif" width="17" height="2" alt="" border="0"></td>
	<td><img src="media/logo_main.gif" width="200" height="87" alt="" border="0"></td>
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
							<td height="28">
							<script language="JavaScript" type="text/javascript">
							<!--
							document.write(pixofday);							
							// -->
							</script></td>
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
							<td height="209" width="420" bgcolor="#dcd8ac">
							
										<table border="0" height="209" width="420">
										<tr>									
						                    <td bgcolor="#dcd8ac" width="200" align="center" valign="middle"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="180" height="200">
					                          <param name="movie" value="flash/myeko_intro.swf">
					                          <param name="quality" value="high">
											  <PARAM NAME="menu" VALUE="false">
					                          <embed src="flash/myeko_intro.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="180" height="200"></embed></object></td>
											<td valign="top" width="220" bgcolor="#ffffff">
											
											
												<table border="0" width="220" cellpadding="10">
												<tr>
													<td><strong>latest at myeko</strong>
													<br /><a href="about.php?whatpage=1" class="reglink">what is myeko</a>? ...myeko is a web portal designed for today's urban youth <a href="about.php?whatpage=1" class="llink">more >></a>
													<br /><br />Launch party on the <strong>19th of January 03</strong>, for further details <a href="about.php?whatpage=2" class="llink">click here >></a>
													</td>
												</tr>
												</table>

											
											&nbsp;
											
											
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
							<td><img src="media/dot_trans.gif" width="95" height="28" alt="" border="0"></td>
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
							<td><script language="JavaScript" type="text/javascript">
								<!--
									if (document.images){
										document.write(randImage2(14,'home_pix',186,83))									 
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
							<td><a href="news.html" onMouseOver="popUp('HM_Menu1',event),swapImage('bnews','btnews_home_ov')" onMouseOut="popDown('HM_Menu1'),swapImage('bnews','btnews_home')"><img name="bnews" src="media/but_news_news.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="connect.html" onMouseOver="popUp('HM_Menu2',event),swapImage('bconnect','btconnect_home_ov')" onMouseOut="popDown('HM_Menu2'),swapImage('bconnect','btconnect_home')"><img name="bconnect" src="media/but_connect_connect.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="bar.html" onMouseOver="popUp('HM_Menu3',event),swapImage('bbar','btbar_home_ov')" onMouseOut="popDown('HM_Menu3'),swapImage('bbar','btbar_home')"><img name="bbar" src="media/but_bar_bar.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="record.html" onMouseOver="popUp('HM_Menu4',event),swapImage('brecord','btrecord_home_ov')" onMouseOut="popDown('HM_Menu4'),swapImage('brecord','btrecord_home')"><img name="brecord" src="media/but_record_record.gif" width="187" height="28" alt="" border="0"></a></td>
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
				<td width="110" bgcolor="Gray" class="hidden" align="right">&nbsp;<font color="Gray">by gunzalez @&nbsp;&nbsp;<br />www.gunzalez.com</font>&nbsp;&nbsp;</td>
				<td><img src="media/line_v_s.gif" width="2" height="40" alt="" border="0"></td>
				<td width="307" bgcolor="WhiteSmoke" align="right" class="footnote">2002 © Copyright JP M-COM Limited&nbsp;&nbsp; 
											<br />All Rights Reserved&nbsp;&nbsp;</td>
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
