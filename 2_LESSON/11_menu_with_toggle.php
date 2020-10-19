<html>
<head>
<script src="js/jquery_latest.js"></script>
<script> 
$(document).ready(function(){
	$(".flip").click(function(){
		$(".toggle").slideToggle("slow");
	});
});
</script>
 
<style> 
.toggle,.flip
{
	padding:5px;
	text-align:center;
	background-color: green;
	border: solid 1px black;
	color: white;
	cursor: default;
}
.toggle
{
	padding:5px;
	display: none;
	color: orange;
	cursor: default;
}
</style>
</head>
<body>
 
<span class="flip">About Us</span>
<span class="toggle">> Portfolio</span>

</body>
</html>
