<?
require("includes/mime_mail.php");
include_once("includes/db_mysql.php");

// left old validation / error routine in just incase javascript gets bypassed

// vars $cmembers -> $pmembers and $epromotion $email

header("Pragma: no-cache");

if ($cmembers){$cmembers="Corporate Members\n";}
if ($pmembers){$pmembers="Private Members\n";}
if ($epromotion){$epromotion="Events Promotion\n";}

$mailto="management@jpmcom.com";
$subject="Promotion service request";
$thisdate=date("d")."/".date("m")."/".date("y");
$thanks="bar2.php?dpage=thanks1";

if (!eregi("^[a-z0-9]+([-_\.]?[a-z0-9])+@[a-z0-9]+([-_\.]?[a-z0-9])+\.[a-z]{2,4}", $email)) {
	errorf("Please enter a valid email address");
} else if ($cmembers || $cmembers ||$epromotion){
	$sql="SELECT mname, msname, mmobile FROM details WHERE memail='$email'";
	$db = new ps_DB;
	$db->query($sql);
	$db->next_record();
	$name=$db->f("mname")." ".$db->f("msname");
	$mobie=$db->f("mmobile");

	if ($name != " "){
		$body="From:-\n$name\n$email\n$mobie\nsent on - $thisdate\n\nMessage:-Please send me details about:\n\n".$cmembers.$pmembers.$epromotion;
		sendmail($body, $subject, $mailto);
		header("Location: http://" .$_SERVER["HTTP_HOST"]."/".$thanks);
		exit();
	} else {
		//errorf("Please register before using this form.");
		header("Location: http://".$_SERVER["HTTP_HOST"]."/bar2.php?dpage=error1");
		exit();
	}
} else {
	errorf("You must select at least one service.");
}

function sendmail($body, $subject, $mailto){
	$mail = new mime_mail();
	$mail->from = $mailto;
	$mail->headers = "Errors-To: $mailto";
	$mail->to = $mailto;
	$mail->subject = $subject;
	$mail->body = $body;
	$mail->send();
}

function errorf($msg){
	include("includes/bar_header.html");
	print "<br />$msg<br /><br /><a href=\"javascript:history.back()\">back</a>";
	include("includes/bar_footer.html");
	exit();
}

?>