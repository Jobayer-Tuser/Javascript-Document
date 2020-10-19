<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#nirjhor").load("files/page.php");
  });
});



var nir = $.noConflict();
nir(document).ready(function(){
    nir("button").click(function(){
        nir("p").text("WoW! Good News! Still jQuery is Working!");
    });
});
</script>
</head>
<body>

<p>We are Going to Test This Line!</p>
<button>Test Me Please</button>

</body>
</html>
