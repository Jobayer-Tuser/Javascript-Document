<!DOCTYPE html>
<html>
<body>

<script>
	function myFunction() 
	{
		var x = document.getElementsByClassName("myDiv");
		x[0].innerHTML = "Hello Nirjhor!";
	}
</script>

<div class="myDiv">This is Division One</div>

<div class="myDiv">This is Division Two</div>

<button onclick="myFunction()">CLICK ME</button>

</body>
</html>