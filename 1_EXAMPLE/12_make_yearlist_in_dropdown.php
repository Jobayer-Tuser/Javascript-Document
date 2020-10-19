<select id="nirjhor"></select>
<script>
var min = 1900,
    max = new Date().getFullYear(),
    select = document.getElementById('nirjhor');

for (var i = min; i<=max; i++)
{
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}
</script>