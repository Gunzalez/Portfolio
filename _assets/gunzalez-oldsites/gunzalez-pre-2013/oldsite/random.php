<?php 
include('php/conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="css/dgunz.css">
	<script language="JavaScript" src="js/dginz.js" type="text/javascript"></script>
	<title>Gunzalez</title>
</head>

<body id="smallpage">
<?php
$query = "SELECT * FROM pages WHERE id = '3'";
$result = mysql_query($query)
	or die( mysql_error() ); 
while ( $row = mysql_fetch_array($result, MYSQL_ASSOC))	{			
	echo $row["details"];				
};			
?>
</body>
</html>

