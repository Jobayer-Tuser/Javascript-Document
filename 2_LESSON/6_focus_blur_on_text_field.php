<html>
<head>
<script src="js/jquery_latest.js"></script>
<script>
$(document).ready(
	function()
	{
		$("input").focus(
			function()
			{
				$(this).css("background-color","#eeeeee");
			}
		);
		
		$("input").blur(
			function()
			{
				$(this).css("background-color","white");
			}
		);
	}
);
</script>
</head>
<body>

First Name: <input type="text" name="first_name">
<br><br>
Last Name: <input type="text" name="last_name">

</body>
</html>
