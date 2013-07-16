<?
session_start();
$_SESSION['page'] = $_GET['page'];
header("Location: xindex.php");
exit();
?>