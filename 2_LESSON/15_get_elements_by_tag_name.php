<!DOCTYPE html>
<html>
<body>

<script>
	function myFunction() 
	{
		var list2 = document.getElementsByTagName("ul")[1];
		list2.getElementsByTagName("li")[0].innerHTML = "Computer Science and Engineering";
	}
</script>

<ul>
  <li>BBA</li>
  <li>Business Administration</li>
</ul>

<ul>
  <li>CSE</li>
  <li>Computer Engineering</li>
</ul>

<button onclick="myFunction()">CHANGE</button>

</body>
</html>
