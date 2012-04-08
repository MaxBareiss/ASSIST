<?php
include 'common.php';
$res = mysql_query("SELECT Poster, Time, Data FROM Feed_entries ORDER BY Time DESC;");
$i = 0;
while ($row = mysql_fetch_assoc($res)){
	echo("<div id='poster".$i."'>From ".$row['Poster']."</div>");
	echo("<div id='content".$i."'>".$row['Data']."</div>");
	++$i;
}
?>