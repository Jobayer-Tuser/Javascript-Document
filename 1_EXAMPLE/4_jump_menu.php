<script language="javascript" type="text/javascript" >
function jumpto(pagename)
{
	if (document.myForm.jumpmenu.value != "null") 
	{
		document.location.href = pagename;
	}
}
</script>

<p>Main Menu:</p>
<form name="myForm">
	<select name="jumpmenu" onChange="jumpto(document.myForm.jumpmenu.options[  document.myForm.jumpmenu.options.selectedIndex].value  )">
		<option>Select Here</option>
		<option value="index.php">Home</option>
		<option value="about.php">About Us</option>
		<option value="products.php">Products</option>
		<option value="contact.php">Contact</option>
	</select>
</form>