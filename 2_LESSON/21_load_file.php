<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#nirjhor").load("files/biodata.txt");
  });
});
</script>
</head>
<body>

<div id="nirjhor">
	<h2>jQuery AJAX will Change This Text</h2>
</div>

<button>Click Here</button>

</body>
</html>
