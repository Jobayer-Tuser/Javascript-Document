<html>
<body>

<p>Are you Ready to Pay?</p>
<script type="text/javascript">
function confirmExit()
{
	var result = confirm("Do You want to Cancel Payment?"); // Builtin Function that verifies Request

	if (result == true)
	{
		alert("Your Payment Process is Cancelled! You will now Go Back to Home!");
		document.location.href = "index.php";
	}
	else
	{
		
	}
}
</script>

<form>
	<input type="button" value="OK" />
	<input type="button" onClick="confirmExit()" value="Cancel" />
</form>

</body>
</html>