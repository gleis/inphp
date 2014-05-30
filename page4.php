<html>
<head><title>ops test site</title>
</head>
<body>
<b>
This is page4
<?php
echo gethostname(); // may output e.g,: sandie

// Or, an option that also works before PHP 5.3
echo php_uname('n'); // may output e.g,: sandie
?>
</b>
<br><br><br>
<a href=index.php>index</a>
<a href=page2.php>page 2</a>
<a href=page3.php>page 3</a>
</body>
</html>
