<html>
<body>

<script>
function person(firstname, lastname, age, eyecolor)
{
	this.fName = firstname;
	this.lName = lastname;
	this.tAge = age;
	this.eColor = eyecolor;
}

myFather = new person("Dr. Ishak", "Anjum", 67, "blue");
itsMe = new person("Nirjhor", "Anjum", 12, "brown");

document.write(myFather.fName + " " + myFather.lName + " is " + myFather.tAge + " years old.<br />");

document.write("My First Name is: " + itsMe.fName + " And I am not a Terrorist");

</script>

</body>
</html>
