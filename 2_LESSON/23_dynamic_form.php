<!DOCTYPE html>
<html>
<body>

<script>
	labelName = ["First Name", "Last Name", "Email Address", "Password", " "];
	nameTag = ["first_name", "last_name", "email", "password", "submit"];
	typeTag = ["text", "text", "email", "password", "submit"];
 
	document.write("<table>");
	for (i=0; i<nameTag.length ; i++)
		document.write("<tr><td>"+labelName[i]+"</td><td><input type='"+typeTag[i]+"' name='"+nameTag[i]+"' /></td></tr>");
	
	document.write("</table>");
</script>

</body>
</html>