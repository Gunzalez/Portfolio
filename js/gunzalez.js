// JavaScript Document
var gunzalez = {
	globals: {
		isMobile: false,
		isDesktop: false
	},
	util: {
		shuffle: function(arr){
			var o = arr;
			for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
			return o;
		},
		setImage: function(img, src){
			$(img).attr('src',src);
		},
		getVer: function(src){
			var srcArr = src.split('.')[0];
			srcArr = srcArr.split('');
			return srcArr.pop();
		},
		check: function(value){
			var rtnVal = '';
			if(value !== undefined){
				rtnVal = value;
			};
			return rtnVal;
		},
		animations: {
			large: function(project){					
				// Attaching action to mouseleave event
				project.on('mouseleave',function(){
					project.find('.data').hide();
					project.find('.top').stop().animate({
						top: '-' + project.find('.top').height() + 'px'
					}, 100, function(){
						project.find('.top').remove();
					});
					project.find('.bottom').stop().animate({
						top: project.find('.top').height() + 'px'
					}, 100, function(){
						project.find('.bottom').remove();
					});						
				})
				
				// Executing mouseenter action
				var aHeight = $(project).height();
				var aWidth = $(project).width();
				project.append($('<div class="top cover" style="top:-'+aHeight+'px; left:0; height:'+aHeight+'px; width:'+aWidth+'px"></div>'))
					.append($('<div class="bottom cover" style="top:'+aHeight+'px; left:0; height:'+aHeight+'px; width:'+aWidth+'px"></div>')).append(project.find('.data'));
				project.find('.top').stop().animate({
					top: '-' + (aHeight/2) + 'px'
				}, 100);
				project.find('.bottom').stop().animate({
					top: (aHeight/2) + 'px'
				}, 100, function(){
						project.find('.data').show();
					});			
			},
			popup: function(project){				
				var pWidth = $(window).width();
				var pHeight = $('#projects').height();
				var pTop = $('#projects').offset().top;
				var $overlay = $('<div id="overlay" style="top:'+pTop+'px; width:'+pWidth+'px; height:'+pHeight+'px"></div>');
				var projectImagery = project.find('.img').clone(false);
				projectImagery = projectImagery.removeAttr('class');
				var projectData = $('<div class="data"></div>');
				projectData.append(project.find('.data').html());				
				var $content = $('<div class="content"></div>');				
				var title = projectImagery.attr('alt');
				$content.append(projectImagery).append(projectData);
				projectData.find('h3').empty().html(title);
				$('body').append($overlay);
				$overlay.fadeIn(function(){
					$overlay.append($content);	
					$content.width(projectImagery.width());
				});
				$overlay.on('click',function(){
					$overlay.fadeOut(function(){
						$overlay.remove();
					});
				})
			},
			hover: function(project){
				// Attaching action to mouseleave event
				project.on('mouseleave',function(){
					project.find('.all').stop().animate({
						opacity: 0
					}, 500, function(){
						project.find('.all').remove();
					});		
				});
				
				// Executing mouseenter action
				var aHeight = $(project).height();
				var aWidth = $(project).width();
				project.append($('<div class="all cover" style="top:0; left:0; height:'+aHeight+'px; width:'+aWidth+'px"></div>'))
				project.find('.all').stop().animate({
					opacity: 0.2
				}, 500);
			},
		}
	},
	projects: {
		create: function(){
			
			// create display
			var $projectDisplay = $('<div id="projects" class="clearfix" />');
			var $projectLeft = $('<div class="left-col" />');
			var $projectRight = $('<div class="right-col" />');
			$projectLeft.append($('<div class="col"></div>')).append($('<div class="col"></div>'));
			$projectRight.append($('<div class="col"></div>')).append($('<div class="col"></div>'));
			$projectDisplay.append($projectLeft).append($projectRight);
			$projectDisplay.insertAfter('#projects-list');
			
			// insert projects into display			
			var projects = [];
			$('#projects-list li').each(function(index, obj){
				var $obj = $(obj);
				var project = {
					'title': $obj.find('h3').html(),
					'detail': $obj.find('.detail').html(),
					'image': $obj.find('.detail').attr('data-image'),
					'ver': $obj.find('.detail').attr('data-image-ver'),
					'type': $obj.find('.detail').attr('data-type')
				};
				if($obj.find('a') != undefined){
					project.url = $obj.find('a').attr('href');
				}
				projects.push(project);
			});
			
			gunzalez.util.shuffle(projects);
			var cnt = 0;
			$.each(projects, function(key, project){
				// build templates
				var vers = 'single';
				if(project.ver > 1){
					vers = 'multiple';
				};
				var projectHtml = $('<article class="project"><a href="#" class="projLink"><img class="img '+vers+'" data-images="'+project.ver+'" src="'+project.image+'" alt="'+project.title+'" /></a><div class="data"><h3>'+project.title+'</h3><p>'+project.detail+'</p></div></article>');
				if(project.url !== undefined ){
					projectHtml.find('.data').append($('<a href="'+project.url+'" target="_blank">'+project.type+'</a>'));
				};
				
				// insert				
				$('#projects').find('.col:eq('+cnt+')').append(projectHtml);
				
				// hover events
				if(gunzalez.globals.isDesktop){
					projectHtml.on('mouseenter',function(){
						if(projectHtml.width() > 340){
							gunzalez.util.animations.large(projectHtml);
						} else {
							gunzalez.util.animations.hover(projectHtml);
						};
					});
				}
				
				// click events
				projectHtml.on('click',function(e){
					e.preventDefault();
					if(gunzalez.globals.isMobile){
						if($(window).width() > 500){
							$('body,html').animate({
								scrollTop: 0
							}, 150);
							gunzalez.util.animations.popup(projectHtml);
						}
					} else {
						if(projectHtml.width() < 341){
							$('body,html').animate({
								scrollTop: 0
							}, 2250);	
							gunzalez.util.animations.popup(projectHtml);
						};
					};
				});
				
				cnt++;
				if(cnt == 4){
					cnt = 0;
				};
			});
		}
	},
	randomSwaps: {
		start: function(){
			var rdnSwap = setInterval(function(){
				var imgList = $('.multiple');
				var rdn = Math.floor(Math.random() * (imgList.length - 1 + 1)) + 1;
				var img = imgList[rdn-1];
				var vers = $(img).attr('data-images');
				var curSrc = $(img).attr('src');
				var curVer = gunzalez.util.getVer(curSrc);
				curVer++;
				if(curVer > vers){
					curVer = 1;
				};
				var newSrc = curSrc.slice(0,(curSrc.length-5)) + curVer + '.jpg';
				gunzalez.util.setImage(img, newSrc);					
			}, 5000)	
		}		
	},
	showfooter: function(){
		setTimeout(function(){
			$('.footer').css('visibility','visible');
		}, 1000)		
	},
	replacefonts: function(){
		Cufon.replace('h1, h2, h3');
		Cufon.replace('.footer ul li a', { hover: true });	
	},
	init: function(){
		
		// check for mobile/desktop
		if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
			gunzalez.globals.isMobile = true;
		} else {
			gunzalez.globals.isDesktop = true;
		};
		
		$(window).on('resize', function(){
			$('#overlay').remove();
		});
		
		gunzalez.projects.create();
		gunzalez.randomSwaps.start();
		gunzalez.replacefonts();
		gunzalez.showfooter();
	}
}

$(document).ready(function(){
	gunzalez.init();
})