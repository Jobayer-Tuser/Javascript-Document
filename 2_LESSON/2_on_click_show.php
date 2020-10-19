<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".mybtn").click(function(){
        $(".mydiv").show(2000);
    });
});
</script>
</head>
<body>

<button class="mybtn">Show</button>

<div onClick="showme()" class="mydiv" style="display:none;">
	<p>This is a paragraph with little content.</p>
	<p>This is another small paragraph.</p>
</div>

</body>
</html>
