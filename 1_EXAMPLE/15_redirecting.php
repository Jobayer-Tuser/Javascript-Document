<p>Timed Redirect:</p>
<script type="text/JavaScript">

function timedRedirect(redirectTo, timeoutPeriod) {
	setTimeout("location.href = redirectTo;", timeoutPeriod);
}

</script>
<a href="JavaScript:void(0);" onclick="JavaScript:timedRedirect(redirectTo='popup.html',  timeoutPeriod='5000')">Redirect in 5 Seconds...</a>


