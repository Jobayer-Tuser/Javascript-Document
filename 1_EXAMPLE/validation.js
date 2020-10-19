function validate()
{
	if( document.myForm.Fullname.value == "" )
	{
		document.getElementById("nameError").innerHTML = "Please provide your name!";
		return false;
	}
	else
		document.getElementById("nameError").innerHTML = "";
	
	if( document.myForm.Email.value != "" && document.myForm.Email.value.match(/@/g) && document.myForm.Email.value.match(/./g) )
	{
		document.getElementById("emailError").innerHTML = "";
	}
	else
	{
		document.getElementById("emailError").innerHTML = "Please provide your email in proper format!";
		return false;
	}
	
	if( document.myForm.Zip.value == "" || document.myForm.Zip.value.length != 5 )
	{
		document.getElementById("zipError").innerHTML = "Please provide your Zip code in Right Format!";
		return false;
	}
	else
		document.getElementById("zipError").innerHTML = "";
	
	if( document.myForm.Country.value == "NIRJHOR" )
	{
		document.getElementById("countryError").innerHTML = "Please provide your Country!";
		return false;
	}
	else
	{
		document.getElementById("countryError").innerHTML = "";
		return( true );
	}
}