<?php
include 'common.php';
$query = "SELECT * FROM blacklist WHERE ip = \"".$_SERVER['REMOTE_ADDR']."\"";
//echo $query;
$res = mysql_query($query);
if (mysql_num_rows($res) > 0){
	header("HTTP/1.0 403 Forbidden");
	echo "<body style=\"background-color:red\"><div style=\"background-color:red\">FORBIDDEN</div></body>";
	die;
}else{
	
}
$query = "INSERT INTO feed_entries (Poster,Time,Data) VALUES (\"".mysql_real_escape_string($_POST['poster'])."\",".time().",\"".mysql_real_escape_string($_POST['data'])."\");";
//echo($query);
mysql_query($query);
header("Location: ./AddInfo.html?success=true");
?>