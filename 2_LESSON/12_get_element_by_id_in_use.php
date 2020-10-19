<html>
<body>
<script>
	function changeImage()
	{
		imgTag = document.getElementById('button');
		
		if (imgTag.src.match("btnon"))
		{
			imgTag.src = "images/btnoff.png";
		}
		else
		{
			imgTag.src = "images/btnon.png";
		}
	}
</script>

<img id="button" onclick="changeImage()" src="images/btnon.png" width="200" height="50" />

</body>
</html>

