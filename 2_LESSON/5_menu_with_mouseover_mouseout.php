<!DOCTYPE html>
<html>
<head>
<style>
	.menu {
		border-radius: 15px;
		color: white;
		background-color: red;
		font-weight: bold;
		padding: 10px;
	}
</style>
<script src="js/jquery_latest.js"></script>
<script>
$(document).ready(function(){
	
	$(".menu").mouseover(function(){
		$(this).css({"background-color": "orange"});
	});
	
	$(".menu").mouseout(function(){
		$(this).css("background-color","red");
	});
	
});
</script>
</head>
<body>

<br /><br />

<span class="menu">Home Page</span> <span class="menu">About Us</span> <span class="menu">Contact Us</span>

</body>
</html>
