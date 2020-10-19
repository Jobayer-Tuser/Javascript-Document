<html>
<head>
<script>

var now;

function showMilitaryTime() {
     if (document.theForm.showDetailed[0].checked) {
          return true;
     }
     return false;
}

function showTheHours(theHour) {
     if (showMilitaryTime() || (theHour > 0 && theHour < 13)) {
          return (theHour);
     }
     if (theHour == 0) {
          return (12);
     }
     return (theHour - 12);
}

function showZeroFilled(inValue) {
     if (inValue > 9) {
          return ":" + inValue;
     }
     return ":0" + inValue;
}

function showAmPm() {
     if (showMilitaryTime()) {
          return ("");
     }
     if (now.getHours() < 12) {
          return (" am");
     }
     return (" pm");
}

function showTheTime() {
     now = new Date();
     document.theForm.showTime.value =
     showTheHours(now.getHours()) +
     showZeroFilled(now.getMinutes()) +
     showZeroFilled(now.getSeconds()) +
     showAmPm();
     setTimeout("showTheTime()", 1000);
}
</script>
</head>
<body onLoad="showTheTime();">

<form name="theForm">
     <input type="text" name="showTime" readonly style="border:0">
     <br />
     <input type="radio" name="showDetailed" checked>Yes
     <input type="radio" name="showDetailed">No
</form>
</body>
</html>