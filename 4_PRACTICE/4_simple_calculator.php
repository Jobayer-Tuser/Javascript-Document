<body>
<script>

num2 = 2;
num2 = 2;
num2 = 2;

function result()
{
	num1= document.getElementById("num1").value;
	num2= document.getElementById("num2").value;
	sign= document.getElementById("sign").value;
	
switch(sign)
{
	case "+":
	{
		result = parseInt(num1)+parseInt(num2); 
		break;
	}
	case "-":
	{
		result = parseInt(num1) - parseInt(num2); 
		break;
	}
	case "*":
	{
		result = parseInt(num1) * parseInt(num2); 
		break;
	}
	case "/":
	{
		result = parseInt(num1) / parseInt(num2); 
		break;
	}
}

	document.getElementById("show").innerHTML = result;
}
</script>
<form action="">
<input type="text" id="num1" placeholder = "Number 1" required />
<input type="text" id="sign" placeholder = "Sign" required />
<input type="text" id="num2" placeholder = "Number 2" required /></br></br>
<input type="button" id="submit" value="Calculate" onClick="result()" />
</form>
<p id="show"></p>
</body>