<html>
<head>
	<script type="text/javascript">
		function validate()
		{
			// <input type="text" name="Name" /> // this is the > Input Tag in HTML //
			// document.FORM_NAME.FIELD_NAME.value // this is the below Structure of Code //
			if( document.myForm.Fullname.value == "" )
			{
				alert( "Please provide your name!" );
				document.myForm.Fullname.focus() ;
				return false;
			}
			
			if( document.myForm.Email.value == "" )
			{
				alert( "Please provide your email!" );
				document.myForm.Email.focus() ;
				return false;
			}
			
			if( document.myForm.Zip.value == "" || document.myForm.Zip.value.length != 5 )
			{
				alert( "Please provide a zip in the format #####." );
				document.myForm.Zip.focus() ;
				return false;
			}
			
			if( document.myForm.Country.value == "NIRJHOR" )
			{
				alert( "Please provide your country!" );
				return false;
			}
			else
			{
				return( true );
			}
		}
	</script>
</head>
<body>
	<form method="post" action="" name="myForm" onSubmit="return( validate() );">
		<table width="100%" border="0">
		<tr>
			<td>Name</td>
			<td> <input type="text" name="Fullname" /> </td> 
		</tr>
		<tr>
			<td>Email Address</td>
			<td> <input type="text" name="Email" /> </td>
		</tr>
		<tr>
			<td>Zip Code</td>
			<td> <input type="text" name="Zip" /> </td>
		</tr>
		<tr>
			<td>Country</td>
			<td>
				<select name="Country">
					<option value="NIRJHOR" selected > Select your Country </option>
					<option value="1">USA</option>
					<option value="2">UK</option>
					<option value="3">BD</option>
					<option value="4">INDIA</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align="right"></td>
			<td> <input type="submit" value="Submit" /> </td>
		</tr>
		</table>
	</form>
</body>
</html>