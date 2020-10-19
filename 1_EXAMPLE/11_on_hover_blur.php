<!DOCTYPE html>
<html>
<head>
<style>
input {
	height:35px; 
	width:300px;
	border-radius: 10px;
}
</style>
</head>
<body>
<script>
function nirjhor() 
{
    document.getElementById("myText").focus();
}

function anjum() 
{
    document.getElementById("myText").blur();
}
</script>


<input type="text" id="myText" onMouseOver="nirjhor()" onMouseOut="anjum()" placeholder=" Write your Full Name">

</body>
</html>
