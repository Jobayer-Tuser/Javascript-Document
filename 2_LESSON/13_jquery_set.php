<!DOCTYPE html>
<html>
<head>
<style>
html {
	font-family: Verdana;
}
</style>
<script src="js/jquery_latest.js"></script>
<script>
$(document).ready(function(){
	$("#btn1").click(function(){
		$("#test1").text("Thanks for Clicking \"Set Text\" Button");
	});
	$("#btn2").click(function(){
		$("#test2").html("<b>Thanks for Clicking \"Set HTML\" Button</b>");
	});
	$("#btn3").click(function(){
		$("#test3").val("Set Value Button Pressed");
	});
});
</script>
</head>

<body>
<p id="test1">Click on "Set Text" Button</p>
<p id="test2">Click on "Set HTML" Button</p>
<p>Text Field: <input type="text" id="test3" value="Click the 'Set Value' Button"></p>

<button id="btn1">Set Text</button>
<button id="btn2">Set HTML</button>
<button id="btn3">Set Value</button>
</body>
</html>
