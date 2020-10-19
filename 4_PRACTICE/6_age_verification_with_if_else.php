<html>
<body>

	<script>
	function voterCheck()
	{
		var age;
		age = document.getElementById("age").value;
		
		// SHORT HAND OF IF ELSE STATEMENT : myMessage = (age<18) ? "Too young" : "Old enough"; //
		if(age < 18)
			{ myMessage = "Too young"; }
		else if(age >= 18)
			{ myMessage = "Old enough"; }
		else
			{ myMessage = "Please put valid Age"; }
			
		document.getElementById("result").innerHTML = myMessage;
	}
	</script>
	
	<p>CHECK WHETHER YOU ARE OLD ENOUGH TO VOTE:</p>
	<form>
		Age: <input type="text" id="age" value="" />
		
		<p>CLICK THE BUTTON BELOW:</p>
		
		<button type="button" onClick="voterCheck()">Check</button>

		<br /><br />
		RESULT: <p id="result"> </p>
	</form>
	
</body>
</html>
