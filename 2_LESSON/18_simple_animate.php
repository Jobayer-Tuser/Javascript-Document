<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("button").click(function(){
		
        var div = $("div");  
		var span = $("span");  
		
        div.animate({left: '200px'}, "slow"); // Fast // 10 // 1000 //
		div.animate({top: '200px'}, "slow"); // Right // Top // Bottom //
        div.animate({paddingLeft: '7px'}, "slow"); // paddingBottom // paddingLeft // paddingRight //
		div.animate({paddingTop: '22px'}, "slow"); // slow // fast // 5000 //
		div.animate({fontSize: '3.5em'}, "slow"); // 1em = 16px //
		span.animate({opacity: '0.2'}, "slow"); // 1em = 16px //
    });
});
</script> 
</head>
<body>

<button>Start Animation</button>

<div style="background:#98bf21;height:100px;width:200px;position:absolute;font-family: Verdana"><span>ANJUM</span></div>

</body>
</html>
