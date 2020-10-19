<!DOCTYPE html>
<html>
<body>

<div class="example">This is a Div with class named example</div>

<div class="example">This is another Div with same class name, example</div>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() 
{
    var tag = document.getElementsByClassName("example");
	
    tag[1].innerHTML = "Hello Nirjhor!";
}
</script>

</body>
</html>
