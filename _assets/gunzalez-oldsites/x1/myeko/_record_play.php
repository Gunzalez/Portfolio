<?
// This page should always check for a session variable before displaying
// eg $isValidUser, set this to yes from toptenlist.php prior to this page
// i.e if useremail is in db and password in db matches password entered.
// otherwise toptenlist.php should have sent user to record2.php?useremail=xxx@hotmail.com&isreg=no

// In case people try using the url directly, the session variable test
// should catch them out, kindly redirect the fuckas to index.php, cheers.

// Again, if this is unclear or u have any problems, do let me know, cheers.
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

<script language="JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
// begin absolutely positioned scrollable area object scripts 
// Extension developed by David G. Miles 
// Original Scrollable Area code developed by Thomas Brattli 
function verifyCompatibleBrowser(){ 
    this.ver=navigator.appVersion 
    this.dom=document.getElementById?1:0 
    this.ie5=(this.ver.indexOf("MSIE 5")>-1 && this.dom)?1:0; 
    this.ie4=(document.all && !this.dom)?1:0; 
    this.ns5=(this.dom && parseInt(this.ver) >= 5) ?1:0; 
 
    this.ns4=(document.layers && !this.dom)?1:0; 
    this.bw=(this.ie5 || this.ie4 || this.ns4 || this.ns5) 
    return this 
} 
bw=new verifyCompatibleBrowser() 
 
 
var speed=50 
 
var loop, timer 
 
function ConstructObject(obj,nest){ 
    nest=(!nest) ? '':'document.'+nest+'.' 
    this.el=bw.dom?document.getElementById(obj):bw.ie4?document.all[obj]:bw.ns4?eval(nest+'document.'+obj):0; 
    this.css=bw.dom?document.getElementById(obj).style:bw.ie4?document.all[obj].style:bw.ns4?eval(nest+'document.'+obj):0; 
    this.scrollHeight=bw.ns4?this.css.document.height:this.el.offsetHeight 
    this.clipHeight=bw.ns4?this.css.clip.height:this.el.offsetHeight 
    this.up=MoveAreaUp;this.down=MoveAreaDown; 
    this.MoveArea=MoveArea; this.x; this.y; 
    this.obj = obj + "Object" 
    eval(this.obj + "=this") 
    return this 
} 
function MoveArea(x,y){ 
    this.x=x;this.y=y 
    this.css.left=this.x 
    this.css.top=this.y 
} 
 
function MoveAreaDown(move){ 
	if(this.y>-this.scrollHeight+objContainer.clipHeight){ 
    this.MoveArea(0,this.y-move) 
    if(loop) setTimeout(this.obj+".down("+move+")",speed) 
	} 
} 
function MoveAreaUp(move){ 
	if(this.y<0){ 
    this.MoveArea(0,this.y-move) 
    if(loop) setTimeout(this.obj+".up("+move+")",speed) 
	} 
} 
 
function PerformScroll(speed){ 
	if(initialised){ 
		loop=true; 
		if(speed>0) objScroller.down(speed) 
		else objScroller.up(speed) 
	} 
} 
 
function CeaseScroll(){ 
    loop=false 
    if(timer) clearTimeout(timer) 
} 
var initialised; 
function InitialiseScrollableArea(){ 
    objContainer=new ConstructObject('divContainer') 
    objScroller=new ConstructObject('divContent','divContainer') 
    objScroller.MoveArea(0,0) 
    objContainer.css.visibility='visible' 
    initialised=true; 
} 
// end absolutely positioned scrollable area object scripts 
</script>


<!-- external .js files //-->
<script language="JavaScript" src="js/browser_check.js" type="text/javascript"></script>
<script language="JavaScript" src="js/window_status.js" type="text/javascript"></script>
<script language="JavaScript" src="js/image_swapper.js" type="text/javascript"></script>

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
	btbar_news.src = "media/but_bar_record.gif";
	btbar_news_ov = new Image;
	btbar_news_ov.src = "media/but_bar_record_ov.gif";
	
	btnews_news = new Image;	
	btnews_news.src = "media/but_news_record.gif";
	btnews_news_ov = new Image;
	btnews_news_ov.src = "media/but_news_record_ov.gif";
	
	btconnect_news = new Image;	
	btconnect_news.src = "media/but_connect_record.gif";
	btconnect_news_ov = new Image;
	btconnect_news_ov.src = "media/but_connect_record_ov.gif";
	
	btrecord_news = new Image;	
	btrecord_news.src = "media/but_record_record.gif";
	btrecord_news_ov = new Image;
	btrecord_news_ov.src = "media/but_record_record_ov.gif";
		
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

function undev(){
	alert('sorry, not linked yet')
}

// -->
</script>


<style type="text/css">  
#divUpControl{position:absolute; width:35; left:65; top:366; z-index:1; text-align: right} 
#divDownControl{position:absolute; width:35; left:65; top:406; z-index:1; text-align: right} 
#divContainer{position:absolute; width:305; height:149; overflow:hidden; top:238; left:112; clip:rect(0,305,149,0); visibility:hidden} 
#divContent{position:absolute; top:0; left:0} 
</style>

</head>

<body background="media/background.gif" bgcolor="#dcd8ac" text="#cccccc" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" OnLoad="InitialiseScrollableArea();">
<div id="divUpControl"><a href="javascript:;" onMouseOver="PerformScroll(-7)" onMouseOut="CeaseScroll()"><img src="media/arrow_up.gif" width="20" height="20" alt="" border="0"></a></div>
<div id="divDownControl"><a href="javascript:;" onMouseOver="PerformScroll(7)" onMouseOut="CeaseScroll()"><img src="media/arrow_down.gif" width="20" height="20" alt="" border="0"></a></div><!-- [scroll down] //-->
<div id="divContainer"><div id="divContent">
<!-- content table //-->										
<table border="0" cellpadding="2" cellspacing="2" width="300">
<tr>
	<td valign="top">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><a href="music/djjazzyjeff.wax"><img src="media/content_images/themagnificent.gif" width="72" height="72" alt="" border="0" hspace="2" vspace="2"></a></td>
			<td valign="top"><img src="media/dot_trans.gif" width="7" height="1" alt="" border="0"></td>
			<td valign="top"><a href="music/djjazzyjeff.wax" class="reglink">Know Ur Hood</a>
				<br />by DJ Jazzy Jeff featuring Pauly Yamz & Chef
				<br /><strong>The Magnificent</strong><br />
				<br />
			</td>
		</tr>
		</table>
	
	</td>
</tr>
<tr>
	<td valign="top">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><a href="music/nas.wax"><img src="media/content_images/naz.gif" width="72" height="72" alt="" border="0" hspace="2" vspace="2"></a></td>
			<td valign="top"><img src="media/dot_trans.gif" width="7" height="1" alt="" border="0"></td>
			<td valign="top"><a href="music/nas.wax" class="reglink">Doo Rags</a>
				<br />by Nas
				<br /><strong>The Lost Tapes</strong><br />
				<br />
			</td>
		</tr>
		</table>
	
	</td>
</tr>
<tr>
	<td valign="top">
	
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><a href="javascript:undev();"><img src="media/content_images/kikoff.gif" width="72" height="72" alt="" border="0" hspace="2" vspace="2"></a></td>
			<td valign="top"><img src="media/dot_trans.gif" width="7" height="1" alt="" border="0"></td>
			<td valign="top"><a href="javascript:undev();" class="reglink">SO Rotton</a>
				<br />by Blak Twang
				<br /><strong>Kik Off</strong><br />
				<br />
			</td>
		</tr>
		</table>
	
	</td>
</tr>
<tr>
	<td valign="top">
	
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><a href="music/slumvillage.wax"><img src="media/content_images/dwele.gif" width="72" height="72" alt="" border="0" hspace="2" vspace="2"></a></td>
			<td valign="top"><img src="media/dot_trans.gif" width="7" height="1" alt="" border="0"></td>
			<td valign="top"><a href="music/slumvillage.wax" class="reglink">Tainted</a>
				<br />by Slum Village featuring Dwele
				<br /><strong>Trinity</strong><br />
				<br />
			</td>
		</tr>
		</table>
	
	</td>
</tr>
<tr>
	<td valign="top">
	
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><a href="music/talib.wax"><img src="media/content_images/talib.gif" width="72" height="72" alt="" border="0" hspace="2" vspace="2"></a></td>
			<td valign="top"><img src="media/dot_trans.gif" width="7" height="1" alt="" border="0"></td>
			<td valign="top"><a href="music/talib.wax" class="reglink">Down for the Count</a>
				<br />by Talib Kweli & DJ Hi Tek
				<br /><strong>Reflection External</strong><br />
				<br />
			</td>
		</tr>
		</table>
	
	</td>
</tr>
<tr>
	<td valign="top">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><a href="music/mrcheeks.wax"><img src="media/content_images/cheeks.gif" width="72" height="72" alt="" border="0" hspace="2" vspace="2"></a></td>
			<td valign="top"><img src="media/dot_trans.gif" width="7" height="1" alt="" border="0"></td>
			<td valign="top"><a href="music/mrcheeks.wax" class="reglink">Lights, Camera, Action!</a>
				<br />by Mr Cheeks
				<br /><strong>John P. kelly</strong><br />
				<br />
			</td>
		</tr>
		</table>
	
	</td>
</tr>
<tr>
	<td valign="top">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><a href="music/floetryfloetic.wax"><img src="media/content_images/floetic.gif" width="72" height="72" alt="" border="0" hspace="2" vspace="2"></a></td>
			<td valign="top"><img src="media/dot_trans.gif" width="7" height="1" alt="" border="0"></td>
			<td valign="top"><a href="music/floetryfloetic.wax" class="reglink">Fun</a>
				<br />by Floetry
				<br /><strong>Floetic</strong><br />
				<br />
			</td>
		</tr>
		</table>
	
	</td>
</tr>
<tr>
	<td valign="top">
	
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><a href="javascript:undev();"><img src="media/content_images/missy_elliot.jpg" width="74" height="72" alt="" border="0" hspace="2" vspace="2"></a></td>
			<td valign="top"><img src="media/dot_trans.gif" width="7" height="1" alt="" border="0"></td>
			<td valign="top"><a href="javascript:undev();" class="reglink">Work it</a>
				<br />by Miss Elliott
				<br /><strong>Under Construction</strong><br />
				<br />
			</td>
		</tr>
		</table>
	
	</td>
</tr>
<tr>
	<td valign="top">
	
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><a href="music/ghostfacekillah.wax"><img src="media/content_images/barbershop.gif" width="72" height="72" alt="" border="0" hspace="2" vspace="2"></a></td>
			<td valign="top"><img src="media/dot_trans.gif" width="7" height="1" alt="" border="0"></td>
			<td valign="top"><a href="music/ghostfacekillah.wax" class="reglink">Love Session</a>
				<br />by Ghostface killah featuring Ruff endz
				<br /><strong>Barber Shop motion picture soundtrack</strong><br />
				<br />
			</td>
		</tr>
		</table>
	
	</td>
</tr>
<tr>
	<td valign="top">
	
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><a href="javascript:undev();"><img src="media/content_images/truth.gif" width="72" height="72" alt="" border="0" hspace="2" vspace="2"></a></td>
			<td valign="top"><img src="media/dot_trans.gif" width="7" height="1" alt="" border="0"></td>
			<td valign="top"><a href="javascript:undev();" class="reglink">I'm not really Lookin'</a>
				<br />by DJ Qiuk & Truth Hurts
				<br /><strong>Truthfully Speaking</strong><br />
				<br />
			</td>
		</tr>
		</table>
	
	</td>
</tr>
</table>
<!-- content table //-->
</div></div>
<!-- end absolutely positioned scrollable area object -->

<!-- logo table -->
<table border="0" cellpadding="0" cellspacing="0">
<tr>
	<td colspan="2"><img src="media/dot_trans.gif" width="2" height="17" alt="" border="0"></td>
</tr>
<tr>
	<td><img src="media/dot_trans.gif" width="17" height="2" alt="" border="0"></td>
	<td><a href="index.php"><img src="media/logo_record.gif" width="200" height="87" alt="" border="0"></a></td>
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
							<td height="28" bgcolor="#9f9d85" align="right"><img src="media/dot_trans.gif" width="2" height="28" alt="" border="0"><img src="media/title_record.gif" width="40" height="18" alt="" border="0" vspace="5"><img src="media/dot_trans.gif" width="10" height="2" alt="" border="0"></td>
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
												<td align="right"><a href="record1.html" class="llink">music streaming</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="record2.html" class="llink">myeko top ten</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="record3.html" class="llink">four flavours</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="record4.html" class="llink">music news</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="record5.html" class="llink">artist updates</a>&nbsp;&nbsp;</td>
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
													<td class="headtext">myeko top ten</td>
												</tr>
												<tr>
													<td valign="top">by DJ Dollar Bluntz & the Benjamin Greenz Crew, you may download to listen. / <span class="regtext">10.10.2002</span></td>
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
							<td><script language="JavaScript" type="text/javascript">
								<!--
									if (document.images){
										document.write(randImage2(5,'record_pix',186,83))									 
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
							<td><a href="news.html" onMouseOver="swapImage('bnews','btnews_news_ov')" onMouseOut="swapImage('bnews','btnews_news')"><img name="bnews" src="media/but_news_record.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="connect.html" onMouseOver="swapImage('bconnect','btconnect_news_ov')" onMouseOut="swapImage('bconnect','btconnect_news')"><img name="bconnect" src="media/but_connect_record.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="bar.html" onMouseOver="swapImage('bbar','btbar_news_ov')" onMouseOut="swapImage('bbar','btbar_news')"><img name="bbar" src="media/but_bar_record.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="record.html" onMouseOver="swapImage('brecord','btrecord_news_ov')" onMouseOut="swapImage('brecord','btrecord_news')"><img name="brecord" src="media/but_record_record.gif" width="187" height="28" alt="" border="0"></a></td>
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