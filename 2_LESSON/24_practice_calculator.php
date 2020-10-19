<html>
<body>
<script>
	function calculate()
	{
		value1Var = document.getElementById("value1").value;
		value2Var = document.getElementById("value2").value;
		symbolVar = document.getElementById("symbol").value;
		
		string = value1Var + symbolVar + value2Var;
		result = eval(string);
		
		document.getElementById("result").innerHTML = result;
	}
</script>

<div>
	<label>Put a Number</label>
		<input type="text" id="value1" value="" placeholder="Any Number 1" />
	
	<select id="symbol">
		<option value="+">Add</option>
		<option value="-">Subtract</option>
		<option value="*">Multiply</option>
		<option value="/">Divide</option>
	</select>
	<label>Put a Number</label>
		<input type="text" id="value2" value="" placeholder="Any Number 2" />
	
		<input type="submit" onClick="calculate()" value="Click Here" />
</div>
<div>
	Result: <span id="result"></span>
</div>
</body>
</html>