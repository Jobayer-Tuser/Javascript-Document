<!DOCTYPE html>
<html>
<head>
<script src="js/jquery_latest.js"></script>
<script>
$(document).ready(function(){
	$("#btn1").click(function(){
		alert( "Text: " + $("#nirjhor").text() );
	});
	$("#btn2").click(function(){
		alert( "HTML: " + $("#nirjhor").html() );
	});
});
</script>
</head>

<body>
	<p id="nirjhor">IT IS A MESSAGE <b>WITH HTML TAG</b> TO SHOW IN ALERT BOX</p>
	<button id="btn1">Show Text</button>
	<button id="btn2">Show HTML</button>
</body>
</html>
