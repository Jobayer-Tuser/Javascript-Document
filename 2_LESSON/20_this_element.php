<input id="abc" type="button" value="Open Button" onClick="change(this);" />

<script type="text/javascript">
/* 
We are not selecting the Tag using getElementById here, 
but we are passing the Tag via a Function using "this"

Here "tag" is a Variable Name 
*/
function change( tag )
{
    if ( tag.value === "Open Button" ) // If Button is Open currently
        tag.value = "Close Button";
    else // Button is Closed currently
        tag.value = "Open Button";
}
</script>
