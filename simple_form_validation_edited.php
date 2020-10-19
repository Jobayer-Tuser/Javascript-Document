<html>
<head>
	<style>
		.warning {
			color: red;
		}
		.success {
			color: green;
		}
	</style>
	<script type="text/javascript">
		function validate()
		{
			if( document.myForm.Fullname.value == "" )
			{
				document.getElementById("nameError").innerHTML = "Please put your Full Name";
				document.myForm.Fullname.focus() ;
				return false;
			}
			else
			{
				document.getElementById("nameError").innerHTML = "";
			}
			
			if( document.myForm.Email.value == "" )
			{
				document.getElementById("emailError").innerHTML = "Please put your Email Address";
				document.myForm.Email.focus() ;
				return false;
			}
			else
			{
				document.getElementById("emailError").innerHTML = "";
			}
			
			if( document.myForm.Zip.value == "" || document.myForm.Zip.value.length != 5 )
			{
				document.getElementById("zipError").innerHTML = "Please put your Zip in ##### format!";
				document.myForm.Zip.focus() ;
				return false;
			}
			else
			{
				document.getElementById("zipError").innerHTML = "";
			}
			
			if( document.myForm.Country.value == "NIRJHOR" )
			{
				document.getElementById("countryError").innerHTML = "Please select your Country Name";
				return false;
			}
			else
			{
				document.getElementById("countryError").innerHTML = "";
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
			<td> <input type="text" name="Fullname" /> <span id="nameError"></span> </td> 
		</tr>
		<tr>
			<td>Email Address</td>
			<td> <input type="text" name="Email" /> <span id="emailError"></span> </td>
		</tr>
		<tr>
			<td>Zip Code</td>
			<td> <input type="text" name="Zip" /> <span id="zipError"></span> </td>
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
				 <span id="countryError"></span> 
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