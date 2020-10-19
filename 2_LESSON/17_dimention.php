<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    var txt= "";
    txt+= "Width of div: " + $("#div1").width() + "</br>";
    txt+= "Height of div: " + $("#div1").height() + "</br>";
    txt+= "Outer width of div: " + $("#div1").outerWidth() + "</br>";
    txt+= "Outer height of div: " + $("#div1").outerHeight() + "</br>";
    txt+= "Inner width of div: " + $("#div1").innerWidth() + "</br>";
    txt+= "Inner height of div: " + $("#div1").innerHeight();
    $("#div1").html(txt);
  });
});
</script>
</head>

<body>
<div id="div1" style="height:100px;width:300px;padding:10px;margin:3px;border:1px solid blue;background-color:lightblue;">

</div>
<br>



<button>Display dimensions of div</button>


<p>innerWidth() - Returns the width of an Element (includes Padding).</p>
<p>innerHeight() - Returns the height of an Element (includes Padding).</p>
<p>outerWidth() - Returns the width of an Element (includes Padding and Border).</p>
<p>outerHeight() - Returns the height of an Element (includes Padding and Border).</p>


</body>
</html>
