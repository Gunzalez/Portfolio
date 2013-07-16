<?
include_once("includes/db_mysql.php");

// thanks page name
$thanks = "thanks.html";

// vars mname, msname, mposcode, mselectgender, mselectdob, mmobile, mselectmobiletype, memail, musername, mpassword, mpassword2, msecurityqemail, name, msecutirya

if ($offers == "offers"){
	$offers="y";
} else {
	$offers="n";
}

$sql = "INSERT INTO details (mname, msname, mpostcode, mselectgender, mselectdob, mmobile, mselectmobiletype, memail, musername, mpassword, msecurityq, msecuritya, offers) VALUES ('$mname', '$msname', '$mposcode', '$mselectgender', '$mselectdob', '$mmobile', '$mselectmobiletype', '$memail', '$musername', '$mpassword', '$msecurityq', '$msecutirya', '$offers')";

header("Pragma: no-cache");

if (!eregi("^[a-z0-9]+([-_\.]?[a-z0-9])+@[a-z0-9]+([-_\.]?[a-z0-9])+\.[a-z]{2,4}", $memail) || $mname == "" || $msname == "" || $mposcode == "" || $mselectgender == "" || $mselectdob == "" || $mmobile == "" || $mselectmobiletype == "" || $musername == "" || $mpassword == "" || $msecurityq == "" || $msecutirya == "" || $agree == ""){
	errorf("Please+ensure+that+the+form+has+been+completed+correctly");
} else if ($mpassword != $mpassword2){
	errorf("You+password+has+been+mistyped.");
} else {
	if (insert_data($sql)){
		write_to_file("$mname, $msname, $mposcode, $mselectgender, $mselectdob, $mmobile, $mselectmobiletype, $memail, $musername, $mpassword, $msecurityq, $msecutirya, $offers\n");
		header("Location: http://" .$_SERVER["HTTP_HOST"]."/reg.php?dpage=thanks");
	} else {
		errorf("There+has+been+a+problem+inserting+into+the+database.");
	}
}

function insert_data($query){
	$db = new ps_DB;
	$db->query($query);
	$db->next_record();
	return true;
}

function errorf($msg){
	header("Location: http://" .$_SERVER["HTTP_HOST"]."/reg.php?dpage=error&errdetails=$msg");
	exit();
}

function write_to_file($details){
	$fh=fopen("data/details.csv", "a");
	fwrite($fh, $details);
	fclose($fh);
}


?>