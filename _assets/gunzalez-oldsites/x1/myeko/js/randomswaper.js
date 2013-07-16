<!--
// picks the appropriate image based on random number
function chgImg(nthImage) 
{
var theImage = 'sq' + nthImage
	if(document.images)	{
		if (document[theImage].src == magezOff.src ) {
			document[theImage].src = magezOn.src;
		} else {
			document[theImage].src = magezOff.src;
		};
	} else {
	null;
	};
}

// assigns images to sources
if (document.images)
{
	magezOn = new Image;
	magezOff = new Image;
	magezOn.src = "media/agreen.gif";
	magezOff.src = "media/white.gif";
}

// does a quick flush of all images
function flushEM()
{
	for (i=1; i<16; i++){
		if (document.images) {
		setNum = i;
		chgImg(setNum);
		} else {
		null;
		}
	};
}

// starts the swapping process and picks a random number
// the continues the swapping process. Incresae 2000 to increase delay
function swapEM()
{
var randomNum;
randomNum = 0;
	if (document.images) 
	{
	randomNum = Math.floor((Math.random() * 16));
		if (randomNum < 1 || randomNum > 15)
		{
		randomNum = 1;
		} else {
		null;
		}
	} else {
	null;
	};
chgImg(randomNum);
setTimeout("swapEM()", 3000);
}
//-->

// random image creator
// function randImage(imageTotal, imageName, imageSizeW, imageSizeH)
function randImage(imageName, imageSizeW, imageSizeH)
{	var randomNum, randImage, rtnImage;
	randomNum = '';
	randImage = '';
	rtnImage = '';
	imageTotal = 12;
	
	randomNum = Math.floor((Math.random() * imageTotal))
	randImage = "media/" + imageName + randomNum + ".gif"
	
	rtnImage = "<img name=" + imageName + " "
	rtnImage += "src=" + randImage + " "
	rtnImage += "width=" + imageSizeW + " "
	rtnImage += "height=" + imageSizeH + " "
	rtnImage += "border=0 vspace=0 hspace=0 />"
	return rtnImage	
}
//-->

// random image creator
function randImage2(imageTotal, imageName, imageSizeW, imageSizeH)
{	var randomNum, randImage, rtnImage;
	randomNum = '';
	randImage = '';
	rtnImage = '';
	
	randomNum = Math.floor((Math.random() * imageTotal))
	randImage = "media/" + imageName + "_" + randomNum + ".jpg"
	
	rtnImage = "<img name=" + imageName + " "
	rtnImage += "src=" + randImage + " "
	rtnImage += "width=" + imageSizeW + " "
	rtnImage += "height=" + imageSizeH + " "
	rtnImage += "border=0 vspace=0 hspace=0 />"
	return rtnImage	
}
//-->