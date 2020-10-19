<html>
<head>
<script>
/*
A Function is a set of code that executes together, and finally returns a result
where the Function is called. 

A Function is declared once somewhere, and later on it is called in another place.

The result of a function appears where the Function is called. 
*/
var i = 1;
function showName(n) // myFunction is a User Defined Function
{
	alert("Name is: " + n); // Alert is a Built-in Function
}
</script>
</head>

<body>

<!-- Button Tag creates a Button | onClick property calls any Function when you Click that Button -->
<input type="submit" onClick="showName('Saeed')" value="Click Here" /> <!-- I have called Manual Function from Here -->

</body>
</html>