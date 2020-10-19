<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#btn").click(function(){
        $("div").animate({
            height: 'toggle',
			width: 'toggle'
        });
    });
});
</script> 
</head>
<body>

<span id="btn" style="background:#98bf21; height:86px; width:86px; padding: 10px;">About Us</span>

<div style="background:lightblue; height:42px; width:82px; display:none; padding-top: 10px;"><a href="#">Company Profile</a></div>

</body>
</html>
