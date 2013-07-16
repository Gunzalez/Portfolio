<?
require("includes/mime_mail.php");

// vars $email -> $email, $yourmessage, $subject

// left old validation / error routine in just in case javascript gets by passed

header("Pragma: no-cache");

$mailto="management@jpmcom.com";

if (!$subject){$subject="Contact us form";}
$thanks="thankyou.html";

if (!eregi("^[a-z0-9]+([-_\.]?[a-z0-9])+@[a-z0-9]+([-_\.]?[a-z0-9])+\.[a-z]{2,4}", $email)) {
	errorf("Please enter a valid email address");
} else {
	sendmail("From:-\n$email\n\nMessage:\n$yourmessage", $subject, $mailto);
	header("Location: http://" .$_SERVER["HTTP_HOST"]."/".$thanks);
	exit();
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
	include("includes/contact_header.html");
	print "<span class=\"thankyou\">$msg<br /><br /><a href=\"javascript:history.back()\">back</a></span><br /><br />";
	include("includes/contact_footer.html");
	exit();
}

?>