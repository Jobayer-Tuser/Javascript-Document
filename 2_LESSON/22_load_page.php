<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#nirjhor").load("files/page.php");
  });
});
</script>
</head>
<body>


<button>Click Here</button> <br /> <br />

<div id="nirjhor">
	<h2>jQuery AJAX will Change This Text</h2>
</div>

</body>
</html>
