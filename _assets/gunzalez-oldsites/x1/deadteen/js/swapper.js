// JavaScript Document
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
