<?
require("includes/mime_mail.php");
include_once("includes/db_mysql.php");

// left old validation / error routine in just in case javascript gets by passed

// vars $email -> $selectclubid, $noofguests, $email, $mobile, $ddate

header("Pragma: no-cache");

$mailto="management@jpmcom.com";
$subject="Online guest list form";
$thanks="bar2.php?dpage=thanks2";
$thisdate=date("d")."/".date("m")."/".date("y");

switch($selectclubid){
	case "id1":
		$selectclubid="Attica";
		break;
	case "id2":
		$selectclubid="Embassy";
		break;
	case "id3":
		$selectclubid="Eve";
		break;
	case "id4":
		$selectclubid="Kabaret";
		break;
	case "id5":
		$selectclubid="K Bar";
		break;
	case "id6":
		$selectclubid="Paparazzi";
		break;
	case "id7":
		$selectclubid="Propaganda";
		break;
	case "id8":
		$selectclubid="Roof Gardens";
		break;
}

if (!eregi("^[a-z0-9]+([-_\.]?[a-z0-9])+@[a-z0-9]+([-_\.]?[a-z0-9])+\.[a-z]{2,4}", $email)) {
	errorf("Please enter a valid email address");
} else if (!$noofguests || !$selectclubid || !$mobile){
	errorf("Please make sure you have completed all fields.");
} else {
	$sql="SELECT mname, msname FROM details WHERE memail='$email'";
	$db = new ps_DB;
	$db->query($sql);
	$db->next_record();
	$name=$db->f("mname")." ".$db->f("msname");

	if ($name != " "){
		$body="From:-\n$name\n$email\n$mobile\n\nsent on - $thisdate\n\nMessage:-\nPlease put me + $noofguests guests on the $selectclubid guestlist.\nDate: $ddate";
		sendmail($body, $subject, $mailto);
		header("Location: http://" .$_SERVER["HTTP_HOST"]."/".$thanks);
		exit();
	} else {
		//errorf("Please register before using this form.");
		header("Location: http://".$_SERVER["HTTP_HOST"]."/bar2.php?dpage=error2");
		exit();
	}
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