<html>
<body>
<script>
	function calculate()
	{
		value1 = document.getElementById("value1").value; // 44
		symbol = document.getElementById("symbol").value; // +
		value2 = document.getElementById("value2").value; // 22
		
		result = eval(value1 + symbol + value2); // eval("44+22") = 66
		
		document.getElementById("result").innerHTML = result;
	}
</script>

<div>
	<label>Put a Number</label>
		<input type="text" id="value1" value="" placeholder="Any Number 1" />
	<select id="symbol">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
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