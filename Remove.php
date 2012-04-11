<?php
include "common.php";
$query = "INSERT INTO blacklist VALUES (\"".$_POST['ip']."\");";
mysql_query($query);
header("Location: ./index.php")
?>