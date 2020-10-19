<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
		
        $("#div1").fadeIn();
		
        $("#div2").fadeIn(3000);
		
        $("#div3").fadeIn(6000);
		
    });
});
</script>
</head>
<body>

<button>FADE IN NOW</button><br><br>

<div id="div1" style="width:80px;height:80px;display:none;background-color:lightgreen;"></div><br>
<div id="div2" style="width:80px;height:80px;display:none;background-color:lightblue;"></div><br>
<div id="div3" style="width:80px;height:80px;display:none;background-color:gray;"></div>

</body>
</html>
