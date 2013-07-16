
<!--
// This are for window control
// The variable
var newWin

// The closer
function closeWindowz() {
	if (newWin && !newWin.closed) {
		newWin.close();
	};	
}

// The opener
function openSmallWindow(whatever) {	
	whatever = whatever + ".html"
	newWin = window.open( whatever,'newWin','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,width=299,height=338');
	newWin.focus();
}
//-->

