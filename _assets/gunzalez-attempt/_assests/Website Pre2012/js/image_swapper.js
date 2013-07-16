// 	JavaScript Document

// 	function starts
function swapImage(imgField,imgName){
	if(document.getElementById){
		document.getElementById(imgField).setAttribute("src",'images/uploaded/'+imgName+'.gif')
	}
}


// Taken off web, lets me get objects by class name, nifty huh
function getElementsByClassName(oElm,strTagName,strClassName){
	var arrElements = (strTagName == "*" && oElm.all)? oElm.all : oElm.getElementsByTagName(strTagName);
	var arrReturnElements = new Array();
	strClassName = strClassName.replace(/-/g, "\-");
	var oRegExp = new RegExp("(^|\s)" + strClassName + "(\s|$)");
	var oElement;
	for(var i=0; i<arrElements.length; i++){
		oElement = arrElements[i];
		if(oRegExp.test(oElement.className)){
			arrReturnElements.push(oElement);
		}
	}
	return (arrReturnElements)
}

function setUpPopupLinks(){
	var jsPopupLinks = getElementsByClassName(document,"*","jspopup");
	if(jsPopupLinks.length > 0){
		for (var i=0; i<jsPopupLinks.length; i++){		
			jsPopupLinks[i].onclick = new Function('jsNewWIndow(this); return false;');
		}
	}
}

function jsNewWIndow(linkHref){
	window.open(linkHref);
	return false;
}

//	This function changes the page state as you click through the images.
//	Uses variables set by PHP
function hightlightExample(xNo,xSrc,xAlt,xLink,xMask){	

	if (!document.getElementById) {	return false; };	 			// Test to see the browser understands this object
	
	var mainImage = document.getElementById("mImage");				// Find main image on page
	mainImage.setAttribute("src",'images/uploaded/'+xSrc);			// Set Image src
	mainImage.setAttribute("alt",xAlt);								// Set alt tag
	
	var mainImageLink = document.getElementById("mImageLink");		// Find main image link
	mainImageLink.setAttribute("href",xLink);						// Set href of main image link
	
	var mainLink = document.getElementById("mLink");				// Find main link (above main image)
	mainLink.setAttribute("href",xLink);							// Set href of main link
	mainLink.childNodes[0].nodeValue = xMask;						// Set mask for main link
	
	// Removes the <strong> tag from all thumb nail links
	for (var i=1;i<=7;i++) {		
		aTag = document.getElementById("tImage"+i).parentNode;		// Finds the the parent tag of the current tag, gets the <a>
		upTag = aTag.parentNode; 									// Find parent tag of current, gets <li> or the <strong>;
		if (upTag.nodeName == 'STRONG'){							// If this tag is <strong> we need to remove
			liTag = upTag.parentNode; 								// Finds parent tag of <strong>, gets <li>
			liTag.removeChild(upTag);								// Remove everything in <li> - <strong><a><image /></a></strong>
			liTag.appendChild(aTag);								// Insert the original <a> - <a><image /></a>
		};															// Else parent tag (upTag) was not <strong>, but was <li>, so do nothing
	}		

	// Adding <strong> tag to the clicked thumb nail
	aTag = document.getElementById("tImage"+xNo).parentNode; 		// Parent of <image /> tage - <a>
	liTag = aTag.parentNode; 										// Parent of <a> - <li>
	liTag.removeChild(aTag); 										// Remove everything in the <li> tag
	strTag = document.createElement('strong'); 						// Create a <strong> tag
	strTag.appendChild(aTag); 										// Insert the original <a> into new <strong> tag
	liTag.appendChild(strTag); 										// Insert <strong><a>...</a></strong> in to <li> tag							
}	


// ====================================================================================================	//
// ====================================================================================================	//


/*	This section attaches the above functions to 
	the buttons during the onload event of the window.  */
window.onload = function() {		
	if (!document.getElementById){ 
		return false; 
	} else {
		var nexB = document.getElementById("nexBut");
		if (nexB){
			nexB.onmouseover = function(){ swapImage('nexBut','next'); };
			nexB.onmouseout = function(){ swapImage('nexBut','butt'); };
		}
		var prvB = document.getElementById("prvBut");
		if (prvB){ 
			prvB.onmouseover = function(){	swapImage('prvBut','prev'); };
			prvB.onmouseout = function(){ swapImage('prvBut','butt'); };
		}
		setUpPopupLinks();
	}
} 

