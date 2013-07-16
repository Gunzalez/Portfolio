<?php
function isActive($value1, $value2, $printValue){
	if( $value1 == $value2 ){
		echo $printValue;	
	}
};

$menuoption = '1';
if (isset($_GET['menuoption'])) {	
	if(	$_GET['menuoption'] == '1' || $_GET['menuoption'] == '2' ){
		$menuoption = $_GET['menuoption'];		
	}
};

$example = 0;
$exampleDetails = '<p>Website: One of my best projects, intelligent use of JavaScript, integration into Freemarker IDE which works on XML, XSD documents.</p><p class="link"><a href="http://www.nike.com/nikewomen/home?locale=en_GB" target="_blank">http://www.nikewomen.com</a></p>';
$exampleImage = '<img src="folio/nw0.png" alt="Nike Women" width="610" height="460" />';
if (isset($_GET['example'])) {
	$example = $_GET['example'];	
	switch ($example) {
		case 1:
			$exampleDetails = '<p>Website: Lot\'s of fancy JavaScript and considerable use of Freemarker templates, XML and XSD documents.</p><p class="link"><a href="http://www.nike.com/nikewomen/home?locale=en_GB" target="_blank">http://www.nikewomen.com</a></p>';
			$exampleImage = '<img src="folio/nw1.png" alt="Nike Women" width="610" height="460" />';
			break;
		case 2:
			$exampleDetails = '<p>Website: Freemarker templates, XML, JavaScript, CSS3 transitions, creating effects usually reserved for Flash.</p><p class="link"><a href="http://www.nikefootball.com/" target="_blank">http://www.nikefootball.com</a></p>';
			$exampleImage = '<img src="folio/nikefootball.png" alt="Nike Football" width="610" height="460" />';
			break;
		case 3:
			$exampleDetails = '<p>Web application: CSS3, Client-Side MVC architecture (JavaScript on acid!), Velocity templates, XML, XSLT, FOP and iPad optimisation.</p><p class="link"><a href="http://configurator.vw.com/ihdcc/configurator.html" target="_blank">http://www.vw.com</a></p>';
			$exampleImage = '<img src="folio/vw.png" alt="VW Car Configurator" width="610" height="460" />';
			break;
		case 4:
			$exampleDetails = '<p>Web Application: Built on the .NET platform of the C# flavour. MVC2 architecture, AJAX and FLOT (JavaScript Canvas application).</p><p class="link"><a href="https://www.fiatecodrivefleet.com/" target="_blank">https://www.fiatecodrivefleet.com</a></p>';
			$exampleImage = '<img src="folio/ecoville.png" alt="FIAT ecoDrive" width="610" height="460" />';
			break;
		case 5:
			$exampleDetails = '<p>Website: Built using IBM\'s Web Content Management tool - an enterprise Java based CMS solution. Challenging this one was, some AJAX too.</p><p class="link"><a href="http://www.netjetseurope.com/" target="_blank">http://www.netjetseurope.com</a></p>';
			$exampleImage = '<img src="folio/netjets2.png" alt="NetJets Europe" width="610" height="460" />';
			break;	
		case 6:
			$exampleDetails = '<p>Website: Private project, regular jQuery, CSS, HTML, PHP and WordPress, staple ingredients of small to mid-size projects.</p><p class="link"><a href="http://www.virgofoundation.org/index.php" target="_blank">http://www.virgofoundation.org</a></p>';
			$exampleImage = '<img src="folio/virgo.png" alt="Virgo Foundation" width="610" height="460" />';
			break;	
		case 7:
			$exampleDetails = '<p>Web application: Built on the .NET platform of the C# flavour. Integration with the N2 Open Source ASP.NET CMS.</p><p class="link"><a href="http://www.brushdayandnight.com/" target="_blank">http://www.technologybureau.com</a></p>';			
			$exampleImage = '<img src="folio/dayandnight.png" alt="Brush Day And Night" width="610" height="460" />';
			break;	
	}
};
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Gunzalez: Ségun Konibire's web portfolio</title>

	<meta name="Description" content="Ségun Konibire's online portfolio." />
	<meta name="Keywords" content="Gunzalez, Ségun, Konibire, Ségun Konibire, Sheg, Shegun, Shegun Konibire, Web, Developer, Designer, Internet, Programmer, Technologist, JavaScript, CSS, HTML, HTML5, jQuery, PHP, WordPress, Arsenal" />
	
	<link rel="stylesheet" type="text/css" media="screen" href="css/gunzalez.css" />
	
	<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.9.custom.min.js"></script>	
	<script type="text/javascript" src="js/bgpos.js"></script>
	<script type="text/javascript" src="js/gunzalez.js"></script>	
</head>

<body id="body">
<div id="wrap">
<div id="wrapInner">

	<div id="headers">
    	<span>/* Gunzalez - proun. Gonsalez */</span>
		<h1><span>Ségun Konibire</span>'s online portfolio</h1>
		<h3>That's right, another web developer rambling on about himself...</h3>
	</div>
	
	<div id="menu">
		<div id="whiteBox">
			<div id="inWhiteBox">
				<div class="slider">
					<div id="menuOption1" class="menuInfo<?php isActive($menuoption, 1, ' active'); ?>">
						<h3 id="portfolio">portfolio</h3>
						<div class="copy">
							<p>I've put together some of the websites I've worked on.</p>
							<p>Front-end development has been my focus on most of them, some backend work too. I do enjoy making non-Flash websites act like they are, I've tried to do that with this showcase.</p>
							<p>If the sites look pretty it's because I work with exceptional designers.</p>
							<span id="scroll-hint">Can't see images yet? Mouse over or click on the scrolling text.</span>
						</div>
						<div class="button">
							<a href="<?php echo $_SERVER["SCRIPT_NAME"] . '?example=' . $example . '&amp;menuoption=2' ?>" id="button-skills">skills »</a>
						</div>
					</div>		
					<div id="menuOption2" class="menuInfo<?php isActive($menuoption, 2, ' active'); ?>">
						<h3 id="skills">skills</h3>
						<div class="copy">
							<p>Front-end Web Technologies - HTML5, CSS3 and JavaScript, extensive use of jQuery and a bit of other libraries. PHP (WAMP) and ASP Classic/Access.</p>
							<p>Integration into C#, Java, Freemarker &amp; Velocity templates.</p>
							<p>Tools - Adobe CS5, Aptana, Eclipse, SVN.</p>
                            <p>Experience: XML, XSLT, JSON, AJAX, WordPress, SEO, W3C, UX, Usability and Cross-Browser Compatibility.</p>
						</div>
						<div class="button">
							<a href="<?php echo $_SERVER["SCRIPT_NAME"] . '?example=' . $example . '&amp;menuoption=1' ?>" id="button-portfolio">portfolio »</a>
						</div>
					</div>		
				</div>
			</div>
		</div>
		<div id="greenList">			
			<ul>
				<li><a href="#" id="menuCover">hide menu »</a></li>
			</ul>
		</div>
	</div>
	
	<div id="pre" class="whiteText">
		<div id="insidePre">
			<div class="slide">
			<h2>Ségun...</h2>
				<div id="intro">
					<div class="miniSlide">
						<ul>
							<li>currently works as a <span>senior front-end web developer</span>.</li>
							<li>does lots of <span>HTML</span>, <span>CSS</span> and <span>JavaScript</span>.</li>
							<li>likes using <span>jQuery</span> to do fun stuff, you know enhancing <span>user experience</span>.</li>
							<li>is knowledgable on integration into C#, Java, Freemarker &amp; Velocity templates.</li>
							<li>works privately with a lot of <span>PHP</span>, <span>MySQL</span> and <span>WordPress</span>.</li>
							<li>can work alone but <span>plays well with others</span> too, yeah, has a GSOH.</li>
							<li><span>cycles</span> in to work as often has he can.</li>
							<li>needs you to understand <span title="Impossible!">'pixel perfect'</span> is a direction, not a destination.</li>
							<li>has been lucky enough to work on some <span>amazing projects</span> for some <span title="AKQA, Dare Digital">amazing firms</span>.</li>
							<li>took ages to build this site because he is not a <span>designer</span>.</li>
							<li>pays attention to <span>cross browser compatibility</span> issues.</li>
							<li>has lots of <span>usability</span> and <span>search engine optimization</span> experience.</li>
							<li>recently bought a book on <span>HTML5</span> and so stopped reading Objective-C.</li>
							<li>has limited <span>Flash</span> but wouldn't mind learning more if need be.</li>
							<li>intentionally built the furniture on this website in <span>shades of grey</span>.</li>
							<li>loves <span>PlayStation</span>, hates the <span>XBOX</span>, even if it does have an <span>X</span> in it.</li>
							<li>went to <span>university</span>, got a <span>degree</span>, yuhuh.</li>
							<li>has been a <span>web developer</span> for a while now, <span>10 years</span> experience!</li>
							<li>did gymnastics as a child and can still do a one-handed <span>cart-wheel</span>, oh yeah!</li>
							<li>currently loves the IDM genre, that be '<span>Intelligent Dance Music</span>' it be.</li>
							<li>would have loved to work in <span>film</span>, y'know like special effects and stuff.</li>
							<li>can be reached at <a href="mailto:gunzalez@gmail.com" title="launches email client">gunzalez@hotmail.com</a>.</li>
							<li>was once a medical student but prefers websites, they don't scream.</li>
							<li>is on <span>Facebook</span>, to keep in touch with some, to spy on others, ha!</li>
							<li>has two young sons, his best friends (...yeah, for now).</li>
							<li>hates the iPhone, likes the <span>iPad</span>.</li>
							<li>likes building single page websites, AKA <span>web applications</span></li>
							<li>does not have a <span>twitter</span> account and is proud of it.</li>
							<li>wishes he was a little bit taller, wishes he was a baller....</li>
							<li>is well spoken but doesn't speak the Queen's English, you get me? Rass!</li>
							<li>gave himself the name <span>Gunzalez</span> when he was 18.</li>
							<li>put a kiddie photo of himself on his website, aye, top right, cute huh?</li>
							<li>lives in north London and is a massive <span>Arsenal</span> fan. Good to, Good to be..</li>
							<li>appreciates the fuller figured women, yeah and why not!</li>	
							<li><span>cannot believe you refreshed and waited till the end of this slideshow!</span></li>
							<!--<li>Oh, but then you could also just view the source : )</span></li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="content">
		
		<div class="padding">
			<div id="stage">
				<div id="imageBox">
				<div id="rambles">
					<div class="padding">
						<?php echo $exampleDetails; ?>
					</div>
				</div>					
					<?php echo $exampleImage; ?>
				</div>							
			</div>
		</div>
		
		<div id="control-slide-container">
			<div id="controls">
				<ul>
					<li><a href="<?php echo $_SERVER["SCRIPT_NAME"] . '?example=1&amp;menuoption=' . $menuoption; ?>" id="nikewomen"<?php isActive($example, 1, ' class="active"');isActive($example, 0, ' class="active"'); ?>>Nike Women</a></li>
					<li><a href="<?php echo $_SERVER["SCRIPT_NAME"] . '?example=2&amp;menuoption=' . $menuoption; ?>" id="nikefootball"<?php isActive($example, 2, ' class="active"'); ?>>Nike Football</a></li>
					<li><a href="<?php echo $_SERVER["SCRIPT_NAME"] . '?example=3&amp;menuoption=' . $menuoption; ?>" id="VW"<?php isActive($example, 3, ' class="active"'); ?>>VW</a></li>
					<li><a href="<?php echo $_SERVER["SCRIPT_NAME"] . '?example=4&amp;menuoption=' . $menuoption; ?>" id="FIAT"<?php isActive($example, 4, ' class="active"'); ?>>FIAT: EcoDrive</a></li>
					<li><a href="<?php echo $_SERVER["SCRIPT_NAME"] . '?example=5&amp;menuoption=' . $menuoption; ?>" id="netjets"<?php isActive($example, 5, ' class="active"'); ?>>NetJets Europe</a></li>
					<li><a href="<?php echo $_SERVER["SCRIPT_NAME"] . '?example=6&amp;menuoption=' . $menuoption; ?>" id="virgo"<?php isActive($example, 6, ' class="active"'); ?>>Virgo Foundation</a></li>
					<li class="last"><a href="<?php echo $_SERVER["SCRIPT_NAME"] . '?example=7&amp;menuoption=' . $menuoption; ?>" id="technologybureau"<?php isActive($example, 7, ' class="active"'); ?>>Brush Day And Night</a></li>
					<!--<li><a href="#" id="past-projects">Past Projects</a></li>-->
				</ul>		
			</div>
		</div>
		
		
	</div>
	
	
</div>	
</div>

<div id="footer">
	<div id="social-links">
		<div class="footberBox">
			<ul>
				<li id="social-link-fb"><a href="http://www.facebook.com/?segun.konibire" target="_blank" class="social-fb"><span class="image"></span><span class="text">Facebook, because everyone else is on it!</span></a></li>
				<li id="social-link-li"><a href="http://uk.linkedin.com/in/segunkonibire" target="_blank" class="social-li"><span class="image"></span><span class="text">Linked In, for when one might need a job.</span></a></li>
			</ul>
		</div>
	</div>
	<div id="site-meta-data-links">
		<div class="footberBox">
			<p>This website has been tested and works well on the following browsers.
				 <br />On my machine that is, I don't know about yours.</p> 
				<ul id="browsers">
					<li class="ie7"><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank">Internet Explorer 7</a></li>
					<li class="firefox"><a href="http://www.mozilla.com/firefox/" target="_blank">Mozilla Firefox</a></li>
					<li class="chrome"><a href="http://www.google.com/chrome/intl/en-GB/landing_tv.html" target="_blank">Chrome</a></li>
					<li class="safari"><a href="http://www.apple.com/safari/" target="_blank">Safari</a></li>
				</ul>
				<p id="validated">With valid <a href="http://validator.w3.org/check?uri=referer" target="_blank">XHTML</a> and <!--<a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">CSS</a> and--> works without JavaScript.</p>
				<p id="emailaddress">Email me on <a href="mailto:gunzalez@gmail.com">gunzalez@gmail.com</a>. <br />Or on <a href="http://www.facebook.com?segun.konibire" target="_blank">Facebook</a> or <a href="http://uk.linkedin.com/in/segunkonibire" target="_blank">Linked In</a>, oh and I don't do Twitter.<span class="copyright">&copy; Copyright 2011. Gunzalez.com. S&eacute;gun Konibire's web portfolio. All rights reserved.</span></p>			
			
		</div>
	</div>
</div>

</body>
</html>
