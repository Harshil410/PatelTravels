<html>
<head>
    <title></title>

</head>
<body>

    <select id="#ticket_category_clone">
  <option>Hardware</option>
  <option>fsdf</option>
  <option>sfsd</option>
  <option>sdfs</option>
</select>
<script type="text/javascript">
    (function check() {
        var e = document.getElementById("#ticket_category_clone");
        var str = e.options[e.selectedIndex].text;
		document.write(e);
		document.write(str);
                 e.style.borderColor = "red";
    })();
</script>
</body>