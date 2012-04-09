<?php
include 'common.php';
$query = "INSERT INTO feed_entries (Poster,Time,Data) VALUES (".$_POST['poster'].",".time().",\"".$_POST['data']."\");";
//echo($query);
mysql_query($query);
header("Location: /AddInfo.html?success=true")
?>