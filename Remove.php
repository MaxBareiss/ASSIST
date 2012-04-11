<?php
include "common.php";
$query = "INSERT INTO blacklist VALUES (\"".mysql_real_escape_string($_POST['ip'])."\");";
mysql_query($query);
header("Location: ./index.php")
?>