<form name="THE_FORM">
	<table border=4>
	<tr>
		<td>
		<input type="text" name="TEXT_FIELD" size="16" />
		<br>
		</td>
	</tr>
	<tr>
		<td>
			<input type="button" value="  1  " onClick="THE_FORM.TEXT_FIELD.value += '1'">
			<input type="button" value="  2  " onClick="THE_FORM.TEXT_FIELD.value += '2'">
			<input type="button" value="  3  " onClick="THE_FORM.TEXT_FIELD.value += '3'">
			<input type="button" value="  +  " onClick="THE_FORM.TEXT_FIELD.value += ' + '">
			<br>
			<input type="button" value="  4  " onClick="THE_FORM.TEXT_FIELD.value += '4'">
			<input type="button" value="  5  " onClick="THE_FORM.TEXT_FIELD.value += '5'">
			<input type="button" value="  6  " onClick="THE_FORM.TEXT_FIELD.value += '6'">
			<input type="button" value="  -  " onClick="THE_FORM.TEXT_FIELD.value += ' - '">
			<br>
			<input type="button" value="  7  " onClick="THE_FORM.TEXT_FIELD.value += '7'">
			<input type="button" value="  8  " onClick="THE_FORM.TEXT_FIELD.value += '8'">
			<input type="button" value="  9  " onClick="THE_FORM.TEXT_FIELD.value += '9'">
			<input type="button" value="  x  " onClick="THE_FORM.TEXT_FIELD.value += ' * '">
			<br>
			<input type="button" value="  C  " onClick="THE_FORM.TEXT_FIELD.value = ''">
			<input type="button" value="  0  " onClick="THE_FORM.TEXT_FIELD.value += '0'">
			<input type="button" value="  =  " onClick="THE_FORM.TEXT_FIELD.value = eval(THE_FORM.TEXT_FIELD.value)">
			<input type="button" value="  /  " onClick="THE_FORM.TEXT_FIELD.value += ' / '">
			<br>
		</td>
	</tr>
	</table>
</form>
