<!--
// The brwoser detection function starts
// this checks for Netscape 4.7 or lower, not NN6.
var NS = false
var IE = false
var NSv4 = false
if ( navigator.appName == "Microsoft Internet Explorer" )
{
	IE = true;	
} else {
	NS = true;
	
	var theVer = parseInt(navigator.appVersion)
	if ( theVer < 5 )
	{
	NSv4 = true;
	} else {
	null;
	}	
}
// The brwoser detection function ends
//-->