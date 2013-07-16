// JavaScript Document
// function starts
function swapImage(imgField,imgName)
{   if(document.images) {
		document[imgField].src = eval(imgName + ".src")
	} else {
		null;
	}
}
// function endz
// usage
// <a href="#" onMouseOver="swapImage('but_go2','butgo_ov')" onMouseOut="swapImage('but_go2','butgo')">
//-->