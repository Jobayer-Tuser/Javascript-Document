<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
var myText = '{"employees":[{"firstName":"John","lastName":"Doe" },{"firstName":"The","lastName":"Astrea" },{"firstName":"Nirjhor","lastName":"Anjum" }]}';
//document.write(myText);

obj = JSON.parse(myText);
document.getElementById("demo").innerHTML = obj.employees[1].firstName + " " + obj.employees[1].lastName;

// document.write(myText);

</script>

</body>
</html>
