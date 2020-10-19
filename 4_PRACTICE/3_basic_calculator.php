<html>

<body>

	<script>
		
		function calculator(a, sign, b)
		{
			if(sign == "+")
				c = a + b;
				
			if(sign == "-")
				c = a - b;
			
			if(sign == "*")
				c = a * b;
			
			if(sign == "/")
				c = a / b;
			
			return c;
		}
		
		
		
		
		document.write( calculator(10, "*", 10) );
		
	</script>

</body>

</html>