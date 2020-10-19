<html>
<head>
	<script type="text/javascript" src="validation.js"></script>
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
					<option value="3">INDIA</option>
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