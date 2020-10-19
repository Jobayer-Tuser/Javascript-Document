<html>
<body>

<!-- -------------------------- --> <h1>--- Example 2 ---</h1> <!-- -------------------------- -->

<!-- Example 2 -->
<script>
	function myFunction()
	{
		x = document.getElementById("change");  // Find the element
		x.innerHTML = "NIRJHOR ANJUM";    // Change the content
		
		//document.getElementById("change").innerHTML = "This is After Click"; // Same as Above //
	}
</script>
	
	<p id="change">nirjhor anjum</p>
	
	<input type="submit" onClick="myFunction()" value="CLICK HERE" />
<!-- Example 2 -->

</body>
</html>
