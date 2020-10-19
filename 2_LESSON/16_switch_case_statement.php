<html>
<body>

<p>Click the Button to display the Name of this Day!</p>

<input type="submit" onClick="myFunction()" value="Button" />

<p id="result"></p>

<script>
function myFunction()
{
	var x;
	var result = new Date().getDay(); // "getDay()" Function of "Date()" Object gives us the Number of Current Day
	
	switch (result)
	{
		case 0:
		{
			x = "Today is Sunday"; // In Abroad Sunday is Holiday so it is 0
			break;
		}
		case 1:
		{
			x = "Today is Monday"; // In Abroad Monday offices start, so it is Day 1
			break;
		}
		case 2:
		{
			x = "Today is Tuesday";
			break;
		}
		case 3:
		{
			x = "Today is Wednesday";
			break;
		}
		case 4:
		{
			x = "Today is Thursday";
			break;
		}
		case 5:
		{
			x = "Today is Friday";
			break;
		}
		case 6:
		{
			x = "Today is Saturday";
			break;
		}
	}
	document.getElementById("result").innerHTML = x;
}
</script>

</body>
</html>
