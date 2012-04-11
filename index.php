<?
//Detect special conditions devices
$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android= stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS= stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

//do something with this information
if( $iPod || $iPhone || $iPad){
        header( 'Location: http://tigerclan.net/robotics/scouting');
}else if($Android){
        //were an Android device -- do something here
}else if($webOS){
        //were a webOS device -- do something here
}
?>
<html>
<head>
<title>Aperture Science Scouting Information System Technology: ASSIST</title>
<LINK REL=StyleSheet HREF="./Styles.css" TYPE="text/css" MEDIA=screen>
</head>
<body>
<h1>Welcome to Aperture Science Scouting Information System Technology: ASSIST</h1>
<a class="rightLink" href="./AddInfo.html">Go to Posting Page</a><br/>
<a class="rightLink" href="./RoundSchedule.html">Go to Annotated Round Schedule</a>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script>
function updatePage(){
	$.get('feed.php',function(data){
		$('#Feed').html(data);
	});
}
setInterval('updatePage()',1000);
</script>
<div id="Feed">ASSIST is currently not working. Please be patient.</div>
</body>
</html>