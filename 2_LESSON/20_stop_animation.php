<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle(1000);
    });
    $("#stop").click(function(){
        $("#panel").stop();
    });
});
</script>
 
<style> 
#panel, #flip {
    padding: 5px;
    font-size: 18px;
    text-align: center;
    background-color: black;
    color: white;
    border-radius: 20px;
}

#panel {
    padding: 50px;
    display: none;
}
</style>
</head>
<body>
 
<button id="stop">STOP</button><br /><br />

<div id="flip">CLICK TO VIEW IT</div>
<div id="panel">NIRJHOR ANJUM</div>

</body>
</html>
