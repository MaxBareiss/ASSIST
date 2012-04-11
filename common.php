<?php
$link = mysql_connect('localhost', 'robotics', 'Bender3142')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('robotics_scouting') or die('Could not select database');
?>