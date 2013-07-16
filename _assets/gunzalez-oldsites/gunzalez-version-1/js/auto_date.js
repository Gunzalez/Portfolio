// The date function starts
<!--
function GetDay(intDay){
    var DayArray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
    return DayArray[intDay]
    }

function GetMonth(intMonth){
    var MonthArray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December") 
    return MonthArray[intMonth] 	  	 
    }
	
function getDateStrWithDOW(){
    var today = new Date()
    var todayStr = ''
	todayStr += GetMonth(today.getMonth()) + " " + today.getDate()+ ", "   
	todayStr += GetDay(today.getDay()) + "."
     /* todayStr += ", " + today.getYear() */
    return todayStr
    }
//-->
// The date function ends