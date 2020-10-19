<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").css({
			"background-color": "lightblue", 
			"font-size": "200%"
		});
    });
});
</script>
</head>
<body>

<h2>This is a heading</h2>

<p style="background-color:lightgreen">This is a paragraph.</p>

<p>This is a paragraph.</p>

<button>CLICK ME</button>

</body>
</html>
