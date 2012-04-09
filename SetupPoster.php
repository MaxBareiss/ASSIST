<?php
include "common.php";
setcookie("ASSIST.name",$_POST['name'],time()+3*3600*24);// Cookies expire in three days, the maximum length of the competiton.
header("Location: /AddInfo.html?success=p");
?>