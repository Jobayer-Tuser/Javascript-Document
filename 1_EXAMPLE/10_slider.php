<html>
<head>
	<script type="text/javascript">
		var slideImages = new Array;

		slideImages[0] = new Image; // Empty Image Tag
		slideImages[0].src = "images/slide2.png"; // Now you are assigning SRC inside your Empty Image Tag
		// As a result now an Image Tag is created... Which is slide2.png inside images folder

		slideImages[1] = new Image;
		slideImages[1].src = "images/slide3.png";

		slideImages[2] = new Image;
		slideImages[2].src = "images/slide4.png";
		
		slideImages[3] = new Image;
		slideImages[3].src = "images/slide3.png";
	</script>
</head>
<body>
	<img src="" id="slide" width="700" height="250" />
	
	<script type="text/javascript">
		var step=0;
	
		function slideIt()
		{
			document.getElementById('slide').src = slideImages[step].src;
			
			if (step <= 3)
				step++;
			
			if(step == 4)
				step = 0;
			
			setTimeout("slideIt()", 2500);
		}
	
		slideIt();
	</script>
</body>
</html>