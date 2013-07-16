<?php
if ($team == "arsenal") {
	$bodycontent = "<img src=\"media/sport_images/arsenal.gif\" width=\"196\" height=\"44\" alt=\"\" border=\"0\">
	<p>Saturday was a disappointing game for the gunners who were expecting to underline their dominance as the new force in English football by beating their arch rivals Manchester United but it all went wrong in a game where quite frankly the champions did not live up to form.</p>	
	<p>Goals from Juan Sebastien Veron and Paul Scholes midway through each half were enough see Arsenal defeated in this 12.15pm kick-off. Although Arsenal had four-point pre-match lead, Manchester United have closed the gap at the top and the pressure is now really on at the top.</p>
	<p>Arsenal had their chances of going ahead twice when Henry was clean through and hit straight at the keeper and then some magical craft from Henry and Pires, which saw his lob saved by Bartez only for the referee to award a goal kick.</p>
	<p>Arsenal have also lost their awesome record of scoring in every one of their last 55 premiership games. For arsenal fans, it was a day of real frustration where nothing much really went for them.</p>
	<p>Arsenal boss Wenger added 'The turning point was the first goal. It had a huge influence</p>";
} elseif ($team == "chelsea") {
	$bodycontent = "<img src=\"media/sport_images/chelsea.gif\" width=\"196\" height=\"44\" alt=\"\" border=\"0\">
	<p>Chelsea fans had a good Saturday night on the town after their side beet Everton to take them second in the premiership.
	<p>Chelsea survived a second-half battering to win at Goodison for the first time in five years with goals from Mario Stanic, Jimmy Floyd Hasselbaink and Jesper Gronkjaer. It was especially good for Chelsea with Arsenal and Liverpool both losing. Jimmy has now scored seven goals in his last eight games for Chelsea.</p>
	<p>Although Chelsea had earlier beaten Everton in the Worthington cup, it was never going to be a repeat of that and it did indeed prove to be a difficult game for Chelsea. Perhaps some fortune came their way when Everton were reduced to ten men and Chelsea took full advantage.</p>
	<p>In a season so far where all the talk has been about Arsenal, Manchester United and Liverpool, Chelsea are looking good in second place and don't look as though they will faultier as yet.</p>
	<p>Chelsea boss Claudio added \"I am very happy because Everton put us under a lot of pressure today. They pressed us all the time in the second half and delivered the ball into our box. It was a good battle.\"</p>";
} else {
	$bodycontent = "";
};
// <?php echo ($bodycontent);
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
	btbar_news.src = "media/but_bar_news.gif";
	btbar_news_ov = new Image;
	btbar_news_ov.src = "media/but_bar_news_ov.gif";
	
	btnews_news = new Image;	
	btnews_news.src = "media/but_news_news.gif";
	btnews_news_ov = new Image;
	btnews_news_ov.src = "media/but_news_news_ov.gif";
	
	btconnect_news = new Image;	
	btconnect_news.src = "media/but_connect_news.gif";
	btconnect_news_ov = new Image;
	btconnect_news_ov.src = "media/but_connect_news_ov.gif";
	
	btrecord_news = new Image;	
	btrecord_news.src = "media/but_record_news.gif";
	btrecord_news_ov = new Image;
	btrecord_news_ov.src = "media/but_record_news_ov.gif";
		
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

<style type="text/css">  
#divUpControl{position:absolute; width:35; left:65; top:366; z-index:1; text-align: right} 
#divDownControl{position:absolute; width:35; left:65; top:406; z-index:1; text-align: right} 
#divContainer{position:absolute; width:305; height:179; overflow:hidden; top:208; left:112; clip:rect(0,305,179,0); visibility:hidden} 
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
	<td valign="top"><img src="media/sport_images/arsenal.gif" width="196" height="44" alt="" border="0">
	<p><strong>Robert Pires</strong> returned to haunt Tottenham again as his equalising penalty rescued a 1-1 draw for champions Arsenal in a typically blood-and-thunder north London derby.</p>
	<p>A 44th minute penalty from Robert Pires made it all square after Christian Ziege had put his team 1-0 up from a long ranged free kick 11 minutes into the match.</p>
	<p>Patrick Vieira was missing through injury and the gunners did miss his influence. However Ray Parlour started his first game since September 21 and did well considering his long absence from the team. </p>
	<p>It has been an up and down season for Arsenal who has seen their form waver of late after a blistering start to the season. The gunners are finding it hard to regain that form and put together a string of victories, which is urgently needed as Manchester United and Chelsea are looking good at the top. However, despite their 1-1 draw today, they Champions and double winners still remain top of the Premiership and boast the best goal difference joint with Chelsea.</p>
	<p>Today's 1-1 draw is a blessing for Arsenal who were fortunate to be given the opportunity to equalise. Another defeat would have been their 5th of the season. A lot has happened since the beginning of the premiership campaign when Arsenal Boss Arsenal Wenger felt his team could have gone the whole season without a defeat.</p>
		
	<P>&nbsp;</P>
	
	<img src="media/sport_images/chelsea.gif" width="196" height="44" alt="" border="0">
	<p><strong>Claudio Ranieri</strong> and his men missed out on going top of the Premiership yesterday in a match that they could and should really have won. John Terry equalised for the blues two minutes before half time after Geremi had put Middlesbrough ahead.</p>
	<p>Goal keeper Mark Schwarzer has a good game with saves from both Gianfranco Zola and Frank Lampard, while Boro's Massimo Maccarone missed a golden opportunity in the second half to score.</p>
	<p>Chelsea passed up the opportunity to knock Arsenal off the top of the league but the Italian boss was uplifted by the spirit of his team after they registered another solid away display.</p>
	<p>Claudio admitted he was disappointed not to have taken advantage of the pressure his side put on their opponents.</p>
	<p>"We're disappointed because I think Chelsea deserved more," he said.</p>
	<p>"The first-half was fantastic. They scored with a free-kick, but I'm not sure it was a free-kick. But okay, we had two or three chances more to draw or to win.</p>
	<p>"In the second-half, the match was open. We wanted to win and Middlesbrough also, and I think it was a good match."</p>

	
	<P>&nbsp;</P>
	
	<img src="media/sport_images/manu.gif" width="196" height="44" alt="" border="0">
	<p>Not so long ago, they were been written off but <strong>Manchester United</strong> were in charge after 20 minutes as they struck twice early on to dispose of struggling West Ham and draw level with Arsenal at the top of the Premiership.</p>
	<p>Ole Gunnar Solskjaer and Juan Sebastian Veron netted very early with practically United's first shots and Sir <strong>Alex Ferguson's</strong> side sealed a seventh consecutive victory when the unfortunate Sebastian Schemmel added an own goal.</p>
	<p>United are now looking good after disposing of Liverpool, Arsenal, Bayer Leverkusen and Deportivo La Coruna in the champion's league recently</p>
	<p>Once again, there was no shortage of positives for Sir Alex Ferguson. Paul Scholes maintained his outstanding form, unlocking the Hammers' defence with ease, Ruud Van Nistelrooy posed a constant threat, Veron capped a fine display with a superb goal, Gary Neville set up two more with overlapping runs and the marauding John O'Shea ran at defenders with a style more associated with Ryan Giggs.</p>
	<p>United once again have surprised everyone when under criticism and it looks as though their early loss of form is behind them. What's more, United still have some of their key men like Roy Keene to come back from injury, which will only strengthen their squad.</p>		
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
	<td><a href="index.php"><img src="media/logo_news.gif" width="200" height="87" alt="" border="0"></a></td>
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
							<td height="28" bgcolor="#702325" align="right"><img src="media/dot_trans.gif" width="2" height="28" alt="" border="0"><img src="media/title_news.gif" width="34" height="18" alt="" border="0" vspace="5"><img src="media/dot_trans.gif" width="10" height="2" alt="" border="0"></td>
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
							<td height="209" bgcolor="#ffffff" valign="top"><!-- starts from here it does -->
							
							
									<table border="0" cellpadding="0" cellspacing="0" height="100%">
									<tr>
										<td valign="top">
										
											<!-- links table: start -->
											<table width="110">
											<tr>
												<td align="right">&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="news1.html" class="llink">african news</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="news2.html" class="llink">nigerian news</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="news3.html" class="llink">UK papers</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="news4.html" class="llink">sports news</a>&nbsp;&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="news5.html" class="llink">magazines</a>&nbsp;&nbsp;</td>
											</tr>
											</table>								
											<br clear="all" />
											<!-- links table: start -->
											<table width="110">
											<tr>
												<td align="right">&nbsp;</td>
											</tr>
											<tr>
												<td align="right">&nbsp;</td>
											</tr>
											<tr>
												<td align="right"><a href="news4.php" class="reglink">Teams news</a>&nbsp;&nbsp;</td>
											</tr> <!--
											<tr>
												<td align="right"><a href="about.php?whatpage=3" class="reglink">subheader no 3</a>&nbsp;&nbsp;</td>
											</tr> //-->
											</table>							
											<br clear="all" />
											<img src="media/dot_trans.gif" width="110" height="2" alt="" border="0">
											<!-- links table: end -->
										
										</td>
										<td valign="top">
																				
										
												<!-- content table //-->										
												<table border="0" cellpadding="2" cellspacing="2" width="300">
												<tr>
													<td class="headtext">Sports news</td>
													<td width="5">|</td>
													<td width="80">Teams news</td>													
													<!--<td>|</td>
													<td class="headtext"><a href="news4.php?team=chelsea" class="reglink">Chelsea</a></td>
													<td>|</td>//-->
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
							<td><img src="media/news_pix_1.jpg" width="186" height="83" alt="" border="0"></td>
						</tr>
						<tr>
							<td><img src="media/line_h_s.gif" width="187" height="2" alt="" border="0"></td>
						</tr>
						<tr>
							<td><a href="news.html" onMouseOver="swapImage('bnews','btnews_news_ov')" onMouseOut="swapImage('bnews','btnews_news')"><img name="bnews" src="media/but_news_news.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="connect.html" onMouseOver="swapImage('bconnect','btconnect_news_ov')" onMouseOut="swapImage('bconnect','btconnect_news')"><img name="bconnect" src="media/but_connect_news.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="bar.html" onMouseOver="swapImage('bbar','btbar_news_ov')" onMouseOut="swapImage('bbar','btbar_news')"><img name="bbar" src="media/but_bar_news.gif" width="187" height="28" alt="" border="0"></a></td>
						</tr>
						<tr>
							<td><a href="record.html" onMouseOver="swapImage('brecord','btrecord_news_ov')" onMouseOut="swapImage('brecord','btrecord_news')"><img name="brecord" src="media/but_record_news.gif" width="187" height="28" alt="" border="0"></a></td>
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
