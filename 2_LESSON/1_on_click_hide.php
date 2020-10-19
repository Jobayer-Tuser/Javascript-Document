<!DOCTYPE html>
<html>
<head>
<style>
	.notice {
		color: white;
		background-color: green;
		font-weight: bold;
		border-radius: 15px;
		padding: 10px;
		font-family: Verdana;
		cursor: default;
	}
	.cross {
		float:right;
		color: red;
		font-weight: bold;
		cursor: default;
	}
	
</style>

<script src="js/jquery_latest.js"></script>
<script>
$(document).ready(
	function()
	{
		$(".cross").click(
			function()
			{
				$(".notice").hide();
			}
		);
	}
);
</script>
</head>
<body>

<p class="notice">You have successfully Saved the Result!<span class="cross">X</span></p>

</body>
</html>
