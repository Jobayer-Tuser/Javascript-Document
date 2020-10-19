<!DOCTYPE html>
<html>
<head>
<script src="js/jquery_latest.js"></script>
<script> 
$(document).ready(function(){
	$("#flip").click(function(){
		$("#panel").slideDown("slow");
	});
	//
});
</script>
 
<style> 
#panel,#flip
{
	padding:5px;
	text-align:center;
	background-color: lightblue;
	border:solid 1px black;
	cursor: default;
	font-family: Verdana;
}
#panel
{
	padding:50px;
	display:none;
}
</style>
</head>
<body>
 
<div id="flip">CLICK ME</div>
<div id="panel">Here Goes My Division!</div>

</body>
</html>
