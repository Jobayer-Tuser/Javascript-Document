<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
value = Math.random();
if (value < 0.5) 
{
    text = "<a href='http://piit.us'>PIIT.us</a>";
} 
else 
{
    text = "<a href='http://nirjhor.net'>NIRJHOR.net</a>";
}
document.getElementById("demo").innerHTML = text;
</script>

</body>
</html>
