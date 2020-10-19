<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
function appendText() 
{
    var txt1 = "<p>NIRJHOR</p>";              	// Create text with HTML
	
    var txt2 = $("<p></p>").text("ANJUM");  	// <p>ANJUM</p> | Create text with jQuery
	
    var txt3 = document.createElement("p"); 	// <p></p>
    txt3.innerHTML = "MOTALEB";              	// <p>MOTALEB</p> | Create text with DOM
	
    $("body").append(txt1, txt2, txt3);     	// Append new elements
}
</script>
</head>
<body>

<p>Welcome to IT Training Center</p>
<button onClick="appendText()">Append Text</button>

</body>
</html>
