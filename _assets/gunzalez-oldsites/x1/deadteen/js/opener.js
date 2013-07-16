// JavaScript Document
// function starts
function winOpen(filename,wideness,tallness){
	newWin = window.open(filename,'newWin','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,width=' + wideness + ',height=' + tallness);
	newWin.focus();
}
// function endz
