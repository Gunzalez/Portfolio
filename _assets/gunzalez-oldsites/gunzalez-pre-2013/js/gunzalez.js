
$('html').addClass('js');

/* preloading images */
var imgNF = $('<img />').attr({'src': 'folio/nikefootball.png', 'alt':'Nike Football', 'width':'610', 'height':'460' });
var imgNF2 = $('<img />').attr({'src': 'folio/nikefootball2.png', 'alt':'Nike Football', 'width':'610', 'height':'460' });
var imgNF3 = $('<img />').attr({'src': 'folio/nikefootball3.png', 'alt':'Nike Football', 'width':'610', 'height':'460' });
var nfImages = [ imgNF, imgNF2, imgNF3 ];

var imgNW = $('<img />').attr({'src': 'folio/nw0.png', 'alt':'Nike Women', 'width':'610', 'height':'460' });
var imgNW1 = $('<img />').attr({'src': 'folio/nw1.png', 'alt':'Nike Women', 'width':'610', 'height':'460' });
var imgNW2 = $('<img />').attr({'src': 'folio/nw2.png', 'alt':'Nike Women', 'width':'610', 'height':'460' });
var imgNW3 = $('<img />').attr({'src': 'folio/nw3.png', 'alt':'Nike Women', 'width':'610', 'height':'460' });
var imgNW4 = $('<img />').attr({'src': 'folio/nw4.png', 'alt':'Nike Women', 'width':'610', 'height':'460' });
var imgNW5 = $('<img />').attr({'src': 'folio/nw5.png', 'alt':'Nike Women', 'width':'610', 'height':'460' });
var imgNW6 = $('<img />').attr({'src': 'folio/nw6.png', 'alt':'Nike Women', 'width':'610', 'height':'460' });
var nwImages = [ imgNW, imgNW1, imgNW2, imgNW3, imgNW4, imgNW5, imgNW6 ];

var imgNJ = $('<img />').attr({'src': 'folio/netjets.png', 'alt':'NetJets Europe', 'width':'610', 'height':'460' });
var imgNJ2 = $('<img />').attr({'src': 'folio/netjets2.png', 'alt':'NetJets Europe', 'width':'610', 'height':'460' });
var imgNJ3 = $('<img />').attr({'src': 'folio/netjets3.png', 'alt':'NetJets Europe', 'width':'610', 'height':'460' });
var njImages = [ imgNJ, imgNJ2, imgNJ3 ];

var imgFT = $('<img />').attr({'src': 'folio/ecoville.png', 'alt':'FIAT ecoDrive', 'width':'610', 'height':'460' });
var ftImages = [ imgFT ];

var imgVF = $('<img />').attr({'src': 'folio/virgo.png', 'alt':'Virgo Foundation', 'width':'610', 'height':'460' });
var vfImages = [ imgVF ];

var imgBT = $('<img />').attr({'src': 'folio/bumi.png', 'alt':'Bumi Thomas', 'width':'610', 'height':'460' });
var btImages = [ imgBT ]

var imgVW = $('<img />').attr({'src': 'folio/vw.png', 'alt':'VW Car Configurator', 'width':'610', 'height':'460' });
var imgVW2 = $('<img />').attr({'src': 'folio/vw.png', 'alt':'VW Car Configurator', 'width':'610', 'height':'460' });
var imgVW3 = $('<img />').attr({'src': 'folio/vw3.png', 'alt':'VW Car Configurator', 'width':'610', 'height':'460' });
var imgVW4 = $('<img />').attr({'src': 'folio/vw.png', 'alt':'VW Car Configurator', 'width':'610', 'height':'460' });
var vwImages = [ imgVW, imgVW2, imgVW3, imgVW4 ]

var imgTB = $('<img />').attr({'src': 'folio/dayandnight.png' , 'alt':'Brush Day And Night', 'width':'610', 'height':'460' });
var tbImages = [ imgTB ];

var gunzObject = {
	
	getRandomImage : function(imgList){
		var cnt = imgList.length;
		var rtnString = imgList[Math.floor(Math.random()*cnt)]
		return rtnString;
	},	
	
	attachingEffects : function(){
		
		// Cosmetic highlight effect on scrolling text
		$('.miniSlide ul li').each(function(){
			$(this).bind('mouseover',function(){
				$(this).addClass('dark');
			})	
			$(this).bind('mouseout',function(){
				$(this).removeClass();
			})								
		})		
	},
	
	timer : null,
	introHeight : null,
	setUpIntro : function(){
		
		// Just some stuff I have to do in the background
		$('#content').hide();
		$('#controls').css('top','210px');		
		
		introHeight = $('#insidePre .slide').height();
		
		$('#insidePre .slide').css({
			top:'-'+introHeight+'px'
		})
		$('#pre').removeAttr('class');
		
		$('#insidePre .slide').animate({
			top:'0'
		}, 700, function(){
				
				$('#intro').css({
					height: '480px',
					overflow: 'hidden',	
					position: 'relative'		   
				})
				$('#intro .miniSlide').css({					
					position: 'absolute',
					left: '0px',
					top: '0px'
				})
				var lines = $('.miniSlide ul li').length;
				var cnt = 1;
				gunzObject.timer = setInterval(function(){
					$('#intro .miniSlide').animate({
						top: '-' + ( 20 * cnt ) + 'px'					 
					}, 350)
							
					if( cnt == lines ){
						clearInterval(gunzObject.timer);
						gunzObject.jumpToStage();
					} else {
						cnt++;
					}
				}, 3500);
				
			})	
	},
	
	examples : [
		{
			id:'nikefootball',
			images: nfImages,
			ramble:'Website: Freemarker templates, XML, JavaScript, CSS3 transitions, creating effects usually reserved for Flash.',
			mask:'http://www.nikefootball.com »',
			url: 'http://www.nikefootball.com'
		},
		{
			id:'nikewomen',
			images: nwImages,
			ramble:'Website: Lot\'s of fancy JavaScript and considerable use of Freemarker templates, XML and XSD documents.',			
			mask:'http://www.nikewomen.com »',
			url: 'http://www.nike.com/nikewomen/home?locale=en_GB'
		},
		{
			id:'netjets',
			images: njImages,
			ramble:'Website: Built using IBM\'s Web Content Management tool - an enterprise Java based CMS solution. Challenging this one was, some AJAX too.',
			mask:'http://www.netjetseurope.com »',
			url: 'http://www.netjetseurope.com'			
		},
		{
			id:'VW',
			images: vwImages,
			ramble:'Web application: CSS3, Client-Side MVC architecture (JavaScript on acid!), Velocity templates, XML, XSLT, FOP and iPad optimisation.',
			mask:'http://www.vw.com »',
			url: 'http://configurator.vw.com/ihdcc/configurator.html'			
		},
		{
			id:'FIAT',
			images: ftImages,
			ramble:'Web Application: Built on the .NET platform of the C# flavour. MVC2 architecture, AJAX and FLOT (JavaScript Canvas application).',
			mask:'www.fiatecodrive.com »',
			url: 'https://www.fiatecodrivefleet.com'						
		},
		{
			id:'bumi',
			images: btImages,
			ramble:'Website: Private project, regular jQuery, CSS, HTML, PHP and WordPress, staple ingredients of small to mid-size projects.',
			mask:'http://www.bumithomas.com »',
			url: 'http://www.bumithomas.com'					
		},
		{
			id:'technologybureau',
			images: tbImages,
			ramble:'Web application: Built on the .NET platform of the C# flavour. Integration with the N2 Open Source ASP.NET CMS.',
			mask:'http://www.brushdayandnight.com »',
			url: 'http://www.brushdayandnight.com'			
		}
	],
	

	initMenuNavigation : function(){
		
		$('.menuInfo').removeClass('active').addClass('active');
		
		// Reset menu positioning ready for animation, oh yeah.
		$('#inWhiteBox .slider').prepend($('#inWhiteBox .slider .menuInfo:eq(1)')).css({top:'-310px'});
		
		// Set up animation on button click
		$('.menuInfo .button a').bind('click', function(e){
			e.preventDefault();
			$('#inWhiteBox .slider').animate({
				top: '0'
			}, 500, function(){
				$('#inWhiteBox .slider').prepend($('#inWhiteBox .slider .menuInfo:eq(1)')).css({top:'-310px'});
			})
		})
	},	
	
	initContentNavigation : function(){
		
		// Adding that funny thing at the end
		$('#controls a').each(function(){
			$(this).text($(this).text()+ ' »');
		});	
		$('.link a').text($('.link a').text()+ ' »');		
		
		// Setting up click events
		$('#controls a').bind('click',function(e){
			
			// Stop	default action and atop everything if current link is active					   
			e.preventDefault();			
			if($(this).hasClass('active')){ 
				return false;
			}
		
			// Oi, Click happy! Stop!
			$('#content').prepend('<div id="sheild"></div>');
			
			// Get index of currently active 
			var currentIndex = $('#controls a').index($('#controls a.active:eq(0)'));
			var newIndex = $('#controls a').index(this);
			
			var direction = '';
			if ( newIndex > currentIndex ){
				direction = 'up';
			} else if ( newIndex < currentIndex ){
				direction = 'down';
			}
			// Call in slide function with parameters
			gunzObject.doSlide( direction, $(this).attr('id'));
			
			$('#controls a').removeAttr('class');
			$(this).addClass('active');			
		})
	},	
	
	// Slide function
	doSlide : function( direction, id){
		// Get new example details
		var examplesCount =  gunzObject.examples.length;
		var newImage = '';
		var newRamble = '';
		var mask = '';
		var url = '';
		for( var x = 0; x < examplesCount; x++ ){			
			if( id == gunzObject.examples[x].id ){
				newImage = gunzObject.getRandomImage(gunzObject.examples[x].images)
				newRamble = gunzObject.examples[x].ramble
				newMask = gunzObject.examples[x].mask
				url = gunzObject.examples[x].url
			}			
		}
		
		if( direction == 'up' ){
			$('#imageBox').append(newImage);
			$('#imageBox').css({
				top: '0',
				height: '920px'
			}).animate({
				top: '-460px'				
			}, 300, 'swing', function(){
				$('#imageBox p:eq(0)').text(newRamble);
				$('#imageBox .link a').text(newMask).attr({'href':url});
				$('#imageBox img:eq(0)').remove();
				$('#imageBox').removeAttr('style');
				$('#sheild').remove();
				if(!gunzObject.isGreenListDown){
					gunzObject.showGreenList();
				}
			})
		} else {
			$('#imageBox').prepend(newImage);		
			$('#imageBox p:eq(0)').text(newRamble);	
			$('#imageBox .link a').text(newMask).attr({'href':url});
			$('#imageBox').css({
				top: '-460px',
				height: '920px'				
			}).animate({
				top: '0'				
			}, 900, 'easeOutBounce', function(){
				$('#imageBox img:eq(1)').remove()
				$('#imageBox').removeAttr('style')
				$('#sheild').remove();
				if(!gunzObject.isGreenListDown){
					gunzObject.showGreenList();
				}
			})
		}
	},	
	
	attachHoverSwitch : function(){
		
		// Stops the text slide show, jumps to examples
		$('.miniSlide').bind('mouseenter',function(){
			gunzObject.jumpToStage();
		})
		
		// For browsers with no hover event, mobile browsers
		$('.miniSlide').bind('click',function(){
			gunzObject.jumpToStage();
		})
	},
	
	setUpContent : function(){
		$('#controls').animate({
			top: '0'
		}, 300, function(){
			$('#controls').removeAttr('style')
			$('#imageBox').css({
				'display':'block',
				'opacity':'0'
			}).animate({
				'opacity':'1'	
			}, 1900, function(){				
				$('#sheild').remove();	
			});		
		})
	},												   
	
	isGreenListDown : false,
	showGreenList : function(){
		$('#greenList ul').animate({
			top: '0'
		}, 300 )	
	},	
	
	isStageMenuOn : true,
	jumpToStage : function(){
		
			// Stop timer
			clearInterval(gunzObject.timer);
			
			// Oi, Click happy! Stop!
			$('#content').prepend('<div id="sheild"></div>');
			$('#imageBox').hide();
			$('#scroll-hint').remove();
			
			if(!$.browser.msie){	
				
				// for browsers	that play nice
				$('#insidePre .slide').animate({
					opacity: 0
				}, 600, function(){				
					$('#content').css({
						'display':'block',
						'opacity':'0'
					}).animate({
						'opacity':'1'	
					}, 700, function(){
						$('#pre').remove();
						gunzObject.setUpContent();
						$('#content').removeAttr('style')
					});				
				})
				
			} else {
				
				// Will the real ie+ please stand up, please stand up, please stand up.
				$('#insidePre .slide').animate({
					top: '-'+introHeight
				}, 600, function(){				
					$('#content').css({
						'display':'block',
						'opacity':'0'
					}).animate({
						'opacity':'1'	
					}, 300, function(){
						$('#pre').remove();
						gunzObject.setUpContent();
					});					
				})				
			}			
			
			// Controls hiding and showing of example navigation and top left ramble
			$('#menuCover').bind('click',function(e){
				e.preventDefault();
				if(gunzObject.isStageMenuOn){
					$('#menuCover').text('show menu »');
					if(!$.browser.msie){
						$('#rambles, #control-slide-container').stop().animate({
							opacity: '0'
						}, 500, function(){
							$('#rambles, #control-slide-container').css('display','none')
						})
					} else {
						$('#rambles, #control-slide-container').stop().css('visibility','hidden');
					}
					
					gunzObject.isStageMenuOn = false;
				} else if(!gunzObject.isStageMenuOn) {
					$('#menuCover').text('hide menu »');
					if(!$.browser.msie){
						$('#rambles, #control-slide-container').css({
							'display':'block',
							'opacity':'0'
						}).stop().animate({
							opacity: '1'
						})
					} else {
						$('#rambles, #control-slide-container').stop().css('visibility','visible');
					}
					
					gunzObject.isStageMenuOn = true;
										
				}
			})
	}
}

$(document).ready(function(){	
	gunzObject.initMenuNavigation();
	gunzObject.setUpIntro();
	gunzObject.attachingEffects();
	gunzObject.initContentNavigation();
	gunzObject.attachHoverSwitch();
})