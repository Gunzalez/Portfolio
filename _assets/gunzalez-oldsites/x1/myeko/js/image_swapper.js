// function starts
function swapImage(imgField,imgName)
{
	if(document.images)
	{
	document[imgField].src = eval(imgName + ".src")
	} else {
	null;
	}
}
// function endz

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