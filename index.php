<html>
<head>
<title>Aperture Super Scouting Information System Technology: ASSIST</title>
<LINK REL=StyleSheet HREF="Styles.css" TYPE="text/css" MEDIA=screen>
</head>
<body>
<h1>Welcome to Aperture Super Scouting Information System Technology: ASSIST</h1>
<a href="AddInfo.html">Goto Posting Page</a>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script>
function updatePage(){
	$.get('feed.php',function(data){
		$('#Feed').html(data);
	});
}
setInterval('updatePage()',1000);
</script>
<div id="Feed"></div>
</body>
</html>