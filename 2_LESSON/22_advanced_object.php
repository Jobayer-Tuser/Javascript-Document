<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>
<p id="demo2"></p>

<script>
human = 
{
    firstName: 	"Nirjhor",
    lastName : 	"Sir",
    id       : 	5566,
    fullName : 	function(name) 
				{
					return this.firstName + " " + name;
				}
};

document.getElementById("demo").innerHTML = human.fullName("Anjum");

document.getElementById("demo2").innerHTML = human.lastName;
</script>

</body>
</html>
