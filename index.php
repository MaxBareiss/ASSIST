<html>
<head>
<title>Aperture Science Scouting Information System Technology: ASSIST</title>
<LINK REL=StyleSheet HREF="./Styles.css" TYPE="text/css" MEDIA=screen>
</head>
<body>
<h1>Welcome to Aperture Science Scouting Information System Technology: ASSIST</h1>
<a href="./AddInfo.html">Goto Posting Page</a><br/>
<a href="./RoundSchedule.html">Goto Annotated Round Schedule</a>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script>
function updatePage(){
	$.get('./feed.php',function(data){
		$('#Feed').html(data);
	});
}
setInterval('updatePage()',1000);
</script>
Testing is the way to go!<br/>
Testing is the way to go!<br/>
Testing is the way to go!<br/>
Testing is the way to go!<br/>

<div id="Feed"></div>
</body>
</html>