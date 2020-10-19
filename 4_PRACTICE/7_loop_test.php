<html>
<body>

	<script>
	function voterCheck()
	{
		var number; var total = 0;
		number = parseInt(document.getElementById("number").value);
		
		for(i=1; i<=number; i++)
			total = total + i;
			
		document.getElementById("result").innerHTML = total;
	}
	</script>
	
	<p>CHECK WHETHER YOU ARE OLD ENOUGH TO VOTE:</p>
	<form>
		Age: <input type="text" id="number" value="" />
		
		<p>CLICK THE BUTTON BELOW:</p>
		
		<button type="button" onClick="voterCheck()">Check</button>

		<br /><br />
		RESULT: <p id="result"> </p>
	</form>
	
</body>
</html>
