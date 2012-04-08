<?php
include 'common.php';
$res = mysql_query("SELECT Poster, Time, Data FROM Feed_entries ORDER BY Time DESC;");
$i = 0;
while ($row = mysql_fetch_assoc($res)){
	echo("<div id='post".$i."' class='post'><div id='poster'>From ".$row['Poster']."</div>");
	echo("<div id='content'>".$row['Data']."</div></div><br/>");
	++$i;
}
?>